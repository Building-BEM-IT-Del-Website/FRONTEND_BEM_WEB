@extends('guess.components.app')

@section('content')

    <!-- Header Detail Pengumuman -->
    <section class="detail-header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    {{-- Tipe Pengumuman Dinamis --}}
                    @php
                        // Mapping tipe ke warna badge
                        $badgeColors = [
                            'Penting' => 'bg-penting', 'Darurat' => 'bg-danger',
                            'Info' => 'bg-info', 'Reminder' => 'bg-warning',
                            'default' => 'bg-secondary'
                        ];
                        $badgeClass = $badgeColors[$pengumuman['tipe_pengumuman']] ?? $badgeColors['default'];
                    @endphp
                    <span class="badge {{ $badgeClass }} rounded-pill px-3 py-2 mb-3 fs-6" data-aos="fade-up">
                        {{ $pengumuman['tipe_pengumuman'] }}
                    </span>
                    
                    {{-- Judul Pengumuman Dinamis --}}
                    <h1 class="display-5 fw-bold text-del-dark" data-aos="fade-up" data-aos-delay="100">
                        {{ $pengumuman['nama_pengumuman'] }}
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Konten & Sidebar -->
    <section class="py-5">
        <div class="container">
            <div class="row g-5 justify-content-center">
                <!-- Kolom Konten Utama -->
                <div class="col-lg-7">
                    <article class="detail-content" data-aos="fade-up">
                        {{-- Deskripsi Dinamis (Mengizinkan HTML) --}}
                        {!! $pengumuman['deskripsi'] !!}
                    </article>
                </div>

                <!-- Kolom Sidebar Info -->
                <div class="col-lg-4">
                    <div class="info-box" data-aos="fade-left">
                        <h5 class="info-title">Detail Informasi</h5>

                        <!-- Kategori -->
                        @if (isset($pengumuman['kategori']))
                        <div class="info-item">
                            <div class="icon"><i class="bi bi-tag-fill"></i></div>
                            <div class="text">
                                <span class="label">Kategori</span>
                                <span class="value">{{ $pengumuman['kategori']['nama'] }}</span>
                            </div>
                        </div>
                        @endif

                        <!-- Diterbitkan oleh -->
                        @if (isset($pengumuman['pembuat']))
                        <div class="info-item">
                            <div class="icon"><i class="bi bi-person-check-fill"></i></div>
                            <div class="text">
                                <span class="label">Diterbitkan oleh</span>
                                <span class="value">{{ $pengumuman['pembuat']['nama'] }}</span>
                            </div>
                        </div>
                        @endif

                        <!-- Pihak Terkait (Ormawa) -->
                        @if (isset($pengumuman['ormawa']))
                        <div class="info-item">
                            <div class="icon"><i class="bi bi-building"></i></div>
                            <div class="text">
                                <span class="label">Pihak Terkait</span>
                                <span class="value">{{ $pengumuman['ormawa']['nama'] }}</span>
                            </div>
                        </div>
                        @endif

                        <!-- Tanggal Berlaku -->
                        @if ($pengumuman['tanggal_mulai'])
                        <div class="info-item">
                            <div class="icon"><i class="bi bi-calendar-range"></i></div>
                            <div class="text">
                                <span class="label">Tanggal Berlaku</span>
                                <span class="value">
                                    {{ \Carbon\Carbon::parse($pengumuman['tanggal_mulai'])->translatedFormat('d M Y') }}
                                    @if ($pengumuman['tanggal_berakhir'])
                                        - {{ \Carbon\Carbon::parse($pengumuman['tanggal_berakhir'])->translatedFormat('d M Y') }}
                                    @endif
                                </span>
                            </div>
                        </div>
                        @endif

                        <!-- Lampiran (file_paths) -->
                        @if (!empty($pengumuman['file_paths']))
                            <div class="info-item">
                                <div class="icon"><i class="bi bi-paperclip"></i></div>
                                <div class="text">
                                    <span class="label">Lampiran</span>

                                    {{-- Loop langsung pada array yang berisi path file --}}
                                    @foreach ($pengumuman['file_paths'] as $filePath)
                                        <a href="{{ Storage::url($filePath) }}" target="_blank" class="value d-block">
                                            <i class="bi bi-file-earmark-arrow-down"></i> 

                                            {{-- Gunakan fungsi basename() untuk mengambil nama file dari path lengkap --}}
                                            {{ basename($filePath) }}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection