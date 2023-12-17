<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Data Tender') }}
        </h2>
    </x-slot>

    @if(session('status'))
    <div class="mt-4 p-4 bg-green-200 text-green-800 rounded-md">
        {{ session('status') }}
    </div>
    @endif

    @if(session('error'))
    <div class="mt-4 p-4 bg-red-200 text-red-800 rounded-md">
        {{ session('error') }}
    </div>
    @endif

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">

                <!-- Bagian 1: Informasi Personil -->
                <form action="{{ route('data_tenders.update', $dataTender->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <h3 class="text-lg font-medium text-gray-700 dark:text-gray-300 mb-4">Informasi Personil</h3>

                        <label for="nama_personil" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Nama Personil</label>
                        <input type="text" value="{{ $dataTender->nama_personil }}" name="nama_personil" id="nama_personil" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan Nama Personil" required>

                        <label for="jabatan" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Jabatan</label>
                        <input type="text" value="{{ $dataTender->jabatan }}" name="jabatan" id="jabatan" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan Jabatan" required>

                        <label for="nik" class="block text-sm font-medium text-gray-600 dark:text-gray-300">NIK</label>
                        <input type="text" value="{{ $dataTender->nik }}" name="nik" id="nik" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan NIK" required>

                        <label for="npwp" class="block text-sm font-medium text-gray-600 dark:text-gray-300">NPWP</label>
                        <input type="text" value="{{ $dataTender->npwp }}" name="npwp" id="npwp" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan NPWP" required>
                    </div>

                    <!-- Pembatas -->
                    <hr class="my-6 border-gray-300 dark:border-gray-700">

                    <!-- Bagian 2: Informasi Tender -->
                    <div class="mb-4">
                        <h3 class="text-lg font-medium text-gray-700 dark:text-gray-300 mb-4">Informasi Tender</h3>

                        <label for="kd_tender" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Kode Tender</label>
                        <input type="text" value="{{ $dataTender->kd_tender }}" name="kd_tender" id="kd_tender" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan Kode Tender" required>

                        <label for="nama_paket" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Nama Paket</label>
                        <input type="text" value="{{ $dataTender->nama_paket }}" name="nama_paket" id="nama_paket" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan Nama Paket" required>

                        <!-- Form input Kode Pokja -->
                        <label for="kd_pokja" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Kode Pokja</label>
                        <select name="kd_pokja" id="kd_pokja" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" required>
                            <option>Pilih Kode Pokja</option>
                            @foreach($kodePokjas as $kodePokja)
                            <option value="{{ $kodePokja->kd_pokja }}" {{ $dataTender->kd_pokja == $kodePokja->kd_pokja ? 'selected' : '' }}>
                                {{ $kodePokja->kd_pokja }} - {{ $kodePokja->keterangan }}
                            </option>
                            @endforeach
                        </select>

                        <label for="pagu" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Pagu</label>
                        <input type="text" value="{{ $dataTender->pagu }}" name="pagu" id="pagu" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan Pagu" required>

                        <label for="hps" class="block text-sm font-medium text-gray-600 dark:text-gray-300">HPS</label>
                        <input type="text" value="{{ $dataTender->hps }}" name="hps" id="hps" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan HPS" required>

                        <label for="satuan_kerja" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Satuan Kerja</label>
                        <input type="text" value="{{ $dataTender->satuan_kerja }}" name="satuan_kerja" id="satuan_kerja" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan Satuan Kerja" required>

                        <label for="ppk" class="block text-sm font-medium text-gray-600 dark:text-gray-300">PPK</label>
                        <input type="text" value="{{ $dataTender->ppk }}" name="ppk" id="ppk" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan PPK" required>

                        <label for="nama_instansi" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Nama Instansi</label>
                        <input type="text" value="{{ $dataTender->nama_instansi }}" name="nama_instansi" id="nama_instansi" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan Nama Instansi" required>

                        <label for="nilai_penawaran" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Nilai Penawaran</label>
                        <input type="text" value="{{ $dataTender->nilai_penawaran }}" name="nilai_penawaran" id="nilai_penawaran" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan Nilai Penawaran" required>

                        <label for="tanggal_penetapan" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Tanggal Penetapan</label>
                        <input type="date" value="{{ $dataTender->tanggal_penetapan }}" name="tanggal_penetapan" id="tanggal_penetapan" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" required>

                        <label for="nilai_kontrak" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Nilai Kontrak</label>
                        <input type="text" value="{{ $dataTender->nilai_kontrak }}" name="nilai_kontrak" id="nilai_kontrak" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan Nilai Kontrak" required>

                        <label for="tanggal_kontrak" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Tanggal Kontrak</label>
                        <input type="date" value="{{ $dataTender->tanggal_kontrak }}" name="tanggal_kontrak" id="tanggal_kontrak" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" required>

                        <label for="waktu_pelaksanaan" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Waktu Pelaksanaan</label>
                        <input type="text" value="{{ $dataTender->waktu_pelaksanaan }}" name="waktu_pelaksanaan" id="waktu_pelaksanaan" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan Waktu Pelaksanaan" required>

                        <label for="tahun" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Tahun</label>
                        <input type="text" value="{{ $dataTender->tahun }}" name="tahun" id="tahun" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan Tahun" required>
                    </div>

                    <div class="flex items-center justify-between mt-4">
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Simpan Data</button>
                        <a href="{{ route('data_tenders.index') }}" class="px-4 py-2 bg-red-500 text-white rounded-md">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>