@extends('admin.template')

@section('content')
<style>
    h3 {
        color: #002366;
    }
    .page-header {
        background: linear-gradient(90deg, #002366, #003399);
        color: white;
        padding: 1.5rem;
        border-radius: 0.5rem;
        margin-bottom: 2rem;
        box-shadow: 0 4px 6px rgba(0,0,0,0.15);
    }
    .page-title {
        font-weight: 700;
        font-size: 1.9rem;
    }
    .profil-card {
        border: none;
        border-radius: 0.75rem;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        padding: 1.5rem;
    }
    .profil-card img.logo {
        object-fit: contain;
    }
    .profil-card img.foto {
        object-fit: cover;
        border-radius: 0.5rem;
    }
    .profil-info p {
        margin-bottom: 0.5rem;
    }
    .section-title {
        font-weight: 700;
        color: #002366;
        border-left: 4px solid #FFD700;
        padding-left: 10px;
        margin: 1.5rem 0 1rem;
    }
    .fas{
        color: #002366;
    }
</style>

<div class="container-fluid py-4">
    <!-- Header -->
    <div class="page-header d-flex justify-content-between align-items-center">
        <h1 class="page-title mb-0">
            <i class="fa-solid fa-school me-2"></i> Profil Sekolah
        </h1>
        <a href="#" class="btn btn-warning">
            <i class="fas fa-edit me-1"></i> Edit Profil
        </a>
    </div>

    <!-- Card Profil -->
    <div class="card profil-card">
        <div class="card-body">
            <div class="row align-items-center">
                <!-- Logo Sekolah -->
                <div class="col-md-3 text-center">
                    <img src="{{ asset('assets/image/' . $profil->logo) }}"
                         class="img-fluid logo" alt="Logo Sekolah">
                </div>

                <!-- Info Sekolah -->
                <div class="col-md-6 profil-info">
                    <h3 class="fw-bold">{{ $profil->nama_sekolah }}</h3>
                    <p><i class="fas fa-id-card me-2"></i>
                        <strong>NPSN:</strong> {{ $profil->npsn }}</p>
                    <p><i class="fas fa-map-marker-alt me-2r"></i>
                        <strong>Alamat:</strong> {{ $profil->alamat }}</p>
                    <p><i class="fas fa-phone me-2"></i>
                        <strong>Kontak:</strong> {{ $profil->kontak }}</p>
                    <p><i class="fas fa-calendar-alt me-2"></i>
                        <strong>Tahun Berdiri:</strong> {{ $profil->tahun_berdiri }}</p>
                </div>

                <!-- Kepsek -->
                <div class="col-md-3 text-center">
                    <img src="{{ asset('assets/image/' . $profil->foto) }}"
                         class="img-fluid foto mb-2" alt="Kepala Sekolah" width="200" height="250">
                    <p class="fw-bold mb-0">{{ $profil->kepala_sekolah }}</p>
                    <small class="text-muted">Kepala Sekolah</small>
                </div>
            </div>

            <!-- Visi Misi -->
            <h5 class="section-title mt-4">
                <i class="fas fa-bullseye me-2"></i> Visi & Misi
            </h5>
            <p>{!! nl2br(e($profil->visi_misi)) !!}</p>

            <!-- Deskripsi -->
            <h5 class="section-title">
                <i class="fas fa-info-circle me-2"></i> Deskripsi
            </h5>
            <p>{{ $profil->deskripsi }}</p>
        </div>
    </div>
</div>
@endsection
