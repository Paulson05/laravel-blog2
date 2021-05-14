<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class
AdminpagesController extends Controller
{
    public function index(){
        $posts = Post::orderBy('id', 'desc')->paginate(7);
        return view ('adminpages.index')->with([
            'posts'=>$posts,
            ]);
    }


}
