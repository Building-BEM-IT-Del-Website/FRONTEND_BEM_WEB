@extends('guess.components.app')

@section('content')

    <!-- Hero Section dengan Potongan Diagonal -->
    <section class="hero-angled">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <p class="text-uppercase fw-bold" data-aos="fade-down">Informasi Penting</p>
                    <h1 class="display-3 fw-bold text-white" data-aos="fade-down" data-aos-delay="100">Papan <span
                            class="highlight">Pengumuman</span></h1>
                    <p class="lead text-white-50 mt-3" data-aos="fade-down" data-aos-delay="200">
                        Pusat informasi dan pengumuman resmi dari Badan Eksekutif Mahasiswa Institut Teknologi Del.
                    </p>
                </div>
            </div>
        </div>
    </section>
        @php
        // Definisikan mapping ikon (tidak berubah)
        $categoryIcons = [
            'Event' => 'bi-calendar-check', 'Rekrutmen' => 'bi-people-fill',
            'Beasiswa' => 'bi-award-fill', 'Akademik' => 'bi-mortarboard-fill',
            'Umum' => 'bi-info-circle-fill', 'default' => 'bi-megaphone-fill'
        ];
    @endphp

    <!-- Konten dengan Layout Dua Kolom -->
    <section class="py-5 bg-del-light-gray">
        <div class="container">
            <div class="row g-5">
                <!-- Kolom Utama: Daftar Pengumuman -->
                <div class="col-lg-8">

                    @if(request()->has('year') && request()->has('month'))
                        @php
                            $activeArchiveDate = \Carbon\Carbon::createFromDate(request('year'), request('month'), 1);
                        @endphp
                        <div class="alert alert-info mb-4" data-aos="fade-up">
                            Menampilkan arsip untuk: <strong>{{ $activeArchiveDate->translatedFormat('F Y') }}</strong>
                        </div>
                    @elseif(request()->has('search'))
                        <div class="alert alert-info mb-4" data-aos="fade-up">
                            Hasil pencarian untuk: <strong>"{{ request('search') }}"</strong>
                        </div>
                    @endif

                    {{-- daftar pengumuman dan pagination --}}
                    <div class="list-group announcement-list">
                        @forelse ($pengumumanData['data'] ?? [] as $item)
                            <a href="/detail-pengumuman/{{ $item['id'] }}" class="list-group-item list-group-item-action p-4" data-aos="fade-up">
                                <div class="d-flex align-items-center">
                                    <div class="announcement-icon me-3">
                                        @php
                                            $categoryName = $item['kategori']['nama_kategori'] ?? 'default';
                                            $iconClass = $categoryIcons[$categoryName] ?? $categoryIcons['default'];
                                        @endphp
                                        <i class="bi {{ $iconClass }}"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1 fw-bold">{{ $item['nama_pengumuman'] }}</h5>
                                            <small class="text-muted d-none d-md-block">{{ \Carbon\Carbon::parse($item['created_at'])->diffForHumans() }}</small>
                                        </div>
                                        <p class="mb-1 text-muted">{{ Str::limit($item['deskripsi'], 150) }}</p>
                                    </div>
                                </div>
                            </a>
                        @empty
                            <div class="alert alert-warning">Tidak ada pengumuman yang cocok dengan kriteria Anda.</div>
                        @endforelse
                    </div>

                    @if (!empty($pengumumanData['links']))
                        <nav class="mt-5 d-flex justify-content-center" data-aos="fade-up">
                            <ul class="pagination shadow-sm">
                                @foreach ($pengumumanData['links'] as $link)
                                    @if ($link['url'] === null)
                                        <li class="page-item disabled"><span class="page-link">{!! $link['label'] !!}</span></li>
                                    @elseif ($link['active'])
                                        <li class="page-item active"><span class="page-link">{!! $link['label'] !!}</span></li>
                                    @else
                                        <li class="page-item"><a class="page-link" href="{{ $link['url'] }}">{!! $link['label'] !!}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </nav>
                    @endif

                </div>

                <!-- Kolom Sidebar -->
                <div class="col-lg-4">
                    <div class="sidebar-widget" data-aos="fade-left">
                    <h5 class="widget-title">Cari Pengumuman</h5>
        <form method="GET" action="{{ route('halamanPengumuman') }}">
            {{-- Dibungkus dengan .input-group untuk menyatukan elemen --}}
            <div class="input-group">
                <input 
                    class="form-control" 
                    type="search" 
                    name="search" 
                    placeholder="Ketik kata kunci..." 
                    value="{{ e(request('search')) }}" 
                    aria-label="Cari Pengumuman"
                >
                
                {{-- Tombol Cari --}}
                <button class="btn btn-primary" type="submit" title="Cari">
                    <i class="bi bi-search"></i>
                </button>
        
                {{-- Tombol Hapus Filter (di dalam group) --}}
                @if(request()->has('search') || request()->has('year'))
                    <a href="{{ route('halamanPengumuman') }}" class="btn btn-outline-secondary" title="Hapus Filter">
                        {{-- Menggunakan ikon 'X' yang lebih intuitif untuk "clear" --}}
                        <i class="bi bi-x-lg"></i>
                    </a>
                @endif
            </div>
        </form>
</div>

                    <!-- Widget Arsip Dinamis -->
                    <div class="sidebar-widget" data-aos="fade-left" data-aos-delay="100">
                        <h5 class="widget-title">Arsip</h5>
                        <div class="list-group list-group-flush archive-list">
                            @forelse ($archives as $archive)
                                @php
                                    $date = \Carbon\Carbon::createFromDate($archive['year'], $archive['month'], 1);
                                @endphp
                                <a href="{{ route('halamanPengumuman', ['year' => $archive['year'], 'month' => $archive['month']]) }}" class="list-group-item list-group-item-action">
                                   {{ $date->translatedFormat('F Y') }}
                                </a>
                            @empty
                                <p class="list-group-item text-muted">Belum ada arsip.</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection