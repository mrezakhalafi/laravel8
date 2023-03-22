@extends('layouts.main')

@section('container')
<h2 class="mt-5 mb-5">{{ $post->title }}</h2>
<div>
    <span>By <a class="text-decoration-none" href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a></span>
    <span>in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> </span>
</div>
{!! $post->body !!}

<a class="text-decoration-none" href="/post">Back to Blog</a>
@endsection