<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    public $timestamps = false; // Menonaktifkan timestamps

    protected $table = 'pegawai';
    
    protected $fillable = [
        'nik', 'nama', 'jk', 'jbtn', 'jnj_jabatan', 'kode_kelompok',
        'departemen', 'bidang', 'kode_resiko', 'kode_emergency', 'stts_wp',
        'stts_kerja', 'npwp', 'pendidikan', 'tmp_lahir', 'tgl_lahir', 'alamat', 'kota',
        'mulai_kerja', 'ms_kerja', 'indek', 'bpd', 'rekening', 'stts_aktif', 'ms_kerja',
        'wajibmasuk', 'mulai_kontrak', 'photo', 'no_ktp', 'indexins', 'gapok', 
        'cuti_diambil', 'pengurang', 'dankes'
    ];

    // Relasi ke tabel lain

    public function jnj_jabatan()
    {
        return $this->belongsTo(Jenjang::class);
    }

    public function kelompok_jabatan()
    {
        return $this->belongsTo(KelompokJabatan::class);
    }

    public function departemen()
    {
        return $this->belongsTo(Departemen::class);
    }

    public function bidang()
    {
        return $this->belongsTo(Bagian::class);
    }

    public function resiko_kerja()
    {
        return $this->belongsTo(ResikoKerja::class);
    }

    public function emergency_index()
    {
        return $this->belongsTo(TingkatEmergency::class);
    }

    public function stts_wp()
    {
        return $this->belongsTo(StatusWP::class);
    }

    public function stts_kerja()
    {
        return $this->belongsTo(StatusKerja::class);
    }

    public function indexins()
    {
        return $this->belongsTo(IndexIns::class);
    }

    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }

    public function pendidikan()
    {
        return $this->belongsTo(Pendidikan::class);
    }
}