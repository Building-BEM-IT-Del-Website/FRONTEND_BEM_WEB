<!-- Main sidebar -->
<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

    <!-- Sidebar header -->
    <div class="sidebar-section border-bottom border-bottom-white border-opacity-10" style="background-color: #1E3A8A;">
        <div class="sidebar-logo d-flex justify-content-center align-items-center">
            <a href="{{ route('dashboard') }}" class="d-inline-flex align-items-center py-2">
                <img src="http://127.0.0.1:8000/storage/ormawas/Logo-BEM-IT-Del.png" class="sidebar-logo-icon"
                    alt="">
                <span class="sidebar-resize-hide ms-3"
                    style="color: white; font-weight: bold; font-size: 14px;">BEM</span>
            </a>

            <div class="sidebar-resize-hide ms-auto">
                <button type="button"
                    class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                    <i class="ph-arrows-left-right"></i>
                </button>
                <button type="button"
                    class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
                    <i class="ph-x"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- /sidebar header -->

    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- Customers -->
        @if (isset($authUser) && $authUser->roles[0] == 'mahasiswa')

            <div class="sidebar-section sidebar-resize-hide dropdown mx-2">
                <a href="#" class="btn btn-link text-body text-start lh-1 dropdown-toggle p-2 my-1 w-100"
                    data-bs-toggle="dropdown" data-color-theme="dark">
                    <div class="hstack gap-2 flex-grow-1 my-1">
                        <img src="{{ asset('assets/images/brands/org.png') }}"
                            class="w-32px h-32px rounded-circle border" alt="org">
                        <div class="me-auto">
                            <div class="fs-sm text-white opacity-75 mb-1">Pilih</div>
                            <div class="fw-semibold">Organisasi Anda</div>
                        </div>
                    </div>
                </a>

                <div class="dropdown-menu w-100 shadow-lg border-0 rounded-2 p-2">
                    @forelse($authUser->struktur_organisasi ?? [] as $struktur)
                        <a href="{{ url('/organisasi/' . $struktur['ormawa']['id']) }}"
                            class="dropdown-item hstack gap-2 py-2 {{ $struktur['status'] === 'active' ? 'active bg-primary text-white' : '' }}">
                            <img src="{{ $struktur['ormawa']['logo'] ?? asset('assets/images/brands/default.png') }}"
                                class="w-32px h-32px rounded-circle border" alt="logo">

                            <div>
                                <div class="fw-semibold">{{ $struktur['ormawa']['nama'] }}</div>
                                <div
                                    class="fs-sm {{ $struktur['status'] === 'active' ? 'text-white-50' : 'text-muted' }}">
                                    {{ $struktur['jabatan']['nama'] ?? '-' }} • {{ $struktur['periode'] ?? '' }}
                                </div>
                            </div>
                        </a>
                    @empty
                        <div class="dropdown-item text-muted text-center">Tidak ada organisasi</div>
                    @endforelse
                </div>
            </div>

        @endif
        <!-- /customers -->

        <!-- Main navigation -->
        <div class="sidebar-section">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Main</div>
                    <i class="ph-dots-three sidebar-resize-show"></i>
                </li>

                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link active">
                        <i class="ph-house"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="ph-database"></i>
                        <span>Master Data</span>
                    </a>
                    <ul class="nav-group-sub collapse">
                        <li class="nav-item"><a href="{{route('jenis-ormawas.index')}}" class="nav-link"><i class="ph-list"></i> Jenis Ormawa</a>
                        </li>
                        <li class="nav-item"><a href="{{route('ormawas.index')}}" class="nav-link"><i class="ph-buildings"></i> Ormawa</a>
                        </li>
                        <li class="nav-item"><a href="{{route('jabatans.index')}}" class="nav-link"><i class="ph-briefcase"></i> Jabatan</a>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link"><i class="ph-hierarchy"></i> Struktur
                                Organisasi</a></li>
                        <li class="nav-item"><a href="#" class="nav-link"><i class="ph-share-network"></i> Jenis
                                Sosial Media</a></li>
                        <li class="nav-item"><a href="#" class="nav-link"><i class="ph-globe"></i> Sosial
                                Media</a></li>
                    </ul>
                </li>

                <li class="nav-item"><a href="#" class="nav-link"><i class="ph-megaphone"></i>
                        <span>Pengumuman</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="ph-newspaper"></i>
                        <span>Berita</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="ph-calendar"></i>
                        <span>Agenda</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="ph-image-square"></i>
                        <span>Galeri</span></a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="ph-chat-circle-text"></i>
                        <span>Aspirasi</span></a></li>

                <!-- Setting -->
                <li class="nav-item-header">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Setting</div>
                    <i class="ph-dots-three sidebar-resize-show"></i>
                </li>

                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="ph-user-gear"></i>
                        <span>User</span>
                    </a>
                    <ul class="nav-group-sub collapse">
                        <li class="nav-item"><a href="#" class="nav-link"><i class="ph-layout"></i> Navigation
                                styles</a></li>
                        <li class="nav-item"><a href="#" class="nav-link"><i class="ph-cube"></i> Navigation
                                elements</a></li>
                        <li class="nav-item"><a href="#" class="nav-link"><i class="ph-tabs"></i> Tabbed
                                navigation</a></li>
                        <li class="nav-item"><a href="#" class="nav-link"><i class="ph-x-circle"></i> Disabled
                                links</a></li>
                        <li class="nav-item"><a href="#" class="nav-link"><i class="ph-rows"></i> Horizontal
                                mega menu</a></li>
                    </ul>
                </li>

                <!-- Logout -->
                <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link text-danger" id="btn-logout">
                        <i class="ph-sign-out"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- /main navigation -->
    </div>
    <!-- /sidebar content -->

</div>
