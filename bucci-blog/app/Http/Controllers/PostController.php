<?php

namespace App\Http\Controllers;

use App\Http\Requests\createFormRequest;
use App\Models\Post;
use Auth;
use Illuminate\Http\Request;
class PostController extends Controller
{
    public function index(){
        $posts = Post::orderBy('id', 'desc')->paginate(7);
        return view ('adminpages.index')->with([
            'posts'=>$posts,
        ]);
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {

        $array=collect($request->only(['title', 'body', 'slug']))->all();
        Post::create($array);


        return  redirect()->route('posts.index')->with('info', 'post created succesfully');
    }


    public function show(Post $post)    // note id is post
    {

        return view ('adminpages.show')->with([
            'post'=> $post   // note id is post
        ]);
    }

    public function edit(Post $post)
    {
        return view ('adminpages.edit')->with([
            'post'=> $post
        ]);
    }


    public function update(Request $request, Post $post)
    {

            $post->update([
                'title' => "$request->title",
                'slug' => "$request->slug",
                'body' => "$request->body"
            ]);

        return redirect()->route('posts.index')
            ->with('info', 'post updated!');
    }

    public function destroy(Request $request, Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('info', 'post deleted!');
    }
}

