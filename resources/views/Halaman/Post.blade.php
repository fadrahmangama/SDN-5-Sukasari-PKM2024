@extends('layouts.main')

@section('section')
<div class="card mb-10">
<img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}"  alt="...">
    <section class="container">
        <article style="margin: 20px 0px 50px 0px;">
            <h1 class="text-center">{{ $post->title }}</h1>
            <p>By <a href="/authors/{{ $post->user->username }}">{{ $post->user->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            {!! $post->body !!}
        </article>
    </div>
    </section>

@endsection
