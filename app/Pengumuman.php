<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    //
    protected $fillable =[
        'angkatan', 'judul_pengumuman', 'deskripsi', 'tanggal_pengumuman', 'image'
    ];

    protected $table = 'tb_pengumuman';
    protected $primarykey = 'id';
}
