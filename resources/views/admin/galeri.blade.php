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
            <h1 class="page-title mb-0"><i class="fa-solid fa-newspaper"></i> Berita</h1>
            <div class="gap-3 d-flex">
                <a class="btn btn-light" href="">
                    <i class="fas fa-plus-circle me-1"></i> Buat Galeri
                </a>
            </div>
        </div>
    </div>
    <div class="card shadow-sm">
        <div class="card-body">
            <table id="example" class="table table-striped">
                <thead>
                <tr>
                    <th>Judul</th>
                    <th>Keteranagan</th>
                    <th>File</th>
                    <th>Kategori</th>
                    <th width="15%">Aksi</th>
                </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($berita as $item)
                    <tr>
                        <td>
                            @if($item->gambar)
                                <img src="{{ asset($item->gambar) }}" width="100" class="img-thumbnail">
                            @else
                                <span class="text-muted">Tidak ada gambar</span>
                            @endif
                        </td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->isi }}</td>
                        <td>{{ $item->tanggal }}</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach --}}
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
