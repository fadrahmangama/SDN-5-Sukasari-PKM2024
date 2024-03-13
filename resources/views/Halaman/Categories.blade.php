@extends('layouts.main')
@section('section')
    <section class="hero-section-2">
        <div class="container d-flex align-items-center justify-content-center fs-1
text-white flex-column">
            <h1></h1>
            <h2>SDN 5 Sukasari Tangerang</h2>
        </div>
    </section>
    <section class='container'>        
            @foreach ($categories as $category)
                <h2><a style="text-decoration: none" href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
            @endforeach
    </section>
@endsection
