<?php

namespace App\Http\Controllers;

use App\Models\Post;


class BlogController extends Controller
{
    public function getSinglePost(Post $post){

           return view('pages.singlepage')->with([
               'post'=> $post
           ]);
    }
}
