<?php


namespace App\Http\Controllers;
use App\Comments;
use App\news;
use Auth;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{


    public function pocetna(){
        $news = News::All();
        $comments = Comments::All();
        $naj_vest = News::only()
        return view('pocetna',compact('news','comments'));
    }
    public function celaVest($id){
        DB::table('news')->where('id',$id)->increment('naj_vest',1);
        $celaVest = News::findOrFail($id);
        return view('celaVest',compact('celaVest'));
    }

    public function logout(){
        Auth::logout();
         Session::flash('logOut','Hvala na poseti!!!');
        return redirect('/');
    }


}
