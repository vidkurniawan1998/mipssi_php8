<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //

    protected $fillable =[
        'nama_lengkap', 'jabatan', 'email', 'username', 'password','image'
    ];

    protected $table = 'tb_staff';
    protected $primarykey = 'id';
}
