<?php

namespace App\Http\Controllers;

use App\Pengumuman;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tambahpengumuman');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function prosestambahpengumuman(Request $request)
    {
        //
        $pengumuman = new Pengumuman();

        $pengumuman->angkatan = $request->input('angkatan');
        $pengumuman->judul_pengumuman = $request->input('judul_pengumuman');
        $pengumuman->deskripsi = $request->input('deskripsi');
        $pengumuman->tanggal_pengumuman = $request->input('tanggal_pengumuman');

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename  = time() . '.' . $extension;
            $file->move('uploads/pengumuman', $filename);
            $pengumuman->image = $filename;
        }
        
        $pengumuman->save();
        return redirect('/daftarpengumuman')->withSuccessMessage('Pengumuman Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function lihatpengumuman(Pengumuman $pengumuman)
    {
        //
        $pengumuman = Pengumuman::paginate(10);
        if(session('success_message'))
        {
            Alert::success('Berhasil', session('success_message'));
        }
        return view('daftarpengumuman', compact('pengumuman'));
    }

    public function caripengumuman(Request $request)
    {
        $cari       = $request->get('cari');
        $pengumuman = Pengumuman::where('judul_pengumuman', 'LIKE', '%' .$cari. '%')->paginate(10);
        return view('daftarpengumuman', compact('pengumuman'));
    }

    public function pilihangkatan(Request $request)
    {
       //
       $angkatan = $request->get('angkatan');
       $pengumuman = Pengumuman::where('angkatan', $angkatan)->paginate(10);
       return view('daftarpengumuman', compact('pengumuman'));
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function editpengumuman(Pengumuman $pengumuman, $id)
    {
        //
        $pengumuman = Pengumuman::find($id);
        return view('editpengumuman')->with('pengumuman', $pengumuman);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function prosesubahpengumuman(Request $request, Pengumuman $pengumuman, $id)
    {
        //
        $pengumuman = Pengumuman::find($id);

        $pengumuman->angkatan = $request->input('angkatan');
        $pengumuman->judul_pengumuman = $request->input('judul_pengumuman');
        $pengumuman->deskripsi = $request->input('deskripsi');
        $pengumuman->tanggal_pengumuman = $request->input('tanggal_pengumuman');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename  = time() . '.' . $extension;
            $file->move('uploads/pengumuman', $filename);
            $pengumuman->image = $filename;
        }
        $pengumuman->save();

        return redirect('/daftarpengumuman')->withSuccessMessage('Pengumuman Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */

     public function proseshapuspengumuman(Pengumuman $pengumuman, $id)
    {
        //
        $pengumuman = Pengumuman::where('id',$id)->first();
        
        if($pengumuman !=null)
        {
            $pengumuman->delete();
            return redirect('/daftarpengumuman')->withSuccessMessage('Pengumuman Berhasil Dihapus');
        }
        
        return redirect('/daftarpengumuman')->withSuccessMessage('Pengumuman Berhasil Dihapus');
    }

}
