<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FsmController extends Controller
{

    public function manifestacije(){
        return view('fsm.manifestacije');
    }

    public function ostale_manifestacije(){
        return view('fsm.ostale_manifestacije');
    }

    public function programi(){
        return view('fsm.programi');
    }

    public function konkursi(){
        return view('fsm.konkursi');
    }
}
