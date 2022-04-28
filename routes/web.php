<?php
use App\Http\Controllers\IndexController;

use Illuminate\Support\Facades\Route;




Route::get('/',IndexController::class);

Route::get('/employer',function(){
    return view('layouts/employer-listing');
});

Route::get('/candidate',function(){
    return view('layouts/candidates-listing');
});

Route::get('/blog',function(){
    return view('layouts/blog');
});

Route::get('/contact',function(){
    return view('layouts/contact');
});

Route::get('/detail',function(){
    return view('layouts/employer-detail');
});
Route::get('/register',function(){
    return view('layouts/register');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
