<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Cafe.in</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto text-center">
                <li class="nav-item">
                    <a class="nav-link {{ $tittle == 'Cafe.in' ? 'active' : '' }} " href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $tittle == 'Menu' ? 'active' : '' }}" href="/menu">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $tittle == 'Reservasi' ? 'active' : '' }}" href="/reservasi">Reservasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $tittle == 'Review' ? 'active' : '' }}" href="/review">Review</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $tittle == 'About' ? 'active' : '' }}" href="/about">About us</a>
                </li>

            </ul>

            <ul class="navbar-nav ms-auto">
                @auth 
                @if (auth()->user()->is_admin == 1){
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Hello, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/dashboard">Dashboard </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                        </ul>
                    </li>
                }
                    
                @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Hello, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                    </ul>
                </li>
                @endif
                @else
                    <li class="nav-item">
                        <a href="/login" class="nav-link">Login</a>
                    </li>
                @endauth
            </ul>

        </div>
    </div>
</nav>
