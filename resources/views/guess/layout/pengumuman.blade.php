@extends('guess.components.app')

@section('content')

    <!-- Hero Section dengan Potongan Diagonal -->
    <section class="hero-angled">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <p class="text-uppercase fw-bold" data-aos="fade-down">Informasi Penting</p>
                    <h1 class="display-3 fw-bold text-white" data-aos="fade-down" data-aos-delay="100">Papan <span class="highlight">Pengumuman</span></h1>
                    <p class="lead text-white-50 mt-3" data-aos="fade-down" data-aos-delay="200">
                        Pusat informasi dan pengumuman resmi dari Badan Eksekutif Mahasiswa Institut Teknologi Del.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Konten dengan Layout Dua Kolom -->
    <section class="py-5 bg-del-light-gray">
        <div class="container">
            <div class="row g-5">
                <!-- Kolom Utama: Daftar Pengumuman -->
                <div class="col-lg-8">
                    <div class="list-group announcement-list">
                        {{-- NANTINYA DATA INI AKAN DIAMBIL DARI DATABASE --}}

                        <!-- Pengumuman Item 1 -->
                        <a href="/detail-pengumuman" class="list-group-item list-group-item-action p-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="d-flex align-items-center">
                                <div class="announcement-icon me-3">
                                    <i class="bi bi-calendar-check"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1 fw-bold">Jadwal Pengambilan Jas Almamater Angkatan 2024</h5>
                                        <small class="text-muted d-none d-md-block">3 hari lalu</small>
                                    </div>
                                    <p class="mb-1 text-muted">Pengambilan dapat dilakukan di Sekretariat BEM mulai tanggal 10-15 Agustus 2024 pada jam kerja.</p>
                                </div>
                            </div>
                        </a>
                        <!-- Pengumuman Item 2 -->
                        <a href="#" class="list-group-item list-group-item-action p-4" data-aos="fade-up" data-aos-delay="200">
                             <div class="d-flex align-items-center">
                                <div class="announcement-icon me-3">
                                    <i class="bi bi-people-fill"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1 fw-bold">Open Recruitment Staf BEM Kabinet #SahatMarsada</h5>
                                        <small class="text-muted d-none d-md-block">5 hari lalu</small>
                                    </div>
                                    <p class="mb-1 text-muted">Bagi seluruh mahasiswa aktif angkatan 2023 yang berkomitmen, segera daftarkan dirimu!</p>
                                </div>
                            </div>
                        </a>
                        <!-- Pengumuman Item 3 -->
                        <a href="#" class="list-group-item list-group-item-action p-4" data-aos="fade-up" data-aos-delay="300">
                             <div class="d-flex align-items-center">
                                <div class="announcement-icon me-3">
                                    <i class="bi bi-award-fill"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1 fw-bold">Informasi Beasiswa Pendidikan Prestasi Tahun 2024</h5>
                                        <small class="text-muted d-none d-md-block">1 minggu lalu</small>
                                    </div>
                                    <p class="mb-1 text-muted">Silakan unduh panduan dan persyaratan pada link yang tertera di dalam pengumuman detail.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Pagination -->
                    <nav aria-label="Page navigation" class="mt-5 d-flex justify-content-center" data-aos="fade-up">
                        <ul class="pagination shadow-sm">
                            <li class="page-item disabled"><a class="page-link" href="#">Sebelumnya</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">Selanjutnya</a></li>
                        </ul>
                    </nav>
                </div>

                <!-- Kolom Sidebar -->
                <div class="col-lg-4">
                    <!-- Widget Pencarian -->
                    <div class="sidebar-widget" data-aos="fade-left" data-aos-delay="100">
                        <h5 class="widget-title">Cari Pengumuman</h5>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Ketik kata kunci...">
                            <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
                        </form>
                    </div>

                    <!-- Widget Arsip -->
                    <div class="sidebar-widget" data-aos="fade-left" data-aos-delay="200">
                        <h5 class="widget-title">Arsip</h5>
                        <div class="list-group list-group-flush archive-list">
                            <a href="#" class="list-group-item list-group-item-action">Agustus 2024</a>
                            <a href="#" class="list-group-item list-group-item-action">Juli 2024</a>
                            <a href="#" class="list-group-item list-group-item-action">Juni 2024</a>
                            <a href="#" class="list-group-item list-group-item-action">Mei 2024</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
