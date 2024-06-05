<x-header></x-header>
<x-navbar></x-navbar>

<body class="min-h-screen font-mono flex flex-col justify-center items-center bg-brand-blue">
    <div
        class=" w-full max-w-screen-sm mx-auto items-center p-4 my-20 bg-brand-desk border border-brand-desk rounded-lg shadow sm:p-6 md:p-8">
        <form class="space-y-6" action="#">
            <div class="flex space-x-2 items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Zm6-10.125a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0Zm1.294 6.336a6.721 6.721 0 0 1-3.17.789 6.721 6.721 0 0 1-3.168-.789 3.376 3.376 0 0 1 6.338 0Z" />
                </svg>

                <span class="text-xl font-medium text-center items-center text-white">
                    Data Pemesan
                </span>
            </div>
            <hr class="mb-2 border-gray-200 sm:mx-auto" />
            <div>
                <label for="namapemesan" class="block mb-2 text-sm font-medium text-white">Nama Lengkap
                </label>
                <input type="text" name="namapemesan" id="namapemesan"
                    class="bg-brand-blue border border-gray-300 text-white text-sm rounded-lg focus:ring-white focus:border-gray-300 block w-full p-2.5"
                    required />
            </div>
            <div>
                <label for="ktp" class="block mb-2 text-sm font-medium text-white">Identitas KTP
                </label>
                <input type="text" name="ktp" id="ktp"
                    class="bg-brand-blue border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-white focus:border-gray-300 block w-full p-2.5"
                    required />
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-white">Email
                </label>
                <input type="email" name="email" id="email"
                    class="bg-brand-blue border border-gray-300 text-white text-sm rounded-lg focus:ring-white focus:border-gray-300 block w-full p-2.5"
                    required />
            </div>
            <div>
                <label for="nohp" class="block mb-2 text-sm font-medium text-white">No. Handphone
                </label>
                <input type="nohp" name="nohp" id="nohp"
                    class="bg-brand-blue border border-gray-300 text-white text-sm rounded-lg focus:ring-white focus:border-gray-300 block w-full p-2.5"
                    required />
            </div>
            <fieldset>
                <legend class="sr-only">Jenis Kelamin</legend>
                <label for="jk" class="block mb-2 text-sm font-medium text-white">Jenis Kelamin
                </label>
                <div class="flex items-center mb-4">
                    <input id="country-option-1" type="radio" name="jk" value="lakilaki"
                        class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-brand-blue"
                        checked>
                    <label for="country-option-1" class="block ms-2  text-sm font-medium text-white">
                        Laki-Laki
                    </label>
                </div>

                <div class="flex items-center mb-4">
                    <input id="country-option-2" type="radio" name="jk" value="perempuan"
                        class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                    <label for="country-option-2" class="block ms-2 text-sm font-medium text-white">
                        Perempuan
                    </label>
                </div>
            </fieldset>
        </form>
    </div>

    <div
        class=" w-full max-w-screen-sm mx-auto items-center p-4 mb-20 bg-brand-desk border border-brand-desk rounded-lg shadow sm:p-6 md:p-8">
        <form class="space-y-6" action="#">
            <div class="flex space-x-2 items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Zm6-10.125a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0Zm1.294 6.336a6.721 6.721 0 0 1-3.17.789 6.721 6.721 0 0 1-3.168-.789 3.376 3.376 0 0 1 6.338 0Z" />
                </svg>

                <span class="text-xl font-medium text-center items-center text-white">
                    Data Pemilik Tiket
                </span>
            </div>
            <hr class="mb-2 border-gray-200 sm:mx-auto" />
            <div>

                <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" value="" class="sr-only peer">
                    <div
                        class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-brand-blue rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-brand-blue">
                    </div>
                    <span class="ms-3 text-sm font-medium text-brand-huruf">Samakan dengan Data
                        Pemesan</span>
                </label>

            </div>
            <div>
                <label for="namapemesan" class="block mb-2 text-sm font-medium text-white">Nama Lengkap
                </label>
                <input type="text" name="namapemesan" id="namapemesan"
                    class="bg-brand-blue border border-gray-300 text-white text-sm rounded-lg focus:ring-white focus:border-gray-300 block w-full p-2.5"
                    required />
            </div>
            <div>
                <label for="ktp" class="block mb-2 text-sm font-medium text-white">Identitas KTP
                </label>
                <input type="text" name="ktp" id="ktp"
                    class="bg-brand-blue border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-white focus:border-gray-300 block w-full p-2.5"
                    required />
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-white">Email
                </label>
                <input type="email" name="email" id="email"
                    class="bg-brand-blue border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-white focus:border-gray-300 block w-full p-2.5"
                    required />
            </div>
            <div>
                <label for="nohp" class="block mb-2 text-sm font-medium text-white">No. Handphone
                </label>
                <input type="nohp" name="nohp" id="nohp"
                    class="bg-brand-blue border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-white focus:border-gray-300 block w-full p-2.5"
                    required />
            </div>
            <fieldset>
                <legend class="sr-only">Jenis Kelamin</legend>
                <label for="jk" class="block mb-2 text-sm font-medium text-white">Jenis Kelamin
                </label>
                <div class="flex items-center mb-4">
                    <input id="country-option-1" type="radio" name="jk" value="lakilaki"
                        class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-brand-blue"
                        checked>
                    <label for="country-option-1"
                        class="block ms-2  text-sm font-medium text-white">
                        Laki-Laki
                    </label>
                </div>

                <div class="flex items-center mb-4">
                    <input id="country-option-2" type="radio" name="jk" value="perempuan"
                        class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300">
                    <label for="country-option-2"
                        class="block ms-2 text-sm font-medium text-white">
                        Perempuan
                    </label>
                </div>
            </fieldset>
            <div class="flex justify-center mt-2 md:mt-0">
                <button type=""
                    class="block px-4 py-2 bg-brand-blue text-white rounded-xl text-center items-center hover:bg-slate-900">Lanjutkan
                </button>
            </div>
        </form>
    </div>

    <x-footer></x-footer>
</body>

</html>
