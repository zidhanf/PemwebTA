@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">List Reservasi</h1>
    </div>
    <div class="table-responsive col-lg-8 ">
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
                    <th scope="col">Tanggal</th>
                    <th scope="col">Awal</th>
                    <th scope="col">Akhir</th>
                    <th scope="col">Delete</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($reservasis as $rs)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $rs->nama }}</td>
                        <td>{{ $rs->date }}</td>
                        <td>{{ $rs->time }}</td>
                        <td>{{ $rs->time2 }}</td>
                        <td>
                            <form action="/dashboard/reservasi/{{ $rs->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Anda yakin akan menghapus Reservasi ?')"><span data-feather="x-circle"> </span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
