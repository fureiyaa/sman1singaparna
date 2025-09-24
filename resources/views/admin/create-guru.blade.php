@extends('admin.template')
@section('content')
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
            <form action="{{ route('admin.store-guru') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama_guru" class="form-label">Nama Guru</label>
                    <input type="text" name="nama_guru" id="nama_guru" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="text" name="nip" id="nip" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="mapel" class="form-label">Mata Pelajaran</label>
                    <input type="text" name="mapel" id="mapel" class="form-control" placeholder="contoh: PKN" required>
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" name="foto" id="foto" class="form-control" accept="image/*">
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
