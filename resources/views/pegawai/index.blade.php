@extends('layouts.app')

@section('title', 'Data Pegawai')

@section('content')
    <div class="container mx-auto px-4">
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
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Aksi</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">NIK</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Nama</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Jenis Kelamin</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Jabatan</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Jenjang</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Kelompok Jabatan</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Resiko Kerja</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Tingkat Emergency</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Departemen</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Bidang</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Status</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Status Kerja</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">NPWP</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Pendidikan</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Gaji Pokok</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Tempat Lahir</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Tanggal Lahir</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Alamat</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Kota</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Mulai Kerja</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Masa Kerja</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Indexins</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Bank</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">No. Rekening</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Keaktifan</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Wajib Masuk</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Pengurangan</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Index</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Mulai Kontrak</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Cuti Yang Diambil</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Dana Kesehatan</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Photo</th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">No. KTP</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($pegawai as $p)
                        <tr class="hover:bg-gray-50 transition duration-200">
                            <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">
                                <a href="{{ route('pegawai.edit', $p->id) }}" class="text-blue-500 hover:text-blue-700">Edit</a>
                                <form action="{{ route('pegawai.destroy', $p->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700 ml-2">Hapus</button>
                                </form>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">{{ $p->nik }}</td>
                            <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">{{ $p->nama }}</td>
                            <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">{{ $p->jk }}</td>
                            <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">{{ $p->jbtn }}</td>
                            <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">{{ $p->jnj_jabatan }}</td>
                            <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">{{ $p->kode_kelompok }}</td>
                            <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">{{ $p->kode_resiko }}</td>
                            <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">{{ $p->kode_emergency }}</td>
                            <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">{{ $p->departemen }}</td>
                            <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">{{ $p->bidang }}</td>
                            <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">{{ $p->stts_wp }}</td>
                            <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">{{ $p->stts_kerja }}</td>
                            <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">{{ $p->npwp }}</td>
                            <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">{{ $p->pendidikan }}</td>
                            <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">{{ $p->gapok }}</td>
                            <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">{{ $p->tmp_lahir }}</td>
                            <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">{{ $p->tgl_lahir }}</td>
                            <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">{{ $p->alamat }}</td>
                            <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">{{ $p->kota }}</td>
                            <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">{{ $p->mulai_kerja }}</td>
                            <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">{{ $p->ms_kerja }}</td>
                            <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">{{ $p->indexins }}</td>
                            <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">{{ $p->bpd }}</td>
                            <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">{{ $p->rekening }}</td>
                            <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">{{ $p->stts_aktif }}</td>
                            <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">{{ $p->wajibmasuk }}</td>
                            <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">{{ $p->pengurang }}</td>
                            <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">{{ $p->indek }}</td>
                            <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">{{ $p->mulai_kontrak }}</td>
                            <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">{{ $p->cuti_diambil }}</td>
                            <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">{{ $p->dankes }}</td>
                            <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">
                                @if ($p->photo)
                                    <img src="{{ asset('storage/photos/' . $p->photo) }}" alt="Foto Pegawai" class="w-10 h-10 rounded-full object-cover">
                                @else
                                    <span class="text-gray-400">Tidak ada foto</span>
                                @endif
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-800 whitespace-nowrap">{{ $p->no_ktp }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
