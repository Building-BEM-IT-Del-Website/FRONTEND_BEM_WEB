<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="{{ asset('guest/assets/bem.png') }}" alt="Logo BEM IT Del" style="height: 40px;" class="me-2">
            <span class="fw-bold fs-5 text-dark">BEM IT Del</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
    <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>

    <!-- Menu Dropdown BARU -->
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profil
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/visi-misi">Visi & Misi</a></li>
            <li><a class="dropdown-item" href="/struktur-organisasi">Struktur Organisasi</a></li>
        </ul>
    </li>

    <li class="nav-item"><a class="nav-link" href="/organisasi">Himpunan & UKM</a></li>
    <li class="nav-item"><a class="nav-link" href="/berita">Berita</a></li> {{-- UBAH INI --}}
    <li class="nav-item"><a class="nav-link" href="/pengumuman">Pengumuman</a></li>
    <li class="nav-item"><a class="nav-link" href="/kalender">Kalender</a></li>
</ul>
            <a href="/login" class="btn btn-primary rounded-pill px-4">Login</a>
        </div>
    </div>
</nav>
