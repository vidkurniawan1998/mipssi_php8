<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_mahasiswa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('angkatan');
            $table->string('status_mahasiswa');
            $table->string('nama_lengkap', 50);
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir', 50);
            $table->date('tanggal_lahir');
            $table->string('alamat', 50);
            $table->string('no_telepon', 50);
            $table->string('no_handphone', 50);
            $table->string('email', 50);
            $table->string('facebook', 50);
            $table->string('twitter', 50);
            $table->string('nim', 50)->unique();
            $table->string('password');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_mahasiswa');
    }
}
