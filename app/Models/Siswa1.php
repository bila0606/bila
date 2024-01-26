<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa1 extends Model
{
    protected $table = "siswa1";
    protected $primarykey = "id";
    protected $fillable = [
        'id','nama_lengkap', 'jenis_kelamin', 'negara_kota_wilayah', 'usia', 'bahasa', 'pendidikan', 'status', 'ras_suku_warganegara', 'penghasilan', 'hobi'];
}
