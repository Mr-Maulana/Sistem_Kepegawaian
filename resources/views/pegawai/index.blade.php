@extends('layouts.app')

@section('title', 'Data Pegawai')

@section('content')
    <div class="container mx-auto">
        <!-- Judul dan Tombol Tambah -->
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Data Pegawai</h1>
            <a href="{{ route('pegawai.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300">
                Tambah Pegawai
            </a>
        </div>

        <!-- Form Pencarian -->
        <div class="mb-6 max-w-md mx-auto">
            <form action="{{ route('pegawai.index') }}" method="GET">
                <div class="flex">
                    <input type="text" name="keyword" value="{{ $keyword ?? '' }}" 
                        class="w-full p-2 border border-gray-300 rounded-l-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                        placeholder="Cari pegawai...">
                    <button type="submit" 
                        class="bg-blue-500 text-white px-4 py-2 rounded-r-lg hover:bg-blue-600 transition duration-300">
                        Cari
                    </button>
                </div>
            </form>
        </div>

        <!-- Tabel Data Pegawai -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="overflow-x-auto"> <!-- Tambahkan ini untuk scroll horizontal -->
                <table class="min-w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NIK</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jenis Kelamin</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jabatan</th>                        
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jenjang</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kelompok Jabatan</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Resiko Kerja</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tingkat Emergency</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Departemen</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Bidang</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status Kerja</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NPWP</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pendidikan</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Gaji Pokok</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tempat Lahir</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Lahir</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Alamat</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kota</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Mulai Kerja</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Masa Kerja</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Indexins</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Bank</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No. Rekening</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Keaktifan</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Wajib Masuk</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pengurangan</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Index</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Mulai Kontrak</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Cuti Yang Diambil</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Dana Kesehatan</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Photo</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No. KTP</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach ($pegawai as $p)
                        <tr class="hover:bg-gray-50 transition duration-200">
                            <td class="px-6 py-4 text-sm text-gray-800">
                                <a href="{{ route('pegawai.edit', $p->id) }}" class="text-blue-500 hover:text-blue-700">Edit</a>
                                <form action="{{ route('pegawai.destroy', $p->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700 ml-2">Hapus</button>
                                </form>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $p->nik }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $p->nama }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $p->jk }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $p->jbtn }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $p->jnj_jabatan }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $p->kode_kelompok }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $p->kode_resiko }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $p->kode_emergency }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $p->departemen }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $p->bidang }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $p->stts_wp }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $p->stts_kerja }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $p->npwp }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $p->pendidikan }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $p->gapok }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $p->tmp_lahir }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $p->tgl_lahir }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $p->alamat }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $p->kota }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $p->mulai_kerja }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $p->ms_kerja }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $p->indexins }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $p->bpd }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $p->rekening }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $p->stts_aktif }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $p->wajibmasuk }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $p->pengurang }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $p->indek }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $p->mulai_kontrak }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $p->cuti_diambil }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $p->dankes }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">
                                @if ($p->photo)
                                    <img src="{{ asset('storage/photos/' . $p->photo) }}" alt="Foto Pegawai" class="w-10 h-10 rounded-full object-cover">
                                @else
                                    <span class="text-gray-400">Tidak ada foto</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $p->no_ktp }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection