@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-8">
            <h2 class="mb-3">{{ $post->title }}</h2>
            <div>
                <span>By <a class="text-decoration-none" href="/post?author={{ $post->author->username }}">{{ $post->author->name }}</a></span>
                <span>in <a class="text-decoration-none" href="/post?category={{ $post->category->slug }}">{{ $post->category->name }}</a> </span>
            </div>

            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">

            <article class="my-3 fs-5">
            {!! $post->body !!}
            </article>

            <a class="text-decoration-none" href="/post">Back to Blog</a>
        </div>
    </div>
</div>


@endsection