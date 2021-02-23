<?php

namespace App\Http\Controllers\Auth;


use App\Mail\PasswordResetMail;
use App\Models\Users;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PasswordResetController extends \App\Http\Controllers\Controller
{
    public function ShowResetForm(){
        return view('auth.password.email');
    }

  public function resetLinkEmail(Request  $request){
        $this->validate($request,[
           'email'=>'exists:users,email',
        ]);
        $rand = rand(10000,99999);
        $user=Users::where('email',$request->email)->first();
        $user->tokens()->delete();
        $user->tokens()->create([
           'token'=>$rand
        ]);
        Mail::to($user->email)->send(new PasswordResetMail(encrypt($rand),$request->email));
  }

  public function changepassword($email,$token){
        $user = Users::where('email',$email)->firstOrFail();
        $token = decrypt($token);
        if(!$user->hasToken($token)){
            abort(403);
        }
        return view('auth.password.reset')->with('email',$email);
  }
  public function postPasswordChange($email,Request  $request){
        $user = Users::where('email',$email)->firstOrFail();
        $this->validate($request,[
           'password'=>'required|same:confirm_password',
           'confirm_password'=>'required|same:password',
        ]);
        $user->tokens()->delete();
        $user->update(['password'=>$request->password]);
        return redirect()->route('pages.home')->with(['info'=>'password changed successfully']);
  }
}
