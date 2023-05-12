<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login');
    }

    public function proseslogin(Request $request)
    {

        $username = $request->username;
        $password = $request->password;

        $data = User::where('username',$username)->first();
        if($data)
        { //apakah email tersebut ada atau tidak
            if(!Hash::check($password,$data->password))
            {
                alert()->success('Selamat','Anda Berhasil Login');  
                Session::put('nama_lengkap',$data->nama_lengkap);
                Session::put('jabatan',$data->jabatan);
                return redirect('home');
            }
            else
            {
                alert()->error('Mohon Maaf','Username dan Password Anda Salah');
                return redirect('/');
            }
        }
        else
        {
            alert()->error('Mohon Maaf','Username dan Password Anda Salah');
            return redirect('/');
        }
    }

    public function home()
    {
        return view('home');
    }

    public function proseslogout()
    {
        Session::flush();
        return redirect('/');
    }
}
