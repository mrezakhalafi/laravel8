@extends('layouts/main')

@section('container')
    <h1>{{ $title }}</h1>

    <ul>

        @foreach ($categories as $ct)
        <li><a href="/categories/{{ $ct->slug }}"><h3>{{ $ct->name }}</h3></a></li>
        @endforeach

    </ul>

@endsection