@extends('layouts.main')

@section('container')
    <div class="bk-abt">
        <section class="about" id="about">
            <div class="heading">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <h2 class="mt-5 text-center">About us</h2>
                            <p class="mb-5 text-center">Cafe.in merupakan website yang bertemakan suatu cafe.
                                Didalam website ini tersedia beberapa fitur yang dapat
                                mempermudah pelanggan untuk memesan tempat tanpa harus
                                datang pada outlet, lalu juga tersedia harga-harga makanan
                                dan minuman pada website kami.
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-lg-4">
                            <div class="box">
                                <h4><a href="/review">Tulis Ulasan</a></h4>
                                <p>Pengguna dapat memberikan ulasanterhadap sebuah cafe ini atau dapatmemberikan masukan/
                                    saran untuk pengembangan
                                    yang lebih baik bagicafe ini</p>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="box">
                                <h4><a href="/reservasi">Reservasi</a></h4>
                                <p>Agar mereka dapat melakukanpemesanan tempat tanpa harus melaluitelpon dengan cara
                                    mereka dapat mengisiform pemesanan yang berisikan hari,tanggal, dan waktu.
                                    Lalu mereka dapat membayar makanan dan tempat nyater lebih dahulu yang digunakan
                                    sebagai sarana kesepakatan bahwa benar-benar memiliki niatan untuk mereservasi
                                    suatu tempat.
                                </p>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="box">
                                <h4><a href="/menu">Menu Makanan</a></h4>
                                <p>Pengguna dapat melihat makananatau minumanan apa saja yang terdapat pada cafe
                                    tersebut.Sehingga mereka tidak perlu untukrepot-repot untuk melihat harga danlist menu
                                    yang
                                    ada pada tempat.</p>
                            </div>
                        </div>
                    </div>
        </section>
    </div>
@endsection
