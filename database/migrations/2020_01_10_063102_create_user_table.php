<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_staff', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_lengkap', 50);
            $table->enum('jabatan',['Ketua Program Studi Sistem Informasi','Sekertaris Program Studi Sistem Informasi','Staff Program Studi Sistem Informasi']);
            $table->string('email', 50);
            $table->string('username', 50)->unique();
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
        Schema::dropIfExists('tb_staff');
    }
}
