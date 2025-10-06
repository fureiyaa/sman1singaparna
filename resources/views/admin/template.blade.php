<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin | SMA Negeri 1 Singaparna</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
 <link href="https://cdn.datatables.net/v/dt/dt-2.0.2/datatables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/v/dt/dt-2.0.2/datatables.min.js"></script>
    <script src ="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.0/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.0/js/responsive.bootstrap5.js"></script>
   <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css')}}">
   <link herf="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
   <link herf="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap5.css" rel="stylesheet">
   <link herf="https://cdn.datatables.net/responsive/3.0.0/css/responsive.bootstrap5.css" rel="stylesheet">
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
        <div class="nav-item"><a class="nav-link btn shadow-sm py-4 d-flex align-items-center justify-content-center" style="height: 30px;" href="{{ route('admin.profil') }}"> Profil Sekolah</a></div>
    </div>
    <ul class="nav flex-column">
        <li class="nav-item"><a href="/admin/dashboard" class="nav-link"><i class="fa-solid fa-tachometer-alt me-2"></i><span>Dashboard</span></a></li>
        <li class="nav-item"><a href="/admin/user" class="nav-link"><i class="fa-solid fa-user"></i><span> User</span></a></li>
        <li class="nav-item"><a href="/admin/guru" class="nav-link"><i class="fa-solid fa-person-chalkboard"></i> Guru</a></li>
        <li class="nav-item"><a href="/admin/siswa" class="nav-link"><i class="fa-solid fa-graduation-cap"></i> Siswa</a></li>
        <li class="nav-item"><a href="/admin/berita" class="nav-link"><i class="fa-solid fa-newspaper"></i> Berita</a></li>
        <li class="nav-item"><a href="/admin/ekstrakurikuler" class="nav-link"><i class="fa-solid fa-futbol"></i> Ekstrakurikuler</a></li>
        <li class="nav-item"><a href="/admin/agenda" class="nav-link"><i class="fa-solid fa-clipboard-list"></i> Agenda</a></li>
        <li class="nav-item"><a href="/admin/galeri" class="nav-link"><i class="fa-solid fa-photo-film"></i> Galeri</a></li>
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
