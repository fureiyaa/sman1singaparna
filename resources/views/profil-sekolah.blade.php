@extends('template') {{-- ganti dengan layout utama user kamu --}}
@section('content')
<style>
    h6, h5, h4, h2, .log{
        color: #002366
    }
</style>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-5">
                    {{-- Logo dan Nama Sekolah --}}
                    <div class="text-center mb-4">
                        <img src="{{ asset('assets/image/' . $profil->logo) }}" alt="Logo Sekolah" width="100" class="mb-3">
                        <h2 class="fw-bold">{{ $profil->nama_sekolah }}</h2>
                        <p class="text-muted">NPSN: {{ $profil->npsn }}</p>
                    </div>

                    {{-- Kepala Sekolah --}}
                    <div class="mb-4 text-center">
                        <img src="{{ asset('assets/image/' . $profil->foto) }}" alt="Kepala Sekolah" class="mb-3" width="200" height="250">
                        <h5 class="fw-bold">{{ $profil->kepala_sekolah }}</h5>
                        <p class="text-muted">Kepala Sekolah</p>
                    </div>

                    {{-- Data Sekolah --}}
                    <div class="row mb-4 me-2">
                        <div class="card col-md-6 border-0 shadow-sm p-3 mb-3" style="border-radius: 15px; background: #f9f9f9;">
                            <div class="d-flex align-items-start">
                                <div class="me-3">
                                    <i class="log fa-solid fa-map-marker-alt" style="font-size: 1.8rem;"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1" style="color:#333;">Alamat</h6>
                                    <p class="mb-0 text-muted">{{ $profil->alamat }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="card col-md-6 border-0 shadow-sm p-3 mb-3" style="border-radius: 15px; background: #f9f9f9;">
                            <div class="d-flex align-items-start">
                                <div class="me-3">
                                    <i class="log fa-solid fa-map-marker-alt" style="font-size: 1.8rem;"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold">Kontak</h6>
                                    <p>{{ $profil->kontak }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="card col-md-6 border-0 shadow-sm p-3 mb-3" style="border-radius: 15px; background: #f9f9f9;">
                            <div class="d-flex align-items-start">
                                <div class="me-3">
                                    <i class="log fa-solid fa-map-marker-alt" style="font-size: 1.8rem;"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold">Tahun Berdiri</h6>
                                    <p>{{ $profil->tahun_berdiri }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Visi Misi --}}
                    <div class="mb-4">
                        <h4 class="fw-bold mb-3">Visi & Misi</h4>
                        <p>{!! nl2br(e($profil->visi_misi)) !!}</p>
                    </div>

                    {{-- Deskripsi --}}
                    <div>
                        <h4 class="fw-bold mb-3">Tentang Sekolah</h4>
                        <p style="text-align: justify;">{{ $profil->deskripsi }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
