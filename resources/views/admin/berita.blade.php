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
<div class="container py-4">
    <div class="page-header">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="page-title mb-0"><i class="fa-solid fa-newspaper"></i> Berita</h1>
        <div class="gap-3 d-flex">
            <a class="btn btn-light" href="">
            <i class="fas fa-plus-circle me-1"></i> Buat Berita
            </a>
        </div>
    </div>
</div>
@endsection
