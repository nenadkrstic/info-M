<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MesageController extends Controller
{
     public function getMess(Request $request){
          $mess = $request->All() ;
         return $mess;
     }
}
