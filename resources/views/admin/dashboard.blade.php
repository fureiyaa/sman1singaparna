@extends('admin.template')

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
@endsection
