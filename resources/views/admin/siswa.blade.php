@extends('admin.template')
@section('content')
<style>
    .page-header {
    background-color:#002366;
    color: white;
    padding: 1.5rem;
    border-radius: 0.5rem;
    margin-bottom: 2rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .page-title {
    font-weight: 700;
    font-size: 1.8rem;
    }
</style>
<div class="container-fluid py-4">
    <div class="page-header">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="page-title mb-0"><i class="fa-solid fa-graduation-cap"></i> Siswa</h1>
        <div class="gap-3 d-flex">
            <a class="btn btn-light" href="{{ route('admin.create-siswa') }}">
            <i class="fas fa-plus-circle me-1"></i> Tambah Siswa
            </a>
        </div>
    </div>
</div>
    <div class="card shadow-sm">
        <div class="card-body">
            <table id="example" class="table table-striped">
                <thead>
                    <tr>
                        <th>NISN</th>
                        <th>Nama Siswa</th>
                        <th>Jenis Kelamin</th>
                        <th>Tahun Masuk</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswa as $item)
                    <tr>
                    <td>{{ $item->nisn }}</td>
                    <td>{{ $item->nama_siswa }}</td>
                    <td>{{ $item->jenis_kelamin }}</td>
                    <td>{{ $item->tahun_masuk }}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{ route('admin.delete-siswa', Crypt::encrypt($item->id))}}" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
  <script>
        new DataTable('#example', {
        responsive: true
        });
    </script>
@endsection
