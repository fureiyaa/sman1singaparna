<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\ekstrakurikuler;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){
        $data['ekstra'] = ekstrakurikuler::all();
        $data['berita'] = Berita::latest()->take(3)->get();
        return view('home', $data);
    }
}
