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
        <h1 class="page-title mb-0"><i class="fa-solid fa-newspaper"></i> Ekstrakurikuler</h1>
        <div class="gap-3 d-flex">
            <a class="btn btn-light" href="{{ route('admin.create-ekstra') }}">
            <i class="fas fa-plus-circle me-1"></i> Tambah Ekstrakurikuler
            </a>
        </div>
    </div>
</div>
<div class="card shadow-sm">
        <div class="card-body">
            <table id="example" class="table table-striped">
                <thead>
                    <tr>
                        <th>Logo</th>
                        <th>Nama Ekstrakurikuler</th>
                        <th>Jadwal latihan</th>
                        <th>Deskripsi</th>
                        <th>Pembina</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ekstra as $item)
                    <tr>
                    <td>
                        @if($item->gambar)
                            <img src="{{ asset($item->gambar) }}" width="100" class="img-thumbnail">
                        @else
                            <span class="text-muted">Tidak ada gambar</span>
                        @endif
                    </td>
                    <td>{{ $item->nama_ekskul }}</td>
                    <td>{{ $item->jadwal_latihan }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>{{ $item->pembina }}</td>
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
