<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beranda extends Model
{
    protected $table = "beranda";
    protected $primarykey = "id";
    protected $fillable = [
        'id','nama_lengkap', 'jenis_kelamin', 'address', 'alamat', 'Kelas', 'usia', 'pendidikan', 'siswa'];
}
