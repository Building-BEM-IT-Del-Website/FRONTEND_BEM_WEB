@extends('guess.components.app')

@section('content')

    <!-- Header Detail Organisasi (berdasarkan data) -->
    <section class="detail-org-header" data-aos="fade-in">
        <div class="container">
            {{-- Logo dari database --}}
            <img src="" class="org-logo" alt="Logo Himatera">

            {{-- Nama dari database --}}
            <h1 class="display-4 fw-bold text-white">Himatera</h1>

            {{-- Kategori (Jenis Ormawa) dari database --}}
            <p class="lead text-white-50">Himapro</p>

            <div class="mt-4 org-socials">
                <a href="#" class="mx-2"><i class="bi bi-instagram"></i></a>
                <a href="#" class="mx-2"><i class="bi bi-youtube"></i></a>
                <a href="#" class="mx-2"><i class="bi bi-globe"></i></a>
            </div>
        </div>
    </section>

    <!-- Konten Detail dengan Tab -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- Navigasi Tab -->
                    <ul class="nav nav-tabs justify-content-center mb-4" id="orgTab" role="tablist">
                        <li class="nav-item" role="presentation"><button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profil" type="button">Profil</button></li>
                        <li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#visi-misi" type="button">Visi & Misi</button></li>
                        <li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#kegiatan" type="button">Kegiatan</button></li>
                    </ul>

                    <!-- Konten Tab -->
                    <div class="tab-content pt-4" id="orgTabContent">
                        <!-- Tab Profil -->
                        <div class="tab-pane fade show active" id="profil">
                            <h3 class="fw-bold mb-3">Tentang Kami</h3>
                            <article class="detail-content">
                                {{-- Deskripsi dari database --}}
                                <p>Mengembangkan kemampuan mahasiswa di bidang rekayasa perangkat lunak dan teknologi informasi.</p>
                            </article>
                        </div>

                        <!-- Tab Visi & Misi -->
                        <div class="tab-pane fade" id="visi-misi">
                            <div class="vision-mission-section">
                                <!-- Visi -->
                                <div class="d-flex align-items-start mb-5">
                                    <div class="icon-box bg-primary-subtle text-primary">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                    <div>
                                        <h3 class="fw-bold mt-0">Visi</h3>
                                        <p class="detail-content">Jaya jaya jaya</p>
                                    </div>
                                </div>
                                <!-- Misi -->
                                <div class="d-flex align-items-start">
                                     <div class="icon-box bg-success-subtle text-success">
                                        <i class="bi bi-list-check"></i>
                                    </div>
                                    <div>
                                        <h3 class="fw-bold mt-0">Misi</h3>
                                        <article class="detail-content">
                                            {{-- Misi dari database (kita gunakan nl2br untuk ganti baris) --}}
                                            <p>1. Meningkatkan kualitas akademik mahasiswa melalui pelatihan dan seminar.</p>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab Kegiatan -->
                        <div class="tab-pane fade" id="kegiatan">
                            <h3 class="fw-bold mb-3">Galeri Kegiatan</h3>
                            <div class="row g-3">
                               <div class="col-md-4"><img src="https://via.placeholder.com/400?text=Kegiatan+1" class="img-fluid rounded"></div>
                               <div class="col-md-4"><img src="https://via.placeholder.com/400?text=Kegiatan+2" class="img-fluid rounded"></div>
                               <div class="col-md-4"><img src="https://via.placeholder.com/400?text=Kegiatan+3" class="img-fluid rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
