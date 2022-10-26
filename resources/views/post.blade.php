
@extends('layout.main')

@section('konten')

<div class="container">
<div class="row justify-content-center">
    <div class="col-md-8">
        <h2 class="mb-3 mt-2">{{ $post->title }} </h2>
        <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">
            {{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">
                {{ $post->category->name }}</a>
        </p>
        @if ($post->image) 
        <div style="max-height: 350px; overflow:hidden;" >
        <img src="{{ asset('storage/'.$post->image) }}"alt="{{ $post->category->name }}" class="img-fluid">
      </div>
        @else
        <img src="https://source.unsplash.com/1200x500?{{ $post->category->name }}"alt="{{ $post->category->name }}" class="img-fluid ">   
        @endif
    <article class="my-3 fs-6">
        <p>{!! $post->body  !!} </p>
    </article>
        <p><a href="/posts" class="text-decoration-none">Kembali Ke Halaman Blog</a></p>
    </div>
</div>
</div>
@endsection
