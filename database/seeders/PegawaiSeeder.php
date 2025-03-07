<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pegawai;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pegawai::create([
            'nama' => 'John Doe',
            'nip' => '12345',
            'id_departemen' => 1,
            'id_jabatan' => 1,
            'tanggal_masuk' => '2023-01-01',
        ]);
    }
}
