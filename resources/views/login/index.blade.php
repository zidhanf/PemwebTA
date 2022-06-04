<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $tittle }}</title>
    <link rel="icon" href="img/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">

</head>

<body>

    @include('partials.navbar')
    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url(image/bglogin.png);"></div>
        <div class="contents order-2 order-md-1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        @if (session()->has('LoginError'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('LoginError') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <h3>Login to <strong>Cafein</strong></h3>
                        <p class="mb-4">Halo selamat datang!</p>
                        <form action="/login" method="post">
                            @csrf
                            <div class="form-group first">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control " placeholder="Email" id="email" required>
                                <br>
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="password" id="password" required>
                                <small>Belum Punya akun? <a href="/register">Daftar</a></small>
                                <br><br>
                            </div>
                            <input type="submit" value="Log In" class="btn btn-block btn-dark">
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
