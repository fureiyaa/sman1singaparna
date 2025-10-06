@extends('template')
@section('content')
<style>
    h2,h4,h5{
        color: #002366;
        font-weight: bold;
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
    /* Card berita hover effect */
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
/* ekstra */
.card-ekstra {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  border-radius: 0.75rem;
  overflow: hidden;
}
.card-ekstra:hover {
  transform: translateY(-8px);
  box-shadow: 0 8px 20px rgba(0, 35, 102, 0.2);
}
.card-ekstra .overlay {
  position: absolute;
  top: 0; left: 0;
  width: 100%; height: 100%;
  background: rgba(0, 35, 102, 0.6);
  opacity: 0;
  transition: opacity 0.3s ease;
  border-radius: 0.5rem 0.5rem 0 0;
}
.card-ekstra:hover .overlay {
  opacity: 1;
}
.card-ekstra .overlay a {
  opacity: 0;
  transform: translateY(10px);
  transition: all 0.3s ease;
}
.card-ekstra:hover .overlay a {
  opacity: 1;
  transform: translateY(0);
}
</style>
<body style="background-color:#fdfdfd;">
<div class="img-fluid text-center py-5 d-flex align-items-center" style="background: url('{{ asset('assets/image/kokol1.png') }}'); background-repeat: no-repeat; background-size: cover; background-position: center; background-size: cover; position: relative; height: 800px;">
  <div style="background: rgba(0, 0, 50, 0.6); position: absolute; top:0; left:0; width:100%; height:100%;"></div>
  <div class="container position-relative" style="z-index: 2;">
    <img src="{{ asset('assets/image/cocol.png') }}" alt="Logo" width="150" class="mb-4 animate__animated animate__fadeInDown">
    <h1 class="fw-bold text-white animate__animated animate__fadeInUp">SMA NEGERI 1 SINGAPARNA</h1>
    <p class="lead text-white fst-italic animate__animated animate__fadeInUp animate__delay-2s">
      "Berprestasi, Berkarakter, dan Berbudaya"
    </p>
    <a href="{{ route('profil')}}" class="btn btn-warning fw-bold mt-3 shadow-lg animate__animated animate__fadeInUp animate__delay-2s">
      Lihat Profil
    </a>
  </div>
</div>
  <!-- Profil Sekolah -->
  <div id="profil" class="py-5">
    <div class="container">
      <h2 class="fw-bold text-center mb-4">Sambutan Kepala Sekolah</h2>
        <div class="row align-items-center">
        <!-- Foto Kepala Sekolah -->
        <div class="col-md-5 text-center mb-4 mb-md-0">
            <img src="{{ asset('assets/image/kepsek.png') }}"
                class="img-fluid animate__animated animate__fadeInUp animate__delay-1s"
                alt="Kepala Sekolah"
                style="width: 350px; height: 350px; object-fit: cover;">
            <h5 class="mt-3 fw-bold text-dark">Drs. Dede Iryanto</h5>
            <p class="text-muted fst-italic">Kepala SMA Negeri 1 Singaparna</p>
        </div>

        <!-- Sambutan -->
        <div class="col-md-7 animate__animated animate__fadeInUp animate__delay-2s">
            <h4 class="fw-bold mb-3">Assalamu’alaikum Warahmatullahi Wabarakatuh</h4>
            <p>
            Puji syukur kita panjatkan ke hadirat Allah SWT, karena atas rahmat dan karunia-Nya,
            SMA Negeri 1 Singaparna terus berkembang menjadi sekolah unggulan yang berprestasi,
            berkarakter, dan berbudaya. Kami berkomitmen untuk memberikan pelayanan pendidikan
            terbaik dengan menghadirkan lingkungan belajar yang kondusif, inovatif, dan penuh semangat.
            </p>
            <p>
            Melalui website resmi ini, kami berharap dapat memberikan informasi terbaru tentang
            kegiatan sekolah, prestasi siswa, program unggulan, serta berbagai aktivitas yang
            mendukung perkembangan peserta didik.
            </p>
            <p class="fw-bold text-warning">"Berprestasi, Berkarakter, dan Berbudaya"</p>
            <p>Wassalamu’alaikum Warahmatullahi Wabarakatuh.</p>
        </div>
        </div>
    </div>
</div>

<!-- Ekstrakurikuler -->
<div id="ekskul" class="py-5 bg-light">
  <div class="container">
    <h2 class="fw-bold text-center mb-4">Ekstrakurikuler</h2>
    <div class="row ">
      @foreach ($ekstra as $item)
      <div class=" col-3 mb-4">
          <div class="card shadow-sm p-3 border-0 d-flex flex-column align-items-center card-ekstra">
              <img src="{{ asset($item->gambar) }}" class="img-fluid mx-auto d-block" alt="logo" style="height:200px;">
              <p class="mt-2 fw-bold">{{ $item->nama_ekskul }}</p>
            <div class="overlay d-flex align-items-center justify-content-center">
              <a href="#"
                 class="btn btn-warning fw-bold">Selengkapnya</a>
            </div>
          </div>
      </div>
      @endforeach
        </div>
      </div>
      <!-- Loop ekskul -->
    </div>
  </div>
</div>

<section class="py-5 position-relative" style="background: url('{{ asset('assets/image/profil.jpg') }}') no-repeat center; background-size: cover; height: 500px; background-position: 0px -150px; align-items: center; display: flex;">
    <div style="background: rgba(0, 0, 50, 0.6); position: absolute; top:0; left:0; width:100%; height:100%;"></div>
    <div class="container text-white position-relative">
        <div class="row mb-4">
            <div class="col text-center">
                <img src="{{ asset('assets/image/cocol.png') }}" alt="Logo" width="100">
                <h2 class="text-white">Rekap Data<span class="fw-bold text-warning mt-2"> SMA Negeri 1 Singaparna</span></h2>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-3 col-6 mb-4">
                <h1 class="fw-bold">1,200</h1>
                <p>Jumlah Siswa</p>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <h1 class="fw-bold">80</h1>
                <p>Guru & Tenaga Pendidik</p>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <h1 class="fw-bold">35</h1>
                <p>Jumlah Rombongan Belajar</p>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <h1 class="fw-bold">25</h1>
                <p>Ekstrakurikuler</p>
            </div>
        </div>
    </div>
</section>


<!-- Galeri -->
<section id="fasilitas" class="py-5 bg-light">
  <div class="container">
    <h2 class="fw-bold text-center mb-5">Fasilitas Sekolah</h2>
    <div class="row g-4">

      <!-- Card Fasilitas 1 -->
      <div class="col-md-4 col-sm-6">
        <div class="card shadow-sm border-0 h-100 text-center p-3 fasilitas-card">
          <img src="{{ asset('assets/image/gor.jpeg') }}"
               class="img-fluid rounded mb-3"
               alt="Laboratorium"
               style="height:200px; object-fit:cover;">
          <h5 class="fw-bold">Gor Aula</h5>
          <p class="text-muted small">
            Menyediakan ruang serbaguna untuk berbagai kegiatan sekolah, seminar, dan acara olahraga.
          </p>
        </div>
      </div>

      <!-- Card Fasilitas 2 -->
      <div class="col-md-4 col-sm-6">
        <div class="card shadow-sm border-0 h-100 text-center p-3 fasilitas-card">
          <img src="{{ asset('assets/image/masjid.jpg') }}"
               class="img-fluid rounded mb-3"
               alt="Perpustakaan"
               style="height:200px; object-fit:cover;">
          <h5 class="fw-bold">Masjid</h5>
          <p class="text-muted small">
            Menyediakan fasilitas ibadah bagi siswa dan staf, mendukung kegiatan keagamaan di sekolah.
          </p>
        </div>
      </div>

      <!-- Card Fasilitas 3 -->
      <div class="col-md-4 col-sm-6">
        <div class="card shadow-sm border-0 h-100 text-center p-3 fasilitas-card">
          <img src="{{ asset('assets/image/lapang.jpg') }}"
               class="img-fluid rounded mb-3"
               alt="Lapangan Olahraga"
               style="height:200px; object-fit:cover;">
          <h5 class="fw-bold">Lapangan Olahraga</h5>
          <p class="text-muted small">
            Fasilitas olahraga untuk sepak bola, basket, voli, dan kegiatan ekstrakurikuler lainnya.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<div id="berita" class="py-5 bg-light">
  <div class="container">
    <h2 class="fw-bold text-center mb-4">Berita Terbaru</h2>
    <div class="row g-4">
      @foreach ($berita as $item)
      <div class="col-md-4">
        <div class="card border-0 shadow-sm berita-card h-100">
          <div class="position-relative">
            <img src="{{ asset($item->gambar) }}" class="card-img-top" alt="{{ $item->judul }}" style="height: 220px; object-fit: cover; border-radius: 0.5rem 0.5rem 0 0;">
            <div class="overlay d-flex align-items-center justify-content-center">
              <a href="{{ route('detail-berita', $item->id)}}"
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
</div>



  <!-- Kontak -->
  <section id="kontak" class="py-5 text-center" style="background-color:#002366; color:white;">
    <div class="container">
      <h3 class="fw-bold mb-3">Kontak</h3>
      <p>Jl. Raya Singaparna, Tasikmalaya</p>
      <p>Telp: 0265-123456</p>
    </div>
  </section>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
@endsection
