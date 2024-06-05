<x-header></x-header>

<body class="bg-brand-blue font-mono">
    <x-navbar></x-navbar>

    <!-- Detail Konser -->
    <div class="flex justify-center py-5">
        <div class="p-6 bg-brand-desk rounded-xl shadow w-full md:w-1/2">
            <h5 class="text-white font-bold ml-5 text-3xl">Detail Konser</h5>
            <img class="py-5 px-10 w-full h-auto rounded-lg" src="{{ asset('storage/images/bigu.png') }}" alt="">
            <div class="leading-normal">
                <h5 class="items-center mb-5 text-2xl font-bold text-white">Bigu Festival</h5>
                <ul class="icon-text items-center">
                    <li>
                        <div class="mb-3 flex space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                            </svg>
                            <span class="text-white">13-14 Juli 2024</span>
                        </div>
                    </li>
                    <li>
                        <div class="mb-3 flex space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <span class="text-white">10.00 - 23.59 WIB</span>
                        </div>
                    </li>
                    <li>
                        <div class="mb-3 flex space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            <span class="text-white">Lapangan Aldiron Pancoran, Jakarta Selatan</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Detail Pembayaran -->
    <div class="flex justify-center py-5">
        <div class="p-6 bg-brand-desk rounded-xl shadow w-full md:w-1/2">
            <h5 class="text-white font-bold ml-5 mb-5 text-center leading-none text-3xl">Detail Pembayaran</h5>
            <hr class="mb-2 border-gray-200 sm:mx-auto" />
            <div class="w-full py-2 my-5 bg-brand-blue opacity-50 rounded-lg shadow">
                <p class="text-brand-huruf text-center">Maaf, Pembayaran Anda sudah kedaluwarsa.</p>
            </div>
            <div class="flex justify-center w-full">
                <table class="text-white">
                    <tr>
                        <td class="p-3">Nomor Transaksi</td>
                        <td class="px-10">:</td>
                        <td>XXXXXXXXXXXXXXXXXXX</td>
                    </tr>
                    <tr>
                        <td class="p-3">Waktu Beli</td>
                        <td class="px-10">:</td>
                        <td>21 Mei 2024, 21.45 WIB</td>
                    </tr>
                    <tr>
                        <td class="p-3">Metode Pembelian</td>
                        <td class="px-10">:</td>
                        <td>Transfer Bank, Bank BNI</td>
                    </tr>
                    <tr>
                        <td class="p-3">Total Pembayaran</td>
                        <td class="px-10">:</td>
                        <td>Rp 316.000</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <!-- Detail Tiket -->
    <div class="flex justify-center py-5">
        <div class="p-6 bg-brand-desk rounded-xl shadow w-full md:w-1/2">
            <h5 class="text-white font-bold ml-5 mb-5 text-center leading-none text-3xl">Detail Tiket</h5>
            <hr class="mb-2 border-gray-200 sm:mx-auto" />
            <div class="w-full py-2 my-5">
                <p class="text-brand-huruf text-xl font-semibold">Presale 2 Day 1 Pass tiket</p>
            </div>
            <div class="flex justify-between w-full">
                <h5 class="text-xl font-semibold text-white">Rp 150.000 x 2</h5>
                <h5 class="text-xl font-semibold text-white">Rp 300.000</h5>
            </div>
        </div>
    </div>

    <!-- Detail Pembeli -->
    <div class="flex justify-center py-5">
        <div class="p-6 bg-brand-desk rounded-xl shadow w-full md:w-1/2">
            <h5 class="text-white font-bold ml-5 mb-5 text-center leading-none text-3xl">Detail Pembeli</h5>
            <hr class="mb-2 border-gray-200 sm:mx-auto" />
            <table class="text-white w-full">
                <tr>
                    <td class="py-3 px-5 font-semibold text-xl">Nama Pembeli</td>
                </tr>
            </table>
        </div>
    </div>

    <x-footer></x-footer>
</body>

</html>
