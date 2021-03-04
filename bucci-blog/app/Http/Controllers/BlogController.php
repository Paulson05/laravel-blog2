<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;


class BlogController extends Controller
{
    public function getSinglePost(Post $post){
//        $post = Post::where('slug', '=', $slug )->first();
             $tags =Tag::all();
        return view('pages.singlepage')->with([
               'post'=> $post,
                'tags'=> $tags
           ]);
    }
}
