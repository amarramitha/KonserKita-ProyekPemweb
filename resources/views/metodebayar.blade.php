<x-header></x-header>
<x-navbar></x-navbar>

<body class="min-h-screen font-mono flex flex-col justify-center items-center bg-brand-blue">
    <div
        class=" w-full max-w-screen-sm mx-auto items-center p-4 my-20 bg-brand-desk border border-brand-desk rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
        <form class="space-y-6" action="#">
            <div class="flex space-x-2 items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                </svg>

                <span class="text-xl font-medium text-center items-center text-white dark:text-white">
                    Rincian Pesanan
                </span>
            </div>
            <hr class="mb-2 border-gray-200 sm:mx-auto dark:border-gray-700" />
            <img class="w-max-sms" src="{{ asset('storage/images/bigu.png') }}">
            <h5 class="text-xl font-medium text-white dark:text-white">BIGU Festival (Jakarta
                Selatan)</h5>
            <hr class="mb-2 border-gray-200 sm:mx-auto dark:border-gray-700" />
            <div class="flex justify-between w-full">
                <h5 class="text-l font-semibold text-brand-huruf">Tiket</h5>
                <h5 class="text-l font-semibold text-brand-huruf">Jumlah</h5>
            </div>
            <div class="flex justify-between w-full">
                <h5 class="text-xl text-white font-semibold">Presale 2 Day 1 Pass</h5>
                <h5 class="text-xl font-semibold text-white">x2</h5>
            </div>
            <h5 class="text-xl font-semibold text-white dark:text-white">Rp 150.000</h5>
            <div class="flex justify-between w-full">
                <input type="text" name="kodevoucher" id="kodevoucher"
                    class="bg-brand-blue border-0 text-white text-sm font-semibold rounded-lg block w-full p-2.5 focus:ring-0 dark:placeholder-gray-400 dark:text-white"
                    required placeholder="Masukkan Kode Voucher" />
                <button type="" class="text-l font-semibold text-white p-4">Terapkan</button>
            </div>
            <hr class="mb-2 border-gray-200 sm:mx-auto dark:border-gray-700" />
            <div class="flex justify-between w-full">
                <h5 class="text-xl text-brand-huruf font-bold">Subtotal</h5>
                <h5 class="text-xl font-semibold text-white">Rp 300.000</h5>
            </div>
            <div class="flex justify-between w-full">
                <h5 class="text-xl text-brand-huruf font-bold">Biaya Layanan</h5>
                <h5 class="text-xl font-semibold text-white">Rp 16.000</h5>
            </div>
            <hr class="mb-2 border-gray-200 sm:mx-auto dark:border-gray-700" />
            <div class="flex justify-between w-full">
                <h5 class="text-xl text-brand-huruf font-bold">Total</h5>
                <h5 class="text-xl font-semibold text-white">Rp 316.000</h5>
            </div>
        </form>
    </div>

    <div
        class=" w-full max-w-screen-sm mx-auto items-center p-4 mb-20 bg-brand-desk border border-brand-desk rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
        <form class="space-y-6" action="#">
            <div class="flex space-x-2 items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                </svg>

                <span class="text-xl font-medium text-center items-center text-white dark:text-white">
                    Metode Pembayaran
                </span>
            </div>
            <hr class="mb-2 border-gray-200 sm:mx-auto dark:border-gray-700" />
            <div class="flex justify-around w-full my-5">
                <div class="py-2 max-w-fit h-fit bg-brand-blue bg-opacity-50 rounded-lg shadow">
                    <button class="text-white p-6 font-semibold">Transfer Bank</button>
                </div>
                <div class="py-2 max-w-fit h-fit bg-brand-blue bg-opacity-50 rounded-lg shadow">
                    <button class="text-white p-6 font-semibold">QRIS</button>
                </div>
                <div class="py-2 max-w-fit h-fit bg-brand-blue bg-opacity-50 rounded-lg shadow">
                    <button class="text-white p-6 font-semibold font-mono">E-Wallet</button>
                </div>
            </div>
            <hr class="mb-2 border-garis opacity-30 sm:mx-auto dark:border-gray-700" />
            <div class="grid grid-cols-2 gap-4 my-5 mx-auto px-10 py-5 p-5" style="max-width: max-content;">
                <div class="py-2 max-w-fit h-fit bg-brand-blue bg-opacity-50 rounded-lg shadow">
                    <button class="text-white p-6 font-semibold">Bank BCA</button>
                </div>
                <div class="py-2 max-w-fit h-fit bg-brand-blue bg-opacity-50 rounded-lg shadow">
                    <button class="text-white p-6 font-semibold">Bank BNI</button>
                </div>
                <div class="py-2 max-w-fit h-fit bg-brand-blue bg-opacity-50 rounded-lg shadow">
                    <button class="text-white p-6 font-semibold">Bank BRI</button>
                </div>
                <div class="py-2 max-w-fit h-fit bg-brand-blue bg-opacity-50 rounded-lg shadow">
                    <button class="text-white p-6 font-semibold">Bank Lainnya</button>
                </div>
            </div>
            <div class="flex justify-center mt-2 md:mt-0">
                <button type=""
                    class="block px-4 py-2 bg-brand-blue text-white rounded-xl text-center items-center hover:bg-slate-900 dark:bg-slate-900">Bayar
                    Sekarang</button>
            </div>
        </form>
    </div>

    <x-footer></x-footer>
</body>

</html>
