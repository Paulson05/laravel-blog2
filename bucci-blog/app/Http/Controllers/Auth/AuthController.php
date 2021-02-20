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

        $array=collect($request->only(['email','name']))->put('password',bcrypt($request->password))->all();
        Users::create($array);
        return  redirect()->route('pages.home')->with('info', 'post created succesfully');

    }
    public function  getlogIn(){
        return view ('auth.login');

    }
    public function  postLogin(Request $request){
        if (!Auth::attempt($request->only(['email', 'password']), $request->has('remember'))){

            return redirect()->back()->with('info', 'could not sign you in with those details');

        }

        return redirect()->route('posts.index')
            ->with('info', 'you are signed in!');
    }
    public function  getLogOut(){
        return view ('admin.index');

    }

}
