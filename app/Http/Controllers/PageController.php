<?php


namespace App\Http\Controllers;
use App\Comments;
use App\news;
use Auth;
use DB;
use Request;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{

  //Vraca index stranu sa vestima , poslednjih 10 najcitanijih vesti i poslednjih 10 komentara
    public function pocetna()
    {
        $news = DB::table('news')->orderby('id','desc')->limit(9)->get();
        $comments = Comments::All();
        $naj_vest =DB::table('news')->orderBy('naj_vest','desc')->limit(7)->get();
        return view('pocetna',compact('news','comments','naj_vest'));
    }
  
    //Vraca celu vest i podize inkremen na polje najcitenje vesti (naj_vest)
    public function celaVest($id)
    {
        DB::table('news')->where('id',$id)->increment('naj_vest',1);
        $celaVest = News::findOrFail($id);
        return view('celaVest',compact('celaVest'));
    }
  
    //Izloguj se
    public function logout()
    {
        Auth::logout();
         Session::flash('logOut','Hvala na poseti!!!');
        return redirect('/pocetna');
    }
  
   //AJax pretraga vraca request sa naslovom iz tabele vesti
    public function search_news()
    {
            if (isset($_GET['news'])) {
            $news = $_GET['news'];
            if(!empty($news)){
              //Ocistiti formu od nezeljenih unosa
            $rez = News::select('title')->where('status', 'like', "$news")->limit(10)->get();
            foreach ($rez as $r) {
                echo "<a href='celaVest/$r->id' >" .$r->title . '</a><br>';
            }
          }
        }
    }
  
  //vraca celu vest iz pretrage u novi view
    public function pretraga(Request $request) {
        $pretraga = Request::only('pretraga');
        $pretraga = $pretraga['pretraga'];
        $vest = News::select('title','news','created_at')->where('status','like',"$pretraga")->limit(10)->get();
        return view('pretraga',compact('vest','pretraga'));
    }



}
