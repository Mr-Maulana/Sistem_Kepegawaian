<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Departemen;

class DepartemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departemen = [
            ['nama_departemen' => 'ANA POLI ANAK'],
            ['nama_departemen' => 'BDGF POLI BEDAH DIGESTIF'],
            ['nama_departemen' => 'BDM POLI GIGI BEDAH MULUT'],
            ['nama_departemen' => 'BED POLI BEDAH'],
            ['nama_departemen' => 'BKL POL BEDAH KEPALA LEHER'],
            ['nama_departemen' => 'BVKR POL BEDAH VASKULER'],
            ['nama_departemen' => 'DOK DOKTER'],
            ['nama_departemen' => 'FAR FARMAS'],
            ['nama_departemen' => 'GIG POLI GIGI DAN MULUT'],
            ['nama_departemen' => 'GTRI POLI GERIATRI'],
            ['nama_departemen' => 'HDL INSTALASI HEMODELISA'],
            ['nama_departemen' => 'GD INSTALASI GAWAT DARURAT'],
            ['nama_departemen' => 'INT POL PENYAKIT DALAM'],
            ['nama_departemen' => 'IRM REHABILITASI MEDIK'],
            ['nama_departemen' => 'IT BAGIAN I/PROGRAMER/EDP'],
            ['nama_departemen' => 'JAN POLI JANTUNG DAN P.DARAH'],
            ['nama_departemen' => 'JANA POLI JANTUNG ANAK'],
            ['nama_departemen' => 'JIW POLI PSIKIATRI DAN PSKLG'],
            ['nama_departemen' => 'KLT POL KULIT DAN KELAMIN'],
            ['nama_departemen' => 'LAB LABORATORIUM'],
            ['nama_departemen' => 'MAT POLI MATA'],
            ['nama_departemen' => 'MEN MANAJEMEN'],
            ['nama_departemen' => '0BG POL KEBIDANAN'],
            ['nama_departemen' => 'ORT POLI ORTHOPEDI'],
            ['nama_departemen' => 'PAR POL PARU'],
            ['nama_departemen' => 'PNR POL PINERE'],
            ['nama_departemen' => 'PRM POLI UMUM'],
            ['nama_departemen' => 'RAD RADIOLOGI'],
            ['nama_departemen' => 'RJ RAWAT JALAN'],
            ['nama_departemen' => 'RNAP RAWAT INAP'],
            ['nama_departemen' => 'SAR POL SARAF'],
            ['nama_departemen' => 'THT POLI THT'],
            ['nama_departemen' => 'URO POL UROLOGI'],
        ];

        // Insert data ke tabel departemen
        Departemen::insert($departemen);
    }
}