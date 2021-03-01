<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;


class BlogController extends Controller
{
    public function getSinglePost(Post $post, Tag $tag){
//        $post = Post::where('slug', '=', $slug )->first();

        return view('pages.singlepage')->with([
               'post'=> $post,
                'id'=> $tag
           ]);
    }
}
