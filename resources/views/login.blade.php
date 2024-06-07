<x-header></x-header>
<body class="bg-brand-login min-h-screen font-mono flex justify-center items-center relative">
<body class="bg-brand-login min-h-screen font-sans flex justify-center items-center relative">
    <div class="relative w-full max-w-4xl">
        <img class="rounded-lg w-full" src="{{ asset('storage/images/login.png') }}" alt="image description">
        <div class="absolute inset-0 flex justify-center items-center">

            {{-- session untuk menampilkan berhasil registrasi --}}
            @if (session()->has('success')) 
            <div id="session" class="flex max-w-md items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                <div class="ms-3 text-sm font-medium">
                    {{ session('success') }}
                </div>
                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#session" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>
            @endif

            {{-- session untuk menampilkan gagal login --}}
            @if (session()->has('loginError'))
            <div id="session" class="flex max-w-md items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-red-800 dark:text-red-400" role="alert">
                <div class="ms-3 text-sm font-medium">
                    {{ session('loginError') }}
                </div>
                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-red-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#session" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>
            @endif

            <div
            class="w-full max-w-sm p-4 bg-brand-form border border-brand-form rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white text-center">KonserKita.
            </h5>
            
            
                <form action="/login" method="post" class="space-y-4 md:space-y-6">
                    @csrf 
                    <div>
                        <input type="email" name="email" id="email"
                            class="bg-brand-input border border-brand-input text-white text-sm rounded-lg focus:ring-brand-ungu focus:border-brand-ungu block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white
                            @error('email')
                                
                            @enderror"
                            placeholder="Email" autofocus required value="{{ old('email') }}" />
                            @error('email')
                                {{ $message }}
                            @enderror
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
