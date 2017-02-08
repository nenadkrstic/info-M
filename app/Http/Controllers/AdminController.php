<?php

namespace App\Http\Controllers;

use App\Messages;
use Illuminate\Http\Request;

use App\News;
use Illuminate\Support\Facades\Session;


class AdminController extends Controller
{
    //Vraca admin panel
    public function admin_panel(){
        return view('admin.index');
    }
    //Ubacivanje vesti
    public function ubaci_vest(){
        return view('admin.ubaci_vest');
    }
    //Snimanje vesti
    public function snimi_vest(Request $request){
      if($request->hasFile('img')){

          $vest = $request->all();
          $vest['img'] = $request->file('img');
          $vest['naj_vest'] = 1;
            News::create($vest);
             return view('admin.ubaci_vest');

      }


      }


    //Brisanje vesti
    public function obrisi_vest($id){
        News::destroy($id);
          Session::flash('poruka','Vest je uspešno obrisana!');
        return redirect()->back();
    }


    //Update postojece vesti pogled
    public function izmeni_vest($id){
        $izmeni_vest = News::findOrFail($id);
        return view('admin.izmeni_vest',compact('izmeni_vest'));
    }

    //Update vesti nakon izmene
    public function izmeni_vest_db($id, Request $request){
       $vest = News::findOrFail($id);
       $vest->update($request->all());
        Session::flash('poruka','Vest je uspešno izmenjena!!!');
       return redirect('');

    }

    public function poruka(){
        $mess = Messages::all();
        return view('admin.poruka',compact('mess'));
    }

}
