<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KelompokJabatan extends Model
{
    protected $table = 'kelompok_jabatan';
    protected $fillable = ['kode_kelompok', 'nama_kelompok', 'index'];
}
