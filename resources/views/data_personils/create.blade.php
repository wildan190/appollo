<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Data Tender') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form action="{{ route('data_tenders.store') }}" method="POST" id="tenderForm">
                    @csrf

                        <h3 class="text-lg font-semibold mb-2">Informasi Personil</h3>

                        <div class="mb-4">
                            <label for="nama_personil1" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Nama Personil 1</label>
                            <input type="text" name="nama_personil1" id="nama_personil1" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan Nama Personil 1" required>
                        </div>

                        <div class="mb-4">
                            <label for="jabatan1" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Jabatan 1</label>
                            <input type="text" name="jabatan1" id="jabatan1" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan Jabatan 1" required>
                        </div>

                        <div class="mb-4">
                            <label for="nik1" class="block text-sm font-medium text-gray-600 dark:text-gray-300">NIK 1</label>
                            <input type="text" name="nik1" id="nik1" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan NIK 1" required>
                        </div>

                        <div class="mb-4">
                            <label for="npwp1" class="block text-sm font-medium text-gray-600 dark:text-gray-300">NPWP 1</label>
                            <input type="text" name="npwp1" id="npwp1" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan NPWP 1" required>
                        </div>

                    <!-- Informasi Tender -->
                    <div class="mb-4">
                        <label for="kd_tender" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Kode Tender</label>
                        <select name="kd_tender" id="kd_tender" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" required onchange="toggleForm()">
                            <option value="">Pilih Kode Tender</option>
                            @foreach($dataTenders as $dataTender)
                            <option value="{{ $dataTender->kd_tender }}">{{ $dataTender->kd_tender }} - {{ $dataTender->nama_paket }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Pembatas -->
                    <hr class="my-6 border-2 rounded-full border-gray-300 dark:border-gray-700">
                    
                    <!-- Form input lainnya -->
                    <div id="additionalInputs" style="display: none;">
                    <h3 class="text-lg font-semibold mb-2">Informasi Paket</h3>
                        <div class="mb-4">
                            <label for="nama_paket" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Nama Paket</label>
                            <input type="text" disabled value="{{ $dataTender->nama_paket }}" name="nama_paket" id="nama_paket" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan Nama Paket" required>
                        </div>

                        <div class="mb-4">
                            <label for="kd_pokja" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Kode Pokja</label>
                            <input type="text" disabled value="{{ $dataTender->kd_pokja }}" name="kd_pokja" id="kd_pokja" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" required>
                        </div>

                        <!-- Form input lainnya -->
                        <div class="mb-4">
                            <label for="pagu" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Pagu</label>
                            <input type="text" disabled value="{{ $dataTender->pagu }}" name="pagu" id="pagu" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan Pagu" required>
                        </div>

                        <div class="mb-4">
                            <label for="hps" class="block text-sm font-medium text-gray-600 dark:text-gray-300">HPS</label>
                            <input type="text" disabled value="{{ $dataTender->hps }}" name="hps" id="hps" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan HPS" required>
                        </div>

                        <div class="mb-4">
                            <label for="satuan_kerja" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Satuan Kerja</label>
                            <input type="text" disabled value="{{ $dataTender->satuan_kerja }}" name="satuan_kerja" id="satuan_kerja" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" required>
                        </div>

                        <div class="mb-4">
                            <label for="ppk" class="block text-sm font-medium text-gray-600 dark:text-gray-300">PPK</label>
                            <input type="text" disabled value="{{ $dataTender->ppk }}" name="ppk" id="ppk" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" required>
                        </div>

                        <div class="mb-4">
                            <label for="nama_instansi" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Nama Instansi</label>
                            <input type="text" disabled value="{{ $dataTender->nama_instansi }}" name="nama_instansi" id="nama_instansi" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" required>
                        </div>

                        <div class="mb-4">
                            <label for="nilai_penawaran" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Nilai Penawaran</label>
                            <input type="text" disabled value="{{ $dataTender->nilai_penawaran }}" name="nilai_penawaran" id="nilai_penawaran" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan Nilai Penawaran" required>
                        </div>

                        <div class="mb-4">
                            <label for="tanggal_penetapan" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Tanggal Penetapan</label>
                            <input type="date" disabled value="{{ $dataTender->tanggal_penetapan }}" name="tanggal_penetapan" id="tanggal_penetapan" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" required>
                        </div>

                        <div class="mb-4">
                            <label for="nilai_kontrak" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Nilai Kontrak</label>
                            <input type="text" disabled value="{{ $dataTender->nilai_kontrak }}" name="nilai_kontrak" id="nilai_kontrak" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan Nilai Kontrak" required>
                        </div>

                        <div class="mb-4">
                            <label for="tanggal_kontrak" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Tanggal Kontrak</label>
                            <input type="date" disabled value="{{ $dataTender->tanggal_kontrak }}" name="tanggal_kontrak" id="tanggal_kontrak" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" required>
                        </div>

                        <div class="mb-4">
                            <label for="waktu_pelaksanaan" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Waktu Pelaksanaan</label>
                            <input type="text" disabled value="{{ $dataTender->waktu_pelaksanaan }}" name="waktu_pelaksanaan" id="waktu_pelaksanaan" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" required>
                        </div>

                        <div class="mb-4">
                            <label for="tahun" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Tahun</label>
                            <input type="text" disabled value="{{ $dataTender->tahun }}" name="tahun" id="tahun" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" required>
                        </div>

                        <div class="flex items-center justify-between mt-4">
                            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Simpan Data</button>
                            <a href="{{ route('data_personils.index') }}" class="px-4 py-2 bg-red-500 text-white rounded-md">Batal</a>
                        </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function toggleForm() {
            var kdTenderSelect = document.getElementById('kd_tender');
            var additionalInputs = document.getElementById('additionalInputs');

            // Mendapatkan nilai kd_tender terpilih
            var selectedValue = kdTenderSelect.options[kdTenderSelect.selectedIndex].value;

            // Mendapatkan data_tender yang sesuai dengan kd_tender terpilih
            var selectedDataTender = {!! json_encode($dataTenders) !!}.find(function(dataTender) {
                return dataTender.kd_tender === selectedValue;
            });

            // Menentukan apakah form harus ditampilkan atau disembunyikan berdasarkan nilai kd_tender
            if (selectedDataTender) {
                // Menampilkan form jika kd_tender terpilih
                additionalInputs.style.display = 'block';

                // Mengisi nilai form input sesuai dengan data_tender yang terpilih
                document.getElementById('nama_paket').value = selectedDataTender.nama_paket;
                document.getElementById('pagu').value = selectedDataTender.pagu;
                // Mengisi nilai form input lainnya sesuai kebutuhan
            } else {
                additionalInputs.style.display = 'none'; // Menyembunyikan form jika kd_tender tidak terpilih
            };
        }
    </script>
</x-app-layout>