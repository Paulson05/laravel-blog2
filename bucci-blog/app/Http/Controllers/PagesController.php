<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Auth;
use Illuminate\Http\Request;
use Mail;

class PagesController extends Controller
{
    public function home(){
//        $posts = Post::all();
        $posts = Post::orderBy('updated_at', 'desc')->limit(12)->get();
        $post2 = Post::orderBy('created_at', 'desc')->limit(4)->get();
        $post3 = Post::inRandomOrder()->orderBy('updated_at','desc')->limit(1)->get();
        $post4 = Post::orderBy('created_at', 'desc')->limit(2)->get();
        $post5 = Post::orderBy('created_at', 'desc')->limit(2)->get();

        return view ('pages.home')->with([
            'posts' => $posts,
            'post2' => $post2,
            'post3' => $post3,
            'post4' => $post4,
            'post5' => $post5,
            ])->with('info', 'your profile has been updated');
    }
     public function about(){
         return view ('pages.about');
     }

     public function contact(){
        return view ('pages.contact');
    }
public function postContact(Request  $request){


    $this->validate($request,[
        'email'=>'required|email',
        'subject'=>'min:5',
        'bodymessage'=>'min:10'

    ]);

    $data=collect($request->only(['email', 'subject', 'bodymessage',]))->all();
    Mail::send('emails.contact', $data,function ($message) use ($data){
        $message->from ($data['email']);
        $message->to ('onyebuchiokofu@gmail.com');
        $message->subject ($data['subject']);
    } );
        return redirect()->route('pages.home')
            ->with('info', 'email sent successfully!');
    }
    public function service(){
        return view ('pages.service');
    }
}
