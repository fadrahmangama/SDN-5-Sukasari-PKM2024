@extends('layouts.main')
@section('section')
    <section style="position: static; margin-top:120px; margin-bottom:20px;">
        <h1 class="text-center">{{ $title }}</h1>
        <div class="row justify-content-center">
            <div class="col-md-6 ">
                <form action="/Posts" method="GET">
                    <div class="input-group mb-3">
                        @if (request('category') or request('author'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                            <input type="hidden" name="author" value="{{ request('author') }}">
                        @endif
                        <input type="text" class="form-control" placeholder="Search..." name="search"
                            value="{{ request('search') }}">
                        <button class="btn btn-danger" type="submit" id="">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    @if ($posts->count())
        <section class='container '>
            <div class="card">
                <img src="https://source.unsplash.com/1200x500?{{ $posts[0]->category->name }}" class="card-img-top"
                    alt="...">
                <div class="card-body text-center">
                    <a href="/Posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
                        <h3 class="card-title">{{ $posts[0]->title }}</h3>
                    </a>
                    <p>By <a class="text-decoration-none"
                            href="/Posts?author={{ $posts[0]->user->username }}">{{ $posts[0]->user->name }}</a> in <a
                            class="text-decoration-none"
                            href="/Posts?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a></p>
                    <p class="card-text">{{ $posts[0]->excerpt }}</p>
                    <p class="card-text mt-n50"><small
                            class="text-body-secondary">{{ $posts[0]->created_at->diffForHumans() }}</small></p>
                    <a href="/Posts/{{ $posts[0]->slug }}">
                        <p class="btn btn-primary">Read More</p>
                    </a>
                </div>
            </div>
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 ">
                        <div class="card my-3">
                            <div class="position-absolute p-2" style="background-color: rgba(0,0,0,0.7)"><a
                                    class="text-decoration-none text-light"
                                    href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></div>
                            <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <h5 class="text-center "><a style="text-decoration: none" class="text-dark"
                                        href="/Posts/{{ $post->slug }}">{{ $post->title }}</a></h5>
                                <p>By <a class="text-decoration-none mt-3 mb-n5"
                                        href="/Posts?author={{ $post->user->username }}">{{ $post->user->name }}</a>
                                    {{ $post->created_at->diffForHumans() }} in  <a class="text-decoration-none"
                                    href="/Posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a> </p>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/Posts/{{ $post->slug }}" class="btn btn-primary">Read More...</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    @else
        <h1>Post tidak ditemukan</h1>
    @endif

    <div class="container">
        {{ $posts->links() }}
    </div>
@endsection
