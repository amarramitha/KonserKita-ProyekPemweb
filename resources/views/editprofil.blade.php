<x-header></x-header>
<x-navbar></x-navbar>

<body class="min-h-screen font-sans flex flex-col justify-center items-center bg-brand-blue">
    <div
        class=" w-full max-w-screen-sm mx-auto items-center p-4 my-20 bg-brand-desk border border-brand-desk rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
        <form class="space-y-6" action="#">
            <div class="flex space-x-2 items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Zm6-10.125a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0Zm1.294 6.336a6.721 6.721 0 0 1-3.17.789 6.721 6.721 0 0 1-3.168-.789 3.376 3.376 0 0 1 6.338 0Z" />
                </svg>

                <span class="text-xl font-medium text-center items-center text-white dark:text-white">
                    Edit Data Profil
                </span>
            </div>
            <hr class="mb-2 border-gray-200 sm:mx-auto dark:border-gray-700" />
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-white dark:text-white">Email
                </label>
                <input type="email" name="email" id="email"
                    class="bg-brand-blue border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    required />
            </div>
            <div>
                <label for="namapemesan" class="block mb-2 text-sm font-medium text-white dark:text-white">Nama Lengkap
                </label>
                <input type="text" name="namapemesan" id="namapemesan"
                    class="bg-brand-blue border border-gray-300 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    required />
            </div>
            <div>
                <label for="ktp" class="block mb-2 text-sm font-medium text-white dark:text-white">Identitas KTP
                </label>
                <input type="text" name="ktp" id="ktp"
                    class="bg-brand-blue border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    required />
            </div>
            <div>
                <label for="nohp" class="block mb-2 text-sm font-medium text-white dark:text-white">No. Whatsapp
                </label>
                <input type="nohp" name="nohp" id="nohp"
                    class="bg-brand-blue border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    required />
            </div>
            <fieldset>
                <legend class="sr-only">Jenis Kelamin</legend>
                <label for="jk" class="block mb-2 text-sm font-medium text-white dark:text-white">Jenis Kelamin
                </label>
                <div class="flex items-center mb-4">
                    <input id="country-option-1" type="radio" name="jk" value="lakilaki"
                        class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-brand-blue dark:focus:ring-brand-blue dark:focus:bg-brand-blue dark:bg-gray-700 dark:border-gray-600"
                        checked>
                    <label for="country-option-1" class="block ms-2  text-sm font-medium text-white dark:text-gray-300">
                        Laki-Laki
                    </label>
                </div>

                <div class="flex items-center mb-4">
                    <input id="country-option-2" type="radio" name="jk" value="perempuan"
                        class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-brand-blue dark:focus:bg-brand-blue dark:bg-gray-700 dark:border-gray-600">
                    <label for="country-option-2" class="block ms-2 text-sm font-medium text-white dark:text-gray-300">
                        Perempuan
                    </label>
                </div>
            </fieldset>
            <div class="flex justify-center mt-2 md:mt-0">
                <button type=""
                    class="block px-4 py-2 bg-brand-blue text-white rounded-xl text-center items-center hover:bg-slate-900 dark:bg-slate-900">Lanjutkan
                </button>
            </div>
        </form>
    </div>

    <x-footer></x-footer>
</body>

</html>
