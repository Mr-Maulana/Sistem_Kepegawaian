<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bagian;

class BagianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama_bagian' => 'Direktur'],
            ['nama_bagian' => 'Keperawatan'],
            ['nama_bagian' => 'Keuangan Akuntan'],
            ['nama_bagian' => 'Perencanaan'],
            ['nama_bagian' => 'Umum'],
            ['nama_bagian' => 'Pelayanan Medis'],
            ['nama_bagian' => 'Penunjang Medis'],
        ];

        // Insert data ke tabel bagian
        Bagian::insert($data);
    }
}