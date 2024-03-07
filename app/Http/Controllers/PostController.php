<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        return view('Halaman.Posts', [
            'title' => 'Posts',
            'active' => 'Posts'
        ]);
    }
}
