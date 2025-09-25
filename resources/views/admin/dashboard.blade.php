@extends('admin.template')
@section('content')

<div class="container-fluid py-4">
    <!-- Header -->
    <div class="page-header mb-4">
        <div class="d-flex justify-content-between align-items-center flex-wrap">
            <h1 class="page-title mb-0"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</h1>
            <div class="d-flex align-items-center">
                <span class="badge bg-light text-dark me-2">
                    <i class="fas fa-calendar me-1"></i>
                    {{ \Carbon\Carbon::now()->translatedFormat('l, d F Y') }}
                </span>
                <span class="badge bg-light text-dark">
                    <i class="fas fa-clock me-1"></i>
                    <span id="current-time">{{ \Carbon\Carbon::now()->format('H:i:s') }}</span>
                </span>
            </div>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="row g-4 mb-4">
        <!-- Data Warga Card -->
        <div class="col-xl-3 col-md-6">
            <div class="card stats-card card-1">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="stats-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stats-info text-end">
                            {{-- <h2 class="stats-value">{{ $users->count() }}</h2> --}}
                            <p class="stats-label">Data Siswa</p>
                        </div>
                    </div>
                    <div class="stats-footer mt-3">
                        <h1>{{ $siswa->count() }}</h1>
                        <small><i class="fas fa-history me-1"></i> Updated just now</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Officer Card -->
        <div class="col-xl-3 col-md-6">
            <div class="card stats-card card-2">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="stats-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="stats-info text-end">
                            <p class="stats-label">Data Guru</p>
                        </div>
                    </div>
                    <div class="stats-footer mt-3">
                        <h1>{{ $guru->count() }}</h1>
                        <small><i class="fas fa-history me-1"></i> Updated just now</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card stats-card card-3">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="stats-icon">
                            <i class="fa-solid fa-newspaper"></i>
                        </div>
                        <div class="stats-info text-end">
                            <p class="stats-label">Data Berita</p>
                        </div>
                    </div>
                    <div class="stats-footer mt-3">
                        <h1>{{ $berita->count() }}</h1>
                        <small><i class="fas fa-history me-1"></i> Updated just now</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card stats-card card-4">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="stats-icon">
                            <i class="fa-solid fa-futbol"></i>
                        </div>
                        <div class="stats-info text-end">
                            <p class="stats-label">Data Ekstrakurikuler</p>
                        </div>
                    </div>
                    <div class="stats-footer mt-3">
                        <h1>{{ $ekstra->count() }}</h1>
                        <small><i class="fas fa-history me-1"></i> Updated just now</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-xl-6 col-lg-12">
            <div class="card h-100 shadow-sm">
                <div class="card-header text-white">
                    <h5 class="card-title mb-0"><i class="fas fa-history me-2"></i>Berita Terbaru</h5>
                </div>
                <div class="card-body">
                    @if($berita && $berita->count() > 0)
                        @foreach ($berita as $item)
                        <div class="d-flex align-items-center mb-3 border-bottom pb-2">
                            @if($item->gambar)
                                <img src="{{ asset($item->gambar) }}" width="70" height="70" class="rounded me-3">
                            @else
                                <div class="bg-light text-muted d-flex align-items-center justify-content-center rounded me-3" style="width:70px; height:50px;">No Img</div>
                            @endif
                            <div>
                                <h6 class="mb-1">{{ $item->judul }}</h6>
                                <small class="text-muted"><i class="fas fa-calendar me-1"></i>{{ $item->tanggal }}</small>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <div class="text-center py-4">
                            <i class="fa-solid fa-newspaper text-muted mb-3 fa-2x"></i>
                            <p class="text-muted">Belum ada data</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="col-xl-6 col-lg-12">
            <div class="card h-100">
                <div class="card-header bg-white py-3">
                    <h5 class="card-title mb-0"><i class="fas fa-bolt me-2"></i>Aksi Cepat</h5>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <a href="{{ route('admin.create-siswa') }}" class="btn btn-action btn-primary w-100 text-start">
                                <i class="fas fa-plus-circle me-2 text-white"></i>
                                <div class="text-white">
                                    <h6 class="mb-0">Tambah Data Siswa</h6>
                                    <small>Input data siswa</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.create-berita') }}" class="btn btn-action btn-success w-100 text-start">
                                <i class="fa-solid fa-newspaper text-white"></i>
                                <div class="text-white">
                                    <h6 class="mb-0">Buat Berita</h6>
                                    <small>Buat berita terbaru</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.create-ekstra') }}" class="btn btn-action btn-info w-100 text-start">
                                <i class="fa-solid fa-futbol"></i>
                                <div>
                                    <h6 class="mb-0">Tambah Estrakurikuler</h6>
                                    <small>Input Data Ekstrakurikuler</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.create-guru') }}" class="btn btn-action btn-warning w-100 text-start">
                                <i class="fas fa-user-tie me-2"></i>
                                <div>
                                    <h6 class="mb-0">Tambah Data Guru</h6>
                                    <small>Input data guru</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .page-header {
        background-color:#002366;
        color: white;
        padding: 1.5rem;
        border-radius: 0.75rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .page-title {
        font-weight: 700;
        font-size: 1.8rem;
    }

    .stats-card {
        border: none;
        border-radius: 0.75rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
    }

    .stats-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
    }

    .stats-card.card-1 {
        background: linear-gradient(135deg, #386641 0%, #2c4a32 100%);
    }

    .stats-card.card-2 {
        background: linear-gradient(135deg, #6c757d 0%, #495057 100%);
    }

    .stats-card.card-3 {
        background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);
    }

    .stats-card.card-4 {
        background: linear-gradient(135deg, #6f42c1 0%, #5a36a9 100%);
    }

    .stats-icon {
        font-size: 2.5rem;
        color: rgba(255, 255, 255, 0.9);
    }

    .stats-value {
        font-size: 2.2rem;
        font-weight: 700;
        color: #FED16A;
        margin-bottom: 0.2rem;
    }

    .stats-label {
        color: rgba(255, 255, 255, 0.9);
        font-weight: 500;
        margin-bottom: 0;
    }

    .stats-footer {
        color: rgba(255, 255, 255, 0.7);
        font-size: 0.8rem;
    }

    .btn-action {
        padding: 1rem;
        border-radius: 0.5rem;
        border: 1px solid #dee2e6;
        transition: all 0.3s ease;
        text-decoration: none;
        color: #333;
    }

    .btn-action:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        color: #333;
    }

    .card {
        border: none;
        border-radius: 0.75rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        border-bottom: 1px solid #f8f9fa;
        background-color:#002366;
    }

    /* Responsive styles */
    @media (max-width: 768px) {
        .page-header {
            padding: 1rem;
        }

        .page-title {
            font-size: 1.5rem;
        }

        .stats-value {
            font-size: 1.8rem;
        }

        .stats-icon {
            font-size: 2rem;
        }

        .btn-action {
            padding: 0.75rem;
        }
    }

    @media (max-width: 576px) {
        .stats-value {
            font-size: 1.5rem;
        }

        .stats-label {
            font-size: 0.9rem;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Update current time every second
        function updateTime() {
            const now = new Date();
            const timeElement = document.getElementById('current-time');
            if (timeElement) {
                timeElement.textContent = now.toLocaleTimeString('id-ID');
            }
        }

        setInterval(updateTime, 1000);

        // Add animation to stats cards
        const statsCards = document.querySelectorAll('.stats-card');
        statsCards.forEach((card, index) => {
            card.style.animationDelay = ${index * 0.1}s;
        });
    });
</script>
@endsection

{{-- @extends('admin.template')

@section('content')
<div class="container-fluid py-4">
    <!-- Header -->
    <div class="page-header mb-4 text-white p-4 rounded shadow"
         style="background: linear-gradient(90deg, #0d47a1, #1976d2);">
        <div class="d-flex justify-content-between align-items-center flex-wrap">
            <h1 class="page-title mb-0"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</h1>
            <div class="d-flex align-items-center">
                <span class="badge bg-light text-dark me-2">
                    <i class="fas fa-calendar me-1"></i>
                    {{ \Carbon\Carbon::now()->translatedFormat('l, d F Y') }}
                </span>
                <span class="badge bg-light text-dark">
                    <i class="fas fa-clock me-1"></i>
                    <span id="current-time">{{ \Carbon\Carbon::now()->format('H:i:s') }}</span>
                </span>
            </div>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="row g-4 mb-4">
        <div class="col-xl-3 col-md-6">
            <div class="card stats-card bg-gradient-success text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6>Data Siswa</h6>
                            <h2>{{ $siswa->count() }}</h2>
                        </div>
                        <i class="fas fa-users fa-2x opacity-75"></i>
                    </div>
                    <small><i class="fas fa-history me-1"></i>Updated just now</small>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card stats-card bg-gradient-secondary text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6>Data Guru</h6>
                            <h2>{{ $guru->count() }}</h2>
                        </div>
                        <i class="fas fa-user-tie fa-2x opacity-75"></i>
                    </div>
                    <small><i class="fas fa-history me-1"></i>Updated just now</small>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card stats-card bg-gradient-primary text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6>Data Berita</h6>
                            <h2>{{ $berita->count() }}</h2>
                        </div>
                        <i class="fa-solid fa-newspaper fa-2x opacity-75"></i>
                    </div>
                    <small><i class="fas fa-history me-1"></i>Updated just now</small>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card stats-card bg-gradient-purple text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6>Data Ekstrakurikuler</h6>
                            <h2>{{ $ekstra->count() }}</h2>
                        </div>
                        <i class="fa-solid fa-futbol fa-2x opacity-75"></i>
                    </div>
                    <small><i class="fas fa-history me-1"></i>Updated just now</small>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <!-- Berita Terbaru -->
        <div class="col-xl-6 col-lg-12">
            <div class="card h-100 shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0"><i class="fas fa-history me-2"></i>Berita Terbaru</h5>
                </div>
                <div class="card-body">
                    @if($berita && $berita->count() > 0)
                        @foreach ($berita->take(4) as $item)
                        <div class="d-flex align-items-center mb-3 border-bottom pb-2">
                            @if($item->gambar)
                                <img src="{{ asset($item->gambar) }}" width="70" height="50" class="rounded me-3">
                            @else
                                <div class="bg-light text-muted d-flex align-items-center justify-content-center rounded me-3" style="width:70px; height:50px;">No Img</div>
                            @endif
                            <div>
                                <h6 class="mb-1">{{ $item->judul }}</h6>
                                <small class="text-muted"><i class="fas fa-calendar me-1"></i>{{ $item->tanggal }}</small>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <div class="text-center py-4">
                            <i class="fa-solid fa-newspaper text-muted mb-3 fa-2x"></i>
                            <p class="text-muted">Belum ada data</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="col-xl-6 col-lg-12">
            <div class="card h-100 shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="card-title mb-0"><i class="fas fa-bolt me-2"></i>Aksi Cepat</h5>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <a href="{{ route('admin.create-siswa') }}" class="quick-card bg-primary">
                                <i class="fas fa-user-plus fa-2x mb-2"></i>
                                <h6>Tambah Data Siswa</h6>
                                <small>Input data siswa</small>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.create-berita') }}" class="quick-card bg-info">
                                <i class="fas fa-newspaper fa-2x mb-2"></i>
                                <h6>Buat Berita</h6>
                                <small>Tambah berita baru</small>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.create-ekstra') }}" class="quick-card bg-warning">
                                <i class="fa-solid fa-futbol fa-2x mb-2"></i>
                                <h6>Tambah Ekstrakurikuler</h6>
                                <small>Input data ekstra</small>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.create-guru') }}" class="quick-card bg-danger">
                                <i class="fas fa-user-tie fa-2x mb-2"></i>
                                <h6>Tambah Data Guru</h6>
                                <small>Input data guru</small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .stats-card {
        border-radius: 0.75rem;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .bg-gradient-success { background: linear-gradient(135deg, #28a745, #218838); }
    .bg-gradient-secondary { background: linear-gradient(135deg, #6c757d, #495057); }
    .bg-gradient-primary { background: linear-gradient(135deg, #0d6efd, #0a58ca); }
    .bg-gradient-purple { background: linear-gradient(135deg, #6f42c1, #5a36a9); }
    .quick-card {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 1rem;
        border-radius: 0.75rem;
        text-align: center;
        color: #fff;
        text-decoration: none;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .quick-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 12px rgba(0,0,0,0.15);
        color: #fff;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        function updateTime() {
            const now = new Date();
            const timeElement = document.getElementById('current-time');
            if (timeElement) {
                timeElement.textContent = now.toLocaleTimeString('id-ID');
            }
        }
        setInterval(updateTime, 1000);
    });
</script>
@endsection --}}
