<?php


namespace App\Http\Controllers;
use App\Comments;
use App\news;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        $news = News::All();
        $comments = Comments::All();
        return view('index',compact('news','comments'));
    }
    public function celaVest($id){
         $celaVest = News::findOrFail($id);
         return view('celaVest',compact('celaVest'));
    }


}
