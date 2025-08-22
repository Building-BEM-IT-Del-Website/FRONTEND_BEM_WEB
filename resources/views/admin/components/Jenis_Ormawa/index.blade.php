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
                    <i class="ph-stack me-3"></i>
                    Manajemen Jenis Ormawa
                </h2>
                <p class="mb-0 opacity-75">Kelola data jenis organisasi mahasiswa dengan mudah dan efisien</p>
            </div>
            <div class="col-md-4 text-end">
                <button class="btn btn-light btn-lg px-4" data-bs-toggle="modal" data-bs-target="#createModal">
                    <i class="ph-plus me-2"></i>
                    Tambah Jenis Ormawa
                </button>
            </div>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="stats-card text-center">
                <div class="text-primary mb-2">
                    <i class="ph-stack" style="font-size: 2.5rem;"></i>
                </div>
                <h4 class="mb-1 fw-bold">{{ count($jenisOrmawas) }}</h4>
                <p class="text-muted mb-0">Total Jenis Ormawa</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stats-card text-center">
                <div class="text-success mb-2">
                    <i class="ph-check-circle" style="font-size: 2.5rem;"></i>
                </div>
                <h4 class="mb-1 fw-bold">{{ count($jenisOrmawas) }}</h4>
                <p class="text-muted mb-0">Aktif</p>
            </div>
        </div>
        <div class="col-md-4">
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
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th style="width: 80px;">No</th>
                            <th class="text-start">Nama Jenis Ormawa</th>
                            <th style="width: 120px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($jenisOrmawas as $key => $item)
                            <tr>
                                <td class="fw-bold text-primary">{{ $key + 1 }}</td>
                                <td class="text-start">
                                    <div class="fw-bold">{{ $item['nama'] }}</div>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-info btn-action" data-bs-toggle="modal" data-bs-target="#showModal{{ $item['id'] }}" title="Lihat Detail">
                                            <i class="ph-eye"></i>
                                        </button>
                                        <button class="btn btn-warning btn-action" data-bs-toggle="modal" data-bs-target="#editModal{{ $item['id'] }}" title="Edit">
                                            <i class="ph-pencil"></i>
                                        </button>
                                        <button class="btn btn-danger btn-action" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item['id'] }}" title="Hapus">
                                            <i class="ph-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Show Modal -->
                            <div class="modal fade" id="showModal{{ $item['id'] }}" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content modal-custom">
                                        <div class="modal-header" style="background: linear-gradient(90deg, #1E3A8A, #3B82F6);">
                                            <h5 class="modal-title text-white fw-bold">
                                                <i class="ph-info me-2"></i>
                                                Detail Jenis Ormawa
                                            </h5>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body p-4">
                                            <div class="text-center mb-3">
                                                <i class="ph-stack text-primary" style="font-size: 3rem;"></i>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-muted">Nama Jenis Ormawa</label>
                                                <div class="p-3 bg-light rounded">{{ $item['nama'] }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Edit Modal -->
                            <div class="modal fade" id="editModal{{ $item['id'] }}" tabindex="-1">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content modal-custom">
                                        <div class="modal-header" style="background: linear-gradient(90deg, #1E3A8A, #3B82F6);">
                                            <h5 class="modal-title text-white fw-bold">
                                                <i class="ph-pencil me-2"></i>
                                                Edit Jenis Ormawa
                                            </h5>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body p-4">
                                            <form action="{{ route('jenis-ormawas.update', $item['id']) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="mb-4">
                                                    <label class="form-label fw-bold">
                                                        <i class="ph-stack me-1"></i>
                                                        Nama Jenis Ormawa
                                                    </label>
                                                    <input type="text" class="form-control form-control-modern" name="nama" value="{{ $item['nama'] }}" required>
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
                            <div class="modal fade" id="deleteModal{{ $item['id'] }}" tabindex="-1">
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
                                            <p class="text-muted">Data jenis ormawa <strong>{{ $item['nama'] }}</strong> akan dihapus dan bisa dipulihkan nanti.</p>
                                        </div>
                                        <div class="modal-footer justify-content-center">
                                            <form action="{{ route('jenis-ormawas.destroy', $item['id']) }}" method="POST" class="d-inline">
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
                                <td colspan="3" class="text-center py-5">
                                    <div class="text-muted">
                                        <i class="ph-folder-open" style="font-size: 3rem;"></i>
                                        <p class="mt-2">Belum ada data jenis ormawa</p>
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
                        Tambah Jenis Ormawa Baru
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4">
                    <form action="{{ route('jenis-ormawas.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label class="form-label fw-bold">
                                <i class="ph-stack me-1"></i>
                                Nama Jenis Ormawa
                            </label>
                            <input type="text" class="form-control form-control-modern" name="nama" placeholder="Masukkan nama jenis ormawa (contoh: UKM, Himpunan, BEM)" required>
                            <small class="text-muted">Contoh: UKM (Unit Kegiatan Mahasiswa), Himpunan Mahasiswa, BEM (Badan Eksekutif Mahasiswa)</small>
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
                        <th style="width: 80px;">No</th>
                        <th>Nama Jenis Ormawa</th>
                        <th style="width: 120px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($trashed as $key => $t)
                        <tr>
                            <td class="fw-bold">{{ $key + 1 }}</td>
                            <td>{{ $t['nama'] }}</td>
                            <td>
                                <form action="{{ route('jenis-ormawas.restore', $t['id']) }}" method="POST" class="d-inline">
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
