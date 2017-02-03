<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MladenovacController extends Controller
{
    public function vesti(){
        return view('mladenovac.vesti');
    }
}
