<nav class="bg-brand-purple border-gray-200 relative w-full">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/dashboard" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('storage/images/logo.png') }}" class="h-8" alt="KonserKita Logo" />
        </a>

        <!-- search -->
        <div class="flex md:order-2">
            <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search"
                aria-expanded="false"
                class="md:hidden text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 rounded-lg text-sm p-2.5 me-1">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
                <span class="sr-only">Search</span>
            </button>
            <div class="relative hidden md:block">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search icon</span>
                </div>
                <input type="text" id="search-navbar"
                    class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-fuchsia-950 focus:border-blue-500"
                    placeholder="Search...">
            </div>
            <button data-collapse-toggle="navbar-search" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden hover:bg-brand-ungu focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-search" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>

        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
            <div class="relative mt-3 md:hidden">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="text" id="search-navbar"
                    class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Search...">
            </div>

            <button data-collapse-toggle="navbar-multi-level" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-multi-level" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
            @auth
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:dark:bg-gray-900">
                    <li>
                        <a href="/mytiket" aria-current="page"
                            class="{{ request()->is('mytiket') ? 'text-brand-ungu hover:bg-purple-200 md:hover:bg-transparent md:bg-transparent md:text-brand-ungu md:dark:text-brand-ungu' : 'text-white md:text-white hover:bg-purple-200 md:hover:bg-transparent md:hover:text-brand-ungu md:dark:hover:text-brand-ungu md:dark:hover:bg-transparent ' }} block py-2 px-3 md:p-0 rounded">Tiket</a>
                    </li>
                    <li>
                        <a href="/transaksi" aria-current="page"
                            class="{{ request()->is('transaksi') ? 'text-brand-ungu hover:bg-purple-200 md:hover:bg-transparent md:bg-transparent md:text-brand-ungu md:dark:text-brand-ungu' : 'text-white md:text-white hover:bg-purple-200 md:hover:bg-transparent md:hover:text-brand-ungu md:dark:hover:text-brand-ungu md:dark:hover:bg-transparent ' }} block py-2 px-3 md:p-0 rounded">Transaksi</a>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                            class="flex items-center justify-between w-full py-2 px-3 md:border-0 md:p-0 md:w-auto {{ request()->is('profil') ? 'text-brand-ungu hover:bg-purple-200 md:hover:bg-transparent md:bg-transparent md:text-brand-ungu md:dark:text-brand-ungu' : 'text-white md:text-white hover:bg-purple-200 md:hover:bg-transparent md:hover:text-brand-ungu md:dark:hover:text-brand-ungu md:dark:hover:bg-transparent ' }}">
                            Profil
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                <li class="hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                                    <h2 class="block px-4 py-2">
                                        Hello, {{ Auth::user()->name }}</h2>
                                </li>
                                <li>
                                    <a href="/editprofil"
                                        class="block px-4 py-2 hover:bg-gray-100">Edit
                                        Profil</a>
                                </li>
                            <li class="py-1">
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex"> 
                                        <svg class="w-[20px] h-[20px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>Keluar
                                          </svg>     
                                          Keluar                                     
                                    </button>
                                </form>
                            </li>
                        </ul>
                        </div>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex text-white"> 
                                    <svg class="w-[20px] h-[20px] text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>Keluar
                                      </svg>     
                                      Keluar                                     
                                </button>
                            </form>
                        </li>
                    </li>
                </ul>
                @else
                <ul
                class="flex flex-col p-4 md:p-0 mt-4 font-medium md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="/register" aria-current="page"
                    class="{{ request()->is('tiket') ? 'text-brand-ungu hover:bg-purple-200 md:hover:bg-transparent md:bg-transparent md:text-brand-ungu md:dark:text-brand-ungu' : 'text-white md:text-white hover:bg-purple-200 md:hover:bg-transparent md:hover:text-brand-ungu md:dark:hover:text-brand-ungu dark:text-white dark:hover:bg-gray-700 dark:hover:text-brand-ungu md:dark:hover:bg-transparent dark:border-gray-700 ' }} block py-2 px-3 md:p-0 rounded">Register</a>
                </li>
                <li>
                    <a href="/login" aria-current="page"
                    class="{{ request()->is('transaksi') ? 'text-brand-ungu hover:bg-purple-200 md:hover:bg-transparent md:bg-transparent md:text-brand-ungu md:dark:text-brand-ungu' : 'text-white md:text-white hover:bg-purple-200 md:hover:bg-transparent md:hover:text-brand-ungu md:dark:hover:text-brand-ungu dark:text-brand-ungu dark:hover:bg-gray-700 dark:hover:text-brand-ungu md:dark:hover:bg-transparent dark:border-gray-700 ' }} block py-2 px-3 md:p-0 rounded">Login</a>
                </li>
                </ul>
            </div>
            @endauth
        </div>
    </div>
</nav>
