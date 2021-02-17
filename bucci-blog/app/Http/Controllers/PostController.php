<?php

namespace App\Http\Controllers;

use App\Http\Requests\createFormRequest;
use App\Models\Post;
use Auth;
use Illuminate\Http\Request;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createFormRequest $request)
    {





        $array=collect($request->only(['title','body']))->all();
        Post::create($array);


        return  redirect()->route('admin.index')->with('info', 'post created succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $id)
    {

        return view ('adminpages.show')->with([
            'post'=> $id
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $id)
    {
        return view ('adminpages.edit')->with([
            'post'=> $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $id)
    {

            $id->update([
                'title' => "$request->title",
                'body'     => "$request->body"
            ]);

        return redirect()->route('admin.index')
            ->with('info', 'post updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Post $id)
    {
        $id->delete();
        return redirect()->route('admin.index');
    }
}
