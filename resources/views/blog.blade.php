@extends('layouts/main')

@section('container')
    <h3 class="mb-5">Halaman Blog Post!</h3>

    @foreach ($posts as $post)
        <article class="mb-3 pb-4 border-bottom">
            <h4>
                <a class="text-decoration-none" href="posts/{{ $post->slug }}">{{ $post->title }}</a>
            </h4>
            <p>Category : <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> </p>
            <p>Author : <a class="text-decoration-none" href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> </p>
            <p>{{ $post->excerp }}</p>
            <a href="/posts/{{ $post->slug }}">Read more...</a>
        </article>

    @endforeach
@endsection