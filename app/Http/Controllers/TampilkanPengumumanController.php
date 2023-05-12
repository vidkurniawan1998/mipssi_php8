<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;

class TampilkanPengumumanController extends Controller
{
    public function lihatpengumuman(Pengumuman $pengumuman)
    {
        //
        $pengumuman = Pengumuman::orderBy('id', 'DESC')->get();
        return view('tampilkanpengumuman', compact('pengumuman'));
    }

    public function caripengumumanandroid(Request $request)
    {
        $cari       = $request->get('cari');
        $pengumuman = Pengumuman::where('judul_pengumuman', 'LIKE', '%' .$cari. '%')->paginate(10);
        return view('tampilkanpengumuman', compact('pengumuman'));
    }

    public function pilihangkatanandroid(Request $request)
    {
       //
       $angkatan = $request->get('angkatan');
       $pengumuman = Pengumuman::where('angkatan', $angkatan)->paginate(10);
       return view('tampilkanpengumuman', compact('pengumuman'));
    }
}
