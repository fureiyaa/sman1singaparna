<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\ekstrakurikuler;
use App\Models\Galeri;
use App\Models\Guru;
use App\Models\profil_sekolah;
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
        $data['profil'] = profil_sekolah::first();
        return view('home', $data);
    }
    public function berita(){
        $data['berita'] = Berita::all();
        return view('berita', $data);
    }
    public function detailberita($id){
        $data['berita'] = Berita::findOrFail($id);
        $data['terbaru'] = Berita::latest()->take(4)->get();

        return view('detail-berita', $data);
    }
    public function guru(){
        $data['kepsek'] = Guru::first();
        $data['guru'] = Guru::skip(1)->take(PHP_INT_MAX)->get();
        return view('guru', $data);
    }

    public function galeri(){
        $data['galeri'] = Galeri::latest()->get();
        return view('galeri', $data);
    }
    public function ekstra(){
        $data['ekstra'] = ekstrakurikuler::all();
        return view('ekstra', $data);
    }
    public function detailekstra($id){
        $data['ekskul'] = ekstrakurikuler::findOrFail($id);

        return view('detail-ekstra', $data);
    }
    public function profil(){
        $data['profil'] = profil_sekolah::first();
        return view('profil-sekolah', $data);
    }
}
