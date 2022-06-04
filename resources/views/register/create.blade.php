@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Menu</h1>
</div>

<div class="col-lg-4 mx-auto">

    <form method="post" action="/reservasi" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lenkap</label>
            <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama"required>
        </div>
        <div class="mb-3">
            <label for="hp" class="form-label">No HP</label>
            <input type="number" class="form-control" id="hp" placeholder="No Hp" name="hp" required>
        </div>

        <div class="mb-3">
            <label for="detail" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="date" placeholder="date" name="date" required>
        
        </div>
        <div class="mb-3">
            <label for="detail" class="form-label">Jam Bookinng</label>
            <input type="time" class="form-control" id="time" placeholder="time" name="time" required>
        </div>
        <div class="mb-3">
            <label for="detail" class="form-label">Akhir Booking</label>
            <input type="time" class="form-control" id="time2" placeholder="time" name="time2" required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
@endsection