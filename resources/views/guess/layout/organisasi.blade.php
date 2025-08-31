@extends('guess.components.app')

@section('content')

    <!-- Hero Section Halaman Organisasi -->
    <section class="hero-organisasi py-5">
        <div class="container text-center py-5">
            <p class="text-uppercase fw-bold" data-aos="fade-down">Kehidupan Kampus</p>
            <h1 class="display-3 fw-bold text-white" data-aos="fade-down" data-aos-delay="100">Dinamika <span class="highlight">Organisasi</span> Mahasiswa</h1>
            <p class="lead text-white-50 mx-auto mt-3" style="max-width: 700px;" data-aos="fade-down" data-aos-delay="200">
                Temukan wadah untuk mengembangkan profesionalisme, minat, dan bakat Anda melalui berbagai Himpunan Mahasiswa dan Unit Kegiatan Mahasiswa di IT Del.
            </p>
        </div>
    </section>

    <!-- Navigasi Cepat -->
    <section class="py-4 text-center sticky-top bg-white shadow-sm">
        <div class="container">
            <a href="#himpunan" class="btn btn-outline-primary rounded-pill px-4 mx-2">Himpunan Mahasiswa</a>
            <a href="#ukm" class="btn btn-outline-primary rounded-pill px-4 mx-2">Unit Kegiatan Mahasiswa (UKM)</a>
        </div>
    </section>

    <!-- Daftar Himpunan Mahasiswa -->
    <section id="himpunan" class="py-5 bg-del-light-gray">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold text-del-dark">Himpunan Mahasiswa</h2>
                <p class="text-muted">Organisasi kemahasiswaan berbasis program studi untuk pengembangan akademik dan profesional.</p>
            </div>
            <div class="row g-4 justify-content-center">
                @forelse ($himpunan as $org)
                    <div class="col-md-6 col-lg-4" data-aos="fade-up">
                        <div class="card card-organisasi h-100 shadow-sm">
                            <div class="card-body text-center p-4 d-flex flex-column">
                                <img src="{{ Storage::url($org['logo']) }}" class="card-logo mx-auto mb-3" alt="Logo {{ $org['nama'] }}" style="height: 80px; width: 80px; object-fit: contain;">
                                <h5 class="card-title fw-bold">{{ $org['nama'] }}</h5>
                                <p class="card-text text-muted small flex-grow-1">{{ Str::limit($org['deskripsi'], 120) }}</p>
                                <a href="{{ route('organisasi.show', $org['id']) }}" class="btn btn-primary rounded-pill px-4 mt-3">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center text-muted" data-aos="fade-up">
                        <p>Data himpunan mahasiswa belum tersedia saat ini.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Daftar Unit Kegiatan Mahasiswa (UKM) -->
    <section id="ukm" class="py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold text-del-dark">Unit Kegiatan Mahasiswa</h2>
                <p class="text-muted">Wadah kreativitas, minat, dan bakat mahasiswa di luar lingkup akademik.</p>
            </div>
            <div class="row g-4 justify-content-center">
                @forelse ($ukm as $org)
                    <div class="col-md-6 col-lg-4" data-aos="fade-up">
                        <div class="card card-organisasi h-100 shadow-sm">
                            <div class="card-body text-center p-4 d-flex flex-column">
                                <img src="{{ Storage::url($org['logo']) }}" class="card-logo mx-auto mb-3" alt="Logo {{ $org['nama'] }}" style="height: 80px; width: 80px; object-fit: contain;">
                                <h5 class="card-title fw-bold">{{ $org['nama'] }}</h5>
                                <p class="card-text text-muted small flex-grow-1">{{ Str::limit($org['deskripsi'], 120) }}</p>
                                <a href="{{ route('organisasi.show', $org['id']) }}" class="btn btn-primary rounded-pill px-4 mt-3">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center text-muted" data-aos="fade-up">
                        <p>Data Unit Kegiatan Mahasiswa belum tersedia saat ini.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

@endsection