<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;

class TampilkanDosenController extends Controller
{
    public function lihatdosen(Dosen $dosen)
    {
        //
        $dosen = Dosen::all();
        return view('tampilkandosen',compact('dosen'));
    }
    
    public function pilihpendidikanterakhirandroid(Request $request)
    {
        $pendidikan_terakhir = $request->get('pendidikan_terakhir');
        $dosen = Dosen::where('pendidikan_terakhir', $pendidikan_terakhir)->paginate(10);
        return view('tampilkandosen', compact('dosen'));
    }

    public function caridosenandroid(Request $request)
    {
        $cari = $request->get('cari');
        $dosen= Dosen::where('nama_lengkap', 'LIKE', '%' .$cari. '%')->paginate(10);
        return view('tampilkandosen', compact('dosen'));
    }

    public function detaildosen(Request $request, $id)
    {
        $dosen = Dosen::find($id);
        return view('detaildosen',compact('dosen'));
    }
}
