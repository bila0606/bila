<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBerandaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beranda', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('jenis_kelamin')->nullable();
            $table->string('address')->nullable();
            $table->string('alamat')->nullable();
            $table->string('Kelas');
            $table->string('usia');
            $table->string('pendidikan');
            $table->string('siswa');
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
        Schema::dropIfExists('beranda');
        
    }
}
