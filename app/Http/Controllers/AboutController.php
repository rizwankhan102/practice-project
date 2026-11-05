<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index(){
        return view('about');
    }

    function user($name){
        return "<h1>Details Of User " .$name." are Here</h1>";
    }
}
