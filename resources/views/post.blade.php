@extends('layouts/main')

@section('container')
<h1 class="mt-5 mb-5">{{ $title }}</h1>

@foreach ($posts as $post)
<article class="mb-3 pb-4 border-bottom">
    <h4>
        <a class="text-decoration-none" href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
    </h4>
    <div class="mb-4">
        <span>By <a class="text-decoration-none" href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> </span>
        <span>in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> </span>
    </div>
    <p>{{ $post->excerp }}</p>
    <a class="text-decoration-none" href="/posts/{{ $post->slug }}">Read more...</a>
</article>

@endforeach
@endsection