@extends('template')

@section('content')
<style>
    .guru-header {
        background: linear-gradient(90deg, #002366, #003399);
        color: white;
        padding: 2rem 1rem;
        border-radius: 0.5rem;
        margin-bottom: 2rem;
        margin-top: -80px;
        text-align: center;
    }
    .guru-header h2 {
        font-weight: bold;
    }
    .kepsek-card {
        background: #fff;
        border-radius: 1rem;
        padding: 2rem;
        text-align: center;
        margin-bottom: 3rem;
        box-shadow: 0 6px 20px rgba(0,0,0,0.15);
    }
    .kepsek-card img {
        width: 250px;
        height: 250px;
        position: relative;
        left: 35px;
        object-fit: cover;
        margin-bottom: 1rem;
    }
    .guru-card {
        transition: transform 0.3s, box-shadow 0.3s;
        border-radius: 1rem;
        overflow: hidden;
        text-align: center;
        background: #fff;
        padding: 1.5rem 1rem;
    }
    .guru-card img {
        width: 120px;
        height: 120px;
        object-fit: cover;
        margin-bottom: 1rem;
    }
    .guru-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(0,0,0,0.15);
    }
    h5,h3 {
        color: #002366;
    }
</style>

<div class="container py-5">
    <!-- Header -->
    <div class="guru-header animate__animated animate__fadeInDown" style="background: url('{{ asset('assets/image/guru.jpg') }}') no-repeat center; background-size: cover; height: 150px; background-position: center; display: flex; background-position: 0px -500px; flex-direction: column; justify-content: center; align-items: center; position: relative;">
        <div style="background: rgba(0, 0, 50, 0.6); position: absolute; top:0; left:0; width:100%; height:100%; border-radius: 0.5rem;"></div>
        <div class="position-relative">
            <h2>Tenaga Pendidik SMAN 1 SINGAPARNA</h2>
            <small>Kepala sekolah & guru pengajar</small>
        </div>
    </div>

    <!-- Kepala Sekolah -->
    @if($kepsek)
    <div class="kepsek-card animate__animated animate__fadeInUp">
        <img src="{{ asset($kepsek->foto) }}" alt="{{ $kepsek->nama_guru }}">
        <h3 class=" fw-bold">{{ $kepsek->nama_guru }}</h3>
        <p class="text-muted mb-1">Kepala Sekolah</p>
        <small class="text-secondary">{{ $kepsek->nip }}</small>
    </div>
    @endif

    <!-- Daftar Guru -->
    <div class="row g-4">
        @forelse($guru as $item)
            <div class="col-lg-3 col-md-4 col-sm-6 animate__animated animate__fadeInUp">
                <div class="guru-card shadow-sm">
                    <img src="{{ asset($item->foto) }}" alt="{{ $item->nama_guru }}">
                    <h5 class="text">{{ $item->nama_guru }}</h5>
                    <p class="text-muted mb-1">{{ $item->mapel }}</p>
                    <small class="text-secondary">{{ $item->nip }}</small>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p class="text-muted">Belum ada data guru tersedia.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
```
