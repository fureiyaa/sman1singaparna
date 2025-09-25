@extends('admin.template')
@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header" style="background-color:#0d47a1; color:white;">
            <h4 class="mb-0">Tambah Berita</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.store-agenda') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" rows="5" class="form-control" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" id="tanggal" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="lokasi" class="form-label">Lokasi</label>
                    <input type="text" name="lokasi" id="lokasi" class="form-control" required>
                </div>

                <div class="d-flex justify-content-between">
                    {{-- <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">Kembali</a> --}}
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
