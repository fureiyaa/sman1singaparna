<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/admin/dashbord', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');
