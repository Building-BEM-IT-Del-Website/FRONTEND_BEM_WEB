<div class="navbar navbar-expand-lg navbar-static shadow navbar-custom">
    <div class="container-fluid">
        <div class="d-flex d-lg-none me-2">
            <button type="button" class="navbar-toggler sidebar-mobile-main-toggle rounded-pill text-white">
                <i class="ph-list"></i>
            </button>
        </div>

        <div class="navbar-collapse flex-lg-1 order-2 order-lg-1 collapse" id="navbar_search">
            <!-- bisa isi search bar di sini -->
        </div>

        <ul class="nav hstack gap-sm-1 flex-row justify-content-end order-1 order-lg-2">
            <li class="nav-item d-lg-none">
                <a href="#navbar_search" class="navbar-nav-link navbar-nav-link-icon rounded-pill text-white" data-bs-toggle="collapse">
                    <i class="ph-magnifying-glass"></i>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="navbar-nav-link navbar-nav-link-icon rounded-pill text-white position-relative" data-bs-toggle="offcanvas" data-bs-target="#notifications">
                    <i class="ph-bell"></i>
                    <span class="badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top zindex-1 rounded-pill mt-1 me-1">2</span>
                </a>
            </li>

            <li class="nav-item nav-item-dropdown-lg dropdown">
                <a href="#" class="navbar-nav-link align-items-center rounded-pill p-1 text-white" data-bs-toggle="dropdown">
                    <div class="status-indicator-container">
                        <img src="{{asset('guest/assets/images/demo/users/face11.jpg')}}" class="w-32px h-32px rounded-pill border border-white" alt="">
                        <span class="status-indicator bg-success"></span>
                    </div>
                    <span class="d-none d-lg-inline-block mx-lg-2">Halo, {{ $authUser->username ?? 'Guest' }}</span>
                </a>

                <div class="dropdown-menu dropdown-menu-end">
                    <a href="#" class="dropdown-item">
                        <i class="ph-user-circle me-2"></i>
                        My profile
                    </a>
                </div>
            </li>
        </ul>
    </div>
</div>
<style>
    .navbar-custom {
    background: linear-gradient(90deg, #1E3A8A, #3B82F6);
    color: #fff;
}

.navbar-custom .navbar-nav-link {
    color: #e2e8f0;
    transition: 0.2s;
}

.navbar-custom .navbar-nav-link:hover {
    color: #fff;
    background-color: rgba(255, 255, 255, 0.1);
}

.navbar-custom .dropdown-menu {
    background-color: #1E3A8A;
    border: none;
}

.navbar-custom .dropdown-item {
    color: #e2e8f0;
}

.navbar-custom .dropdown-item:hover {
    background-color: #3B82F6;
    color: #fff;
}

</style>
