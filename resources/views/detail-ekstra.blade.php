@extends('template')

@section('content')
<style>
    .ekskul-hero {
        background: #002366;
        color: white;
        padding: 2.5rem;
        border-radius: 15px;
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        margin-bottom: 2rem;
        position: relative;
        overflow: hidden;
    }

    .ekskul-hero img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 50%;
        border: 4px solid #fff;
        margin-bottom: 1rem;
    }

    .ekskul-info {
        display: flex;
        flex-wrap: wrap;
        gap: 1.5rem;
        margin-top: 1rem;
    }
    .info-box {
        flex: 1 1 200px;
        background: white;
        color: #333;
        padding: 1rem;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        text-align: center;
        transition: all 0.3s ease;
    }
    .info-box:hover {
        transform: translateY(-5px);
        background: #002366;
        color: white;
    }
    .info-box i {
        font-size: 1.5rem;
        margin-bottom: 0.5rem;
        display: block;
    }

    .ekskul-desc {
        font-size: 1.1rem;
        line-height: 1.7;
        color: #444;
        margin-top: 1.5rem;
    }

    .quote-box {
        margin-top: 2rem;
        padding: 1.5rem;
        border-left: 6px solid #002366;
        background: #f1f1f1;
        font-style: italic;
        border-radius: 10px;
        text-align: center;
    }
</style>

<div class="container py-5 min-vh-100">
    <!-- Hero Ekskul -->
    <div class="ekskul-hero text-center">
        @if($ekskul->gambar)
            <img src="{{ asset($ekskul->gambar) }}" alt="{{ $ekskul->nama_ekskul }}">
        @else
            <img src="https://via.placeholder.com/100" alt="Logo Ekskul">
        @endif
        <h2 class="fw-bold">{{ $ekskul->nama_ekskul }}</h2>
        <p class="mb-0">Ekstrakurikuler SMA Negeri 1 Singaparna</p>
    </div>

    <!-- Info Box -->
    <div class="ekskul-info">
        <div class="info-box">
            <i class="fa-solid fa-user-tie"></i>
            <h6>Pembina</h6>
            <p>{{ $ekskul->pembina }}</p>
        </div>
        <div class="info-box">
            <i class="fa-solid fa-calendar-days"></i>
            <h6>Jadwal Latihan</h6>
            <p>{{ $ekskul->jadwal_latihan }}</p>
        </div>
    </div>

    <!-- Deskripsi -->
    <div class="ekskul-desc">
        {!! nl2br(e($ekskul->deskripsi)) !!}
    </div>

    <!-- Motto/Quote -->
    <div class="quote-box">
        "Bersatu, berprestasi, dan tetap solid dalam setiap langkah!"
    </div>
</div>
@endsection
