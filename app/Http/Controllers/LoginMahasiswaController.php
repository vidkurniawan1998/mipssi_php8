<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class LoginMahasiswaController extends Controller
{
    public function index()
    {
        return view('loginmahasiswa');
    }

    public function prosesloginmahasiswa(Request $request)
    {

        $nim = $request->nim;
        $password = $request->password;

        $data = Mahasiswa::where('nim',$nim)->first();

        if($data)
        { //apakah email tersebut ada atau tidak
            if(!Hash::check($password,$data->password))
            {
                alert()->success('Selamat','Anda Berhasil Login');
                Session::put('angkatan',$data->angkatan);
                Session::put('status_mahasiswa',$data->status_mahasiswa);  
                Session::put('nama_lengkap',$data->nama_lengkap);
                Session::put('jenis_kelamin',$data->jenis_kelamin);
                Session::put('tempat_lahir',$data->tempat_lahir);
                Session::put('tanggal_lahir',$data->tanggal_lahir);
                Session::put('alamat',$data->alamat);
                Session::put('no_telepon',$data->no_telepon);
                Session::put('no_handphone',$data->no_handphone);
                Session::put('facebook',$data->facebook);
                Session::put('twitter',$data->twitter);
                Session::put('email',$data->email);
                Session::put('nim',$data->nim);
                Session::put('image',$data->image);
                return redirect('homemahasiswa');
            }
            else
            {
                alert()->error('Mohon Maaf','Nim dan Password Anda Salah');
                return redirect('loginmahasiswa');
            }
        }
        else
        {
            alert()->error('Mohon Maaf','Nim dan Password Anda Salah');
                return redirect('loginmahasiswa');
        }
    }

    public function logoutmahasiswa()
    {
        Session::flush();
        return redirect('loginmahasiswa');
    }
}
