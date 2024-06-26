<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('signIn.index', [
            'title' => 'login',
            'active' => 'signIn',
            'showFooter' => false,
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => ['required']
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        // return back()->withErrors([
        //     'email' => 'Login Failed!'
        // ]);

        return back()->with('LoginError', 'Login Failed!');
        
        dd('berhasil login');
    }

    public function signUp()
    {
        return view('signIn.signUp', [
            'title' => 'signUp',
            'active' => 'signUp',
            'showFooter' => false,
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/home');

    }

    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required|min:3|max:255',
                'username' => [
                    'required',
                    'min:3',
                    'max:255',
                    'unique:users',
                    'regex:/^[a-zA-Z]+$/', // Hanya huruf, tanpa angka dan spasi
                ],
                'email' => 'required|email:dns|unique:users',
                'password' => ['required', 'min:5', 'max:255', 'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W_]).+$/'],
            ],
            [
                'username.regex' => 'Username must only contain letters and no spaces.',
                'password.regex' => 'Password must contain at least one uppercase letter, one lowercase letter, one number, and one special character.',
            ],
        );

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        $request->session()->flash('success', 'Please Sign in'); //success adalah nama key. Akan digunakan dalam pengecekan  has dalam view SignIn.index

        return redirect('/signIn');
    }
}
