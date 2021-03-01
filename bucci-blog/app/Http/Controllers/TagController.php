<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use phpDocumentor\Reflection\DocBlock\Tag;

use App\Models\Category;
use App\Models\Tag;
class TagController extends Controller
{
//    public  function __construct(){
//        $this->middleware('auth');
//    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $tags = Tag::all();
        return view('tags.index')->with([
            'tags' => $tags
        ]);
    }



    public function store(Request $request)
    {
        $array=collect($request->only([ 'name']))->all();
        Tag::create($array);
        return  redirect()->route('tags.index')->with('info', 'tag created succesfully');
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
