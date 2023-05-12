<?php

namespace App\Http\Controllers;

use App\Dokumen;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('tambahdokumen');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function prosestambahdokumen(Request $request)
    {
        $dokumen = new Dokumen();

        $dokumen->tahun_dokumen = $request->input('tahun_dokumen');
        $dokumen->judul_dokumen = $request->input('judul_dokumen');
        $dokumen->deskripsi     = $request->input('deskripsi');

        if($request->hasfile('image'))
        {
            $file       = $request->file('image');
            $extension  = $file->getClientOriginalExtension();
            $filename   = time() . '.' . $extension;
            $file->move('uploads/dokumen', $filename);
            $dokumen->image = $filename;
        }

        $dokumen->save();

        return redirect('/daftardokumen')->withSuccessMessage('Dokumen Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dokumen  $dokumen
     * @return \Illuminate\Http\Response
     */
    public function lihatdokumen(Dokumen $dokumen)
    {
        //
        $dokumen = Dokumen::paginate(10);
        if(session('success_message'))
        {
            Alert::success('Berhasil', session('success_message'));
        }
        return view('daftardokumen', compact('dokumen'));
    }

    public function pilihtahundokumen(Request $request)
    {
        $tahun_dokumen = $request->get('tahun_dokumen');
        $dokumen = Dokumen::where('tahun_dokumen', $tahun_dokumen)->paginate(10);
        return view('daftardokumen', compact('dokumen'));
    }

    public function caridokumen(Request $request)
    {
        $cari       =   $request->get('cari');
        $dokumen    =   Dokumen::where('judul_dokumen', 'LIKE', '%' .$cari. '%')->paginate(10);
        return view('daftardokumen', compact('dokumen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dokumen  $dokumen
     * @return \Illuminate\Http\Response
     */
    public function editdokumen(Dokumen $dokumen, $id)
    {
        //
        $dokumen = Dokumen::find($id);
        return view('editdokumen')->with('dokumen', $dokumen);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dokumen  $dokumen
     * @return \Illuminate\Http\Response
     */
    public function prosesubahdokumen(Request $request, Dokumen $dokumen, $id)
    {
        //
       $dokumen = Dokumen::find($id);
       
       $dokumen->tahun_dokumen = $request->input('tahun_dokumen');
       $dokumen->judul_dokumen = $request->input('judul_dokumen');
       $dokumen->deskripsi     = $request->input('deskripsi');

       if($request->hasfile('image'))
       {
           $file        = $request->file('image');
           $extension   = $file->getClientOriginalExtension();
           $filename    = time() . '.' . $extension;
           $file->move('uploads/dokumen', $filename);
           $dokumen->image = $filename;
       }
       $dokumen->save();

       return redirect('/daftardokumen')->withSuccessMessage('Dokumen Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dokumen  $dokumen
     * @return \Illuminate\Http\Response
     */
    public function proseshapusdokumen(Dokumen $dokumen, $id)
    {
        $dokumen = Dokumen::where('id', $id)->first();

        if($dokumen !=null)
        {
            $dokumen->delete();
            return redirect('/daftardokumen')->withSuccessMessage('Dokumen Berhasil Dihapus');
        }

        return redirect('/daftardokumen')->withSuccessMessage('Dokumen Berhasil Dihapus');
    }
}
