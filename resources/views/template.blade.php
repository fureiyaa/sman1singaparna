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
<style>
    ul.navbar-nav .nav-link {
        font-weight: 500;
        margin-left: 15px;
        color: #ffffff;
    }
    .navbar-nav .nav-link {
        color: #ffffff; /* default putih */
        transition: color 0.3s ease, transform 0.2s ease;
    }

    .navbar-nav .nav-link:hover {
        color: #FFD700; /* kuning emas saat hover */
        transform: translateY(-2px); /* sedikit naik saat hover */
    }
</style>
<body>
    <div class="fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#001244; height: 40px;">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" ><i class="fa-solid fa-location-dot"></i> Jl. Perikanan Darat, Cipakat, Singaparna, Tasikmalaya, Jawa Barat 46416</a></li>
                    <li class="nav-item"><a class="nav-link active" ><i class="fa-solid fa-envelope"></i> sman1singaparna@gmail.com</a></li>
                    <li class="nav-item"><a class="nav-link active" ><i class="fa-solid fa-phone"></i> (0265) 545203</a></li>
                </ul>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#002366">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('assets/image/cocol.png') }}"alt="Logo" width="50" class="me-2">
                <span class="fw-bold">SMA NEGERI 1 SINGAPARNA</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/agenda">Agenda</a></li>
                    <li class="nav-item"><a class="nav-link" href="/news">Berita</a></li>
                    <li class="nav-item"><a class="nav-link" href="/gurus">Guru</a></li>
                    <li class="nav-item"><a class="nav-link" href="/galery">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="/ekstrakurikuler">Ekstrakurikuler</a></li>
                </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="mt-5 pt-4">
        @yield('content')
    </div>
    <footer class="text-center py-3" style="background-color:#001244; color:white;">
    <small>&copy; 2025 SMA Negeri 1 Singaparna</small>
    </footer>
</body>
</html>
