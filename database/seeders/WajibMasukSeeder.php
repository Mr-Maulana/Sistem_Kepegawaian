<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WajibMasuk;

class WajibMasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama_wajib_masuk' => '-',
                'keterangan' => 'Wajib masuk 1 bulan-hari libur',
            ],
            [
                'nama_wajib_masuk' => '-1',
                'keterangan' => 'Wajib masuk kosong',
            ],
            [
                'nama_wajib_masuk' => '-2',
                'keterangan' => 'Wajib masuk 1 bulan-4 hari',
            ],
            [
                'nama_wajib_masuk' => '-3',
                'keterangan' => 'Wajib masuk 1 bulan-2 hari-linas',
            ],
            [
                'nama_wajib_masuk' => '-4',
                'keterangan' => 'Wajib masuk 1 bulan-hari akhad',
            ],
            [
                'nama_wajib_masuk' => '-5',
                'keterangan' => 'Wajib mengikuti penjadwalan',
            ],
        ];

        // Insert data ke tabel wajib_masuk
        foreach ($data as $item) {
            WajibMasuk::create($item);
        }
    }
}