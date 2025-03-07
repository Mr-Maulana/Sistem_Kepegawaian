<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jenjang;

class JenjangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama_jenjang' => 'tak berjenjang'],
            ['nama_jenjang' => 'APJB Ass Pj Bidang'],
            ['nama_jenjang' => 'DIRB Direktur Bidang'],
            ['nama_jenjang' => 'DIRU Direktur Utama'],
            ['nama_jenjang' => 'KASI Kepala Sift'],
            ['nama_jenjang' => 'KORB Koordinator Bidang'],
            ['nama_jenjang' => 'PjBd Pj Bidang'],
            ['nama_jenjang' => 'PjBid'],
            ['nama_jenjang' => 'PJBP Pj Bid Pendukung'],
            ['nama_jenjang' => 'PJBU Pj Bid Umum'],
            ['nama_jenjang' => 'PJSB Pj Sub Bidang'],
            ['nama_jenjang' => 'PLSN Staff / Pelaknasa'],
            ['nama_jenjang' => 'WDU WADIR UMUM'],
        ];

        // Insert data ke tabel Jenjang
        foreach ($data as $jenjang) {
            Jenjang::create($jenjang);
        }
    }
}