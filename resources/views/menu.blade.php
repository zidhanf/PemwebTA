@extends('layouts.main')

@section('container')
<br>
    <h1 class="text-center">Menu</h1>
    {{-- @include('partials.drop') --}}
    {{-- <h2>
        <a href="/menu/{{ $menus->id }}">{{ $menus->nama }}</a>
    </h2>
    <h5>RP. {{ $menus->harga }}</h5>
    <p>{{ $menus->excerpt }}</p>
    <p><a  href="/menu/{{ $menus->id }}"> Read more...</a></p> --}}
    <br><br>
    <div class="container">
        <div class="row">
            @foreach ($menu as $menus)
                <div class="col-md-4 mb-3">
                    <div class="card" >
                        <img class="card-img-top" src="{{ asset('storage/'.$menus->image) }}" alt="{{ $menus->nama }}" >
                        <div class="card-body">
                            <h5 class="card-title">{{ $menus->nama }}</h5>
                            <p>RP. {{ $menus->harga }}</p>
                            <p class="card-text">{{ $menus->excerpt }}</p>
                            <a href="/menu/{{ $menus->id }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    </div>



@endsection
