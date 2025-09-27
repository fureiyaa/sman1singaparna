<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\ekstrakurikuler;
use App\Models\Galeri;
use App\Models\Siswa;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){
        $data['ekstra'] = ekstrakurikuler::all();
        $data['berita'] = Berita::latest()->take(3)->get();
        $data['galeri'] = Galeri::latest()->take(6)->get();
        $data['guru'] = Siswa::all();
        $data['siswa'] = Siswa::all();
        return view('home', $data);
    }
    public function berita(){
        $data['berita'] = Berita::all();
        return view('berita', $data);
    }
    public function show($id){
        $data['berita'] = Berita::findOrFail($id);
        return view('detail-berita', $data);
    }
    public function guru(){
        $data['guru'] = Siswa::all();
        return view('guru', $data);
    }
    public function galeri(){
        $data['galeri'] = Galeri::latest()->get();
        return view('galeri', $data);
    }
}
