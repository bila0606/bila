<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswa1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa1', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('jenis_kelamin');
            $table->string('negara_kota_wilayah')->nullable();
            $table->string('usia')->nullable();
            $table->string('bahasa')->nullable();
            $table->string('pendidikan');
            $table->string('status');
            $table->string('ras_suku_warganegara');
            $table->string('penghasilan');
            $table->string('hobi');
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
        Schema::dropIfExists('siswa1');
    }
}
