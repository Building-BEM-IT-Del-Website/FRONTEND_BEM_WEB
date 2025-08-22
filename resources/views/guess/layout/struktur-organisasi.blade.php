@extends('guess.components.app')

@section('content')

    <!-- Hero Section Melengkung -->
    <section class="hero-curved">
        <div class="container text-center">
            <p class="text-uppercase fw-bold" data-aos="fade-down">Kenali Kami Lebih Dekat</p>
            <h1 class="display-3 fw-bold text-white" data-aos="fade-down" data-aos-delay="100">Struktur <span
                    class="highlight">Organisasi</span></h1>
            <p class="lead text-white-50 mx-auto mt-3" style="max-width: 600px;" data-aos="fade-down" data-aos-delay="200">
                Tim yang berdedikasi untuk melayani dan memajukan seluruh mahasiswa Institut Teknologi Del.
            </p>
        </div>
    </section>

    <!-- Konten Struktur -->
    <section class="py-5">
        <div class="container">
            <!-- Pimpinan Utama -->
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold text-del-dark">Pimpinan Utama</h2>
                <p class="text-muted">Badan Pengurus Harian Inti BEM IT Del</p>
            </div>
            <div class="row g-4 justify-content-center">
                <!-- KARTU KETUA BEM -->
                <div class="col-md-6 col-lg-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-leader">
                        <img src="https://via.placeholder.com/150" class="leader-img" alt="Ketua BEM">
                        <h4 class="fw-bold text-del-dark">Nama Ketua BEM</h4>
                        <p class="text-del-primary-blue fw-semibold">Ketua BEM</p>
                        <p class="leader-quote small">"Mari bersama-sama kita ciptakan lingkungan kampus yang inspiratif dan
                            berprestasi."</p>
                        <div class="leader-socials mt-3">
                            <a href="#" class="mx-2"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="mx-2"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <!-- KARTU WAKIL KETUA BEM -->
                <div class="col-md-6 col-lg-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-leader">
                        <img src="https://via.placeholder.com/150" class="leader-img" alt="Wakil Ketua BEM">
                        <h4 class="fw-bold text-del-dark">Nama Wakil Ketua BEM</h4>
                        <p class="text-del-primary-blue fw-semibold">Wakil Ketua BEM</p>
                        <p class="leader-quote small">"Setiap suara mahasiswa adalah prioritas kami untuk membangun BEM yang
                            lebih baik."</p>
                        <div class="leader-socials mt-3">
                            <a href="#" class="mx-2"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="mx-2"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <!-- KARTU BARU: SEKRETARIS -->
                <div class="col-md-6 col-lg-5" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-leader">
                        <img src="https://via.placeholder.com/150" class="leader-img" alt="Sekretaris BEM">
                        <h4 class="fw-bold text-del-dark">Nama Sekretaris</h4>
                        <p class="text-del-primary-blue fw-semibold">Sekretaris Umum</p>
                        <p class="leader-quote small">"Kunci dari organisasi yang hebat adalah administrasi yang terstruktur
                            dan rapi."</p>
                        <div class="leader-socials mt-3">
                            <a href="#" class="mx-2"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="mx-2"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <!-- KARTU BARU: BENDAHARA -->
                <div class="col-md-6 col-lg-5" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-leader">
                        <img src="https://via.placeholder.com/150" class="leader-img" alt="Bendahara BEM">
                        <h4 class="fw-bold text-del-dark">Nama Bendahara</h4>
                        <p class="text-del-primary-blue fw-semibold">Bendahara Umum</p>
                        <p class="leader-quote small">"Mengelola keuangan dengan transparan dan bertanggung jawab untuk
                            setiap program kerja."</p>
                        <div class="leader-socials mt-3">
                            <a href="#" class="mx-2"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="mx-2"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Departemen & Badan -->
            <div class="text-center my-5 pt-4" data-aos="fade-up">
                <h2 class="display-5 fw-bold text-del-dark">Departemen & Badan</h2>
                <p class="text-muted">Pilar-pilar pergerakan BEM IT Del.</p>
            </div>

            <!-- Tab Navigasi Departemen -->
            <ul class="nav nav-pills justify-content-center department-tabs mb-4" id="pills-tab" role="tablist"
                data-aos="fade-up">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-psdm-tab" data-bs-toggle="pill" data-bs-target="#pills-psdm"
                        type="button" role="tab">PSDM</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-kominfo-tab" data-bs-toggle="pill" data-bs-target="#pills-kominfo"
                        type="button" role="tab">KOMINFO</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-advokesma-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-advokesma" type="button" role="tab">ADVOKESMA</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-danus-tab" data-bs-toggle="pill" data-bs-target="#pills-danus"
                        type="button" role="tab">DANUS</button>
                </li>
            </ul>

            <!-- Konten Tab -->
            <div class="tab-content" id="pills-tabContent" data-aos="fade-up" data-aos-delay="100">
                <!-- Konten Tab PSDM -->
                <div class="tab-pane fade show active" id="pills-psdm" role="tabpanel">
                    <div class="row g-4 justify-content-center">
                        {{-- Data Anggota PSDM --}}
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="card card-member p-3"><img src="https://via.placeholder.com/100" class="member-img"
                                    alt="Anggota">
                                <h6 class="fw-bold">Kepala Departemen</h6>
                                <p class="small text-muted mb-0">PSDM</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="card card-member p-3"><img src="https://via.placeholder.com/100" class="member-img"
                                    alt="Anggota">
                                <h6 class="fw-bold">Anggota Satu</h6>
                                <p class="small text-muted mb-0">PSDM</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="card card-member p-3"><img src="https://via.placeholder.com/100" class="member-img"
                                    alt="Anggota">
                                <h6 class="fw-bold">Anggota Dua</h6>
                                <p class="small text-muted mb-0">PSDM</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Konten Tab KOMINFO -->
                <div class="tab-pane fade" id="pills-kominfo" role="tabpanel">
                    <div class="row g-4 justify-content-center">
                        {{-- Data Anggota KOMINFO --}}
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="card card-member p-3"><img src="https://via.placeholder.com/100" class="member-img"
                                    alt="Anggota">
                                <h6 class="fw-bold">Kepala Departemen</h6>
                                <p class="small text-muted mb-0">KOMINFO</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Konten Tab ADVOKESMA -->
                <div class="tab-pane fade" id="pills-advokesma" role="tabpanel">
                    <div class="row g-4 justify-content-center">
                        {{-- Data Anggota ADVOKESMA --}}
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="card card-member p-3"><img src="https://via.placeholder.com/100" class="member-img"
                                    alt="Anggota">
                                <h6 class="fw-bold">Kepala Departemen</h6>
                                <p class="small text-muted mb-0">ADVOKESMA</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Konten Tab DANUS -->
                <div class="tab-pane fade" id="pills-danus" role="tabpanel">
                    <div class="row g-4 justify-content-center">
                        {{-- Data Anggota DANUS --}}
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="card card-member p-3"><img src="https://via.placeholder.com/100" class="member-img"
                                    alt="Anggota">
                                <h6 class="fw-bold">Kepala Departemen</h6>
                                <p class="small text-muted mb-0">DANUS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
