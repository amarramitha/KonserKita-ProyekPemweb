<x-header></x-header>

<body class="bg-brand-blue font-sans">
    <x-navbar></x-navbar>

    <!-- Detail Pembayaran -->
    <div class="flex justify-center py-5">
        <div class="p-6 bg-brand-desk rounded-xl shadow w-full md:w-1/2">
            <h5 class="text-white font-bold ml-5 mb-5 text-center leading-none text-3xl">Selesaikan Pembayaran Anda dalam
            </h5>
            <div class="flex justify-center items-center w-full">
                <div class="py-2 my-5 w-auto bg-brand-blue rounded-lg shadow">
                    <p class="text-white text-center text-4xl font-bold">01:00:00</p>
                    <p class="text-white text-center text-xl">Sebelum Minggu, 26 Mei 2024 | 21.00 WIB</p>
                </div>
            </div>
            <div class="flex justify-center w-full">
                <table class="text-white">
                    <tr>
                        <td class="px-4 text-center items-center">Total Pembayaran</td>
                        <td class="px-10 text-center">:</td>
                        <td>Rp 316.000</td>
                    </tr>
                    <tr>
                        <td class="p-3 text-center">Virtual Account</td>
                        <td class="px-10 text-center">:</td>
                        <td id="virtualAccount">xxxxxxxxxxx</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <!-- Detail Tiket -->
    <div class="flex justify-center py-5">
        <div class="p-6 bg-brand-desk rounded-xl shadow w-full md:w-1/2">
            <h5 class="text-white font-bold ml-5 mb-5 text-center leading-none text-2xl">Cara Pembayaran</h5>
            <hr class="mb-2 border-gray-200 sm:mx-auto" />
            <h5 class="text-white font-semibold ml-5 my-5 leading-none text-xl">ATM BNI</h5>
            <hr class="mb-2 border-gray-200 sm:mx-auto" />
            <h5 class="text-white font-semibold ml-5 my-5 leading-none text-xl">Mobile Banking BNI</h5>
            <ul class="ml-5 my-5 text-sm text-white">
                <li class="block px-4 py-2">1. Masukkan ID Pengguna dan kata sandi Anda.
                </li>
                <li class="block px-4 py-2">2. Pilih menu 'transfer'.
                </li>
                <li class="block px-4 py-2">3. Pilih menu 'Penagihan Rekening Virtual' lalu pilih rekening debit.
                </li>
                <li class="block px-4 py-2">4. Masukkan Nomor Virtual Account anda pada menu Input Baru.
                </li>
                <li class="block px-4 py-2">5. Jumlah yang ditagih akan ditampilkan di layar.
                </li>
                <li class="block px-4 py-2">6. Konfirmasikan transaksi dan masukkan kata sandi anda.
                </li>
                <li class="block px-4 py-2">7. Transaksi anda selesai.
                </li>
                <li class="block px-4 py-2">8. Setelah transaksi pembayaran selesai, invoice ini dikirimkan ke email
                    anda yang terdaftar
                </li>
            </ul>
        </div>
    </div>

    <x-footer></x-footer>
</body>

</html>
<script>
    function toggleDropdown() {
        const dropdown = document.getElementById('dropdown');
        dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
    }
</script>
