@extends('layouts/main')

@section('container')
<h1 class="mt-5">{{ $title }}</h1>

<ul class="mt-5">

    @foreach ($categories as $ct)
    <li>
        <a class="text-decoration-none" href="/categories/{{ $ct->slug }}">
            <h3>{{ $ct->name }}</h3>
        </a>
    </li>
    @endforeach

</ul>

@endsection