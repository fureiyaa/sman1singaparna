@extends('template')
@section('content')
<style>
    h2{
        color: #002366;
        font-weight: bold;
    }
</style>
<body style="background-color:#fdfdfd;">
<div class="img-fluid text-center py-5 d-flex align-items-center" style="background: url('{{ asset('assets/image/kokol1.png') }}'); background-repeat: no-repeat; background-size: cover; background-position: center; background-size: cover; position: relative; height: 800px;">
  <div style="background: rgba(0, 0, 50, 0.6); position: absolute; top:0; left:0; width:100%; height:100%;"></div>
  <div class="container position-relative" style="z-index: 2;">
    <img src="{{ asset('assets/image/cocol.png') }}" alt="Logo" width="150" class="mb-4 animate__animated animate__fadeInDown">
    <h1 class="fw-bold text-warning animate__animated animate__fadeInUp">SMA NEGERI 1 SINGAPARNA</h1>
    <p class="lead text-white fst-italic animate__animated animate__fadeInUp animate__delay-2s">
      "Berprestasi, Berkarakter, dan Berbudaya"
    </p>
    <a href="#profil" class="btn btn-warning fw-bold mt-3 shadow-lg animate__animated animate__fadeInUp animate__delay-2s">
      Lihat Profil
    </a>
  </div>
</div>
  <!-- Profil Sekolah -->
  <div id="profil" class="py-5">
    <div class="container">
      <h2 class="fw-bold text-center mb-4">Profil Sekolah</h2>
      <div class="row align-items-center">
        <div class="col-md-6">
          <img src="assets/sekolah.jpg" class="img-fluid rounded shadow" alt="Profil Sekolah">
        </div>
        <div class="col-md-6">
          <h4>Kepala Sekolah: <span class="text-warning">Nama Kepala Sekolah</span></h4>
          <p>Alamat: Jl. Raya Singaparna, Tasikmalaya</p>
          <p>Visi Misi: Menjadi sekolah unggulan dalam prestasi, berkarakter, dan berbudaya.</p>
          <p>Berdiri sejak: 1980</p>
        </div>
      </div>
    </div>
  </div>

  <div id="berita" class="py-5 bg-light">
    <div class="container">
      <h2 class="fw-bold text-center mb-4">Berita Terbaru</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card shadow-sm">
            <img src="assets/berita1.jpg" class="card-img-top" alt="Berita">
            <div class="card-body">
              <h5 class="card-title">Judul Berita</h5>
              <p class="card-text">Isi singkat berita...</p>
              <a href="#" class="btn btn-sm btn-primary">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <!-- Looping berita lainnya -->
      </div>
    </div>
  </div>

  <!-- Guru -->
  <section id="guru" class="py-5">
    <div class="container">
      <h2 class="fw-bold text-center mb-4">Guru</h2>
      <div class="row">
        <div class="col-md-3 text-center">
          <img src="assets/guru1.jpg" class="rounded-circle mb-2" width="120" alt="Guru">
          <h6>Nama Guru</h6>
          <small>Mapel: Matematika</small>
        </div>
        <!-- Looping guru -->
      </div>
    </div>
  </section>

  <!-- Siswa -->
  <section id="siswa" class="py-5 bg-light">
    <div class="container">
      <h2 class="fw-bold text-center mb-4">Data Siswa</h2>
      <table class="table table-bordered table-striped">
        <thead class="table-dark">
          <tr>
            <th>NISN</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tahun Masuk</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1234567890</td>
            <td>Nama Siswa</td>
            <td>Laki-Laki</td>
            <td>2022</td>
          </tr>
          <!-- Loop siswa -->
        </tbody>
      </table>
    </div>
  </section>

  <!-- Galeri -->
  <section id="galeri" class="py-5">
    <div class="container">
      <h2 class="fw-bold text-center mb-4">Galeri</h2>
      <div class="row">
        <div class="col-md-3">
          <div class="card">
            <img src="assets/foto1.jpg" class="card-img-top" alt="Foto">
            <div class="card-body text-center">
              <p>Judul Foto</p>
            </div>
          </div>
        </div>
        <!-- Loop galeri -->
      </div>
    </div>
  </section>

  <!-- Ekstrakurikuler -->
  {{-- <div style="height: 5px; width: auto; background-color:#002366"></div> --}}
  <div id="ekskul" class="py-5 bg-light">
    <div class="container">
      <h2 class="fw-bold text-center mb-4">Ekstrakurikuler</h2>
      <div class="row ">
        @foreach ($ekstra as $item)
        <div class=" col-3 mb-4">
            <div class="card shadow-sm p-3 border-0 d-flex flex-column align-items-center">
                <img src="{{ asset($item->gambar) }}" class="img-fluid mx-auto d-block" alt="logo" style="height:200px;">
                <p class="mt-2 fw-bold">{{ $item->nama_ekskul }}</p>
            </div>
        </div>
        @endforeach
          </div>
        </div>
        <!-- Loop ekskul -->
      </div>
    </div>
  </div>

  <!-- Kontak -->
  <section id="kontak" class="py-5 text-center" style="background-color:#002366; color:white;">
    <div class="container">
      <h2 class="fw-bold mb-3">Kontak</h2>
      <p>Jl. Raya Singaparna, Tasikmalaya</p>
      <p>Telp: 0265-123456</p>
    </div>
  </section>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
@endsection
