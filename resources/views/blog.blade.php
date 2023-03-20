@extends('layouts/main')

@section('container')
    <h1>Halaman Blog Post!</h1>

    @foreach ($posts as $post)
        <article>
            <h2>
                <a href="posts/{{ $post->slug }}">{{ $post->title }}</a>
            </h2>
            <h5>{{ $post->author }}</h5>
            <p>{{ $post->excerp }}</p>
        </article>
    @endforeach
@endsection