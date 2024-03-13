@extends('layouts.main')
@section('section')
    <section class='container '>
        <div class="" style="position:relative;top:100px;margin-bottom:180px;margin-top:60px">
            <h1 class="mb-4">{{ $title }}</h1>
            @foreach ($posts as $post)
                <article class="mb-5 border-bottom pb-4">
                    <h2><a style="text-decoration: none" href="/Posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
                    <p>By <a class="text-decoration-none" href="/authors/{{ $post->user->username }}">{{ $post->user->name }}</a>
                        in <a class="text-decoration-none"
                            href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                    <h4 style="margin-top:-7px;">{{ $post->excerpt }}</h4>
                    <a href="/Posts/{{ $post->slug }}" class="text-decoration-none">Read More...</a>
                </article>
            @endforeach
            {{ $active === 'Posts'? $posts->links() : '' }}
        </div>
    </section>
@endsection
