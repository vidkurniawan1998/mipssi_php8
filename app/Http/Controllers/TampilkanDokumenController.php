<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokumen;

class TampilkanDokumenController extends Controller
{
    public function lihatdokumen(Dokumen $dokumen)
    {
        //
        $dokumen = Dokumen::orderBy('id', 'DESC')->get();
        return view('tampilkandokumen', compact('dokumen'));
    }

    public function pilihtahundokumenandroid(Request $request)
    {
        $tahun_dokumen = $request->get('tahun_dokumen');
        $dokumen = Dokumen::where('tahun_dokumen', $tahun_dokumen)->paginate(10);
        return view('tampilkandokumen', compact('dokumen'));
    }

    public function caridokumenandroid(Request $request)
    {
        $cari       =   $request->get('cari');
        $dokumen    =   Dokumen::where('judul_dokumen', 'LIKE', '%' .$cari. '%')->paginate(10);
        return view('tampilkandokumen', compact('dokumen'));
    }
}
