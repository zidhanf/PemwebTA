@extends('layouts.main')

@section('container')
    {{-- <h1 class="mb-2"> {{ $post->nama }}</h1>
    <h5>RP. {{ $post->harga}}</h5>
    <p>Kategori : <a href="/kategori/{{ $post->kategori->nama }}"> {{ $post->kategori->nama }} </a></p>
    <p>{{ $post->detail }}</p>  
    <a href="/"></a> --}}

    <div class="card text-center">
        <div class="card-header">
            Menu
        </div>
        <img class="card-img-top" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->nama }}">

        <div class="card-body">
            <h5 class="card-title">{{ $post->nama }}</h5>
            <h5 class="card-title">Rp. {{ $post->harga }}</h5>
            <p class="card-text">{{ $post->detail }}</p>
            <a href="/menu" class="btn btn-secondary">Back</a>
        </div>
        <div class="card-footer text-muted">
            Hope you get it
        </div>
    </div>
@endsection
