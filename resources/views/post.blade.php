@extends('layouts/main')

@section('container')
<h1 class="mt-5 mb-5 text-center">{{ $title }}</h1>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/post">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') ? request('search') : ""}}">
                <button class="btn btn-danger" type="submit">Search</button>
              </div>
        </form>
    </div>
</div>

@if ($posts->count() > 0)

<div class="card mb-5">
    @if ($posts[0]->image)
        <div style="max-height: 350px; overflow:hidden;">
            <img src="{{ asset('storage/'.$posts[0]->image) }}" alt="{{  asset('storage/'.$posts[0]->image) }}" class="img-fluid">
        </div>
    @else
        <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" alt="{{ $posts[0]->category->name }}" class="img-fluid">
    @endif
    <div class="card-body text-center">
      <h3 class="card-title"><a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
      <p class="card-text">{{ $posts[0]->excerp }}</p>
      <div class="mb-4">
        <span>By <a class="text-decoration-none" href="/post?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> </span>
        <span>in <a class="text-decoration-none" href="/post?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> </span>
        <span>{{ $posts[0]->created_at->diffForHumans() }}</span>
    </div>
    <a class="text-decoration-none" href="/posts/{{ $posts[0]->slug }}"><button class="btn btn-primary">Read more</button></a>
    </div>
  </div>

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute bg-dark p-4 text-white px-3 py-2" style="background-color: rgba(0,0,0,0.7)">
                        <a class="text-decoration-none text-white" href="/post?category={{ $post->category->slug }}">
                            {{ $post->category->name }}
                        </a>
                    </div>
                    @if ($post->image)
                        <img src="{{ asset('storage/'.$post->image) }}" alt="{{  asset('storage/'.$post->image) }}" class="img-fluid">
                    @else
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
                    @endif
                    <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <div class="mb-4">
                        <span>By <a class="text-decoration-none" href="/post?author={{ $post->author->username }}">{{ $post->author->name }}</a> </span>
                        </div>
                        <p class="card-text">{{ $post->excerp }}</p>
                        <a class="text-decoration-none" href="/posts/{{ $post->slug }}">Read more...</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

  @else

  <p class="fs-4 text-center">No post found</p>

@endif

<div class="d-flex justift-content-center">
{{ $posts->links() }}
</div>


@endsection