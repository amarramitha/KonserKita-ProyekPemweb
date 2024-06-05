<x-header></x-header>

<body class="bg-brand-ungu min-h-screen font-mono flex justify-center items-center relative">

    <div class="relative w-full max-w-4xl">
        <img class="rounded-lg w-full" src="{{ asset('storage/images/register.png') }}" alt="image description">
        <div class="absolute inset-0 flex justify-center items-center">
            <div
                class="w-full max-w-sm p-4 bg-brand-form border border-brand-form rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white text-center">KonserKita.
                </h5>

                <form class="space-y-4 md:space-y-6" action="/register" method="POST">
                @csrf
                    <div>
                        <input type="text" name="name" id="name"
                            class=" invalid@error('records') bg-brand-input border border-brand-input text-white text-sm rounded-lg focus:ring-brand-ungu focus:border-brand-ungu block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white
                            @error('name')
                            bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500
                            @enderror"
                            placeholder="name" />
                            @error('name')    
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                            @enderror
                    </div>
                    <div>
                        <input type="email" name="email" id="email" class="bg-brand-input border border-brand-input text-white text-sm rounded-lg focus:ring-brand-ungu focus:border-brand-ungu block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white
                        @error('email')
                        bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500
                        @enderror" 
                            placeholder="Email" />
                            @error('email')    
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                            @enderror
                    </div>
                    <div>
                        <input type="password" name="password" id="password" placeholder="Password" class="bg-brand-input border border-brand-input text-white text-sm rounded-lg focus:ring-brand-ungu focus:border-brand-ungu block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white
                        @error('password')
                        bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500
                        @enderror" />
                        @error('password')    
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                            @enderror
                    </div>
                    <button type="submit"
                        class="w-full text-white bg-brand-input hover:bg-brand-login focus:ring-4 focus:outline-none focus:ring-brand-ungu font-medium rounded-lg text-sm p-2.5 text-center dark:bg-brand-ungu dark:hover:bg-brand-ungu dark:focus:ring-brand-ungu">Daftar</button>
                    <div class="text-sm font-medium text-white dark:text-gray-300 text-center">
                        Sudah punya akun? <a href="/login"
                            class="text-white hover:underline dark:text-blue-500">Masuk</a>
                    </div>
                </form>
            </div>

        </div>
    </div>

</body>

</html>
