<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\UserController;
use App\Models\Agenda;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'home'])->name('home');
Route::get('/news', [UserController::class, 'berita'])->name('berita');
Route::get('/detail/berita/{id}', [UserController::class, 'detailberita'])->name('detail-berita');
Route::get('/gurus', [UserController::class, 'guru'])->name('guru');
Route::get('/galery', [UserController::class, 'galeri'])->name('siswa');
Route::get('/ekstrakurikuler', [UserController::class, 'ekstra'])->name('ekstra');
Route::get('/profil-sekolah', [UserController::class, 'profil'])->name('profil');
Route::get('/detail/ekstrakurikuler/{id}', [UserController::class, 'detailekstra'])->name('detail-ekstra');
Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda.index');
Route::get('/agenda/events', [AgendaController::class, 'events'])->name('agenda.events');


Route::get('/admin/dashboard',  [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/berita', [AdminController::class, 'berita'])->name('admin.berita');
Route::get('/admin/user', [AdminController::class, 'user'])->name('admin.user');
Route::get('/admin/profil', [AdminController::class, 'profil'])->name('admin.profil');
Route::get('/admin/siswa', [AdminController::class, 'siswa'])->name('admin.siswa');
Route::get('/admin/guru', [AdminController::class, 'guru'])->name('admin.guru');
Route::get('/admin/ekstrakurikuler', [AdminController::class, 'ekstra'])->name('admin.ekstra');
Route::get('/admin/galeri', [AdminController::class, 'galeri'])->name('admin.galeri');
Route::get('/admin/agenda', [AgendaController::class, 'agenda'])->name('admin.agenda');
Route::get('/create-siswa', [AdminController::class, 'create'])->name('admin.create-siswa');
Route::post('/create-siswa', [AdminController::class, 'store'])->name('admin.store-siswa');
Route::get('/delete-siswa/{id}', [AdminController::class, 'deletesiswa'])->name('admin.delete-siswa');
Route::get('/create-user', [AdminController::class, 'createuser'])->name('admin.create-user');
Route::post('/create-user', [AdminController::class, 'storeuser'])->name('admin.store-user');
Route::get('/delete-user/{id}', [AdminController::class, 'deleteuser'])->name('admin.delete-user');
Route::get('/create-berita', [AdminController::class, 'createberita'])->name('admin.create-berita');
Route::post('/create-berita', [AdminController::class, 'storeberita'])->name('admin.store-berita');
Route::get('/delete-berita/{id}', [AdminController::class, 'deleteberita'])->name('admin.delete-berita');
Route::get('/create-guru', [AdminController::class, 'createguru'])->name('admin.create-guru');
Route::post('/create-guru', [AdminController::class, 'storeguru'])->name('admin.store-guru');
Route::get('/delete-guru/{id}', [AdminController::class, 'deleteguru'])->name('admin.delete-guru');
Route::get('/create-ekstra', [AdminController::class, 'createekstra'])->name('admin.create-ekstra');
Route::post('/create-ekstra', [AdminController::class, 'storeekstra'])->name('admin.store-ekstra');
Route::get('/delete-ekstra/{id}', [AdminController::class, 'deleteekstra'])->name('admin.delete-ekstra');
Route::get('/create-galeri', [AdminController::class, 'creategaleri'])->name('admin.create-galeri');
Route::post('/create-galeri', [AdminController::class, 'storegaleri'])->name('admin.store-galeri');
Route::get('/delete-galeri/{id}', [AdminController::class, 'deletegaleri'])->name('admin.delete-galeri');
Route::get('/create-agenda', [AgendaController::class, 'createagenda'])->name('admin.create-agenda');
Route::post('/create-agenda', [AgendaController::class, 'storeagenda'])->name('admin.store-agenda');
Route::get('/agenda/{id}', [AgendaController::class, 'deleteagenda'])->name('admin.delete-agenda');
