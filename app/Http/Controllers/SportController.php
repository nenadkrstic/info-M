<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SportController extends Controller
{
    public function fudbal(){
        $fudbal = DB::table('news')->where('status','=', 'fudbal')->get();
        return view('sport.fudbal',compact('fudbal'));
    }

    public function kosarka(){
        $kosarka = DB::table('news')->where('status','=', 'kosarka')->get();
        return view('sport.kosarka',compact('kosarka'));
    }

    public function odbojka(){
        $odbojka = DB::table('news')->where('status','=', 'odbojka')->get();
        return view('sport.odbojka',compact('odbojka'));
    }

    public function ostalisportovi(){
        $ostalisportovi = DB::table('news')->where('status','=', 'ostalisportovi')->get();
        return view('sport.ostalisportovi',compact('ostalisportovi'));
    }
}
