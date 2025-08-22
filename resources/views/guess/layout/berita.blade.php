@extends('guess.components.app')

@section('content')

    <!-- Hero Section Halaman Berita -->
    <section class="hero-organisasi py-5">
        <div class="container text-center py-5">
            <p class="text-uppercase fw-bold" data-aos="fade-down">Liputan & Informasi</p>
            <h1 class="display-3 fw-bold text-white" data-aos="fade-down" data-aos-delay="100">Berita & <span class="highlight">Kegiatan</span></h1>
            <p class="lead text-white-50 mx-auto mt-3" style="max-width: 600px;" data-aos="fade-down" data-aos-delay="200">
                Ikuti perkembangan dan liputan terbaru dari setiap program kerja dan kegiatan BEM Institut Teknologi Del.
            </p>
        </div>
    </section>

    <!-- Daftar Berita Interaktif -->
    <section class="py-5">
        <div class="container">

            <!-- Featured Post -->
            <div class="mb-5" data-aos="fade-up">
                <h2 class="display-6 fw-bold text-del-dark mb-4">Berita Unggulan</h2>
                <a href="#" class="card featured-post-card text-decoration-none shadow-lg">
                    <img src="https://via.placeholder.com/1200x600/0078D4/ffffff?text=Webinar+Nasional" class="card-img" alt="Featured News">
                    <div class="card-img-overlay">
                        <div>
                            <span class="badge mb-2">Akademik</span>
                            <h3 class="card-title text-white">BEM IT Del Sukses Gelar Webinar Nasional Technopreneurship</h3>
                            <p class="card-text d-none d-md-block">Acara ini menghadirkan pembicara ahli dari industri dan diikuti oleh ratusan mahasiswa dari seluruh Indonesia, membuka wawasan baru tentang membangun startup di era digital.</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Header Berita Lainnya & Filter -->
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-4" data-aos="fade-up">
                <h2 class="display-6 fw-bold text-del-dark mb-3 mb-md-0">Berita Lainnya</h2>
                <ul class="nav nav-pills filter-pills">
                    <li class="nav-item"><a class="nav-link active" href="#">Semua</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Kemahasiswaan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Olahraga & Seni</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Pengabdian</a></li>
                </ul>
            </div>

            <!-- Grid Berita Lainnya -->
            <div class="row g-4">
                {{-- NANTINYA DATA INI AKAN DIAMBIL DARI DATABASE --}}

                <!-- Berita Item 1 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card news-card shadow-sm h-100">
                        <img src="https://via.placeholder.com/600x400/0078D4/ffffff?text=Bakti+Sosial" class="card-img-top" alt="Berita 1">
                        <div class="card-body d-flex flex-column">
                            <small class="text-muted mb-2">08 Agustus 2024 • Pengabdian</small>
                            <h5 class="card-title fw-bold">Program Bakti Sosial di Desa Binaan Toba Samosir</h5>
                            <p class="card-text text-muted small flex-grow-1">BEM IT Del kembali menunjukkan kepeduliannya melalui program pengabdian masyarakat dengan fokus pada literasi digital.</p>
                            <a href="/detail-berita" class="btn btn-sm btn-outline-primary mt-3 align-self-start">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- Berita Item 2 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card news-card shadow-sm h-100">
                        <img src="https://via.placeholder.com/600x400/0078D4/ffffff?text=POMDA" class="card-img-top" alt="Berita 2">
                        <div class="card-body d-flex flex-column">
                            <small class="text-muted mb-2">05 Agustus 2024 • Olahraga & Seni</small>
                            <h5 class="card-title fw-bold">IT Del Juara Umum Pekan Olahraga Mahasiswa Daerah</h5>
                            <p class="card-text text-muted small flex-grow-1">Kontingen mahasiswa IT Del berhasil membawa pulang gelar juara umum setelah mendominasi beberapa cabang olahraga.</p>
                            <a href="#" class="btn btn-sm btn-outline-primary mt-3 align-self-start">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- Berita Item 3 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card news-card shadow-sm h-100">
                        <img src="https://via.placeholder.com/600x400/0078D4/ffffff?text=Mahasiswa+Baru" class="card-img-top" alt="Berita 3">
                        <div class="card-body d-flex flex-column">
                            <small class="text-muted mb-2">02 Agustus 2024 • Kemahasiswaan</small>
                            <h5 class="card-title fw-bold">Penyambutan Mahasiswa Baru Angkatan 2024</h5>
                            <p class="card-text text-muted small flex-grow-1">Rangkaian acara orientasi dan pengenalan kampus untuk mahasiswa baru berjalan dengan meriah dan lancar.</p>
                            <a href="#" class="btn btn-sm btn-outline-primary mt-3 align-self-start">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Pagination (Tombol halaman) -->
            <nav aria-label="Page navigation" class="mt-5 d-flex justify-content-center" data-aos="fade-up">
                <ul class="pagination shadow-sm">
                    <li class="page-item disabled"><a class="page-link" href="#">Sebelumnya</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Selanjutnya</a></li>
                </ul>
            </nav>

        </div>
    </section>

@endsection
