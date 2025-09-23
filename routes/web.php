<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');
Route::get('/admin/berita', function () {
    return view('admin.berita');
})->name('admin.berita');
Route::get('/admin/siswa', [AdminController::class, 'siswa'])->name('admin.siswa');
Route::get('/admin/guru', function () {
    return view('admin.guru');
})->name('admin.guru');
Route::get('/admin/ekstrakurikuler', function () {
    return view('admin.ekstra');
})->name('admin.ekstra');
Route::get('/create-siswa', [AdminController::class, 'create'])->name('admin.create-siswa');
Route::post('/create-siswa', [AdminController::class, 'store'])->name('admin.store-siswa');
