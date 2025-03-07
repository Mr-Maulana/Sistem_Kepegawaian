<?php

namespace App\Repositories;

use App\Models\Pegawai;
use App\Models\Jenjang;
use App\Models\KelompokJabatan;
use App\Models\Departemen;
use App\Models\Bagian;
use App\Models\Bank;
use App\Models\IndexIns;
use App\Models\Pendidikan;
use App\Models\ResikoKerja;
use App\Models\StatusKerja;
use App\Models\TingkatEmergency;
use App\Models\StatusWP;
use App\Interfaces\PegawaiRepositoryInterface;
use Illuminate\Support\Facades\Storage;

class PegawaiRepository implements PegawaiRepositoryInterface
{
    public function all()
    {
        return Pegawai::with([
            'jnj_jabatan', 'kelompok_jabatan', 'departemen', 'bidang', 'pendidikan',
            'resiko_kerja', 'emergency_index', 'stts_wp', 'stts_kerja', 'indexins', 'bank'
        ])->get();
    }

    public function find($id)
    {
        return Pegawai::with([
            'jnj_jabatan', 'kelompok_jabatan', 'departemen', 'bidang', 'pendidikan',
            'resiko_kerja', 'emergency_index', 'stts_wp', 'stts_kerja', 'indexins', 'bank'
        ])->findOrFail($id);
    }

    public function search($keyword)
    {
        return Pegawai::where('nama', 'like', "%$keyword%")
            ->orWhere('nik', 'like', "%$keyword%")
            ->orWhere('jbtn', 'like', "%$keyword%")
            ->orWhere('departemen', 'like', "%$keyword%")
            ->orWhere('bidang', 'like', "%$keyword%")
            ->with([
                'jnj_jabatan', 'kelompok_jabatan', 'departemen', 'bidang', 'pendidikan',
                'resiko_kerja', 'emergency_index', 'stts_wp', 'stts_kerja', 'indexins', 'bank'
            ])
            ->get();
    }

    public function create(array $data)
    {
        if (isset($data['photo']) && $data['photo']->isValid()) {
            $photoName = time() . '.' . $data['photo']->extension();
            $data['photo']->storeAs('public/photos', $photoName);
            $data['photo'] = $photoName;
        }

        return Pegawai::create($data);
    }

    public function update($id, array $data)
    {
        $pegawai = Pegawai::findOrFail($id);

        if (isset($data['photo']) && $data['photo']->isValid()) {
            if ($pegawai->photo) {
                Storage::delete('public/photos/' . $pegawai->photo);
            }

            $photoName = time() . '.' . $data['photo']->extension();
            $data['photo']->storeAs('public/photos', $photoName);
            $data['photo'] = $photoName;
        }

        $pegawai->update($data);
        return $pegawai;
    }

    public function delete($id)
    {
        $pegawai = Pegawai::findOrFail($id);

        if ($pegawai->photo) {
            Storage::delete('public/photos/' . $pegawai->photo);
        }

        $pegawai->delete();
        return true;
    }

    public function getCreateData()
    {
        return [
            'jnj_jabatan' => Jenjang::all(),
            'kelompok_jabatan' => KelompokJabatan::all(),
            'departemen' => Departemen::all(),
            'bidang' => Bagian::all(),
            'resiko_kerja' => ResikoKerja::all(),
            'emergency_index' => TingkatEmergency::all(),
            'stts_wp' => StatusWP::all(),
            'stts_kerja' => StatusKerja::all(),
            'indexins' => IndexIns::all(),
            'bank' => Bank::all(),
            'pendidikan' => Pendidikan::all(),
        ];
    }

    public function getEditData($id)
    {
        return [
            'pegawai' => Pegawai::findOrFail($id),
            'jnj_jabatan' => Jenjang::all(),
            'kelompok_jabatan' => KelompokJabatan::all(),
            'departemen' => Departemen::all(),
            'bidang' => Bagian::all(),
            'resiko_kerja' => ResikoKerja::all(),
            'emergency_index' => TingkatEmergency::all(),
            'stts_wp' => StatusWP::all(),
            'stts_kerja' => StatusKerja::all(),
            'indexins' => IndexIns::all(),
            'bank' => Bank::all(),
            'pendidikan' => Pendidikan::all(),
        ];
    }
}