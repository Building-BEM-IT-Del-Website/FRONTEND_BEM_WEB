@extends('admin.layout.main')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 text-gradient fw-bold">Dashboard BEM IT DEL</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active text-primary fw-semibold">#SahatMarsada</li>
    </ol>

    <!-- Statistik Cards dengan Gradient -->
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card gradient-primary text-white shadow-lg h-100 py-3 card-hover">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <div class="fs-3 fw-bold counter" data-target="120">0</div>
                        <div class="fs-6">Jumlah Struktur</div>
                    </div>
                    <div class="icon-circle bg-white bg-opacity-20">
                        <i class="fas fa-users fa-2x text-white"></i>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-0">
                    <small class="text-white-50">
                        <i class="fas fa-arrow-up me-1"></i>
                        +12% dari bulan lalu
                    </small>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card gradient-success text-white shadow-lg h-100 py-3 card-hover">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <div class="fs-3 fw-bold counter" data-target="25">0</div>
                        <div class="fs-6">Jumlah Ormawa</div>
                    </div>
                    <div class="icon-circle bg-white bg-opacity-20">
                        <i class="fas fa-building fa-2x text-white"></i>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-0">
                    <small class="text-white-50">
                        <i class="fas fa-arrow-up me-1"></i>
                        +2 ormawa baru
                    </small>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card gradient-warning text-white shadow-lg h-100 py-3 card-hover">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <div class="fs-3 fw-bold counter" data-target="8">0</div>
                        <div class="fs-6">Jenis Ormawa</div>
                    </div>
                    <div class="icon-circle bg-white bg-opacity-20">
                        <i class="fas fa-layer-group fa-2x text-white"></i>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-0">
                    <small class="text-white-50">
                        <i class="fas fa-check me-1"></i>
                        Lengkap
                    </small>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card gradient-danger text-white shadow-lg h-100 py-3 card-hover">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <div class="fs-3 fw-bold counter" data-target="350">0</div>
                        <div class="fs-6">Jumlah User</div>
                    </div>
                    <div class="icon-circle bg-white bg-opacity-20">
                        <i class="fas fa-user-friends fa-2x text-white"></i>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-0">
                    <small class="text-white-50">
                        <i class="fas fa-arrow-up me-1"></i>
                        +25 user aktif
                    </small>
                </div>
            </div>
        </div>
    </div>

    <!-- Row kedua statistik dengan gradient -->
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card gradient-info text-white shadow-lg h-100 py-3 card-hover">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <div class="fs-3 fw-bold counter" data-target="15">0</div>
                        <div class="fs-6">Jumlah Jabatan</div>
                    </div>
                    <div class="icon-circle bg-white bg-opacity-20">
                        <i class="fas fa-briefcase fa-2x text-white"></i>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-0">
                    <small class="text-white-50">
                        <i class="fas fa-users-cog me-1"></i>
                        Aktif semua
                    </small>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card gradient-secondary text-white shadow-lg h-100 py-3 card-hover">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <div class="fs-3 fw-bold counter" data-target="10">0</div>
                        <div class="fs-6">Pengumuman</div>
                    </div>
                    <div class="icon-circle bg-white bg-opacity-20">
                        <i class="fas fa-bullhorn fa-2x text-white"></i>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-0">
                    <small class="text-white-50">
                        <i class="fas fa-clock me-1"></i>
                        3 baru hari ini
                    </small>
                </div>
            </div>
        </div>

        <!-- Tambahan kartu statistik baru -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card gradient-purple text-white shadow-lg h-100 py-3 card-hover">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <div class="fs-3 fw-bold counter" data-target="45">0</div>
                        <div class="fs-6">Kegiatan Bulan Ini</div>
                    </div>
                    <div class="icon-circle bg-white bg-opacity-20">
                        <i class="fas fa-calendar-alt fa-2x text-white"></i>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-0">
                    <small class="text-white-50">
                        <i class="fas fa-trending-up me-1"></i>
                        +18% dari target
                    </small>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card gradient-teal text-white shadow-lg h-100 py-3 card-hover">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <div class="fs-3 fw-bold counter" data-target="89">0</div>
                        <div class="fs-6">Tingkat Partisipasi (%)</div>
                    </div>
                    <div class="icon-circle bg-white bg-opacity-20">
                        <i class="fas fa-chart-pie fa-2x text-white"></i>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-0">
                    <small class="text-white-50">
                        <i class="fas fa-thumbs-up me-1"></i>
                        Sangat baik
                    </small>
                </div>
            </div>
        </div>
    </div>

    <!-- Pengumuman dan Agenda dengan design yang lebih menarik -->
    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card shadow-lg border-0 card-modern">
                <div class="card-header gradient-primary text-white fw-bold py-3">
                    <i class="fas fa-bullhorn me-2"></i>
                    Pengumuman Terbaru
                </div>
                <div class="card-body p-0">
                    <div class="announcement-item p-3 border-bottom">
                        <div class="d-flex align-items-start">
                            <div class="announcement-icon bg-primary bg-opacity-10 rounded-circle p-2 me-3">
                                <i class="fas fa-users text-primary"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1 fw-semibold">Rapat Koordinasi BEM</h6>
                                <p class="mb-1 text-muted small">Besok jam 19.00 di Ruang Rapat BEM</p>
                                <small class="text-primary">2 jam yang lalu</small>
                            </div>
                        </div>
                    </div>
                    <div class="announcement-item p-3 border-bottom">
                        <div class="d-flex align-items-start">
                            <div class="announcement-icon bg-success bg-opacity-10 rounded-circle p-2 me-3">
                                <i class="fas fa-trophy text-success"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1 fw-semibold">Lomba Debat Antar Ormawa</h6>
                                <p class="mb-1 text-muted small">Pendaftaran sudah dibuka sampai 25 Agustus</p>
                                <small class="text-success">5 jam yang lalu</small>
                            </div>
                        </div>
                    </div>
                    <div class="announcement-item p-3">
                        <div class="d-flex align-items-start">
                            <div class="announcement-icon bg-warning bg-opacity-10 rounded-circle p-2 me-3">
                                <i class="fas fa-exclamation-triangle text-warning"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1 fw-semibold">Deadline Laporan Kegiatan</h6>
                                <p class="mb-1 text-muted small">Minggu depan adalah batas akhir pengumpulan</p>
                                <small class="text-warning">1 hari yang lalu</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-4">
            <div class="card shadow-lg border-0 card-modern">
                <div class="card-header gradient-success text-white fw-bold py-3">
                    <i class="fas fa-calendar-check me-2"></i>
                    Agenda Kegiatan
                </div>
                <div class="card-body p-0">
                    <div class="agenda-item p-3 border-bottom">
                        <div class="d-flex align-items-center">
                            <div class="date-circle bg-primary text-white rounded-circle text-center me-3">
                                <div class="fw-bold">20</div>
                                <small style="font-size: 0.7rem;">AUG</small>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1 fw-semibold">Seminar Nasional Teknologi</h6>
                                <small class="text-muted">
                                    <i class="fas fa-clock me-1"></i>08:00 - 16:00 WIB
                                </small>
                            </div>
                            <span class="badge bg-primary">Wajib</span>
                        </div>
                    </div>
                    <div class="agenda-item p-3 border-bottom">
                        <div class="d-flex align-items-center">
                            <div class="date-circle bg-success text-white rounded-circle text-center me-3">
                                <div class="fw-bold">25</div>
                                <small style="font-size: 0.7rem;">AUG</small>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1 fw-semibold">Malam Keakraban Ormawa</h6>
                                <small class="text-muted">
                                    <i class="fas fa-clock me-1"></i>19:00 - 22:00 WIB
                                </small>
                            </div>
                            <span class="badge bg-success">Optional</span>
                        </div>
                    </div>
                    <div class="agenda-item p-3">
                        <div class="d-flex align-items-center">
                            <div class="date-circle bg-warning text-white rounded-circle text-center me-3">
                                <div class="fw-bold">30</div>
                                <small style="font-size: 0.7rem;">AUG</small>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1 fw-semibold">Pelantikan Pengurus Baru</h6>
                                <small class="text-muted">
                                    <i class="fas fa-clock me-1"></i>10:00 - 12:00 WIB
                                </small>
                            </div>
                            <span class="badge bg-warning">Penting</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Grafik Statistik yang lebih menarik -->
    <div class="card shadow-lg border-0 mb-4 card-modern">
        <div class="card-header gradient-dark text-white fw-bold py-3">
            <i class="fas fa-chart-bar me-2"></i>
            Statistik Aktivitas Ormawa
        </div>
        <div class="card-body p-4">
            <canvas id="ormawaChart" width="100%" height="40"></canvas>
        </div>
    </div>

    <!-- Progress Ring untuk target bulanan -->
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card shadow-lg border-0 card-modern">
                <div class="card-header gradient-info text-white fw-bold py-3">
                    <i class="fas fa-target me-2"></i>
                    Target Pencapaian Bulanan
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-md-3 mb-3">
                            <div class="progress-ring mx-auto" data-progress="75">
                                <svg width="120" height="120">
                                    <circle class="progress-ring-circle" stroke="#e9ecef" stroke-width="8" fill="transparent" r="52" cx="60" cy="60"/>
                                    <circle class="progress-ring-bar" stroke="#4e73df" stroke-width="8" fill="transparent" r="52" cx="60" cy="60"/>
                                </svg>
                                <div class="progress-text">
                                    <span class="fs-4 fw-bold text-primary">75%</span>
                                    <br><small class="text-muted">Kegiatan</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="progress-ring mx-auto" data-progress="89">
                                <svg width="120" height="120">
                                    <circle class="progress-ring-circle" stroke="#e9ecef" stroke-width="8" fill="transparent" r="52" cx="60" cy="60"/>
                                    <circle class="progress-ring-bar" stroke="#1cc88a" stroke-width="8" fill="transparent" r="52" cx="60" cy="60"/>
                                </svg>
                                <div class="progress-text">
                                    <span class="fs-4 fw-bold text-success">89%</span>
                                    <br><small class="text-muted">Partisipasi</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="progress-ring mx-auto" data-progress="62">
                                <svg width="120" height="120">
                                    <circle class="progress-ring-circle" stroke="#e9ecef" stroke-width="8" fill="transparent" r="52" cx="60" cy="60"/>
                                    <circle class="progress-ring-bar" stroke="#f6c23e" stroke-width="8" fill="transparent" r="52" cx="60" cy="60"/>
                                </svg>
                                <div class="progress-text">
                                    <span class="fs-4 fw-bold text-warning">62%</span>
                                    <br><small class="text-muted">Anggaran</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="progress-ring mx-auto" data-progress="95">
                                <svg width="120" height="120">
                                    <circle class="progress-ring-circle" stroke="#e9ecef" stroke-width="8" fill="transparent" r="52" cx="60" cy="60"/>
                                    <circle class="progress-ring-bar" stroke="#36b9cc" stroke-width="8" fill="transparent" r="52" cx="60" cy="60"/>
                                </svg>
                                <div class="progress-text">
                                    <span class="fs-4 fw-bold text-info">95%</span>
                                    <br><small class="text-muted">Dokumentasi</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Gradient Backgrounds untuk Cards */
.gradient-primary {
    background: linear-gradient(135deg, #4e73df 0%, #224abe 100%) !important;
}

.gradient-success {
    background: linear-gradient(135deg, #1cc88a 0%, #13855c 100%) !important;
}

.gradient-warning {
    background: linear-gradient(135deg, #f6c23e 0%, #dda20a 100%) !important;
}

.gradient-danger {
    background: linear-gradient(135deg, #e74a3b 0%, #c0392b 100%) !important;
}

.gradient-info {
    background: linear-gradient(135deg, #36b9cc 0%, #258391 100%) !important;
}

.gradient-secondary {
    background: linear-gradient(135deg, #858796 0%, #5a5c69 100%) !important;
}

.gradient-purple {
    background: linear-gradient(135deg, #6f42c1 0%, #59359a 100%) !important;
}

.gradient-teal {
    background: linear-gradient(135deg, #20c997 0%, #17a2b8 100%) !important;
}

.gradient-dark {
    background: linear-gradient(135deg, #5a5c69 0%, #3a3b45 100%) !important;
}

/* Card Hover Effects */
.card-hover {
    transition: all 0.3s ease;
    border: none;
    border-radius: 15px;
}

.card-hover:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15) !important;
}

/* Icon Circle */
.icon-circle {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Modern Card Style */
.card-modern {
    border-radius: 15px;
    overflow: hidden;
}

/* Text Gradient */
.text-gradient {
    background: linear-gradient(135deg, #4e73df, #224abe);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

/* Date Circle */
.date-circle {
    width: 50px;
    height: 50px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    font-size: 0.8rem;
}

/* Progress Ring */
.progress-ring {
    position: relative;
    display: inline-block;
}

.progress-ring svg {
    transform: rotate(-90deg);
}

.progress-ring-circle {
    transition: stroke-dashoffset 0.35s;
    transform: rotate(-90deg);
    transform-origin: 50% 50%;
}

.progress-ring-bar {
    transition: stroke-dashoffset 0.35s;
    transform: rotate(-90deg);
    transform-origin: 50% 50%;
    stroke-dasharray: 326.56;
    stroke-dashoffset: 326.56;
    stroke-linecap: round;
}

.progress-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

/* Announcement and Agenda Items */
.announcement-item:hover,
.agenda-item:hover {
    background-color: #f8f9fc;
    transition: all 0.3s ease;
}

.announcement-icon {
    width: 35px;
    height: 35px;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Counter Animation */
.counter {
    transition: all 0.3s ease;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .card-hover:hover {
        transform: none;
    }

    .progress-ring svg {
        width: 100px;
        height: 100px;
    }

    .progress-ring-bar,
    .progress-ring-circle {
        r: 42;
        cx: 50;
        cy: 50;
    }
}
</style>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Counter Animation
    function animateCounters() {
        const counters = document.querySelectorAll('.counter');

        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-target'));
            const increment = target / 200;
            let current = 0;

            const timer = setInterval(() => {
                current += increment;
                counter.textContent = Math.floor(current);

                if (current >= target) {
                    counter.textContent = target;
                    clearInterval(timer);
                }
            }, 10);
        });
    }

    // Progress Ring Animation
    function animateProgressRings() {
        const rings = document.querySelectorAll('.progress-ring');

        rings.forEach(ring => {
            const progress = ring.getAttribute('data-progress');
            const bar = ring.querySelector('.progress-ring-bar');
            const circumference = 2 * Math.PI * 52;
            const offset = circumference - (progress / 100) * circumference;

            bar.style.strokeDashoffset = offset;
        });
    }

    // Chart Configuration dengan gradient
    var ctx = document.getElementById("ormawaChart").getContext('2d');

    // Create gradients
    var gradient1 = ctx.createLinearGradient(0, 0, 0, 400);
    gradient1.addColorStop(0, '#4e73df');
    gradient1.addColorStop(1, '#224abe');

    var gradient2 = ctx.createLinearGradient(0, 0, 0, 400);
    gradient2.addColorStop(0, '#1cc88a');
    gradient2.addColorStop(1, '#13855c');

    var gradient3 = ctx.createLinearGradient(0, 0, 0, 400);
    gradient3.addColorStop(0, '#36b9cc');
    gradient3.addColorStop(1, '#258391');

    var gradient4 = ctx.createLinearGradient(0, 0, 0, 400);
    gradient4.addColorStop(0, '#f6c23e');
    gradient4.addColorStop(1, '#dda20a');

    var gradient5 = ctx.createLinearGradient(0, 0, 0, 400);
    gradient5.addColorStop(0, '#e74a3b');
    gradient5.addColorStop(1, '#c0392b');

    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["HIMA TI", "HIMA SI", "HIMA TE", "UKM Musik", "UKM Bola"],
            datasets: [{
                label: 'Jumlah Kegiatan',
                data: [12, 9, 5, 7, 4],
                backgroundColor: [gradient1, gradient2, gradient3, gradient4, gradient5],
                borderRadius: 8,
                borderSkipped: false,
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(0, 0, 0, 0.1)'
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            },
            animation: {
                duration: 2000,
                easing: 'easeInOutQuart'
            }
        }
    });

    // Initialize animations when page loads
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(() => {
            animateCounters();
            animateProgressRings();
        }, 500);
    });
</script>
@endpush
