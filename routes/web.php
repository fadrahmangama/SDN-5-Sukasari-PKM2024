<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('Halaman.home', [
        'title' => 'Home',
        'active' => 'home'
    ]);
});

Route::get('/about',function(){
    return view('Halaman.about', [
        'title' => 'About',
        'active' => 'about'
    ]);
});

Route::get('/login', function(){
    return view('layouts.login', [
        'title' => 'login',
        
    ]);
});

Route::get('/Posts',[PostController::class,'index']);

