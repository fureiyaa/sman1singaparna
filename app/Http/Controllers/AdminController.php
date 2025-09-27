<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\ekstrakurikuler;
use App\Models\Galeri;
use App\Models\Guru;
use App\Models\Siswa;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashboard(){
        $data ['berita'] = Berita::latest()->take(5)->get();
        $data['siswa'] = Siswa::all();
        $data['guru'] = Guru::all();
        $data['ekstra'] = ekstrakurikuler::all();

        return view('admin.dashboard', $data);
    }
    public function berita(){
        $data ['berita'] = Berita::all();
        return view('admin.berita', $data);
    }
    public function createberita(){
        return view('admin.create-berita');
    }
    public function storeberita( Request $request){
    {
        $request->validate([
            'judul' => 'required|string|max:50',
            'isi' => 'required|string',
            'tanggal' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $gambar = null;
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $berita = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('berita'), $berita);
            $gambar = 'berita/'.$berita;
        }

        Berita::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'tanggal' => $request->tanggal,
            'gambar' => $gambar,
            'user_id' => 1, // simpan user yang login
        ]);

        return redirect()->route('admin.berita')->with('success', 'Berita berhasil ditambahkan');
    }
    }
    public function guru(){
        $data['guru'] = Guru::all();
        return view('admin.guru', $data);
    }
    public function createguru(){
        return view('admin.create-guru');
    }
    public function storeguru( Request $request)
    {
        $request->validate([
            'nama_guru' => 'required|string|max:50',
            'nip' => 'required|string',
            'mapel' => 'required|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $foto = null;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $guru = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('guru'), $guru);
            $foto = 'guru/'.$guru;
        }

        Guru::create([
            'nama_guru' => $request->nama_guru,
            'nip' => $request->nip,
            'mapel' => $request->mapel,
            'foto' => $foto,
        ]);

        return redirect()->route('admin.guru')->with('success', 'Berita berhasil ditambahkan');
    }
    public function siswa(){
        $data['siswa'] = Siswa::all();
        return view('admin.siswa', $data);
    }

    public function create(){
        return view('admin.create-siswa');
    }
    public function store( Request $request){
    $request->validate([
        'nisn' => 'required|unique:siswas,nisn',
        'nama_siswa' => 'required',
        'jenis_kelamin' => 'required',
        'tahun_masuk' => 'required|integer',
    ]);

    Siswa::create($request->all());

        return redirect()->route('admin.siswa');
    }
    public function ekstra(){
        $data['ekstra'] = ekstrakurikuler::all();
        return view('admin.ekstra', $data);
    }
    public function createekstra(){
        return view('admin.create-ekstra');
    }
    public function storeekstra( Request $request)
    {
        $request->validate([
            'nama_ekskul' => 'required|string|max:40',
            'pembina' => 'required|string|max:40',
            'jadwal_latihan' => 'required|string|max:40',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $gambar = null;
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $ekstra = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('ekstra'), $ekstra);
            $gambar = 'ekstra/'.$ekstra;
        }

        ekstrakurikuler::create([
            'nama_ekskul' => $request->nama_ekskul,
            'pembina' => $request->pembina,
            'jadwal_latihan' => $request->jadwal_latihan,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambar,
        ]);

        return redirect()->route('admin.ekstra')->with('success', 'Berita berhasil ditambahkan');

    }
    public function galeri(){
        $data['galeri'] = Galeri::all();
        return view('admin.galeri', $data);
    }
    public function creategaleri(){
        return view('admin.create-galeri');
    }
    public function storegaleri( Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:50',
            'keterangan' => 'required|string',
            'file' => 'required|file|mimes:jpg,jpeg,png,mp4,mov,avi|max:10240',
            'kategori' => 'required|string|max:20',
            'tanggal' => 'required|date',
        ]);
        $filegaleri = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $galeri = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('galeri'), $galeri);
            $filegaleri = 'galeri/'.$galeri;
        }
        Galeri::create([
            'judul' => $request->judul,
            'keterangan' => $request->keterangan,
            'file' => $filegaleri,
            'kategori' => $request->kategori,
            'tanggal' => $request->tanggal,
        ]);
        return redirect()->route('admin.galeri')->with('success', 'Galeri berhasil ditambahkan');
    }
}

