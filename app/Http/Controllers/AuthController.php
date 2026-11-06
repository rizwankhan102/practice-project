<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
function signup($Role){
    $Role = ucfirst($Role);
    return view('auth.signup',compact('Role'));
    // return view('auth.signup',compact('Role'));
}
}