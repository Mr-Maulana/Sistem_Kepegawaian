<?php

namespace App\Services;

use App\Repositories\PegawaiRepository;

class PegawaiService
{
    protected $pegawaiRepository;

    public function __construct(PegawaiRepository $pegawaiRepository)
    {
        $this->pegawaiRepository = $pegawaiRepository;
    }

    public function getAllPegawai()
    {
        return $this->pegawaiRepository->all();
    }

    public function searchPegawai($keyword)
    {
        return $this->pegawaiRepository->search($keyword);
    }
}