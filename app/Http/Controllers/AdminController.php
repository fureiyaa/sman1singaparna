<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class AdminController extends Controller
{
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
}
