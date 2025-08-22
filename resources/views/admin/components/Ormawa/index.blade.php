@extends('admin.layout.main')

@section('content')
<div class="container-fluid py-4">
    <!-- Custom Styles -->
    <style>
        .card-gradient {
            background: linear-gradient(90deg, #1E3A8A, #3B82F6);
            color: white;
        }

        .btn-gradient-primary {
            background: linear-gradient(90deg, #1E3A8A, #3B82F6);
            border: none;
            color: white;
            transition: all 0.3s ease;
        }

        .btn-gradient-primary:hover {
            background: linear-gradient(90deg, #1E40AF, #2563EB);
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(59, 130, 246, 0.3);
        }

        .table-custom {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
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
            font-size: 0.85rem;
            font-weight: 500;
        }

        .modal-custom .modal-header {
            border-radius: 10px 10px 0 0;
            padding: 20px;
            background: linear-gradient(90deg, #1E3A8A, #3B82F6);
        }

        .btn-action {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin: 0 3px;
            transition: all 0.3s ease;
        }

        .btn-action:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
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
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .stats-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
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

        .tinymce-editor {
            border: 2px solid #e9ecef;
            border-radius: 10px;
            padding: 10px;
        }
    </style>

    <!-- Toastr Alert -->
    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
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
                    "progressBar": true,
                    "positionClass": "toast-top-right",
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
                    Manajemen Ormawa
                </h2>
                <p class="mb-0 opacity-75">Kelola data organisasi mahasiswa dengan mudah dan efisien</p>
            </div>
            <div class="col-md-4 text-end">
                <button class="btn btn-gradient-primary btn-lg px-4" data-bs-toggle="modal" data-bs-target="#createModal">
                    <i class="ph-plus me-2"></i>
                    Tambah Ormawa
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
                <h4 class="mb-1 fw-bold">{{ count($ormawas) }}</h4>
                <p class="text-muted mb-0">Total Ormawa</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stats-card text-center">
                <div class="text-success mb-2">
                    <i class="ph-check-circle" style="font-size: 2.5rem;"></i>
                </div>
                <h4 class="mb-1 fw-bold">{{ count($ormawas->where('status', 'active')) }}</h4>
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

    <!-- Table Ormawa Aktif -->
    <div class="card table-custom border-0 mb-4">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th style="width: 80px;">No</th>
                            <th class="text-start">Nama</th>
                            <th class="text-start">Jenis Ormawa</th>
                            <th style="width: 120px;">Status</th>
                            <th style="width: 150px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($ormawas as $key => $o)
                            <tr>
                                <td class="fw-bold text-primary">{{ $key + 1 }}</td>
                                <td class="text-start">{{ $o['nama'] }}</td>
                                <td class="text-start">{{ $o['jenis_ormawa']['nama'] ?? 'N/A' }}</td>
                                <td>
                                    <span class="badge badge-custom {{ $o['status'] == 'active' ? 'bg-success' : 'bg-warning text-dark' }}">
                                        {{ ucfirst($o['status']) }}
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        <button class="btn btn-info btn-action" data-bs-toggle="modal" data-bs-target="#showModal{{ $o['id'] }}" title="Lihat Detail">
                                            <i class="ph-eye"></i>
                                        </button>
                                        <button class="btn btn-warning btn-action" data-bs-toggle="modal" data-bs-target="#editModal{{ $o['id'] }}" title="Edit">
                                            <i class="ph-pencil"></i>
                                        </button>
                                        <button class="btn btn-danger btn-action" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $o['id'] }}" title="Hapus">
                                            <i class="ph-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Show Modal -->
                            <div class="modal fade" id="showModal{{ $o['id'] }}" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content modal-custom">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-white fw-bold">
                                                <i class="ph-info me-2"></i>
                                                Detail Ormawa
                                            </h5>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body p-4 text-start">
                                            <div class="text-center mb-3">
                                                <i class="ph-stack text-primary" style="font-size: 3rem;"></i>
                                            </div>
                                            <p><strong>Nama:</strong> {{ $o['nama'] }}</p>
                                            <p><strong>Jenis Ormawa:</strong> {{ $o['jenis_ormawa']['nama'] ?? 'N/A' }}</p>
                                            <p><strong>Status:</strong> {{ ucfirst($o['status']) }}</p>
                                            <p><strong>Deskripsi:</strong> {!! $o['deskripsi'] !!}</p>
                                            <p><strong>Visi:</strong> {!! $o['visi'] !!}</p>
                                            <p><strong>Misi:</strong> {!! $o['misi'] !!}</p>
                                            <p><strong>Logo:</strong><br>
                                                <img src="{{ asset($o['logo']) }}" alt="logo" style="width: 100px;" class="rounded">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Edit Modal -->
                            <div class="modal fade" id="editModal{{ $o['id'] }}" tabindex="-1">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content modal-custom">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-white fw-bold">
                                                <i class="ph-pencil me-2"></i>
                                                Edit Ormawa
                                            </h5>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body p-4">
                                            <form action="{{ route('ormawas.update', $o['id']) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="mb-4">
                                                    <label class="form-label fw-bold">Nama</label>
                                                    <input type="text" class="form-control form-control-modern" name="nama" value="{{ $o['nama'] }}" required>
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label fw-bold">Jenis Ormawa</label>
                                                    <select class="form-control form-control-modern" name="jenis_ormawa_id" required>
                                                        <option value="">-- Pilih Jenis Ormawa --</option>
                                                        @foreach ($jenisOrmawas as $j)
                                                            <option value="{{ $j['id'] }}" {{ $o['jenis_ormawa']['id'] ?? '' == $j['id'] ? 'selected' : '' }}>
                                                                {{ $j['nama'] }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label fw-bold">Deskripsi</label>
                                                    <textarea class="form-control form-control-modern tinymce-editor" name="deskripsi" required>{{ $o['deskripsi'] }}</textarea>
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label fw-bold">Visi</label>
                                                    <textarea class="form-control form-control-modern tinymce-editor" name="visi" required>{{ $o['visi'] }}</textarea>
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label fw-bold">Misi</label>
                                                    <textarea class="form-control form-control-modern tinymce-editor" name="misi" required>{{ $o['misi'] }}</textarea>
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label fw-bold">Logo</label>
                                                    <input type="file" class="form-control form-control-modern" name="logo" accept="image/*">
                                                    @if (!empty($o['logo']))
                                                        <div class="mt-2">
                                                            <small class="text-muted">Logo saat ini:</small><br>
                                                            <img src="{{ asset($o['logo']) }}" alt="logo" style="width: 100px;" class="rounded">
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label fw-bold">Status</label>
                                                    <select class="form-control form-control-modern" name="status" required>
                                                        <option value="active" {{ $o['status'] == 'active' ? 'selected' : '' }}>Active</option>
                                                        <option value="inactive" {{ $o['status'] == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                                    </select>
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
                            <div class="modal fade" id="deleteModal{{ $o['id'] }}" tabindex="-1">
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
                                            <p class="text-muted">Data ormawa <strong>{{ $o['nama'] }}</strong> akan dihapus dan bisa dipulihkan nanti.</p>
                                        </div>
                                        <div class="modal-footer justify-content-center">
                                            <form action="{{ route('ormawas.destroy', $o['id']) }}" method="POST" class="d-inline">
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
                                <td colspan="5" class="text-center py-5">
                                    <div class="text-muted">
                                        <i class="ph-folder-open" style="font-size: 3rem;"></i>
                                        <p class="mt-2">Belum ada data ormawa</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Table Ormawa Terhapus -->
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
                        <th class="text-start">Nama</th>
                        <th class="text-start">Jenis Ormawa</th>
                        <th style="width: 120px;">Status</th>
                        <th style="width: 150px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($trashed as $key => $t)
                        <tr>
                            <td class="fw-bold">{{ $key + 1 }}</td>
                            <td class="text-start">{{ $t['nama'] }}</td>
                            <td class="text-start">{{ $t['jenis_ormawa']['nama'] ?? 'N/A' }}</td>
                            <td><span class="badge badge-custom bg-secondary">Trashed</span></td>
                            <td>
                                <form action="{{ route('ormawas.restore', $t['id']) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('PATCH')
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

    <!-- Create Modal -->
    <div class="modal fade" id="createModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content modal-custom">
                <div class="modal-header">
                    <h5 class="modal-title text-white fw-bold">
                        <i class="ph-plus me-2"></i>
                        Tambah Ormawa Baru
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4">
                    <form action="{{ route('ormawas.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label class="form-label fw-bold">Nama</label>
                            <input type="text" class="form-control form-control-modern" name="nama" placeholder="Masukkan nama Ormawa" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label fw-bold">Jenis Ormawa</label>
                            <select class="form-control form-control-modern" name="jenis_ormawa_id" required>
                                <option value="">-- Pilih Jenis Ormawa --</option>
                                @foreach ($jenisOrmawas as $j)
                                    <option value="{{ $j['id'] }}">{{ $j['nama'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label fw-bold">Deskripsi</label>
                            <textarea class="form-control form-control-modern tinymce-editor" name="deskripsi" placeholder="Masukkan deskripsi" required></textarea>
                        </div>
                        <div class="mb-4">
                            <label class="form-label fw-bold">Visi</label>
                            <textarea class="form-control form-control-modern tinymce-editor" name="visi" placeholder="Masukkan visi" required></textarea>
                        </div>
                        <div class="mb-4">
                            <label class="form-label fw-bold">Misi</label>
                            <textarea class="form-control form-control-modern tinymce-editor" name="misi" placeholder="Masukkan misi" required></textarea>
                        </div>
                        <div class="mb-4">
                            <label class="form-label fw-bold">Logo</label>
                            <input type="file" class="form-control form-control-modern" name="logo" accept="image/*" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label fw-bold">Status</label>
                            <select class="form-control form-control-modern" name="status" required>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
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
</div>
@endsection

@section('scripts')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.0.3/src/regular/style.css">
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<script>
// Initialize TinyMCE for text editors
tinymce.init({
    selector: 'textarea.tinymce-editor',
    height: 300,
    plugins: 'advlist autolink lists link image charmap preview anchor searchreplace visualblocks code fullscreen insertdatetime media table paste code help wordcount',
    toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
    menubar: false,
    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
});

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
