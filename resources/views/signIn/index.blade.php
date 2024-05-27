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
    <form class="form-signin">
      <img src="{{ asset('Logo.png') }}" alt="" width="85" height="100" style="padding-bottom: 15px;">
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
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

