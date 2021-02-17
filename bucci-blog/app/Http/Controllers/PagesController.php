<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Auth;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $posts = Post::all();
        return view ('pages.home')->with(['posts' => $posts,])->with('info', 'your profile has been updated');
    }
     public function about(){
         return view ('pages.about');
     }

     public function contact(){
        return view ('pages.contact');
    }
    public function service(){
        return view ('pages.service');
    }
}
