<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $tittle }}</title>
    <link rel="icon" href="img/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    <link rel="stylesheet" href="../css/reservasi.css">

</head>

<body>

    @include('partials.navbar')


    <section class="reservasi">
        <h2>PESAN MEJA</h2>
        <div class="reservasi-container">
            <div class="reservasi-img">
                <!-- image here -->
            </div>

            <div class="reservasi-content">
                <h3>Reservation</h3>


                <form method="post" action="/reservasi" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <input type="text" id="nama" placeholder="Nama Lengkap" name="nama" required>
                        <input type="number" id="hp" placeholder="No Hp" name="hp" required>
                    </div>

                    <div class="form-row">
                        <input type="time" id="time" placeholder="time" name="time" required>
                        <input type="time" id="time2" placeholder="time" name="time2" required>
                    </div>
                    <div class="form-row">
                        <input type="date" id="date" placeholder="date" name="date" required>

                        <input type="submit" value="BOOK TABLE">

                    </div>

                </form>
            </div>

        </div>

    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
