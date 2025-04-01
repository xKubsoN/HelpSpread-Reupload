<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\App;
use Auth;

class HSApplicationsController extends Controller
{
    public function index()
    {
        return view('pages.apply');
    }
    public function store(Request $request)
    {
        function generateRandomString($length = 5) {
            $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }
        $apply = new App;
        $apply->letterid = generateRandomString();
        $apply->imie = $request->imie;
        $apply->nazwisko = $request->nazwisko;
        $apply->wiek = $request->wiek;
        $apply->opis = $request->opis;
        $apply->status = "pending";
        $apply->target = $request->target;
        $apply->user = Auth::user()->email;
        $apply->save();
        return redirect('apply')->with('status', 'Blog Post Form Data Has Been inserted');
    }
}
