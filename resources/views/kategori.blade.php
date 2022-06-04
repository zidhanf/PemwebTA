{{-- @extends('layouts.main')

@section('container')
    <h1 text-align= center>Halaman Menu</h1>
    @include('partials.drop')
    @foreach ($menu as $menus)
        <h2>
            <a href="/menu/{{ $menus->id }}">{{ $menus->nama }}</a>
        </h2>
        <h5>RP. {{ $menus->harga }}</h5>
        <p>{{ $menus->excerpt }}</p>
    @endforeach
@endsection --}}
