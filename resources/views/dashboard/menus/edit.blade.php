@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Menu</h1>
    </div>

    <div class="col-lg-4">

        <form method="post" action="/dashboard/menus/{{ $menu->id }}">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Makanan</label>
                <input type="text" class="form-control" id="nama" placeholder="Nama Makanan" 
                name="nama" value="{{ $menu->nama }}"required>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control" id="harga" placeholder="Harga" name="harga" 
                value="{{ $menu->harga }}"  required>
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <select class="form-select" id="category_id" name="category_id" >
                    <option value="1">Makanan</option>
                    <option value="2">Minuman</option>
                    <option value="3">Snack</option>
                  </select>
            </div>
            <div class="mb-3">
                <label for="detail" class="form-label">detail</label>
                <input type="text" class="form-control" id="detail" placeholder="Detail" 
                name="detail"  value="{{ $menu->detail }}"required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
