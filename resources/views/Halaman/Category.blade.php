@extends('layouts.main')
@section('section')
    <section class="hero-section-2">
        <div class="container d-flex align-items-center justify-content-center fs-1
text-white flex-column">
            <h1>{{$category}}</h1>
            <h2>SDN 5 Sukasari Tangerang</h2>
        </div>
    </section>
    <section class='container'>
        @foreach ($posts as $post)
            <h2><a style="text-decoration: none" href="/Posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
            <h3>{{ $post->excerpt }}</h3>
        @endforeach
    </section>
@endsection
