<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index(){
        return view('signIn.index', [
            'title' => 'login',
            'active' => 'signIn',
            'showFooter' => false
        ]);
    }
    public function signUp(){
        return view('signIn.signUp', [
            'title' => 'signUp',
            'active' => 'signUp',
            'showFooter' => false
        ]);
    }
}
