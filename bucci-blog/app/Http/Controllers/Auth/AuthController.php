<?php


namespace App\Http\Controllers\Auth;


use App\Models\Users;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends \App\Http\Controllers\Controller
{
    public function getSignUp(){
        return view ('auth.register');
    }
    public function  postSignUp(Request $request){
        $this->validate($request,[
            'email'=>'required|email',
            'name'=>'required|alpha_num|max:250',
            'password'=>'required|max:8'

        ]);
        $array=$request->only(['email','name','password']);
        Users::create($array);
        return  redirect()->route('pages.home')->with('info', 'post created succesfully');

    }
    public function  getlogIn(){
        return view ('auth.login');

    }
    public function  postLogin(Request $request){

        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|max:8'

        ]);

        if (!Auth::attempt($request->only(['email', 'password']), $request->has('remember'))){

            return redirect()->back()->with('info', 'could not sign you in with those details');

        }

        return redirect()->route('posts.index')
            ->with('info', 'you are signed in!');
    }
    public function  getLogOut(){

        Auth::logout();
        return redirect()->route('pages.home');


    }

    public function users( ){
        $users = Users::all();
        return view('adminpages.users')->with([
           'users' => $users,
        ]);
    }

}
