<?php

namespace App\Http\Controllers;

use App\Dosen;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('tambahdosen');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function prosestambahdosen(Request $request)
    {
        //
        $dosen = new Dosen();

        $dosen->nama_lengkap = $request->input('nama_lengkap');
        $dosen->jenis_kelamin = $request->input('jenis_kelamin');
        $dosen->tempat_lahir  = $request->input('tempat_lahir');
        $dosen->tanggal_lahir = $request->input('tanggal_lahir');
        $dosen->pendidikan_terakhir = $request->input('pendidikan_terakhir');
        $dosen->alamat = $request->input('alamat');
        $dosen->no_telepon = $request->input('no_telepon');
        $dosen->no_handphone = $request->input('no_handphone');
        $dosen->email = $request->input('email');
        
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/dosen', $filename);
            $dosen->image = $filename;
        }
        $dosen->save();

        return redirect('/daftardosen')->withSuccessMessage('Dosen Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function lihatdosen(Dosen $dosen)
    {
        //
        $dosen = Dosen::paginate(10);
        if(session('success_message'))
        {
            Alert::success('Berhasil', session('success_message'));
        }
        return view('daftardosen',compact('dosen'));
    }
    
    public function pilihpendidikanterakhir(Request $request)
    {
        $pendidikan_terakhir = $request->get('pendidikan_terakhir');
        $dosen = Dosen::where('pendidikan_terakhir', $pendidikan_terakhir)->paginate(10);
        return view('daftardosen', compact('dosen'));
    }

    public function caridosen(Request $request)
    {
        $cari = $request->get('cari');
        $dosen= Dosen::where('nama_lengkap', 'LIKE', '%' .$cari. '%')->paginate(10);
        return view('daftardosen', compact('dosen'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function editdosen(Dosen $dosen, $id)
    {
        //
        $dosen = Dosen::find($id);
        return view('editdosen')->with('dosen', $dosen);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function prosesubahdosen(Request $request, Dosen $dosen, $id)
    {
        //
        $dosen = Dosen::find($id);

        $dosen->nama_lengkap = $request->input('nama_lengkap');
        $dosen->jenis_kelamin= $request->input('jenis_kelamin');
        $dosen->tempat_lahir = $request->input('tempat_lahir');
        $dosen->tanggal_lahir= $request->input('tanggal_lahir');
        $dosen->pendidikan_terakhir = $request->input('pendidikan_terakhir');
        $dosen->alamat = $request->input('alamat');
        $dosen->no_telepon = $request->input('no_telepon');
        $dosen->no_handphone = $request->input('no_handphone');
        $dosen->email = $request->input('email');

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/dosen', $filename);
            $dosen->image = $filename;
        }
        $dosen->save();

        return redirect('/daftardosen')->withSuccessMessage('Dosen Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    
     public function proseshapusdosen(Dosen $dosen, $id)
     {
        $dosen = Dosen::where('id', $id)->first();

        if($dosen !=null)
        {
            $dosen->delete();
            return redirect('/daftardosen')->withSuccessMessage('Dosen Berhasil Dihapus');
        }
            return redirect('/daftardosen')->withSuccessMessage('Dosen Berhasil Dihapus');
     }
}
