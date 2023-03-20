@extends('layouts/main')

@section('container')
    <h1>Halaman Blog!</h1>

    @foreach ($posts as $post)
        <article>
            <h2>
                <a href="posts/{{ $post['slug'] }}">{{ $post['judul'] }}</a>
            </h2>
            <h5>{{ $post['author'] }}</h5>
            <p>{{ $post['body'] }}</p>
        </article>
    @endforeach
@endsection