@extends('layouts.main')

@section('container')
    <h2>{{ $posts->title }}</h2>
    <h5>{{ $posts->author }}</h5>
    {!! $posts->body !!}

    <a href="/blog">Back to Blog</a>
@endsection