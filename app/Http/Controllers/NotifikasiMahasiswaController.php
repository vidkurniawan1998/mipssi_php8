<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;

class NotifikasiMahasiswaController extends Controller
{
    //
    public function notifikasipengumuman()
    {
        $pengumuman = Pengumuman::orderBy('id','DESC')->get();
        return view('notifikasimahasiswa', compact('pengumuman'));
    }
}
