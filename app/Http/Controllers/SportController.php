
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;



class SportController extends Controller
{
    
    //Vraca vesti koje imaju status fudbal u tabeli news
    public function fudbal()
    {
        $fudbal = DB::table('news')->where('status','=', 'fudbal')->get();
        return view('sport.fudbal',compact('fudbal'));
    }
    
    //Vraca vesti koje imaju status kosarka u tabeli news
    public function kosarka()
    {
        $kosarka = DB::table('news')->where('status','=', 'kosarka')->get();
        return view('sport.kosarka',compact('kosarka'));
    }
    
    //Vraca vesti koje imaju status odbojka u tabeli news
    public function odbojka()
    {
        $odbojka = DB::table('news')->where('status','=', 'odbojka')->get();
        return view('sport.odbojka',compact('odbojka'));
    }
    
    //Vraca vesti koje imaju status ostali sportovi u tabeli news
    public function ostalisportovi()
    {
        $ostalisportovi = DB::table('news')->where('status','=', 'ostalisportovi')->get();
        return view('sport.ostalisportovi',compact('ostalisportovi'));
    }
}
