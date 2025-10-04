@extends('admin.template')
@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header" style="background-color:#0d47a1; color:white;">
            <h4 class="mb-0">Tambah Siswa</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.store-user') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" id="username" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select name="role" id="role" class="form-select" required>
                        <option value="">-- Pilih --</option>
                        <option value="Admin">Admin</option>
                        <option value="Operator">Operator</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="Password" class="form-control" required>
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
