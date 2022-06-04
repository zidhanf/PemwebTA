<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' :'' }}" aria-current="page" href="/dashboard">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/reservasi') ? 'active' :'' }}" href="/dashboard/reservasi">
                    <span data-feather="file" class="align-text-bottom"></span>
                    Reservasi
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/menus*') ? 'active' :'' }}" href="/dashboard/menus">
                    <span data-feather="shopping-cart" class="align-text-bottom"></span>
                    Menu
                </a>
            </li>
        </ul>
    </div>
</nav>