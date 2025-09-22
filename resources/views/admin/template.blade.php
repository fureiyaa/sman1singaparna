<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin | SMA Negeri 1 Singaparna</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css')}}">
  <style>
    body {
      background-color: #fdfdfd;
    }
    .sidebar {
      height: 100vh;
      width: 240px;
      position: fixed;
      top: 0;
      left: 0;
      background-color: #002366;
      color: white;
      padding-top: 20px;
    }
    .sidebar .nav-link {
      color: white;
      margin: 5px 0;
    }
    .sidebar .nav-link.active,
    .sidebar .nav-link:hover {
      background-color: #FFD700;
      color: #002366;
      border-radius: 5px;
    }
    .content {
      margin-left: 240px;
      padding: 20px;
    }
  </style>
</head>
<body>
  <div class="sidebar d-flex flex-column p-3">
    <div class="text-center mb-4">
      <img src="{{ asset('assets/image/cocol.png') }}" alt="Logo" width="80" class="mb-2">
      <h5 class="fw-bold text-warning">SMAN 1 SINGAPARNA</h5>
    </div>
    <ul class="nav flex-column">
        <li class="nav-item"><a href="/admin/dashbord" class="nav-link"><i class="fas fa-tachometer-alt"></i><span> Dashboard</span></a></li>
        <li class="nav-item"><a href="" class="nav-link"><i class="fa-solid fa-newspaper"></i> Berita</a></li>
        <li class="nav-item"><a href="" class="nav-link"><i class="fa-solid fa-person-chalkboard"></i> Guru</a></li>
        <li class="nav-item"><a href="" class="nav-link"><i class="fa-solid fa-graduation-cap"></i> Siswa</a></li>
        <li class="nav-item"><a href="" class="nav-link"><i class="fa-solid fa-futbol"></i> Ekskul</a></li>
      <li class="nav-item mt-3">
        <a href="{{ url('/logout') }}" class="btn btn-danger w-100">Logout</a>
      </li>
    </ul>
  </div>
  <div class="content">
    @yield('content')
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
