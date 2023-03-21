@extends('layouts.main')

@section('container')
    <h2>{{ $post->title }}</h2>
    <h4>Category : <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> </h4>
    <h5>Author : {{ $post->user->name }}</h5>
    {!! $post->body !!}

    <a href="/blog">Back to Blog</a>
@endsection