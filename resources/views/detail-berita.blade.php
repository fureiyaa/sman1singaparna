@extends('template')

@section('content')
<style>
    .berita-header {
        text-align: center;
        margin-top: 2rem;
        margin-bottom: 2rem;
    }
    .berita-header h1 {
        font-weight: 700;
        color: #002366;
    }
    .berita-meta {
        color: #777;
        font-size: 0.9rem;
        margin-bottom: 1.5rem;
    }
    .berita-image {
        max-height: 400px;
        object-fit: cover;
        border-radius: 10px;
        margin-bottom: 2rem;
    }
    .berita-content {
        font-size: 1.1rem;
        line-height: 1.7;
        color: #333;
    }
    .berita-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-radius: 0.75rem;
    overflow: hidden;
    }
    .berita-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 8px 20px rgba(0, 35, 102, 0.2);
    }

    /* Overlay saat hover gambar */
    .berita-card .overlay {
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0, 35, 102, 0.6);
    opacity: 0;
    transition: opacity 0.3s ease;
    border-radius: 0.5rem 0.5rem 0 0;
    }
    .berita-card:hover .overlay {
    opacity: 1;
    }

    /* Tombol di overlay */
    .berita-card .overlay a {
    opacity: 0;
    transform: translateY(10px);
    transition: all 0.3s ease;
    }
    .berita-card:hover .overlay a {
    opacity: 1;
    transform: translateY(0);
}
    .btn-back {
        background-color: #002366;
        color: white;
        padding: 0.6rem 1.2rem;
        border-radius: 5px;
        text-decoration: none;
        transition: 0.3s;
    }
    .btn-back:hover {
        background-color: #FFD700;
        color: #002366;
    }
    .sidebar-card {
        border-left: 3px solid #002366;
    }
    .sidebar-title {
        font-weight: 700;
        font-size: 1.2rem;
        margin-bottom: 1rem;
        color: #002366;
    }
    .sidebar-item {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }
    .sidebar-item img {
        width: 70px;
        height: 50px;
        object-fit: cover;
        border-radius: 6px;
        margin-right: 10px;
    }
    .sidebar-item a {
        font-size: 0.95rem;
        text-decoration: none;
        color: #333;
        line-height: 1.3;
    }
    .sidebar-item a:hover {
        color: #002366;
        font-weight: bold;
    }
    .breadcrumb-item a,li {
        text-decoration: none;
        color: #002366;
        font-weight: 600;
    }
</style>

<div class="container py-5 min-vh-100">
    <div class="news-header">
        <h1>{{ $berita->judul }}</h1>
        <p class="news-meta">
            <i class="fa-solid fa-calendar-days"></i> {{ $berita->created_at->format('d M Y') }}
            &nbsp; | &nbsp;
            <i class="fa-solid fa-user"></i> {{ $berita->penulis ?? 'Admin' }}
        </p>
    </div>

    <!-- Breadcrumb -->
    <div class="card shadow-sm mb-4">
        <div class="card-body d-flex align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><i class="fa-solid fa-house"></i><a href="{{ url('/') }}"> Beranda</a></li>
                    <li class="breadcrumb-item"><i class="fa-solid fa-newspaper"></i><a href="{{ route('berita') }}"> Berita</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $berita->judul }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <!-- Konten Utama -->
        <div class="col-lg-8">

            <!-- Gambar -->
            @if($berita->gambar)
                <img src="{{ asset($berita->gambar) }}" class="img-fluid w-100 news-image" alt="Gambar Berita">
            @endif

            <!-- Isi Berita -->
            <div class="news-content">
                {!! nl2br(e($berita->isi)) !!}
            </div>

            <!-- Tombol Kembali -->
            <div class="mt-4">
                <a href="{{ route('berita') }}" class="btn-back">
                    <i class="fa-solid fa-arrow-left"></i> Kembali ke Berita
                </a>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <div class="card shadow-sm sidebar-card p-3">
                <h5 class="sidebar-title">Postingan Terbaru</h5>
                @foreach ($terbaru as $item)
    <div class="card border-0 shadow-sm mb-2 p-2" style="max-width: 100%;">
        <div class="d-flex align-items-center">
            <img src="{{ asset($item->gambar) }}"
                 alt="{{ $item->judul }}"
                 style="width: 70px; height: 50px; object-fit: cover; border-radius: 6px; margin-right: 10px;">
            <div class="flex-grow-1">
                <a href="{{ route('detail-berita', $item->id) }}"
                   class="fw-bold text-dark d-block"
                   style="font-size: 0.9rem;">
                    {{ Str::limit($item->judul, 50) }}
                </a>
                <small class="text-muted">
                    <i class="fa-regular fa-calendar"></i> {{ $item->created_at->format('d M Y') }}
                </small>
            </div>
        </div>
    </div>
@endforeach

            </div>
        </div>
    </div>
</div>
@endsection
