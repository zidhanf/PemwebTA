@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Menu</h1>
    </div>
    <div class="table-responsive col-lg-8 ">
        <a href="/dashboard/menus/create" class="btn btn-primary mb-3">Tambah Menu</a>
        <table class="table table-striped table-sm ">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($menus as $menu)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $menu->nama }}</td>
                        <td>Rp. {{ $menu->harga }}</td>
                        <td>
                            <a href="menus/{{ $menu->id }}" class="badge bg-info"> <span data-feather="eye"> </span></a>
                            <a href="/dashboard/menus/{{ $menu->id }}/edit" class="badge bg-warning"> <span data-feather="edit"> </span></a>
                            <form action="/dashboard/menus/{{ $menu->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Anda yakin akan menghapus menu ?')"><span data-feather="x-circle"> </span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
