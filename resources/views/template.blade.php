<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/bootsrap/css/bootstrap.min.css') }}">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#002366;">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="{{ asset('assets/image/cocol.png') }}"alt="Logo" width="40" class="me-2">
        <span class="fw-bold text-warning">SMA NEGERI 1 SINGAPARNA</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#profil">Profil</a></li>
            <li class="nav-item"><a class="nav-link" href="#berita">Berita</a></li>
            <li class="nav-item"><a class="nav-link" href="#guru">Guru</a></li>
            <li class="nav-item"><a class="nav-link" href="#siswa">Siswa</a></li>
            <li class="nav-item"><a class="nav-link" href="#galeri">Galeri</a></li>
            <li class="nav-item"><a class="nav-link" href="#ekskul">Ekstrakurikuler</a></li>
            <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
        </ul>
        </div>
    </div>
    </nav>
    <div>
        @yield('content')
    </div>
    <footer class="text-center py-3" style="background-color:#001244; color:white;">
    <small>&copy; 2025 SMA Negeri 1 Singaparna</small>
    </footer>
</body>
</html>
