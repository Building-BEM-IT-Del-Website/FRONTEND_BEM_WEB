@extends('guess.components.app')

@section('content')

    <!-- Hero Section -->
    <section id="beranda" class="hero-section-v2">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <p class="text-uppercase fw-bold text-del-primary-blue mb-2" data-aos="fade-right">KABINET #SAHATMARSADA
                    </p>
                    <h1 class="display-3 text-del-dark" data-aos="fade-right" data-aos-delay="100">Sinergi dalam Aksi,
                        Unggul dalam Karya.</h1>
                    <p class="lead text-del-text-muted my-4" data-aos="fade-right" data-aos-delay="200">
                        Selamat datang di laman resmi Badan Eksekutif Mahasiswa Institut Teknologi Del. Wadah aspirasi,
                        inovasi, dan kolaborasi untuk seluruh mahasiswa.
                    </p>
                    <div data-aos="fade-right" data-aos-delay="300">
                        <a href="#aspirasi" class="btn btn-lg btn-warning rounded-pill fw-bold px-4 py-3">Sampaikan Aspirasi
                            <i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image-wrapper" data-aos="fade-left" data-aos-delay="200">
                        <img src="{{ asset('guest/assets/bem.png') }}" class="img-fluid shadow-sm"
                            alt="Foto Kabinet BEM IT Del">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Visi & Misi Ringkas -->
    <section id="visi-misi" class="py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold text-del-dark">Visi & Misi</h2>
                <p class="text-muted">Arah dan tujuan perjuangan kami.</p>
            </div>
            <div class="row g-4 align-items-stretch">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="card h-100 shadow-sm border-start border-5 border-del-primary-blue p-4">
                        <div class="card-body">
                            <h3 class="card-title h2 fw-bold text-del-primary-blue mb-3">Visi</h3>
                            <p class="card-text text-muted">"Menjadikan BEM IT Del sebagai wadah aspirasi yang proaktif,
                                inovatif, dan kolaboratif, serta mampu membawa nama baik Institut Teknologi Del di kancah
                                nasional maupun internasional."</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <div class="card h-100 shadow-sm border-start border-5 border-warning-subtle p-4">
                        <div class="card-body ">
                            <h3 class="card-title h2 fw-bold text-warning-emphasis mb-3">Misi</h3>
                            <ul class="list-unstyled text-muted">
                                <li class="mb-2"><i
                                        class="bi bi-check-circle-fill text-del-primary-blue me-2"></i>Meningkatkan kualitas
                                    sumber daya mahasiswa.</li>
                                <li class="mb-2"><i
                                        class="bi bi-check-circle-fill text-del-primary-blue me-2"></i>Mengoptimalkan
                                    pelayanan advokasi mahasiswa.</li>
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-del-primary-blue me-2"></i>Membangun
                                    hubungan sinergis internal & eksternal.</li>
                                <li><i class="bi bi-check-circle-fill text-del-primary-blue me-2"></i>Mendorong inovasi dan
                                    prestasi mahasiswa.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5" data-aos="fade-up">
                <a href="/visi-misi" class="btn btn-outline-primary rounded-pill px-4">Lihat Lebih Detail</a>
            </div>
        </div>
    </section>

    <!-- Keluarga Organisasi Section (BARU) -->
    <section id="organisasi" class="py-5 bg-del-light-gray">
        <div class="container">
            <!-- Header Section -->
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold text-del-dark">Keluarga Organisasi</h2>
                <p class="text-muted">Didukung dan bekerja sama dengan seluruh Himpunan Mahasiswa dan Unit Kegiatan
                    Mahasiswa di IT Del.</p>
            </div>

            <!-- Marquee Logo -->
            <div class="partner-marquee" data-aos="fade-up">
                <div class="partner-track">
                    {{-- NANTINYA LOGO INI AKAN DIAMBIL DARI DATABASE --}}

                    {{-- Set 1 --}}
                    <img src="{{ asset('guest/assets/logo.png') }}" class="partner-logo" alt="Logo Ormawa 1">
                    <img src="{{ asset('guest/assets/logo.png') }}" class="partner-logo" alt="Logo Ormawa 2">
                    <img src="{{ asset('guest/assets/logo.png') }}" class="partner-logo" alt="Logo Ormawa 3">
                    <img src="{{ asset('guest/assets/logo.png') }}" class="partner-logo" alt="Logo Ormawa 4">
                    <img src="{{ asset('guest/assets/logo.png') }}" class="partner-logo" alt="Logo Ormawa 5">
                    <img src="{{ asset('guest/assets/logo.png') }}" class="partner-logo" alt="Logo Ormawa 6">
                    <img src="{{ asset('guest/assets/logo.png') }}" class="partner-logo" alt="Logo Ormawa 7">

                    {{-- Set 2 (Duplikat untuk animasi loop yang mulus) --}}
                    <img src="{{ asset('guest/assets/logo.png') }}" class="partner-logo" alt="Logo Ormawa 1">
                    <img src="{{ asset('guest/assets/logo.png') }}" class="partner-logo" alt="Logo Ormawa 2">
                    <img src="{{ asset('guest/assets/logo.png') }}" class="partner-logo" alt="Logo Ormawa 3">
                    <img src="{{ asset('guest/assets/logo.png') }}" class="partner-logo" alt="Logo Ormawa 4">
                    <img src="{{ asset('guest/assets/logo.png') }}" class="partner-logo" alt="Logo Ormawa 5">
                    <img src="{{ asset('guest/assets/logo.png') }}" class="partner-logo" alt="Logo Ormawa 6">
                    <img src="{{ asset('guest/assets/logo.png') }}" class="partner-logo" alt="Logo Ormawa 7">
                </div>
            </div>

            <div class="text-center mt-5" data-aos="fade-up">
                <a href="/organisasi" class="btn btn-outline-primary rounded-pill px-4">Lihat Semua Organisasi</a>
            </div>
        </div>
    </section>


    <!-- Berita Terkini Section (BARU) -->
    <section id="berita" class="py-5 bg-del-light-gray">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold text-del-dark">Berita & Kegiatan Terkini</h2>
                <p class="text-muted">Ikuti perkembangan terbaru dari BEM IT Del.</p>
            </div>
            <div class="row g-4">
                {{-- Data Berita ini nantinya akan diambil dari database --}}
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card shadow-sm h-100">
                        <img src="https://via.placeholder.com/600x400/0078D4/ffffff?text=Kegiatan+BEM" class="card-img-top"
                            alt="Berita 1">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">BEM IT Del Sukses Gelar Webinar Nasional Technopreneurship</h5>
                            <p class="card-text text-muted small flex-grow-1">Acara ini menghadirkan pembicara ahli dari
                                industri dan diikuti oleh ratusan mahasiswa dari seluruh Indonesia.</p>
                            <a href="/detail-berita" class="btn btn-sm btn-primary mt-3 align-self-start">Baca
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card shadow-sm h-100">
                        <img src="https://via.placeholder.com/600x400/0078D4/ffffff?text=Kegiatan+BEM" class="card-img-top"
                            alt="Berita 2">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">Program Bakti Sosial di Desa Binaan Toba Samosir</h5>
                            <p class="card-text text-muted small flex-grow-1">BEM IT Del kembali menunjukkan kepeduliannya
                                melalui program pengabdian masyarakat dengan fokus pada literasi digital.</p>
                            <a href="#" class="btn btn-sm btn-primary mt-3 align-self-start">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card shadow-sm h-100">
                        <img src="https://via.placeholder.com/600x400/0078D4/ffffff?text=Kegiatan+BEM" class="card-img-top"
                            alt="Berita 3">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">IT Del Juara Umum Pekan Olahraga Mahasiswa Daerah</h5>
                            <p class="card-text text-muted small flex-grow-1">Kontingen mahasiswa IT Del berhasil membawa
                                pulang gelar juara umum setelah mendominasi beberapa cabang olahraga.</p>
                            <a href="#" class="btn btn-sm btn-primary mt-3 align-self-start">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5" data-aos="fade-up">
                <a href="/berita" class="btn btn-outline-primary rounded-pill px-4">Lihat Semua Berita</a>
            </div>
        </div>
    </section>

    <!-- Pengumuman & Kalender Section (BARU) -->
    <section id="info-penting" class="py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Kolom Pengumuman -->
                <div class="col-lg-7" data-aos="fade-right">
                    <h2 class="display-6 fw-bold text-del-dark mb-4">Pengumuman Terbaru</h2>
                    <div class="list-group">

                        {{-- Loop data Pengumuman dari Controller --}}
                        @forelse ($pengumuman as $item)
                            <a href="/detail-pengumuman/{{ $item['id'] }}" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1 fw-bold">{{ $item['nama_pengumuman'] }}</h6>
                                    {{-- Menggunakan Carbon untuk format tanggal yang user-friendly --}}
                                    <small
                                        class="text-muted">{{ \Carbon\Carbon::parse($item['created_at'])->diffForHumans() }}</small>
                                </div>
                                <p class="mb-1 small text-muted">{{ Str::limit($item['deskripsi'], 100) }}</p>
                            </a>
                        @empty
                            <div class="alert alert-info">Belum ada pengumuman terbaru.</div>
                        @endforelse

                    </div>
                    <a href="/pengumuman" class="btn btn-outline-primary rounded-pill px-4 mt-4">Semua Pengumuman</a>
                </div>

                <!-- Kolom Kalender -->
                <div class="col-lg-5" data-aos="fade-left">
                    <h2 class="display-6 fw-bold text-del-dark mb-4">Agenda Terdekat</h2>
                    <div class="card shadow-sm">
                        <div class="card-body p-4 agenda-list">

                            {{-- Loop data Agenda dari Controller --}}
                            @forelse ($agenda as $event)
                                <div class="agenda-item">
                                    <div class="agenda-date">
                                        {{-- Menggunakan kolom 'tanggal_mulai' dari model Pengumuman --}}
                                        <span
                                            class="day">{{ \Carbon\Carbon::parse($event['tanggal_mulai'])->format('d') }}</span>
                                        <span
                                            class="month">{{ \Carbon\Carbon::parse($event['tanggal_mulai'])->translatedFormat('M') }}</span>
                                    </div>
                                    <div class="agenda-info">
                                        {{-- Menggunakan kolom 'nama_pengumuman' sebagai judul agenda --}}
                                        <div class="title">{{ $event['nama_pengumuman'] }}</div>
                                        {{-- Menggunakan kolom 'tanggal_mulai' untuk menampilkan waktu --}}
                                        <div class="time"><i class="bi bi-clock me-1"></i>
                                            {{ \Carbon\Carbon::parse($event['tanggal_mulai'])->format('H:i') }} - Selesai</div>
                                    </div>
                                </div>
                            @empty
                                <div class="text-center text-muted p-3">Tidak ada agenda terdekat.</div>
                            @endforelse

                        </div>
                    </div>
                    <a href="/kalender" class="btn btn-outline-primary rounded-pill px-4 mt-4">Lihat Kalender Lengkap</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Aspirasi Section -->
    <section id="aspirasi" class="py-5 bg-dark text-white">
        <div class="container">
            {{-- ... header section ... --}}
            <div class="row g-4 g-lg-5 align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                    <div class="scrolling-columns-container">

                        {{-- Kolom 1 --}}
                        <div class="scrolling-column">
                            @forelse ($aspirasiColumns[0] ?? [] as $item)
                                <div class="card p-3 shadow-sm border-0 bg-white text-dark">
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold">{{ $item['judul'] }}</h5>
                                        <p class="card-text text-muted small">"{{ $item['deskripsi'] }}"</p>
                                        <hr>
                                        <div class="d-flex align-items-center mt-2">
                                            <img src="https://ui-avatars.com/api/?name={{ urlencode($item['nama']) }}&background=random"
                                                class="rounded-circle me-3" alt="Foto">
                                            <small class="fw-bold">{{ $item['nama'] }}</small>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                {{-- Kosongkan saja jika tidak ada data di kolom ini --}}
                            @endforelse
                        </div>

                        {{-- Kolom 2 --}}
                        <div class="scrolling-column">
                            @forelse ($aspirasiColumns[1] ?? [] as $item)
                                <div class="card p-3 shadow-sm border-0 bg-white text-dark">
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold">{{ $item['judul'] }}</h5>
                                        <p class="card-text text-muted small">"{{ $item['deskripsi'] }}"</p>
                                        <hr>
                                        <div class="d-flex align-items-center mt-2">
                                            <img src="https://ui-avatars.com/api/?name={{ urlencode($item['nama']) }}&background=random"
                                                class="rounded-circle me-3" alt="Foto">
                                            <small class="fw-bold">{{ $item['nama'] }}</small>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                {{-- Kosongkan saja jika tidak ada data di kolom ini --}}
                            @endforelse
                        </div>

                    </div>
                </div>

                <div class="col-lg-5" data-aos="fade-left" data-aos-delay="100">
                    <div class="card p-4 shadow-sm border-0">
                        <div class="card-body text-dark">
                            <h4 class="fw-bold text-del-dark mb-3">Sampaikan Aspirasimu</h4>

                            {{-- Menampilkan pesan sukses atau error --}}
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif

                            <p class="text-muted small mb-4">Setiap masukan Anda sangat berharga.</p>

                            {{-- Form diupdate di sini --}}
                            <form action="{{ route('storeAspirasi') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="namaAspiran" class="form-label fw-semibold">Nama Anda</label>
                                    <input type="text" class="form-control" id="namaAspiran" name="nama"
                                        placeholder="Contoh: Budi Santoso" required>
                                </div>

                                {{-- PASTIKAN INPUT INI MEMILIKI name="judul" --}}
                                <div class="mb-3">
                                    <label for="judulAspirasi" class="form-label fw-semibold">Judul Aspirasi</label>
                                    <input type="text" class="form-control" id="judulAspirasi" name="judul"
                                        placeholder="Contoh: Program Bermanfaat" required>
                                </div>

                                {{-- PASTIKAN TEXTAREA INI MEMILIKI name="deskripsi" --}}
                                <div class="mb-3">
                                    <label for="deskripsiAspirasi" class="form-label fw-semibold">Aspirasi atau
                                        Masukan</label>
                                    <textarea class="form-control" id="deskripsiAspirasi" name="deskripsi" rows="4"
                                        placeholder="Tuliskan masukan Anda di sini..." required></textarea>
                                </div>

                                <button type="submit" class="btn btn-warning w-100 fw-bold py-2">Kirim Aspirasi</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection