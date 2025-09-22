@extends('admin.template')
@section('content')
    <h1 class="mb-4">Dashboard</h1>

    <div class="row">
        <div class="col-md-4">
            <div class="card shadow rounded-3 p-3 bg-primary text-white">
                <h4>Total Users</h4>
                {{-- <p class="display-6">{{ $totalUsers }}</p> --}}
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow rounded-3 p-3 bg-success text-white">
                <h4>Total Siswa</h4>
                {{-- <p class="display-6">{{ $totalSiswa }}</p> --}}
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow rounded-3 p-3 bg-warning text-white">
                <h4>Total Berita</h4>
                {{-- <p class="display-6">{{ $totalBerita }}</p> --}}
            </div>
        </div>
    </div>
@endsection
