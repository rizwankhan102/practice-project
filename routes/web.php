<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;

// Welcoe Route
// Route::get('/', function () {
//     return view('welcome');
// });


// Setting Route
Route::get('/setting-view',function(){
return view('setting');
});
Route::get('/about-user/{name}',[AboutController::class,'user']);
Route::get('/about',[AboutController::class,'index']);

// About Route
Route::get('/about-view',function(){
    return view('about');
});

// Auth Route
// Route::view('/signup/{Role}','auth.signup');
Route::get('/signup/{Role}',function($Role){
    return view('auth.signup',compact('Role'));
});