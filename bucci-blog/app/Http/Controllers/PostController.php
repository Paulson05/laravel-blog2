<?php

namespace App\Http\Controllers;

use App\Http\Requests\createFormRequest;
use App\Models\Post;
use Auth;
use Illuminate\Http\Request;
class PostController extends Controller
{

    public function create()
    {
        //
    }


    public function store(Request $request)
    {



        $array=collect($request->only(['title','body']))->all();
        Post::create($array);


        return  redirect()->route('admin.index')->with('info', 'post created succesfully');
    }


    public function show(Post $id)
    {

        return view ('adminpages.show')->with([
            'post'=> $id
        ]);
    }

    public function edit(Post $id)
    {
        return view ('adminpages.edit')->with([
            'post'=> $id
        ]);
    }


    public function update(Request $request, Post $id)
    {

            $id->update([
                'title' => "$request->title",
                'body'     => "$request->body"
            ]);

        return redirect()->route('admin.index')
            ->with('info', 'post updated!');
    }

    public function destroy(Request $request, Post $id)
    {
        $id->delete();
        return redirect()->route('admin.index');
    }
}
