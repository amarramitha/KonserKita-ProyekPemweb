<x-header></x-header>

<body class="bg-brand-login min-h-screen font-sans flex justify-center items-center relative">

    <div class="relative w-full max-w-4xl">
        <img class="rounded-lg w-full" src="{{ asset('storage/images/login.png') }}" alt="image description">
        <div class="absolute inset-0 flex justify-center items-center">
            <div
                class="w-full max-w-sm p-4 bg-brand-form border border-brand-form rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white text-center">KonserKita.
                </h5>

                <form class="space-y-4 md:space-y-6">
                    <div>
                        <input type="email" name="email" id="email"
                            class="bg-brand-input border border-brand-input text-white text-sm rounded-lg focus:ring-brand-ungu focus:border-brand-ungu block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Email" required />
                    </div>
                    <div>
                        <input type="password" name="password" id="password" placeholder="Password"
                            class="bg-brand-input border border-brand-input text-white text-sm rounded-lg focus:ring-brand-ungu focus:border-brand-ungu block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            required />
                    </div>
                    <button type="submit"
                        class="w-full text-white bg-brand-input hover:bg-brand-login focus:ring-4 focus:outline-none focus:ring-brand-ungu font-medium rounded-lg text-sm p-2.5 text-center dark:bg-brand-ungu dark:hover:bg-brand-ungu dark:focus:ring-brand-ungu">Masuk</button>
                    <div class="text-sm font-medium text-white dark:text-gray-300 text-center">
                        Tidak punya akun? <a href="/register"
                            class="text-white hover:underline dark:text-blue-500">Daftar</a>
                    </div>
                </form>
            </div>

        </div>
    </div>

</body>

</html>
