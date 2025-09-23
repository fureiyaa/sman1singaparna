@extends('admin.template')
@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header" style="background-color:#0d47a1; color:white;">
            <h4 class="mb-0">Tambah Siswa</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.store-siswa') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nisn" class="form-label">NISN</label>
                    <input type="text" name="nisn" id="nisn" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="nama_siswa" class="form-label">Nama Siswa</label>
                    <input type="text" name="nama_siswa" id="nama_siswa" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-select" required>
                        <option value="">-- Pilih --</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="tahun_masuk" class="form-label">Tahun Masuk</label>
                    <input type="number" name="tahun_masuk" id="tahun_masuk" class="form-control" placeholder="contoh: 2023" required>
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
