@extends('template')

@section('content')
<style>
    /* Header */
    .berita-header {
        background: linear-gradient(90deg, #002366, #003399);
        color: white;
        padding: 1.5rem;
        border-radius: 0.5rem;
        margin-bottom: 2rem;
        text-align: center;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.15);
    }

    .berita-header h2 {
        font-weight: bold;
        margin: 0;
    }

    /* Card Berita */
.berita-card {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  border-radius: 0.75rem;
  overflow: hidden;
}
.berita-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 8px 20px rgba(0, 35, 102, 0.2);
}
.fasilitas-card {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  border-radius: 0.75rem;
  overflow: hidden;
}
.fasilitas-card:hover {
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
</style>

<div class="container my-5">
    <!-- Header -->
    <div class="berita-header animate__animated animate__fadeInDown" style="background: url('{{ asset('assets/image/berita.jpg') }}') no-repeat center; background-size: cover; height: 150px; background-position: 0px -450px; align-items: center; display: flex; justify-content: center; border-radius: 0.5rem; flex-direction: column; position: relative;">
        <div style="background: rgba(0, 0, 50, 0.6); position: absolute; top:0; left:0; width:100%; height:100%; border-radius: 0.5rem;"></div>
        <div class="container position-relative">
            <h2><i class="fa-solid fa-newspaper me-2"></i> Berita SMAN 1 SINGAPARNA</h2>
            <p class="mb-0">Kumpulan informasi terbaru seputar kegiatan dan prestasi sekolah</p>
        </div>
    </div>

    <!-- Daftar Berita -->
    <div class="row g-4">
        <!-- Looping data berita -->
        @foreach ($berita as $item)
        <div class="col-md-4 animate__animated animate__fadeInUp">
            <div class="card border-0 shadow-sm berita-card h-100">
            <div class="position-relative">
                <img src="{{ asset($item->gambar) }}" class="card-img-top" alt="{{ $item->judul }}" style="height: 220px; object-fit: cover; border-radius: 0.5rem 0.5rem 0 0;">
                <div class="overlay d-flex align-items-center justify-content-center">
                <a href="#"
                    class="btn btn-warning fw-bold">Baca Selengkapnya</a>
                </div>
            </div>
            <div class="card-body">
                <h5 class="card-title fw-bold text-dark">{{ $item->judul }}</h5>
                <p class="card-text text-muted">
                {{ Str::limit($item->isi, 100, '...') }}
                </p>
            </div>
            <div class="card-footer bg-white border-0 text-muted small">
                <i class="fa-regular fa-calendar"></i>
                {{ $item->created_at->format('d M Y') }}
            </div>
            </div>
        </div>
      @endforeach
    </div>
</div>
@endsection
