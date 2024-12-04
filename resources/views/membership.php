<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Paket Belajar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10 space-y-8">
        <!-- Card Paket Belajar -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex justify-between items-start">
                <!-- Informasi Paket -->
                <div>
                <img class="w-24 h-24 rounded-full" src="https://storage.pahamify.com/salesadmin/production/icon/Belajar_6bln-1645811494657" alt="Icon Konsultan" />
                    <h5 class="text-xl font-bold">Prime 6 Bulan</h5>
                    <p class="text-gray-500 mt-2">Buat belajarmu jadi seru dengan:</p>
                    <ul class="mt-4 space-y-2">
                        <li class="flex items-start">
                            <span class="text-blue-500 mt-1 mr-2">✔</span>
                            <span>Langganan Materi Belajar Premium 6 bulan</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-500 mt-1 mr-2">✔</span>
                            <span>Materi belajar lengkap dengan Video Belajar, Rangkuman, Flash card, Kuis, Bank soal, untuk SMA, PTS & PAS, UTBK dan Ujian Mandiri</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-500 mt-1 mr-2">✔</span>
                            <span>Akses Pegasus sepuasnya</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-500 mt-1 mr-2">✔</span>
                            <span>Download >25rb video belajar untuk ditonton tanpa kuota</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-500 mt-1 mr-2">✔</span>
                            <span>Latihan >100rb soal dengan pembahasan lengkap</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-500 mt-1 mr-2">✔</span>
                            <span>Rangkuman, Flash Card dan Infografis menarik</span>
                        </li>
                    </ul>
                </div>

                <!-- Diskon dan Label -->
                <div class="text-right">
                    <div class="flex space-x-2">
                        <span class="bg-red-500 text-white text-sm px-6 py-1 rounded-full">Diskon 65%</span>
                        <span class="bg-yellow-300 text-yellow-800 text-sm px-6 py-1 rounded-full">Terfavorit</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card Total Pembayaran -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h5 class="text-xl font-bold text-gray-800">Informasi Paket</h5>
            <div class="mt-6 space-y-4">
                <!-- Harga Paket -->
                <div class="flex justify-between">
                    <span class="text-gray-500">Harga Paket Full</span>
                    <span class="text-gray-800 font-medium">Rp. 880.000</span>
                </div>
                <!-- Diskon -->
                <div class="flex justify-between">
                    <span class="text-blue-500">Diskon Promo - 65%</span>
                    <span class="text-red-500 font-medium">- Rp. 570.000</span>
                </div>
                <hr class="my-4">
                <!-- Total Pembayaran -->
                <div class="flex justify-between">
                    <span class="text-gray-800 font-bold text-lg">Total Pembayaran</span>
                    <span class="text-black font-bold text-lg">Rp. 310.000</span>
                </div>
                <p class="text-sm text-gray-400 text-right">*Sudah termasuk PPN</p>
            </div>
            <!-- Tombol Pilih Metode Pembayaran -->
            <button class="w-full mt-6 bg-blue-600 text-white py-3 rounded-full hover:bg-blue-700 transition">
                Pilih Metode Pembayaran
            </button>
        </div>
    </div>
</body>
</html>
