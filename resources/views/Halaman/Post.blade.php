@extends('layouts.main')

@section('section')
    <section class="hero-section-2">
        <div class="container d-flex align-items-center justify-content-center fs-1
text-white flex-column">
            <h1>Get to know about us!</h1>
            <h2>SDN 5 Sukasari Tangerang</h2>
        </div>
    </section>
    <section class="container">
        <article style="margin: 50px 0px 50px 0px;">
            <h1>{{ $post->title }}</h1>
            <p>By {{ $post->user->name }} in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            {!! $post->body !!}
        </article>
    </section>
@endsection
