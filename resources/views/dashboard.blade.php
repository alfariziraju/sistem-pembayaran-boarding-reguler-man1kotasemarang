<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        
    </x-slot>
    <main class="flex-1 p-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Statistik Ringkas -->
            <div class="bg-white rounded-lg shadow p-4">
                <h2 class="text-xl font-semibold">Total Siswa</h2>
                <p class="text-3xl font-bold">120</p>
            </div>
            <div class="bg-white rounded-lg shadow p-4">
                <h2 class="text-xl font-semibold">Siswa Lunas</h2>
                <p class="text-3xl font-bold">100</p>
            </div>
            <div class="bg-white rounded-lg shadow p-4">
                <h2 class="text-xl font-semibold">Siswa Belum Lunas</h2>
                <p class="text-3xl font-bold">20</p>
            </div>
        </div>

        <!-- Reminder Tagihan -->
        <div class="mt-8">
            <h2 class="text-2xl font-bold mb-4">Reminder Tagihan</h2>
            <table class="w-full table-auto bg-white rounded-lg shadow">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2">Nama Siswa</th>
                        <th class="px-4 py-2">Jenis Pembayaran</th>
                        <th class="px-4 py-2">Status</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border px-4 py-2">Ahmad</td>
                        <td class="border px-4 py-2">SPP</td>
                        <td class="border px-4 py-2 text-red-500">Belum Lunas</td>
                        <td class="border px-4 py-2">
                            <button class="bg-blue-500 text-white py-1 px-2 rounded hover:bg-blue-600">Kirim Notifikasi</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Aisyah</td>
                        <td class="border px-4 py-2">Infaq</td>
                        <td class="border px-4 py-2 text-red-500">Belum Lunas</td>
                        <td class="border px-4 py-2">
                            <button class="bg-blue-500 text-white py-1 px-2 rounded hover:bg-blue-600">Kirim Notifikasi</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


  