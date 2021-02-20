<?php

namespace App\Http\Controllers;

use App\Models\Post;


class BlogController extends Controller
{
    public function getSinglePost(Post $post){
//        $post = Post::where('slug', '=', $slug )->first();

        return view('pages.singlepage')->with([
               'post'=> $post
           ]);
    }
}
