@extends('layout.main')

@section('konten')
<div class="container">
    <div class="row mt-3">
        <div class="col">
            <h1>Halaman About</h1>
<h3>{{$name}}</h3>
<p>{{$email}}</p>
<img src="img/{{$image}}" alt="{{$name}}" width="200" class="img-thumbnail rounded-circle">
        </div>
    </div>
</div>


@endsection