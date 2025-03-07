@extends('layouts.app')

@section('title', 'Tambah Pegawai')

@section('content')
<div class="container mx-auto p-6">
    <div class="bg-white rounded-lg shadow-lg p-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Tambah Data Pegawai</h2>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('pegawai.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Foto di Tengah Atas -->
            <div class="flex justify-center mb-6">
                <div class="relative">
                    <!-- Container untuk foto -->
                    <div class="h-32 w-32 rounded-full bg-gray-200 flex items-center justify-center border-4 border-blue-500 overflow-hidden">
                        <!-- Elemen untuk menampilkan foto -->
                        <img id="photo-preview" src="#" alt="Photo Preview" class="hidden w-full h-full object-cover">
                        <span id="no-photo-text" class="text-gray-500 text-sm">No Photo</span>
                    </div>
                    <!-- Tombol upload -->
                    <label for="photo" class="absolute bottom-0 right-0 bg-blue-500 text-white p-2 rounded-full cursor-pointer hover:bg-blue-600 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4 5a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V7a2 2 0 00-2-2h-1.586a1 1 0 01-.707-.293l-1.121-1.121A2 2 0 0011.172 3H8.828a2 2 0 00-1.414.586L6.293 4.707A1 1 0 015.586 5H4zm6 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                        </svg>
                        <input type="file" name="photo" id="photo" class="hidden" accept="image/*">
                    </label>
                </div>
            </div>

            <!-- Grid untuk Form -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Kolom Kiri -->
                <div class="space-y-4">
                    <!-- NIP -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">NIK</label>
                        <input type="text" name="nik" value="{{ old('nik') }}" 
                            class="mt-1 block w-full p-2 border rounded-md" required>
                    </div>

                    <!-- Nama -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nama</label>
                        <input type="text" name="nama" value="{{ old('nama') }}" 
                            class="mt-1 block w-full p-2 border rounded-md" required>
                    </div>

                    <!-- Jenis Kelamin -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                        <select name="jk" class="mt-1 block w-full p-2 border rounded-md" required>
                            <option value="Pria" {{ old('jk') == 'Pria' ? 'selected' : '' }}>Pria</option>
                            <option value="Wanita" {{ old('jk') == 'Wanita' ? 'selected' : '' }}>Wanita</option>
                        </select>
                    </div>

                    <!-- Jabatan -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Jabatan</label>
                        <input type="text" name="jbtn" value="{{ old('jbtn') }}" 
                            class="mt-1 block w-full p-2 border rounded-md" required>
                    </div>

                    <!-- Jenjang -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Jenjang</label>
                        <select name="jnj_jabatan" class="mt-1 block w-full p-2 border rounded-md" required>
                            @foreach($jnj_jabatan as $j)
                            <option value="{{ $j->kode }}" {{ old('kode') == $j->kode ? 'selected' : '' }}>
                                {{ $j->kode }} | {{ $j->nama }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Departemen -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Departemen</label>
                        <select name="departemen" class="mt-1 block w-full p-2 border rounded-md" required>
                            @foreach($departemen as $d)
                            <option value="{{ $d->dep_id }}" {{ old('dep_id') == $d->dep_id ? 'selected' : '' }}>
                            {{ $d->dep_id }} | {{ $d->nama }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Bagian -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Bagian</label>
                        <select name="bidang" class="mt-1 block w-full p-2 border rounded-md" required>
                            @foreach($bidang as $b)
                            <option value="{{ $b->nama }}" {{ old('bidang') == $b->nama ? 'selected' : '' }}>
                                {{ $b->nama }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Resiko Kerja -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Resiko Kerja</label>
                        <select name="kode_resiko" class="mt-1 block w-full p-2 border rounded-md" required>
                            @foreach($resiko_kerja as $r)
                            <option value="{{ $r->kode_resiko }}" {{ old('kode_resiko') == $r->kode_resiko ? 'selected' : '' }}>
                                {{ $r->kode_resiko }} | {{ $r->nama_resiko }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Tingkat Emergency -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Tingkat Emergency</label>
                        <select name="kode_emergency" class="mt-1 block w-full p-2 border rounded-md" required>
                            @foreach($emergency_index as $ei)
                            <option value="{{ $ei->kode_emergency }}" {{ old('kode_emergency') == $ei->kode_emergency ? 'selected' : '' }}>
                                {{ $ei->kode_emergency }} | {{ $ei->nama_emergency }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Status WP -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Status WP</label>
                        <select name="stts_wp" class="mt-1 block w-full p-2 border rounded-md" required>
                            @foreach($stts_wp as $t)
                            <option value="{{ $t->stts }}" {{ old('stts') == $t->stts ? 'selected' : '' }}>
                                {{ $t->stts }} | {{ $t->ktg }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Status Karyawan -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Status Karyawan</label>
                        <select name="stts_kerja" class="mt-1 block w-full p-2 border rounded-md" required>
                            @foreach($stts_kerja as $t)
                            <option value="{{ $t->stts }}" {{ old('stts_kerja') == $t->stts ? 'selected' : '' }}>
                                {{ $t->stts }} | {{ $t->ktg }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- NPWP -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">NPWP</label>
                        <input type="text" name="npwp" value="{{ old('npwp') }}" 
                            class="mt-1 block w-full p-2 border rounded-md">
                    </div>

                    <!-- Pendidikan -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Pendidikan</label>
                        <select name="pendidikan" class="mt-1 block w-full p-2 border rounded-md" required>
                            @foreach($pendidikan as $pdd)
                            <option value="{{ $pdd->tingkat }}" {{ old('tingkat') == $pdd->tingkat ? 'selected' : '' }}>
                                {{ $pdd->tingkat }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Tempat Lahir -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Tempat Lahir</label>
                        <input type="text" name="tmp_lahir" value="{{ old('tmp_lahir') }}" 
                            class="mt-1 block w-full p-2 border rounded-md" required>
                    </div>

                    <!-- Tanggal Lahir -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" value="{{ old('tgl_lahir') }}" 
                            class="mt-1 block w-full p-2 border rounded-md" required>
                    </div>

                    <!-- Alamat -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Alamat</label>
                        <textarea name="alamat" class="mt-1 block w-full p-2 border rounded-md" required>{{ old('alamat') }}</textarea>
                    </div>
                </div>

                <!-- Kolom Kanan -->
                <div class="space-y-4">
                    
                    <!-- Kota -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Kota</label>
                        <input type="text" name="kota" value="{{ old('kota') }}" 
                            class="mt-1 block w-full p-2 border rounded-md" required>
                    </div>

                    <!-- Mulai Kerja -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Mulai Kerja</label>
                        <input type="date" name="mulai_kerja" value="{{ old('mulai_kerja') }}" 
                            class="mt-1 block w-full p-2 border rounded-md" required>
                    </div>

                    <!-- Masa Kerja -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Masa Kerja</label>
                        <select name="ms_kerja" class="mt-1 block w-full p-2 border rounded-md" required>
                            <option value="<1" {{ old('ms_kerja') == '<1' ? 'selected' : '' }}>Kurang dari 1 Tahun</option>
                            <option value="PT" {{ old('ms_kerja') == 'PT' ? 'selected' : '' }}>Paruh Waktu</option>
                            <option value="FT>1" {{ old('ms_kerja') == 'FT>1' ? 'selected' : '' }}>Lebih dari 1 Tahun</option>
                        </select>
                    </div>

                    <!-- Bank -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Bank</label>
                        <select name="bpd" class="mt-1 block w-full p-2 border rounded-md" required>
                            @foreach($bank as $x)
                            <option value="{{ $x->namabank }}" {{ old('namabank') == $x->namabank ? 'selected' : '' }}>
                                {{ $x->namabank }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- No. Rekening -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">No. Rekening</label>
                        <input type="text" name="rekening" value="{{ old('rekening') }}" 
                            class="mt-1 block w-full p-2 border rounded-md" required>
                    </div>

                    <!-- Status Aktif -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Status Aktif</label>
                        <select name="stts_aktif" class="mt-1 block w-full p-2 border rounded-md" required>
                            <option value="Aktif" {{ old('stts_aktif') == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                            <option value="Tidak Aktif" {{ old('stts_aktif') == 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                        </select>
                    </div>

                    <!-- Index -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Index</label>
                        <select name="indek" class="mt-1 block w-full p-2 border rounded-md" required>
                            <option value="0" {{ old('indek') == '0' ? 'selected' : '' }}>0</option>
                        </select>
                    </div>

                    <!-- Wajib Masuk -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Wajib Masuk</label>
                        <select name="wajibmasuk" class="mt-1 block w-full p-2 border rounded-md" required>
                            <option value="0" {{ old('wajibmasuk') == '0' ? 'selected' : '' }}>jk ingin wjb masuk 1 bulan-hari libur</option>
                            <option value="-1" {{ old('wajibmasuk') == '-1' ? 'selected' : '' }}>jk ingin wajib masuk kosong</option>
                            <option value="-2" {{ old('wajibmasuk') == '-2' ? 'selected' : '' }}>jk ingin wajib masuk 1 bulan-4 hari</option>
                            <option value="-3" {{ old('wajibmasuk') == '-3' ? 'selected' : '' }}>jk ingin wajib masuk 1 bulan-2 hari-linas</option>
                            <option value="-4" {{ old('wajibmasuk') == '-4' ? 'selected' : '' }}>jk ingin wajib masuk 1 bulan-hari akhad</option>
                            <option value="-5" {{ old('wajibmasuk') == '-5' ? 'selected' : '' }}>jk ingin wajib mengikuti penjadwalan</option>
                        </select>
                    </div>

                    <!-- Mulai Kontrak -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Mulai Kontrak</label>
                        <input type="date" name="mulai_kontrak" value="{{ old('mulai_kontrak') }}" 
                            class="mt-1 block w-full p-2 border rounded-md">
                    </div>

                    <!-- No. KTP -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">No. KTP</label>
                        <input type="text" name="no_ktp" value="{{ old('no_ktp') }}" 
                            class="mt-1 block w-full p-2 border rounded-md" required>
                    </div>

                    <!-- Kelompok Jabatan -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Kelompok Jabatan</label>
                        <select name="kode_kelompok" class="mt-1 block w-full p-2 border rounded-md" required>
                            @foreach($kelompok_jabatan as $kj)
                            <option value="{{ $kj->kode_kelompok }}" {{ old('kode_kelompok') == $kj->kode_kelompok ? 'selected' : '' }}>
                                {{ $kj->kode_kelompok }} | {{ $kj->nama_kelompok }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Gaji Pokok -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Gaji Pokok</label>
                        <input type="text" name="gapok" value="{{ old('gapok') }}" 
                            class="mt-1 block w-full p-2 border rounded-md" required>
                    </div>

                    <!-- IndexIns -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">IndexIns</label>
                        <select name="indexins" class="mt-1 block w-full p-2 border rounded-md" required>
                            @foreach($indexins as $ix)
                            <option value="{{ $ix->dep_id }}" {{ old('dep_id') == $kj->dep_id ? 'selected' : '' }}>
                                {{ $ix->dep_id }} | {{ $ix->persen }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Cuti Diambil -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Cuti Diambil</label>
                        <input type="text" name="cuti_diambil" value="{{ old('cuti_diambil') }}" 
                            class="mt-1 block w-full p-2 border rounded-md" required>
                    </div>

                    <!-- Pengurang -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Pengurang</label>
                        <input type="text" name="pengurang" value="{{ old('pengurang') }}" 
                            class="mt-1 block w-full p-2 border rounded-md" required>
                    </div>

                    <!-- Dana Kesehatan -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Dana Kesehatan</label>
                        <input type="text" name="dankes" value="{{ old('dankes') }}" 
                            class="mt-1 block w-full p-2 border rounded-md" required>
                    </div>
                </div>
            </div>

            <!-- Tombol Submit -->
            <div class="mt-6 flex justify-end">
                <button type="submit" 
                    class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">
                    Simpan Data
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
<!-- Script untuk menampilkan pratinjau foto -->
<script>
    document.getElementById('photo').addEventListener('change', function(event) {
        const file = event.target.files[0]; // Ambil file yang dipilih
        const preview = document.getElementById('photo-preview'); // Elemen pratinjau gambar
        const noPhotoText = document.getElementById('no-photo-text'); // Teks "No Photo"

        if (file) {
            const reader = new FileReader(); // Buat objek FileReader

            // Saat file selesai dibaca
            reader.onload = function(e) {
                preview.src = e.target.result; // Set sumber gambar
                preview.classList.remove('hidden'); // Tampilkan gambar
                noPhotoText.classList.add('hidden'); // Sembunyikan teks "No Photo"
            };

            reader.readAsDataURL(file); // Baca file sebagai URL data
        } else {
            preview.src = '#'; // Reset sumber gambar
            preview.classList.add('hidden'); // Sembunyikan gambar
            noPhotoText.classList.remove('hidden'); // Tampilkan teks "No Photo"
        }
    });
</script>