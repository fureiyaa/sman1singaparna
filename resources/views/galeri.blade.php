@extends('template')

@section('content')
<style>
    .galeri-header {
        background: linear-gradient(90deg, #002366, #003399);
        color: white;
        padding: 2rem 1rem;
        border-radius: 0.5rem;
        margin-bottom: 2rem;
        text-align: center;
    }
    .galeri-header h2 {
        font-weight: bold;
    }
    .galeri-card {
        transition: transform 0.3s, box-shadow 0.3s;
        border-radius: 0.5rem;
        overflow: hidden;
    }
    .galeri-card img {
        height: 220px;
        object-fit: cover;
        width: 100%;
    }
    .galeri-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(0,0,0,0.15);
    }
    h5.card-title {
        font-size: 1.2rem;
        color: #002366;
        font-weight: 600;
    }
</style>

<div class="container py-5 min-vh-100">
    <!-- Header -->
    <div class="galeri-header animate__animated animate__fadeInDown" style="background: url('{{ asset('assets/image/galeri.jpg') }}') no-repeat center; background-size: cover; height: 150px; background-position: center; display: flex; background-position: 0px -500px; flex-direction: column; justify-content: center; align-items: center; position: relative;">
        <div style="background: rgba(0, 0, 50, 0.6); position: absolute; top:0; left:0; width:100%; height:100%; border-radius: 0.5rem;"></div>
        <div class="container position-relative">
            <h2><i class="fa-solid fa-photo-film"></i> Galeri Sekolah</h2>
            <small>Kumpulan dokumentasi kegiatan & fasilitas sekolah</small>
        </div>
    </div>

    <!-- Daftar Galeri -->
    <div class="row g-4">
        @forelse($galeri as $item)
            <div class="col-md-4 col-sm-6 animate__animated animate__fadeInUp">
                <div class="card galeri-card shadow-sm">
                    <img src="{{ asset($item->file) }}" alt="Galeri" class="img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->judul }}</h5>
                        <p class="card-text">{{ Str::limit($item->deskripsi, 80) }}</p>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p class="text-muted">Belum ada galeri tersedia.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
