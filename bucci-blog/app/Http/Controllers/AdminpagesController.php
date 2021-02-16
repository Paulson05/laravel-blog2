<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminpagesController extends Controller
{
    public function index(){
        return view ('adminpages.index');
    }
  

}
