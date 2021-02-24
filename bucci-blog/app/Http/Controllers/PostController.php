<?php

namespace App\Http\Controllers;

use App\Http\Requests\createFormRequest;
use App\Models\Post;
use App\Models\Users;
use App\Models\Category;
use Auth;
use Illuminate\Http\Request;
class PostController extends Controller
{
    public function index(){
        $posts = Post::orderBy('id', 'desc')->paginate(7);
        $categories = Category::all();
        return view ('adminpages.index')->with([
            'posts'=>$posts,
            'categories'=>$categories
        ]);
    }




    public function store(Request $request)
    {

        $array=collect($request->only(['title', 'body', 'slug', 'category_id']))->all();
        Post::create($array);


        return  redirect()->route('posts.index')->with('info', 'post created succesfully');
    }


    public function show(Post   $post, Category $category )    // note id is post
    {

        return view ('adminpages.show')->with([
            'post'=> $post,  // note id is post
            'category' => $category

        ]);
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        return view ('adminpages.edit')->with([
            'post'=> $post,
            'categories'=>$categories,
        ]);
    }

    public function create()
    {
        $categories = Category::all();

        return view('adminpages.index')->with([
            'categories' => $categories
        ]);
    }
    public function update(Request $request, Post $post)
    {
        $this->validate($request,[
           'title'=>'required|max:250',
           'slug'=>'required|alpha_num|max:250',
            'body'=>'required|max:4000',
            'category_id'=>'required|exists:categories,id'
        ]);

            $post->update($request->only(['title','body','slug','category_id']));

        return redirect()->route('posts.index')
            ->with('info', 'post updated!');
    }

    public function destroy(Request $request, Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('info', 'post deleted!');
    }

}

