<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengumumanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pengumuman', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('angkatan');
            $table->string('judul_pengumuman', 50);
            $table->string('deskripsi', 50);
            $table->date('tanggal_pengumuman');
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
        Schema::dropIfExists('tb_pengumuman');
    }
}
