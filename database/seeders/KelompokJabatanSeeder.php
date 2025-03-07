<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelompokJabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data yang akan diinput
        $kelompokJabatan = [
            ['nama_kelompok_jabatan' => 'ANGGOTA'],
            ['nama_kelompok_jabatan' => 'ANGGOTA POKJA'],
            ['nama_kelompok_jabatan' => 'KETUA TIM / PANITIA'],
            ['nama_kelompok_jabatan' => 'KETUA TIM AKREDITASI'],
            ['nama_kelompok_jabatan' => 'SEKRETARIS DAN BENDAHARA'],
            ['nama_kelompok_jabatan' => 'SEKRETARIS/KETUA POKJA'],
            ['nama_kelompok_jabatan' => 'WAKIL KETUA TIM'],
        ];

        // Insert data ke tabel kelompok_jabatan
        DB::table('kelompok_jabatan')->insert($kelompokJabatan);
    }
}