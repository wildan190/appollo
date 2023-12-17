<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Kode Pokja') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form action="{{ route('kode_pokjas.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="kd_pokja" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Kode Pokja</label>
                        <input type="text" name="kd_pokja" id="kd_pokja" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan Kode Pokja" required>
                    </div>

                    <div class="mb-4">
                        <label for="keterangan" class="block text-sm font-medium text-gray-600 dark:text-gray-300">Keterangan</label>
                        <input type="text" name="keterangan" id="keterangan" class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" placeholder="Masukkan Keterangan" required>
                    </div>

                    <div class="flex items-center justify-between mt-4">
                        <div>
                            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Simpan Kode Pokja</button>
                        </div>
                        <div>
                            <a href="{{ route('kode_pokjas.index') }}" class="px-4 py-2 bg-red-500 text-white rounded-md">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
