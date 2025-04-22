<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    
    protected $middleware = ['auth']; 

    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('dashboard', compact('mahasiswas'));
    }
}
