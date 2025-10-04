@extends('admin.template')
@section('content')
<style>
    
</style>
<div class="container mt-4">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="card shadow">
        <div class="card-header" style="background-color:#0d47a1; color:white;">
            <h4 class="mb-0">Tambah Siswa</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.store-ekstra') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama_ekskul" class="form-label">Nama Ekskul</label>
                    <input type="text" name="nama_ekskul" id="nama_ekskul" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="pembina" class="form-label">Nama Pembina</label>
                    <input type="text" name="pembina" id="pembina" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="jadwal_latihan" class="form-label">Jadwal Latihan</label>
                    <input type="text" name="jadwal_latihan" id="jadwal_latihan" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" name="deskripsi" id="deskripsi" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar/Logo</label>
                    <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*">
                </div>

                <div class="d-flex justify-content-between">
                    <a href="" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
