<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function beograd(){
        return view('info.beograd');
    }

    public function srbija(){
        return view('info.srbija');
    }

    public function svet(){
        return view('info.svet');
    }

    public function nauka(){
        return view('info.nauka');
    }

    public function biznis(){
        return view('info.biznis');
    }

    public function kultura(){
        return view('info.kultura');
    }

    public function zanimljivosti(){
        return view('info.zanimljivosti');
    }

    public function misljenja(){
        return view('info.misljenja');
    }
}
