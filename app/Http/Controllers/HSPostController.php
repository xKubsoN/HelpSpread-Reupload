<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Wolontariats;
use Auth;
class HSPostController extends Controller
{
    public function index()
    {
        return view('pages.creating');
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
        $wolontariat = new Wolontariats;
        $wolontariat->letterid = generateRandomString();
        $wolontariat->wolontariat_firma = $request->wolontariat_firma;
        $wolontariat->wolontariat_opisk = $request->wolontariat_opisk;
        $wolontariat->wolontariat_opisd = $request->wolontariat_opisd;
        $wolontariat->wolontariat_wiek = $request->wolontariat_wiek;
        $wolontariat->wolontariat_miejsca = $request->wolontariat_miejsca;
        $wolontariat->wolontariat_datap = $request->wolontariat_datap;
        $wolontariat->wolontariat_datak = $request->wolontariat_datak;
        $wolontariat->wolontariat_adresn = $request->wolontariat_adresn;
        $wolontariat->wolontariat_adresu = $request->wolontariat_adresu;
        $wolontariat->wolontariat_adresk = $request->wolontariat_adresk;
        $wolontariat->wolontariat_adresm = $request->wolontariat_adresm;
        $wolontariat->wolontariat_godzp = $request->wolontariat_godzp;
        $wolontariat->wolontariat_godzk = $request->wolontariat_godzk;
        $wolontariat->status = "pending";
        $wolontariat->creator = Auth::user()->email;
        $wolontariat->save();
        return redirect('creating')->with('status', 'Blog Post Form Data Has Been inserted');
    }
}