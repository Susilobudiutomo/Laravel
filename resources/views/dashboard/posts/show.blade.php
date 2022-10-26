@extends('dashboard.layout.main')
@section('konten')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-3 mt-2">{{ $post->title }} </h2>
            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="eye" class="align-text-bottom"></span> Back To All My Posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit" class="align-text-bottom"></span> Edit Post</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @csrf
                @method('delete')
                <button class="btn btn-danger border-0" onclick="return confirm('Are You Sure?')">
                    <span data-feather="x-circle" class="align-text-bottom"></span> Delete</button>
              </form> 
              @if ($post->image) 
              <div style="max-height: 350px; overflow:hidden;" >
              <img src="{{ asset('storage/'.$post->image) }}"alt="{{ $post->category->name }}" class="img-fluid mt-3">
            </div>
            <button type="button" class="btn btn-info mt-3" disabled>In Category {{ $post->category->name }}</button>
              @else
              <img src="https://source.unsplash.com/1200x500?{{ $post->category->name }}"alt="{{ $post->category->name }}" class="img-fluid mt-3">
              <button type="button" class="btn btn-info mt-3" disabled>In Category {{ $post->category->name }}</button>   
              @endif
        <article class="my-3 fs-6">
            <p>{!! $post->body  !!} </p>
        </article>
        </div>
    </div>
    </div>
@endsection