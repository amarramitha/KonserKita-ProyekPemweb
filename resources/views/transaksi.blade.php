<x-header></x-header>

<body class="bg-brand-blue h-auto w-full font-mono justify-center items-center">
    <x-navbar></x-navbar>
    <div class="w-full mx-auto p-6 mb-5 bg-transparent rounded-xl shadow md:w-3/4">
        <div class="flex justify-between items-center mb-2">
            <h2 class="text-2xl font-bold text-white md:text-4xl">Riwayat Transaksi</h2>
        </div>
    </div>

    <div class="w-full mx-auto p-6 mb-10 bg-brand-desk rounded-xl shadow md:w-3/4">
        <div class="flex flex-col md:flex-row justify-between items-center mb-2">
            <div class="overflow-x-auto w-full">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th></th>
                            <th class="px-2 text-center text-white font-semibold text-sm md:text-base">Nomor Transaksi
                            </th>
                            <th class="px-2 text-center text-white font-semibold text-sm md:text-base">Waktu Beli</th>
                            <th class="px-2 text-center text-white font-semibold text-sm md:text-base">Total</th>
                            <th class="px-2 text-center text-white font-semibold text-sm md:text-base">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">
                                <img src="{{ asset('storage/images/bigu.png') }}"
                                    class="object-cover w-full max-w-xs rounded-t-lg h-48 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg">
                            </td>
                            <td class="px-2 text-center text-white font-normal text-sm md:text-base">XXXXXXXXXXXXX</td>
                            <td class="px-2 text-center text-white font-normal text-sm md:text-base">21 Mei 2024, 21.45
                                WIB</td>
                            <td class="px-2 text-center text-white font-normal text-sm md:text-base">Rp 316.000</td>
                            <td class="px-2 text-center text-white font-normal text-sm md:text-base">Kedaluwarsa</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="mt-2 md:mt-0">
                <a href="/detailtransaksi"
                    class="block px-4 py-2 bg-brand-blue text-white rounded-xl text-center hover:bg-slate-900">Detail</a>
            </div>
        </div>
    </div>

    <div class="w-full mx-auto p-6 mb-10 bg-brand-desk rounded-xl shadow md:w-3/4">
        <div class="flex flex-col md:flex-row justify-between items-center mb-2">
            <div class="overflow-x-auto w-full">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th></th>
                            <th class="px-2 text-center text-white font-semibold text-sm md:text-base">Nomor Transaksi
                            </th>
                            <th class="px-2 text-center text-white font-semibold text-sm md:text-base">Waktu Beli</th>
                            <th class="px-2 text-center text-white font-semibold text-sm md:text-base">Total</th>
                            <th class="px-2 text-center text-white font-semibold text-sm md:text-base">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-2">
                                <img src="{{ asset('storage/images/bigu.png') }}"
                                    class="object-cover w-full max-w-xs rounded-t-lg h-48 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg">
                            </td>
                            <td class="px-2 text-center text-white font-normal text-sm md:text-base">XXXXXXXXXXXXX</td>
                            <td class="px-2 text-center text-white font-normal text-sm md:text-base">21 Mei 2024, 21.45
                                WIB</td>
                            <td class="px-2 text-center text-white font-normal text-sm md:text-base">Rp 167.200</td>
                            <td class="px-2 text-center text-white font-normal text-sm md:text-base">Menunggu Pembayaran
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="mt-2 md:mt-0 md:ml-4">
                <a href=""
                    class="block px-4 py-2 bg-brand-blue text-white rounded-xl text-center  hover:bg-slate-900">Detail</a>
            </div>
            <div class="mt-2 md:mt-0 md:ml-4">
                <a href="/pembayaran"
                    class="block px-4 py-2 bg-gray-300 text-brand-blue rounded-xl text-center hover:bg-white">Bayar</a>
            </div>
        </div>
    </div>

    <x-footer></x-footer>
</body>

</html>
