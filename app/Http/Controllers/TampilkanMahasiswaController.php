<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class TampilkanMahasiswaController extends Controller
{
    public function lihatmahasiswa(mahasiswa $mahasiswa)
    {
        //
        $mahasiswa = Mahasiswa::all();
        return view('tampilkanmahasiswa',compact('mahasiswa'));
    }

    public function pilihangkatanmahasiswaandroid(Request $request)
    {
        $angkatan = $request->get('angkatan');
        $mahasiswa = Mahasiswa::where('angkatan', $angkatan)->paginate(10);
        return view('tampilkanmahasiswa', compact('mahasiswa'));
    }

    public function carimahasiswaandroid(Request $request)
    {
        $cari = $request->get('cari');
        $mahasiswa = Mahasiswa::where('nama_lengkap', 'LIKE', '%' .$cari. '%')->paginate(10);
        return view('tampilkanmahasiswa', compact('mahasiswa'));
    }

    public function detailmahasiswa(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('detailmahasiswa',compact('mahasiswa'));
    }

}
