@extends('layouts.main')

@section('container')
<h2>{{ $post->title }}</h2>
<div>
    <span>By <a href="/posts/{{ $post->author->name }}">{{ $post->author->name }}</a></span>
    <span>in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> </span>
</div>
{!! $post->body !!}

<a href="/blog">Back to Blog</a>
@endsection