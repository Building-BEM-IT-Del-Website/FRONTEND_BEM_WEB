@extends('guess.components.app')

@section('content')

    <!-- Hero Section Halaman Organisasi -->
    <section class="hero-organisasi py-5">
        <div class="container text-center py-5">
            <p class="text-uppercase fw-bold" data-aos="fade-down">Organisasi Mahasiswa</p>
            <h1 class="display-3 fw-bold text-white" data-aos="fade-down" data-aos-delay="100">Himpunan <span class="highlight">Mahasiswa</span></h1>
            <p class="lead text-white-50 mx-auto mt-3" style="max-width: 600px;" data-aos="fade-down" data-aos-delay="200">
                Wadah pengembangan akademik dan non-akademik sesuai dengan bidang keahlian masing-masing program studi di Institut Teknologi Del.
            </p>
        </div>
    </section>

    <!-- Daftar Himpunan Mahasiswa -->
    <section class="py-5 bg-del-light-gray">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold text-del-dark">Daftar Himpunan</h2>
                <p class="text-muted">Organisasi mahasiswa berdasarkan program studi.</p>
            </div>

            <div class="row g-4">
                <!-- Kartu HIMASTI -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card card-organisasi p-3 h-100">
                        <div class="card-body text-center">
                            <div class="card-icon-box mx-auto">
                                <i class="bi bi-code-slash"></i>
                            </div>
                            <h5 class="card-title fw-bold mt-3">HIMASTI</h5>
                            <p class="text-del-primary-blue small fw-semibold">Himpunan Mahasiswa S1 Informatika</p>
                            <p class="card-text text-muted small">Mengembangkan kemampuan mahasiswa di bidang rekayasa perangkat lunak dan teknologi informasi.</p>
                            <a href="/detail-organisasi" class="btn btn-gradient text-white rounded-pill px-4 mt-3">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <!-- Kartu HIMSI -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card card-organisasi p-3 h-100">
                        <div class="card-body text-center">
                            <div class="card-icon-box mx-auto">
                                <i class="bi bi-server"></i>
                            </div>
                            <h5 class="card-title fw-bold mt-3">HIMSI</h5>
                            <p class="text-del-primary-blue small fw-semibold">Himpunan Mahasiswa S1 Sistem Informasi</p>
                            <p class="card-text text-muted small">Wadah pengembangan mahasiswa di bidang sistem informasi, bisnis, dan teknologi.</p>
                            <a href="#" class="btn btn-gradient text-white rounded-pill px-4 mt-3">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <!-- Kartu HME -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card card-organisasi p-3 h-100">
                        <div class="card-body text-center">
                            <div class="card-icon-box mx-auto">
                                <i class="bi bi-robot"></i>
                            </div>
                            <h5 class="card-title fw-bold mt-3">HME</h5>
                            <p class="text-del-primary-blue small fw-semibold">Himpunan Mahasiswa S1 Teknik Elektro</p>
                            <p class="card-text text-muted small">Mengembangkan potensi mahasiswa di bidang teknik elektro dan teknologi modern.</p>
                            <a href="#" class="btn btn-gradient text-white rounded-pill px-4 mt-3">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <!-- Tambahkan kartu lain sesuai kebutuhan -->
                <!-- Contoh: HIMATERA, HIMATEK, HIMATIF -->

            </div>
        </div>
    </section>

@endsection
