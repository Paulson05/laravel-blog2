<?php


namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Models\Users;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PasswordResetController extends Controller
{
    public function getSignUp(){
        return view ('auth.register');
    }


}
