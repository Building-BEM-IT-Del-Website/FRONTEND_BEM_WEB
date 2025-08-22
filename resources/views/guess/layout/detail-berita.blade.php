@extends('guess.components.app')

@section('content')

    <!-- Header Detail Berita dengan Gambar Utama -->
    <section class="detail-header text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    {{-- Kategori Berita --}}
                    <p class="text-uppercase fw-bold text-del-primary-blue" data-aos="fade-up">Akademik</p>

                    {{-- Judul Berita --}}
                    <h1 class="display-5 fw-bold text-del-dark" data-aos="fade-up" data-aos-delay="100">Program Bakti Sosial di Desa Binaan Toba Samosir</h1>

                    {{-- Meta Data --}}
                    <div class="post-meta mt-3" data-aos="fade-up" data-aos-delay="200">
                        <span><i class="bi bi-person-fill me-2"></i>Oleh: Tim Kominfo BEM</span>
                        <span><i class="bi bi-calendar-event me-2"></i>Dipublikasikan pada 10 Agustus 2024</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gambar Utama Berita -->
    <div class="container" style="margin-top: -50px; position: relative; z-index: 2;">
        <div class="row justify-content-center">
            <div class="col-lg-10" data-aos="fade-up" data-aos-delay="300">
                <img src="https://via.placeholder.com/1200x600/0078D4/ffffff?text=Webinar+Nasional" class="img-fluid rounded-3 shadow" alt="Program Bakti Sosial di Desa Binaan Toba Samosir">
            </div>
        </div>
    </div>

    <!-- Konten Berita & Sidebar -->
    <section class="py-5">
        <div class="container">
            <div class="row g-5 justify-content-center">
                <!-- Kolom Konten Utama -->
                <div class="col-lg-8">
                    <article class="detail-content" data-aos="fade-up">
                        <p class="lead">Badan Eksekutif Mahasiswa (BEM) Institut Teknologi Del kembali menunjukkan komitmennya dalam meningkatkan wawasan teknologi di kalangan mahasiswa dengan sukses menyelenggarakan Webinar Nasional Technopreneurship pada hari Sabtu, 10 Agustus 2024.</p>

                        <p>Acara yang diselenggarakan secara daring ini berhasil menarik antusiasme tinggi, dengan ratusan peserta yang terdiri dari mahasiswa IT Del dan berbagai universitas lain di seluruh Indonesia. Mengusung tema "Membangun Startup Inovatif di Era Digital 5.0", webinar ini bertujuan untuk memberikan bekal pengetahuan praktis bagi para calon technopreneur.</p>

                        <h3>Menghadirkan Pembicara Ahli</h3>
                        <p>Webinar ini menghadirkan dua pembicara ternama dari industri teknologi. Sesi pertama diisi oleh CEO sebuah startup ed-tech ternama yang berbagi pengalamannya dalam membangun bisnis dari nol, mulai dari validasi ide hingga mendapatkan pendanaan awal. Sesi kedua dilanjutkan oleh seorang Venture Capitalist yang memberikan tips-tips penting tentang apa yang dicari oleh investor pada sebuah startup.</p>

                        <blockquote>
                            <p class="fst-italic fs-5">"Kami ingin mahasiswa tidak hanya menjadi pengguna teknologi, tetapi juga pencipta teknologi yang memberikan solusi," ujar Ketua BEM dalam sambutannya.</p>
                        </blockquote>

                        <p>Sesi tanya jawab berlangsung sangat interaktif, menunjukkan betapa besarnya rasa ingin tahu para peserta. Diharapkan, acara seperti ini dapat terus memantik semangat inovasi dan kewirausahaan di kalangan mahasiswa IT Del.</p>
                    </article>
                </div>

                <!-- Kolom Sidebar (Opsional) -->
                <div class="col-lg-4">
                    <div class="info-box" data-aos="fade-left">
                        <h5 class="info-title">Berita Terbaru Lainnya</h5>
                        <div class="list-group list-group-flush">
                            <a href="#" class="list-group-item list-group-item-action">Program Bakti Sosial di Desa Binaan Toba Samosir</a>
                            <a href="#" class="list-group-item list-group-item-action">IT Del Juara Umum Pekan Olahraga Mahasiswa Daerah</a>
                            <a href="#" class="list-group-item list-group-item-action">Penyambutan Mahasiswa Baru Angkatan 2024</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
