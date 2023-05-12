<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class LinkController extends Controller
{
    public function login()
    {
        return view ('login');
    }
    public function register()
    {
        return view('register');
    }
    public function home()
    {
        return view('home');
    }
    public function tambahpengumuman()
    {
        return view('tambahpengumuman');
    }

    public function daftarpengumuman()
    {
        return view('daftarpengumuman');
    }

    public function tambahdokumen()
    {
        return view('tambahdokumen');
    }

    public function daftardokumen()
    {
        return view('daftardokumen');
    }

    public function tambahmahasiswa()
    {
        return view('tambahmahasiswa');
    }

    public function daftarmahasiswa()
    {
        return view('daftarmahasiswa');
    }

    public function tambahdosen()
    {
        return view('tambahdosen');
    }

    public function daftardosen()
    {
        return view('daftardosen');
    }

    public function jumlahaksesbilitas()
    {
        return view('jumlahaksesbilitas');
    }

    public function daftarstaff()
    {
        return view ('daftarstaff');
    }
}