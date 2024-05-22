@extends('layouts.main')

@section('section')
<div class="card mb-10">
<img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}"  alt="{{ $post->category->name }}" class="img-fluid">
    <section class="container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 ">
                    <article>
                        <h1 class="text-center">{{ $post->title }}</h1>
                        <p>By <a style="text-decoration:none;" href="/authors/{{ $post->user->username }}">{{ $post->user->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                        {!! $post->body !!}
                    </article>
                </div>
            </div>
        </div>
        
    </div>
    </section>

@endsection
