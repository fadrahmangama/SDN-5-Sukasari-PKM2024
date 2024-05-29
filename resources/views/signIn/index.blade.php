@extends('layouts.main')
@section('section')
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>{{ $title }}</title>

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('css/signin.css') }}" rel="stylesheet">

        <!-- Custom styles for this template -->

    </head>

    <body class="text-center">
        <form class="form-signin" method="post" action="/signIn" >
          
          @if (session()->has('success'))  <!-- Success diambil dari nama key dalam controller -->
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Please continue to sign in
        </div>
          </div>
          @endif
          @csrf
            <img src="{{ asset('Logo.png') }}" alt="" width="85" height="100" style="padding-bottom: 15px;">
            <h3>Sign In Page</h3>
            <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                    placeholder="Email address" id="email" required>
                <label for="email">Email address</label>
                @error('email')
                    <div class="invalid-feedback text-start">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                    placeholder="Password" id="password" required>
                <label for="password">Password</label>
                @error('password')
                    <div class="invalid-feedback text-start mb-1 mt-n5">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="checkbox mb-3">
                <p>Haven't registered yet ? <a href="/signUp" class="text-decoration-none">Sign up</a></p>
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2023 - 2024</p>
          </form>
    </body>

    </html>
@endsection
