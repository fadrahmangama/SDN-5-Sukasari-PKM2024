<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Models\Category;
use App\Models\User;
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

// Sign in dan Sign up
Route::post('/signUp', [LoginController::class,'store']);
Route::get('/signUp', [LoginController::class,'signUp']);
Route::post('/signIn', [LoginController::class,'authenticate']);
Route::get('/signIn', [LoginController::class,'index'])->name('login')->middleware('guest'); //middleware guest memastikan bahwa route hanya bisa dilakukan oleh user yang belum sign in
Route::post('/logout', [LoginController::class,'logout']);

Route::get('/dashboard', [DashboardController::class,'index'])->middleware('auth');

// Route untuk post
Route::get('/Posts',[PostController::class,'index']);
Route::get('/Posts/{post:slug}',[PostController::class,'show']);
Route::get('/categories/{category:slug}',[CategoryController::class,'category']);
Route::get('/categories', [CategoryController::class,'categories']);

// Routing untuk author
Route::get('authors/{user:username}',function(User $user){
    return view('Halaman.Posts',[
        'title' => "Post by Author : $user->name",
        'posts' => $user->post->load('category','user'), //lazy-eager loading
        'active' => 'Authors'
    ]);
});