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
    <link href="{{ asset('css/signin.css'); }}" rel="stylesheet">

    <!-- Custom styles for this template -->

  </head>

  <body class="text-center">
    <form class="form-signin" action="/signUp" method="post">
      <img src="{{ asset('Logo.png') }}" alt="" width="85" height="100" style="padding-bottom: 15px;">
      <h3>Registration Form</h3>
      @csrf
      <div class="form-floating">
        <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" placeholder="name" id="name" value="{{ old('name') }}" required>
        <label for="name">Name</label>
        @error('name')
            <div class="invalid-feedback text-start" >
                {{ $message }}
            </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" id="username" value="{{ old('username') }}" required>
        <label for="username">Username</label>
        @error('username')
            <div class="invalid-feedback text-start">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-floating">
      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" id="email" value="{{ old('email') }}" required>
      <label for="email">Email address</label>
      @error('email')
          <div class="invalid-feedback text-start">
              {{ $message }}
          </div>
      @enderror
  </div>
  <div class="form-floating">
      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" id="password" required>
      <label for="password">Password</label>
      @error('password')
          <div class="invalid-feedback text-start mb-1 mt-n5">
              {{ $message }}
          </div>
      @enderror
  </div>
      <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Sign Up</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2023 - 2024</p>
    </form>
  </body>
</html>
@endsection

