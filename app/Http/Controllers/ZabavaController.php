<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZabavaController extends Controller
{
    public function film(){
        return view('zabava.film');
    }


    public function muzika(){
        return view('zabava.muzika');
    }

    public function desavanja(){
        return view('zabava.desavanja');
    }
}
