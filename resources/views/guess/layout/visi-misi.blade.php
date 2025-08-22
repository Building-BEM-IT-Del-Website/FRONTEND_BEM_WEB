@extends('guess.components.app')

@section('content')

    <!-- Hero Section Halaman Visi Misi -->
    <section class="hero-vision">
        <div class="container text-center">
            <p class="text-uppercase fw-bold text-del-primary-blue" data-aos="fade-down">Landasan Pergerakan</p>
            <h1 class="display-3 fw-bold text-del-dark" data-aos="fade-down" data-aos-delay="100">Visi & Misi</h1>
            <p class="lead text-del-text-muted mx-auto mt-3" style="max-width: 600px;" data-aos="fade-down"
                data-aos-delay="200">
                Arah, tujuan, dan nilai-nilai yang menjadi kompas perjuangan BEM IT Del Kabinet #SahatMarsada.
            </p>
        </div>
    </section>

    <!-- Section Visi -->
    <section class="py-5" style="margin-top: -5rem; position: relative; z-index: 2;">
        <div class="container">
            <div class="card card-vision" data-aos="fade-up">
                <div class="card-body">
                    <h2 class="fw-bold mb-3">VISI</h2>
                    <h1>"Menjadikan BEM IT Del sebagai <strong>wadah aspirasi</strong> yang <strong>proaktif, inovatif, dan
                            kolaboratif</strong>, serta mampu membawa nama baik Institut Teknologi Del di kancah nasional
                        maupun internasional melalui <strong>prestasi dan karya nyata</strong>."</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Misi -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold text-del-dark">Misi Kami</h2>
                <p class="text-muted">Langkah-langkah strategis untuk mencapai visi.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="card card-mission h-100">
                        <div class="mission-icon"><i class="bi bi-graph-up-arrow"></i></div>
                        <h5 class="mission-title">Kualitas SDM</h5>
                        <p class="text-muted small">Meningkatkan kualitas sumber daya mahasiswa melalui program pengembangan
                            diri yang terstruktur.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="card card-mission h-100">
                        <div class="mission-icon"><i class="bi bi-shield-check"></i></div>
                        <h5 class="mission-title">Pelayanan Advokasi</h5>
                        <p class="text-muted small">Mengoptimalkan pelayanan advokasi untuk menjamin kesejahteraan dan
                            hak-hak mahasiswa.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="card card-mission h-100">
                        <div class="mission-icon"><i class="bi bi-people"></i></div>
                        <h5 class="mission-title">Hubungan Sinergis</h5>
                        <p class="text-muted small">Membangun hubungan yang sinergis dan kolaboratif dengan seluruh elemen
                            internal maupun eksternal kampus.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="card card-mission h-100">
                        <div class="mission-icon"><i class="bi bi-lightbulb"></i></div>
                        <h5 class="mission-title">Inovasi & Prestasi</h5>
                        <p class="text-muted small">Mendorong terciptanya inovasi dan prestasi mahasiswa di berbagai bidang,
                            baik akademik maupun non-akademik.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Nilai-Nilai -->
    <section class="py-5 bg-del-light-gray">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold text-del-dark">Nilai-Nilai Kabinet</h2>
                <p class="text-muted">Pilar yang menopang setiap langkah kami.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-value h-100">
                        <div class="value-icon"><i class="bi bi-shield-lock"></i></div>
                        <h5 class="value-title">Integritas</h5>
                        <p class="text-muted small">Menjunjung tinggi kejujuran dan etika dalam setiap tindakan.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-value h-100">
                        <div class="value-icon"><i class="bi bi-trophy"></i></div>
                        <h5 class="value-title">Profesional</h5>
                        <p class="text-muted small">Bekerja secara profesional, terstruktur, dan bertanggung jawab.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-value h-100">
                        <div class="value-icon"><i class="bi bi-heart-pulse"></i></div>
                        <h5 class="value-title">Kontributif</h5>
                        <p class="text-muted small">Memberikan kontribusi dan dampak positif bagi mahasiswa dan almamater.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-value h-100">
                        <div class="value-icon"><i class="bi bi-arrow-repeat"></i></div>
                        <h5 class="value-title">Adaptif</h5>
                        <p class="text-muted small">Mampu beradaptasi dengan perubahan dan tantangan yang ada.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
