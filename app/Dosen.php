<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    //
    protected $fillable =[
        'nama_lengkap', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'pendidikan_terakhir', 'alamat', 'no_telepon', 'no_handphone', 'email', 'foto_dosen'
    ];

    protected $table = 'tb_dosen';
    protected $primarykey = 'id';
}
