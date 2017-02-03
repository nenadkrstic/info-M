<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MladenovacController extends Controller
{
    public function vesti(){
        $vesti = DB::table('news')->where('section','=','vesti')->get();
        return view('mladenovac.vesti',compact('vesti'));
   }

    public function hronika(){
        $hronika = DB::table('news')->where('section','=','hronika')->get();
        return view('mladenovac.hronika');
    }

    public function sinfo(){
        $sinfo = DB::table('news')->where('section','=','sinfo')->get();
        return view('mladenovac.sinfo');
    }

    public function vodic(){
        $vodic = DB::table('news')->where('section','=','vodic')->get();
        return view('mladenovac.vodic');
    }

    public function vreme(){
        return view('mladenovac.vreme');
    }
}
