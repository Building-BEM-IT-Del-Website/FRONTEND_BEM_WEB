@extends('admin.layout.main')

@section('content')
<div class="container-fluid py-4">
    <!-- Custom Styles -->
    <style>
        .card-gradient {
            background: linear-gradient(90deg, #1E3A8A, #3B82F6);
        }

        .btn-gradient-primary {
            background: linear-gradient(90deg, #1E3A8A, #3B82F6);
            border: none;
            color: white;
        }

        .btn-gradient-primary:hover {
            background: linear-gradient(90deg, #1E40AF, #2563EB);
            color: white;
            transform: translateY(-1px);
            box-shadow: 0 4px 15px rgba(59, 130, 246, 0.3);
        }

        .table-custom {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }

        .table-custom thead th {
            background: linear-gradient(90deg, #1E3A8A, #3B82F6);
            color: white;
            font-weight: 600;
            border: none;
            padding: 15px;
        }

        .table-custom tbody tr {
            transition: all 0.3s ease;
        }

        .table-custom tbody tr:hover {
            background-color: #f8f9ff;
            transform: scale(1.01);
        }

        .badge-custom {
            padding: 8px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 500;
        }

        .modal-custom .modal-header {
            border-radius: 10px 10px 0 0;
            padding: 20px;
        }

        .btn-action {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin: 0 2px;
            transition: all 0.3s ease;
        }

        .btn-action:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }

        .page-header {
            background: linear-gradient(90deg, #1E3A8A, #3B82F6);
            color: white;
            padding: 30px;
            border-radius: 15px;
            margin-bottom: 30px;
        }

        .stats-card {
            background: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
        }

        .stats-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .form-control-modern {
            border: 2px solid #e9ecef;
            border-radius: 10px;
            padding: 12px 15px;
            transition: all 0.3s ease;
        }

        .form-control-modern:focus {
            border-color: #3B82F6;
            box-shadow: 0 0 0 0.2rem rgba(59, 130, 246, 0.25);
        }

        .trashed-section {
            background: linear-gradient(90deg, #1E3A8A, #3B82F6);
            color: white;
            border-radius: 15px;
            padding: 20px;
            margin-top: 30px;
        }
    </style>

    <!-- Toastr Alert -->
    @if(session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": true,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                };
                toastr.success("{{ session('success') }}");
            });
        </script>
    @elseif(session('error'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": true,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                };
                toastr.error("{{ session('error') }}");
            });
        </script>
    @endif

    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h2 class="mb-2 fw-bold">
                    <i class="ph-briefcase me-3"></i>
                    Manajemen Jabatan
                </h2>
                <p class="mb-0 opacity-75">Kelola data jabatan karyawan dengan mudah dan efisien</p>
            </div>
            <div class="col-md-4 text-end">
                <button class="btn btn-light btn-lg px-4" data-bs-toggle="modal" data-bs-target="#createModal">
                    <i class="ph-plus me-2"></i>
                    Tambah Jabatan
                </button>
            </div>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="stats-card text-center">
                <div class="text-primary mb-2">
                    <i class="ph-users" style="font-size: 2.5rem;"></i>
                </div>
                <h4 class="mb-1 fw-bold">{{ count($jabatans) }}</h4>
                <p class="text-muted mb-0">Total Jabatan</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats-card text-center">
                <div class="text-success mb-2">
                    <i class="ph-check-circle" style="font-size: 2.5rem;"></i>
                </div>
                <h4 class="mb-1 fw-bold">{{ count(array_filter($jabatans, fn($j) => ($j['status'] ?? 'Aktif') === 'Aktif')) }}</h4>
                <p class="text-muted mb-0">Aktif</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats-card text-center">
                <div class="text-danger mb-2">
                    <i class="ph-x-circle" style="font-size: 2.5rem;"></i>
                </div>
                <h4 class="mb-1 fw-bold">{{ count(array_filter($jabatans, fn($j) => ($j['status'] ?? 'Aktif') === 'Dihapus')) }}</h4>
                <p class="text-muted mb-0">Dihapus</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats-card text-center">
                <div class="text-danger mb-2">
                    <i class="ph-trash" style="font-size: 2.5rem;"></i>
                </div>
                <h4 class="mb-1 fw-bold">{{ count($trashed) }}</h4>
                <p class="text-muted mb-0">Terhapus</p>
            </div>
        </div>
    </div>

    <!-- Main Table -->
    <div class="card table-custom border-0">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table datatable-show-all table-hover mb-0">
                    <thead>
                        <tr>
                            <th style="width: 60px;">No</th>
                            <th class="text-start">Nama Jabatan</th>
                            <th class="text-start">Deskripsi</th>
                            <th style="width: 100px;">Level</th>
                            <th style="width: 120px;">Status</th>
                            <th style="width: 150px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($jabatans as $key => $jabatan)
                            <tr>
                                <td class="fw-bold text-primary">{{ $key + 1 }}</td>
                                <td class="text-start">
                                    <div class="fw-bold">{{ $jabatan['nama'] }}</div>
                                </td>
                                <td class="text-start">
                                    <div style="max-width: 300px;">
                                        {{ Str::limit($jabatan['deskripsi'], 60) }}
                                    </div>
                                </td>
                                <td>
                                    <span class="badge bg-info badge-custom">Level {{ $jabatan['level'] }}</span>
                                </td>
                                <td>
                                    @php
                                        $status = $jabatan['status'] ?? 'Aktif';
                                        $statusClass = match(strtolower($status)) {
                                            'aktif' => 'bg-success',
                                            'dihapus' => 'bg-danger',
                                            default => 'bg-success',
                                        };
                                    @endphp
                                    <span class="badge {{ $statusClass }} badge-custom">{{ $status }}</span>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-info btn-action" data-bs-toggle="modal" data-bs-target="#showModal{{ $jabatan['id'] }}" title="Lihat Detail">
                                            <i class="ph-eye"></i>
                                        </button>
                                        <button class="btn btn-warning btn-action" data-bs-toggle="modal" data-bs-target="#editModal{{ $jabatan['id'] }}" title="Edit">
                                            <i class="ph-pencil"></i>
                                        </button>
                                        <button class="btn btn-danger btn-action" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $jabatan['id'] }}" title="Hapus">
                                            <i class="ph-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Show Modal -->
                            <div class="modal fade" id="showModal{{ $jabatan['id'] }}" tabindex="-1">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content modal-custom">
                                        <div class="modal-header" style="background: linear-gradient(90deg, #1E3A8A, #3B82F6);">
                                            <h5 class="modal-title text-white fw-bold">
                                                <i class="ph-info me-2"></i>
                                                Detail Jabatan
                                            </h5>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body p-4">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label fw-bold text-muted">Nama Jabatan</label>
                                                        <div class="p-3 bg-light rounded">{{ $jabatan['nama'] }}</div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label fw-bold text-muted">Level</label>
                                                        <div class="p-3 bg-light rounded">{{ $jabatan['level'] }}</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label fw-bold text-muted">Status</label>
                                                        <div class="p-3 bg-light rounded">
                                                            <span class="badge {{ $statusClass }} badge-custom">{{ $status }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label fw-bold text-muted">Deskripsi</label>
                                                        <div class="p-3 bg-light rounded">{{ $jabatan['deskripsi'] }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Edit Modal -->
                            <div class="modal fade" id="editModal{{ $jabatan['id'] }}" tabindex="-1">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content modal-custom">
                                        <div class="modal-header" style="background: linear-gradient(90deg, #1E3A8A, #3B82F6);">
                                            <h5 class="modal-title text-white fw-bold">
                                                <i class="ph-pencil me-2"></i>
                                                Edit Jabatan
                                            </h5>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body p-4">
                                            <form action="{{ route('jabatans.update', $jabatan['id']) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold">
                                                                <i class="ph-user me-1"></i>
                                                                Nama Jabatan
                                                            </label>
                                                            <input type="text" class="form-control form-control-modern" name="nama" value="{{ $jabatan['nama'] }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold">
                                                                <i class="ph-chart-bar me-1"></i>
                                                                Level
                                                            </label>
                                                            <input type="number" class="form-control form-control-modern" name="level" value="{{ $jabatan['level'] }}" required min="1">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mb-4">
                                                            <label class="form-label fw-bold">
                                                                <i class="ph-text-aa me-1"></i>
                                                                Deskripsi
                                                            </label>
                                                            <textarea class="form-control form-control-modern" name="deskripsi" rows="4" required>{{ $jabatan['deskripsi'] }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <button type="button" class="btn btn-outline-secondary me-2 px-4" data-bs-dismiss="modal">
                                                        <i class="ph-x me-1"></i>
                                                        Batal
                                                    </button>
                                                    <button type="submit" class="btn btn-gradient-primary px-4">
                                                        <i class="ph-check me-1"></i>
                                                        Update
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Delete Modal -->
                            <div class="modal fade" id="deleteModal{{ $jabatan['id'] }}" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content modal-custom">
                                        <div class="modal-header bg-danger">
                                            <h5 class="modal-title text-white fw-bold">
                                                <i class="ph-warning me-2"></i>
                                                Konfirmasi Hapus
                                            </h5>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body text-center p-4">
                                            <div class="mb-3">
                                                <i class="ph-trash text-danger" style="font-size: 4rem;"></i>
                                            </div>
                                            <h5>Apakah Anda yakin?</h5>
                                            <p class="text-muted">Data jabatan <strong>{{ $jabatan['nama'] }}</strong> akan dihapus dan bisa dipulihkan nanti.</p>
                                        </div>
                                        <div class="modal-footer justify-content-center">
                                            <form action="{{ route('jabatans.destroy', $jabatan['id']) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-outline-secondary me-2 px-4" data-bs-dismiss="modal">
                                                    <i class="ph-x me-1"></i>
                                                    Batal
                                                </button>
                                                <button type="submit" class="btn btn-danger px-4">
                                                    <i class="ph-trash me-1"></i>
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-5">
                                    <div class="text-muted">
                                        <i class="ph-folder-open" style="font-size: 3rem;"></i>
                                        <p class="mt-2">Belum ada data jabatan</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Create Modal -->
    <div class="modal fade" id="createModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content modal-custom">
                <div class="modal-header" style="background: linear-gradient(90deg, #1E3A8A, #3B82F6);">
                    <h5 class="modal-title text-white fw-bold">
                        <i class="ph-plus me-2"></i>
                        Tambah Jabatan Baru
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4">
                    <form action="{{ route('jabatans.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">
                                        <i class="ph-user me-1"></i>
                                        Nama Jabatan
                                    </label>
                                    <input type="text" class="form-control form-control-modern" name="nama" placeholder="Masukkan nama jabatan" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">
                                        <i class="ph-chart-bar me-1"></i>
                                        Level
                                    </label>
                                    <input type="number" class="form-control form-control-modern" name="level" placeholder="Masukkan level (1-10)" required min="1" max="10">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-4">
                                    <label class="form-label fw-bold">
                                        <i class="ph-text-aa me-1"></i>
                                        Deskripsi
                                    </label>
                                    <textarea class="form-control form-control-modern" name="deskripsi" rows="4" placeholder="Masukkan deskripsi jabatan" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="button" class="btn btn-outline-secondary me-2 px-4" data-bs-dismiss="modal">
                                <i class="ph-x me-1"></i>
                                Batal
                            </button>
                            <button type="submit" class="btn btn-gradient-primary px-4">
                                <i class="ph-check me-1"></i>
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Trashed Data Section -->
    @if(count($trashed) > 0)
    <div class="trashed-section">
        <div class="d-flex align-items-center mb-3">
            <i class="ph-trash me-2" style="font-size: 1.5rem;"></i>
            <h5 class="mb-0 fw-bold">Data Terhapus ({{ count($trashed) }})</h5>
        </div>

        <div class="table-responsive">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th style="width: 60px;">No</th>
                        <th>Nama Jabatan</th>
                        <th style="width: 100px;">Level</th>
                        <th style="width: 120px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($trashed as $key => $t)
                        <tr>
                            <td class="fw-bold">{{ $key + 1 }}</td>
                            <td>{{ $t['nama'] }}</td>
                            <td>
                                <span class="badge bg-light text-dark">Level {{ $t['level'] }}</span>
                            </td>
                            <td>
                                <form action="{{ route('jabatans.restore', $t['id']) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-success btn-sm px-3" title="Pulihkan Data">
                                        <i class="ph-arrow-counter-clockwise me-1"></i>
                                        Restore
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif

</div>
@endsection

@section('scripts')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.0.3/src/regular/style.css">

<script>
// Add loading animation for forms
document.querySelectorAll('form').forEach(form => {
    form.addEventListener('submit', function(e) {
        const submitBtn = form.querySelector('button[type="submit"]');
        if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span>Loading...';
        }
    });
});

// Add animation to cards
document.addEventListener('DOMContentLoaded', function() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    });

    document.querySelectorAll('.stats-card').forEach((card) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(card);
    });
});

// Enhanced table interactions
document.querySelectorAll('.table-custom tbody tr').forEach(row => {
    row.addEventListener('mouseenter', function() {
        this.style.backgroundColor = '#f8f9ff';
    });

    row.addEventListener('mouseleave', function() {
        this.style.backgroundColor = '';
    });
});
</script>
@endsection
