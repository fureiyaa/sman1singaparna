@extends('template')

@section('content')
<style>
    .ekskul-header {
        background: linear-gradient(90deg, #002366, #003399);
        color: white;
        padding: 2rem 1rem;
        border-radius: 0.5rem;
        margin-bottom: 2rem;
        text-align: center;
    }
    .ekskul-header h2 {
        color: #ffffff;
        font-weight: bold;
    }
    .ekskul-card {
        border-radius: 0.75rem;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        text-align: center;
        background: #ffffff;
    }
    .ekskul-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 6px 18px rgba(0, 35, 102, 0.2);
    }
    .ekskul-card img {
        height: 200px;
        object-fit: contain;
        padding: 1rem;
    }
    .ekskul-card .card-body {
        background: #f9f9f9;
    }
    .ekskul-card .card-title {
        font-weight: bold;
        color: #002366;
        margin-bottom: 0.5rem;
    }
    .ekskul-card .overlay {
  position: absolute;
  top: 0; left: 0;
  width: 100%; height: 100%;
  background: rgba(0, 35, 102, 0.6);
  opacity: 0;
  transition: opacity 0.3s ease;
  border-radius: 0.5rem 0.5rem 0 0;
}
.ekskul-card:hover .overlay {
  opacity: 1;
}
.ekskul-card .overlay a {
  opacity: 0;
  transform: translateY(10px);
  transition: all 0.3s ease;
}
.ekskul-card:hover .overlay a {
  opacity: 1;
  transform: translateY(0);
}
</style>

<div class="container py-5 min-vh-100">
    <div class="ekskul-header animate__animated animate__fadeInDown" style="background: url('{{ asset('assets/image/ekstra.jpg') }}') no-repeat center; background-size: cover; height: 150px; background-position: center; display: flex; background-position: 0px -300px; flex-direction: column; justify-content: center; align-items: center; position: relative;">
        <div style="background: rgba(0, 0, 50, 0.6); position: absolute; top:0; left:0; width:100%; height:100%; border-radius: 0.5rem;"></div>
        <div class="position-relative">
            <h2>Ekstrakurikuler SMAN 1 SINGAPARNA</h2>
            <small>Kegiatan pengembangan minat dan bakat siswa</small>
        </div>
    </div>
    <div class="row g-4">
        @foreach($ekstra as $item)
        <div class="col-md-3 col-sm-6 animate__animated animate__fadeInUp">
            <div class="card ekskul-card h-100 shadow-sm">
                <img src="{{ asset($item->gambar) }}" class="card-img-top" alt="{{ $item->nama_ekskul }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->nama_ekskul }}</h5>
                    <p class="text-muted small">{{ Str::limit($item->deskripsi, 80, '...') }}</p>
                    <div class="overlay d-flex align-items-center justify-content-center">
                        <a href="{{ route('detail-ekstra', $item->id)}}"
                        class="btn btn-warning fw-bold">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
