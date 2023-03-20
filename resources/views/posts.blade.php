@extends('layouts.main')

@section('container')
    <h2>{{ $posts['judul'] }}</h2>
    <h5>{{ $posts['author'] }}</h5>
    <p>{{ $posts['body'] }}</p>

    <a href="/blog">Back to Blog</a>
@endsection