<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Daftar Data Personil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-x-auto overflow-y-hidden shadow-xl sm:rounded-lg p-6">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-lg font-semibold">Daftar Data Personil</h3>
                    <a href="{{ route('data_personils.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded-md">Tambah Data Tender</a>
                </div>

                <div class="bg-white dark:bg-gray-700 overflow-hidden shadow-md sm:rounded-md">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-200">
                            Data Personil
                        </h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500 dark:text-gray-300">
                            Daftar lengkap semua Data Personil.
                        </p>
                    </div>
                    <!-- Container for the table -->
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                            <thead class="bg-gray-50 dark:bg-gray-800">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Personil</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jabatan</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NIK</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NPWP</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Perusahaan</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dataPersonils as $dataPersonil)
                                <tr>
                                    <td class="py-2 px-4">{{ $dataPersonil->nama_personil1 }}</td>
                                    <td class="py-2 px-4">{{ $dataPersonil->jabatan1 }}</td>
                                    <td class="py-2 px-4">{{ $dataPersonil->nik1 }}</td>
                                    <td class="py-2 px-4">{{ $dataPersonil->npwp1 }}</td>
                                    <td class="py-2 px-4">{{ $dataPersonil->perusahaan->nama_perusahaan }}</td>
                                    <td class="py-2 px-4">{{ $dataPersonil->status }}</td>
                                    <td class="py-2 px-4">
                                        <!-- Opsi, misalnya tombol lihat, edit, dan hapus -->
                                        <a href="{{ route('data_personils.show', $dataPersonil->id) }}" class="text-blue-500 hover:underline">Lihat</a>
                                        <a href="{{ route('data_personils.edit', $dataPersonil->id) }}" class="text-yellow-500 hover:underline">Edit</a>
                                        <form action="{{ route('data_personils.destroy', $dataPersonil->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:underline" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>