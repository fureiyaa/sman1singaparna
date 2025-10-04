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
    .edit{
        background-color: #002366;
        color: white
    }
</style>

<div class="container-fluid py-4">
    <div class="page-header">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="page-title mb-0"><i class="fa-solid fa-user"></i> User</h1>
            <div class="gap-3 d-flex">
                <a class="btn btn-light" href="{{ route('admin.create-user') }}">
                    <i class="fas fa-plus-circle me-1"></i> Buat User
                </a>
            </div>
        </div>
    </div>
    <div class="card shadow-sm">
        <div class="card-body">
            <table id="example" class="table table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($user as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->username }}</td>
                            <td>{{ $item->role }}</td>
                            <td>
                                <a href="#" class="edit btn btn-sm">Edit</a>
                                <a href="{{ route('admin.delete-user', Crypt::encrypt($item->id))}}" class="btn btn-sm btn-danger">Hapus</a>
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
