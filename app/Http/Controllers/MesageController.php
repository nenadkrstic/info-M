<?php

namespace App\Http\Controllers;

use  App\Http\Requests\messRequest;
use Illuminate\Support\Facades\Session;
use App\Messages;


class MesageController extends Controller
{
     
     
     public function getMess(messRequest $request)
     {
          $mess = $request->all() ;
          Session::flash('poruka','Poruka je uspešno poslata');
          Messages::create($mess);
          return redirect()->back();
     }
}
