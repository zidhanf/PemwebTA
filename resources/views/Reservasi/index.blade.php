@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Menu</h1>
    </div>
    <div class="table-responsive col-lg-8 ">
        <div class="alert alert-warning col-lg-5" role="alert">
            Pastikan Melihat Daftar Reservasi Terlebih Dahulu !
          </div>
        <a href="/reservasi/create" class="btn btn-primary mb-3">Reservasi</a>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Daftar Reservasi</h1>
        </div>
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
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
