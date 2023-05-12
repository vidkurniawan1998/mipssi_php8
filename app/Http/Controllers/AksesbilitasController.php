<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class AksesbilitasController extends Controller
{
    //
    public function jumlahaksesbilitas(Mahasiswa $mahasiswa)
    {
        $mahasiswa = Mahasiswa::all();
        return view ('jumlahaksesbilitas', compact('mahasiswa'));
    }
}
