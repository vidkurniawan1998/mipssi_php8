<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class TampilkanStaffController extends Controller
{
    //
    public function lihatstaff()
    {
        //
        $user = User::all();
        return view('tampilkanstaff',compact('user'));
    }

    public function pilihjabatanandroid(Request $request)
    {
        $jabatan = $request->get('jabatan');
        $user = User::where('jabatan', $jabatan)->paginate(10);
        return view('tampilkanstaff', compact('user'));
    }

    public function caristaffandroid(Request $request)
    {
        $cari = $request->get('cari');
        $user = User::where('nama_lengkap', 'LIKE', '%' .$cari. '%')->paginate(10);
        return view('tampilkanstaff', compact('user'));
    } 

    public function detailstaff(Request $request, $id)
    {
        $user = User::find($id);
        return view('detailstaff',compact('user'));
    }
}
