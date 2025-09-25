<?php

namespace App\Http\Controllers;

use App\Models\ekstrakurikuler;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){
        $data['ekstra'] = ekstrakurikuler::all();
        return view('home', $data);
    }
}
