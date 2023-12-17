<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Tambah Data Pokja') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form action="{{ route('pokjas.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="nama_pokja" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Nama Pokja</label>
                        <input type="text" name="nama_pokja" id="nama_pokja" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan Nama Pokja" required>
                    </div>

                    <div class="mb-4">
                        <label for="nip" class="block text-sm font-medium text-gray-600 dark:text-gray-300">NIP</label>
                        <input type="text" name="nip" id="nip" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan NIP" required>
                    </div>

                    <div class="mb-4">
                        <label for="jabatan_pokja" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Jabatan Pokja</label>
                        <input type="text" name="jabatan_pokja" id="jabatan_pokja" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan Jabatan Pokja" required>
                    </div>

                    <div class="mb-4">
                        <label for="golongan" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Golongan</label>
                        <input type="text" name="golongan" id="golongan" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan Golongan" required>
                    </div>

                    <div class="mb-4">
                        <label for="telepon" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Telepon</label>
                        <input type="text" name="telepon" id="telepon" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan Telepon" required>
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Email</label>
                        <input type="email" name="email" id="email" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan Email" required>
                    </div>

                    <div class="flex items-center justify-between mt-4">
                        <div>
                            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Simpan Data</button>
                        </div>
                        <div>
                            <a href="{{ route('pokjas.index') }}" class="px-4 py-2 bg-red-500 text-white rounded-md">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>