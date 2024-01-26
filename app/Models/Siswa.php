<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $table = "siswa";
    protected $primarykey = "id";
    protected $fillable = [
        'id','nama', 'jenis_kelamin', 'address', 'alamat', 'Kelas', 'nama1', 'nama2', 'nama3', 'nama4'];
}
