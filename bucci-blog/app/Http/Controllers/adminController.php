<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){
        return view ('adminpages.index');
    }
    public function headerpost(){
        return view ('adminpages.partials.headerpost');
    }
    public function mainpost(){
        return view ('adminpages.partials.mainpost');
    }
    public function sidepost(){
        return view ('adminpages.partials.sidepost');
    }
}
