<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('tambahmahasiswa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function prosestambahmahasiswa(Request $request)
    {
        $validasi = $request->validate([
            'angkatan' => 'required',
            'status_mahasiswa' => 'required',
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'no_handphone' => 'required',
            'email' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'nim' => ['required','string','max:9'],
            'password' => ['required','string','min:8','max:12'],
            'image' => 'required',
        ]);

        //
        $mahasiswa = new Mahasiswa();

        $mahasiswa->angkatan = $request->input('angkatan');
        $mahasiswa->status_mahasiswa = $request->input('status_mahasiswa');
        $mahasiswa->nama_lengkap = $request->input('nama_lengkap');
        $mahasiswa->jenis_kelamin = $request->input('jenis_kelamin');
        $mahasiswa->tempat_lahir  = $request->input('tempat_lahir');
        $mahasiswa->tanggal_lahir = $request->input('tanggal_lahir');
        $mahasiswa->alamat = $request->input('alamat');
        $mahasiswa->no_telepon = $request->input('no_telepon');
        $mahasiswa->no_handphone = $request->input('no_handphone');
        $mahasiswa->email = $request->input('email');
        $mahasiswa->facebook = $request->input('facebook');
        $mahasiswa->twitter = $request->input('twitter');
        $mahasiswa->nim = $request->input('nim');
        $mahasiswa->password = $request->input('password');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename  = time() . '.' . $extension;
            $file->move('uploads/mahasiswa', $filename);
            $mahasiswa->image = $filename;
        }
        $mahasiswa->save();

        return redirect('/daftarmahasiswa')->withSuccessMessage('Akun Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function lihatmahasiswa(mahasiswa $mahasiswa)
    {
        //
        $mahasiswa = Mahasiswa::paginate(10);
        if(session('success_message'))
        {
            Alert::success('Berhasil', session('success_message'));
        }
        return view('daftarmahasiswa',compact('mahasiswa'));
    }

    public function pilihangkatandua(Request $request)
    {
        $angkatan = $request->get('angkatan');
        $mahasiswa = Mahasiswa::where('angkatan', $angkatan)->paginate(10);
        return view('daftarmahasiswa', compact('mahasiswa'));
    }

    public function carimahasiswa(Request $request)
    {
        $cari = $request->get('cari');
        $mahasiswa = Mahasiswa::where('nama_lengkap', 'LIKE', '%' .$cari. '%')->paginate(10);
        return view('daftarmahasiswa', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function editmahasiswa(mahasiswa $mahasiswa, $id)
    {
        //
        $mahasiswa = Mahasiswa::find($id);
        return view('editmahasiswa')->with('mahasiswa', $mahasiswa);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function prosesubahmahasiswa(Request $request, mahasiswa $mahasiswa, $id)
    {
        $validasi = $request->validate([
            'angkatan' => 'required',
            'status_mahasiswa' => 'required',
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'no_handphone' => 'required',
            'email' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'nim' => ['required','string','max:9'],
            'password' => ['required','string','min:8','max:255'],
            'image' => 'required',
        ]);
        //
        $mahasiswa = Mahasiswa::find($id);

        $mahasiswa->angkatan = $request->input('angkatan');
        $mahasiswa->status_mahasiswa = $request->input('status_mahasiswa');
        $mahasiswa->nama_lengkap = $request->input('nama_lengkap');
        $mahasiswa->jenis_kelamin = $request->input('jenis_kelamin');
        $mahasiswa->tempat_lahir  = $request->input('tempat_lahir');
        $mahasiswa->tanggal_lahir = $request->input('tanggal_lahir');
        $mahasiswa->alamat = $request->input('alamat');
        $mahasiswa->no_telepon = $request->input('no_telepon');
        $mahasiswa->no_handphone = $request->input('no_handphone');
        $mahasiswa->email = $request->input('email');
        $mahasiswa->facebook = $request->input('facebook');
        $mahasiswa->twitter = $request->input('twitter');
        $mahasiswa->nim = $request->input('nim');
        $mahasiswa->password = bcrypt($request->input('password'));

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename  = time() . '.' . $extension;
            $file->move('uploads/mahasiswa', $filename);
            $mahasiswa->image = $filename;
        }
        $mahasiswa->save();

        return redirect('/daftarmahasiswa')->withSuccessMessage('Akun Mahasiswa Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    
    public function proseshapusmahasiswa(Mahasiswa $mahasiswa, $id)
    {
        $mahasiswa = Mahasiswa::where('id', $id)->first();

        if($mahasiswa !=null)
        {
            $mahasiswa->delete();
            return redirect('/daftarmahasiswa')->withSuccessMessage('Mahasiswa Berhasil Dihapus');
        }
        return redirect('/daftarmahasiswa')->withSuccessMessage('Mahasiswa Berhasil Dihapus');
    }
}
