<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function prosesregister(Request $request)
    {
        //
        $validasi = $request->validate([
            'nama_lengkap' => 'required',
            'jabatan'=> 'required',
            'email' => 'required',
            'username' => ['required','string','min:8','max:10'],
            'password'=>['required', 'string', 'min:8','max:12'],
            'image' => 'required',
        ]);

        $user = new User();
        
        $user->nama_lengkap = $request->input('nama_lengkap');
        $user->jabatan = $request->input('jabatan');
        $user->email = $request->input('email');
        $user->username = $request->input('username');
        $user->password = bcrypt($request->input('password'));

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename  = time() . '.' . $extension;
            $file->move('uploads/staff', $filename);
            $user->image = $filename; 
        }
        $user->save();

        alert()->success('Berhasil','Admin Berhasil Ditambahkan');
        return redirect('/');

    }
}
