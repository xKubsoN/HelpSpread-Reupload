<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
 
class HSSelectController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
     */
    public function selectadmin() {
        // $wolontariats = DB::table('helpspread_wolontariat')->get();
        // return view('pages.admin', ['wolontariats' => $wolontariats]);
        $wolontariats = DB::select('select * from helpspread_wolontariat');
        $users = DB::select('select * from users');
        $applys = DB::select('select * from applications');
        return view('pages.admin',['wolontariats'=>$wolontariats,'users'=>$users,'applys'=>$applys]);
    }

    public function selecthome() {
        // $wolontariats = DB::table('helpspread_wolontariat')->get();
        // return view('pages.admin', ['wolontariats' => $wolontariats]);
        $wolontariats = DB::select('select * from helpspread_wolontariat');
        $users = DB::select('select * from users');
        return view('pages.home',['wolontariats'=>$wolontariats,'users'=>$users]);
    }

    public function selectprofile() {
        // $wolontariats = DB::table('helpspread_wolontariat')->get();
        // return view('pages.admin', ['wolontariats' => $wolontariats]);
        $wolontariats = DB::select('select * from helpspread_wolontariat');
        $users = DB::select('select * from users');
        $applys = DB::select('select * from applications');
        return view('pages.profile',['wolontariats'=>$wolontariats,'users'=>$users,'applys'=>$applys]);
    }

    public function selectapply() {
        // $wolontariats = DB::table('helpspread_wolontariat')->get();
        // return view('pages.admin', ['wolontariats' => $wolontariats]);
        $wolontariats = DB::select('select * from helpspread_wolontariat');
        // $users = DB::select('select * from users');
        return view('pages.apply',['wolontariats'=>$wolontariats]);
    }
}