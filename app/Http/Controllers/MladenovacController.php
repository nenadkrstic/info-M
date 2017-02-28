 
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MladenovacController extends Controller
{
    
    //Vraca vesti koje imaju status vesti u tabeli news
    public function vesti()
    {
        $vesti = DB::table('news')->where('section','=','vesti')->get();
        return view('mladenovac.vesti',compact('vesti'));
    }
    
    //Vraca vesti koje imaju status hronka u tabeli news
    public function hronika()
    {
        $hronika = DB::table('news')->where('section','=','hronika')->get();
        return view('mladenovac.hronika');
    }
    
    //Vraca vesti koje imaju status sinfo u tabeli news
    public function sinfo()
    {
        $sinfo = DB::table('news')->where('section','=','sinfo')->get();
        return view('mladenovac.sinfo');
    }
    
    //Vraca vesti koje imaju status vodic u tabeli news
    public function vodic()
    {
        $vodic = DB::table('news')->where('section','=','vodic')->get();
        return view('mladenovac.vodic');
    }
    
    //Vraca view vremensku prognozu
    public function vreme()
    {
        return view('mladenovac.vreme');
    }
}
