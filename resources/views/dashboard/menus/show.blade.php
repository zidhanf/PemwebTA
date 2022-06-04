@extends('dashboard.layouts.main')

@section('container')
    <div class="row my-4">
        <div class="col-lg-5 mx-auto">
            <div class="card text-center">
                <div class="card-header">
                    Menu
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ asset('storage/'.$menu->image) }}" alt="{{ $menu->nama }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $menu->nama }}</h5>
                        <h5 class="card-title">Rp. {{ $menu->harga }}</h5>
                        <p class="card-text">{{ $menu->detail }}</p>
                        <a href="../menus" class="btn btn-primary">Back</a>
                        <a href="/dashboard/menus/{{ $menu->id }}/edit" class="btn btn-warning">Edit</a>
                        <form action="/dashboard/menus/{{ $menu->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger"
                                onclick="return confirm('Anda yakin akan menghapus menu ?')">Delete</button>
                        </form>
                    </div>
                    <div class="card-footer text-muted">
                        Hope you get it
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
