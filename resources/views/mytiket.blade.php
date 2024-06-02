<x-header></x-header>

<body class="bg-brand-blue w-full font-sans flex flex-col min-h-screen">
    <x-navbar></x-navbar>
    <main class="flex-grow flex flex-col items-center">
        <div class="w-full mx-auto p-6 mb-5 bg-transparent rounded-xl shadow md:w-3/4">
            <div class="flex justify-between items-center mb-2">
                <h2 class="text-2xl font-bold text-white dark:text-white md:text-4xl">Tiket Saya</h2>
            </div>
        </div>
        <div class="w-full h-auto mx-auto p-6 mb-10 bg-brand-desk rounded-xl shadow md:w-3/4">
            <div class="flex flex-col md:flex-row justify-between items-center mb-2">
                <div class="overflow-x-auto w-full">
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th class="px-2 py-1"></th>
                                <th class="text-center items-center text-white font-semibold text-sm md:text-base">
                                    Nama
                                    Konser</th>
                                <th class="text-center items-center text-white font-semibold text-sm md:text-base">Nama
                                    Pembeli</th>
                                <th class="text-center items-center text-white font-semibold text-sm md:text-base">Jenis
                                    Tiket</th>
                                <th class="text-center items-center text-white font-semibold text-sm md:text-base">
                                    Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-2 py-1">
                                    <img src="{{ asset('storage/images/bigutiket.png') }}"
                                        class="object-cover w-full max-w-sm rounded-t-lg h-48 md:h-auto md:w-50 md:rounded-none md:rounded-l-lg">
                                </td>
                                <td class=" text-center items-center text-white font-normal text-sm md:text-base">
                                    BIGU FESTIVAL</td>
                                <td class="text-center items-center text-white font-normal text-sm md:text-base">Nama
                                    Pembeli</td>
                                <td class="text-center items-center text-white font-normal text-sm md:text-base">Presale
                                    2 Day 1 Pass
                                </td>
                                <td class="text-center items-center text-white font-normal text-sm md:text-base">2</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <x-footer></x-footer>
</body>

</html>
