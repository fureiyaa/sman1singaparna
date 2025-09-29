<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class AgendaController extends Controller
{
    private function decryptId($id){
        try {
            return Crypt::decrypt($id);
        } catch (DecryptException $e) {
            abort(404);
        }
    }

    public function index()
    {
        return view('agenda');
    }

    public function events()
    {
        $agenda = Agenda::all()->map(function($item) {
            return [
                'title' => $item->judul,
                'start' => $item->tanggal,
                'description' => $item->deskripsi,
                'location' => $item->lokasi,
            ];
        });

        return response()->json($agenda);
    }
    public function agenda()
    {
        $data['agenda'] = Agenda::all();
        return view('admin.agenda', $data);
    }

    public function createagenda()
    {
        return view('admin.create-agenda');
    }

    public function storeagenda(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'tanggal' => 'required|date',
            'lokasi' => 'nullable|string|max:100',
        ]);

        Agenda::create($request->all());

        return redirect()->route('admin.agenda')->with('success', 'Agenda berhasil ditambahkan');
    }

    public function deleteagenda($id)
    {
        $id = $this->decryptId($id);

        $berita = Agenda::findOrFail($id);
        $berita->delete();
        return redirect()->route('admin.agenda')->with('success', 'Berita deleted successfully.');
    }
}
