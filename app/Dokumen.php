<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    //
    protected $fillable =[
        'tahun_dokumen', 'judul_dokumen', 'deskripsi', 'image' 
    ];

    protected $table = 'tb_dokumen';
    protected $primarykey = 'id';
}
