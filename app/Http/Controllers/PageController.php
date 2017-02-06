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

  //Vraca index stranu sa vestima , pos. 10 najcitanijih vesti, posednjih 10 komentara
    public function pocetna(){
        $news = DB::table('news')->orderby('id','desc')->limit(9)->get();
        $comments = Comments::All();
        $naj_vest =DB::table('news')->orderBy('naj_vest','desc')->limit(7)->get();
        return view('pocetna',compact('news','comments','naj_vest'));
    }
    //Vraca celu vest i podize inkremen na polje najcitenje vesti (naj_vest)
    public function celaVest($id){
        DB::table('news')->where('id',$id)->increment('naj_vest',1);
        $celaVest = News::findOrFail($id);
        return view('celaVest',compact('celaVest'));
    }
    //Izlogu se
    public function logout(){
        Auth::logout();
         Session::flash('logOut','Hvala na poseti!!!');
        return redirect('/pocetna');
    }


}
