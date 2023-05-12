<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;

class LinkMobileController extends Controller
{
    //link intent mobile
    public function homemahasiswa()
    {
        $pengumuman = Pengumuman::all();
        return view('homemahasiswa', compact('pengumuman'));
    }

    public function notifikasimahasiswa()
    {
        return view ('notifikasimahasiswa');
    }
    
    public function profilmahasiswa()
    {
        return view ('profilmahasiswa');
    }

    public function pengaturanmahasiswa()
    {
        return view ('pengaturanmahasiswa');
    }

    public function kebijakanprivasi()
    {
        return view ('kebijakanprivasi');
    }
}
