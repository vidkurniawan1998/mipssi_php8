<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //
    protected $fillable =[
        'angkatan', 'status_mahasiswa', 'nama_lengkap', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'no_telepon', 'no_handphone', 'email', 'facebook', 'twitter', 'nim', 'password', 'image'
    ];

    protected $table = 'tb_mahasiswa';
    protected $primarykey = 'id';
}
