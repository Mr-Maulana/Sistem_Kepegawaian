<?php

namespace App\Http\Controllers;

use App\Interfaces\PegawaiRepositoryInterface;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    private PegawaiRepositoryInterface $pegawaiRepository;

    public function __construct(PegawaiRepositoryInterface $pegawaiRepository)
    {
        $this->pegawaiRepository = $pegawaiRepository;
    }

    // Menampilkan semua data pegawai
    public function index(Request $request)
    {
        $pegawai = $this->pegawaiRepository->all();
        $keyword = $request->query('keyword'); // Ambil keyword dari query parameter
        $pegawai = $this->pegawaiRepository->search($keyword); // Cari data pegawai
        return view('pegawai.index', compact('pegawai', 'keyword'));
    }

    // Menampilkan form tambah pegawai
    public function create()
    {
        $data = $this->pegawaiRepository->getCreateData();
        return view('pegawai.create', $data);
    }

    // Menyimpan data pegawai baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nik' => 'required|unique:pegawai',
            'nama' => 'required',
            'jk' => 'required|in:Pria,Wanita',
            'jbtn' => 'required',
            'jnj_jabatan' => 'required|exists:jnj_jabatan,kode',
            'departemen' => 'required|exists:departemen,dep_id',
            'bidang' => 'required|exists:bidang,nama',
            'kode_resiko' => 'required|exists:resiko_kerja,kode_resiko',
            'kode_emergency' => 'required|exists:emergency_index,kode_emergency',
            'stts_wp' => 'required|exists:stts_wp,stts',
            'stts_kerja' => 'required|exists:stts_kerja,stts',
            'kode_kelompok' => 'required|exists:kelompok_jabatan,kode_kelompok',
            'npwp' => 'nullable',
            'pendidikan' => 'required|exists:pendidikan,tingkat',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required',
            'kota' => 'required',
            'mulai_kerja' => 'required|date',
            'ms_kerja' => 'required|in:<1,PT,FT>1',
            'indek' => 'required|in:0',
            'gapok' => 'required',
            'indexins' => 'required|exists:indexins,dep_id',
            'bpd' => 'required|exists:bank,namabank',
            'rekening' => 'required',
            'stts_aktif' => 'required|in:Aktif,Tidak Aktif',
            'wajibmasuk' => 'required|in:0,-1,-2,-3,-4,-5',
            'mulai_kontrak' => 'nullable|date',
            'cuti_diambil' => 'required',
            'pengurang' => 'required',
            'dankes' => 'required',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:3072',
            'no_ktp' => 'required|digits:16'
        ]);

        $this->pegawaiRepository->create($validated);

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil ditambahkan.');
    }

    // Menampilkan form edit pegawai
    public function edit($id)
    {
        $data = $this->pegawaiRepository->getEditData($id);
        return view('pegawai.edit', $data);
    }

    // Mengupdate data pegawai
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'jk' => 'required|in:Pria,Wanita',
            'jbtn' => 'required',
            'jnj_jabatan' => 'required|exists:jnj_jabatan,kode',
            'departemen' => 'required|exists:departemen,dep_id',
            'bidang' => 'required|exists:bidang,nama',
            'kode_resiko' => 'required|exists:resiko_kerja,kode_resiko',
            'kode_emergency' => 'required|exists:emergency_index,kode_emergency',
            'stts_wp' => 'required|exists:stts_wp,stts',
            'stts_kerja' => 'required|exists:stts_kerja,stts',
            'kode_kelompok' => 'required|exists:kelompok_jabatan,kode_kelompok',
            'npwp' => 'nullable',
            'pendidikan' => 'required|exists:pendidikan,tingkat',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required',
            'kota' => 'required',
            'mulai_kerja' => 'required|date',
            'ms_kerja' => 'required|in:<1,PT,FT>1',
            'indek' => 'required|in:0',
            'gapok' => 'required',
            'indexins' => 'required|exists:indexins,dep_id',
            'bpd' => 'required|exists:bank,namabank',
            'rekening' => 'required',
            'stts_aktif' => 'required|in:Aktif,Tidak Aktif',
            'wajibmasuk' => 'required|in:0,-1,-2,-3,-4,-5',
            'mulai_kontrak' => 'nullable|date',
            'cuti_diambil' => 'required',
            'pengurang' => 'required',
            'dankes' => 'required',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:3072',
            'no_ktp' => 'required|digits:16'
        ]);

        $this->pegawaiRepository->update($id, $validated);

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil diperbarui.');
    }

    // Menghapus data pegawai
    public function destroy($id)
    {
        $this->pegawaiRepository->delete($id);
        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil dihapus.');
    }
}