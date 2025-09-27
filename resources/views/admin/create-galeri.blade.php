@extends('admin.template')
@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header" style="background-color:#0d47a1; color:white;">
            <h4 class="mb-0">Tambah Berita</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.store-galeri') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <textarea name="keterangan" id="keterangan" rows="5" class="form-control" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="file" class="form-label">File</label>
                    <input type="file" name="file" id="file" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select name="kategori" id="kategori" class="form-select" required>
                        <option value="">-- Pilih --</option>
                        <option value="Foto">Foto</option>
                        <option value="Video">Video</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="tanggal" class="form-label">tanggal</label>
                    <input type="date" name="tanggal" id="tanggal" class="form-control" required>
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
