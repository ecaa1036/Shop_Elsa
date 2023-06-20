<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    function show(){
        return view('tampilanAdmin');
    }
    function dashbord(){
        return view('dashbord');
    }
}

