<div class="text-white py-8 px-10">
    <h1 class="text-2xl font-extrabold ml-5 leading-none md:text-3xl lg:text-4xl">Bersua Project</h1>
</div>
<div
    class="relative flex flex-col max-w-screen-xl max-h-svh items-center bg-brand-blue shadow md:flex-row dark:border-gray-700 dark:bg-gray-800">
    <img class="object-cover py-5 px-10 w-auto h-64 md:h-auto md:w-3/4 rounded-t-lg md:rounded-none md:rounded-s-lg"
        src="{{ asset('storage/images/bersua.png') }}" alt="">

    <div class="flex flex-col justify-between p-4 leading-normal w-full md:w-1/4">
        <h5 class="mb-5 text-2xl font-bold text-white dark:text-white">Detail Konser</h5>
        <ul class="icon-text items-center">
            <li>
                <div class="mb-3 flex space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                    </svg>
                    <span class="text-white">27-28 April 2024</span>
                </div>
            </li>
            <li>
                <div class="mb-3 flex space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <span class="text-white">09.00 - 23.59 WIB</span>
                </div>
            </li>
            <li>
                <div class="mb-3 flex space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                    </svg>
                    <span class="text-white">
                        Stadion Kridosono Yogyakarta</span>
                </div>
            </li>
        </ul>
    </div>
</div>

<div class="inline-flex items-center justify-between mt-3 mb-8 px-10">
    <a href="/bersuadesk" aria-current="page"
        class="{{ request()->is('bersuadesk') ? 'bg-gray-100 text-black' : 'text-white bg-brand-desk  hover:bg-gray-100 hover:text-black ' }} 
px-10 py-2 text-sm font-medium border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-black focus:z-10 focus:ring-2 focus:ring-white focus:text-black dark:bg-white dark:border-gray-700 dark:text-white dark:hover:text-black dark:hover:bg-white dark:focus:ring-blue-500 dark:focus:text-black">
        Deskripsi
    </a>
    <a href="/bersuatiket"
        class="{{ request()->is('bersuatiket') ? 'bg-gray-100 text-black' : 'text-white bg-brand-desk  hover:bg-gray-100 hover:text-black ' }} border px-10 py-2 text-sm font-medium border-gray-200 focus:z-10 focus:ring-2 focus:ring-white focus:text-black dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-black dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-black">
        Tiket
    </a>
    <a href="/bersuask"
        class="{{ request()->is('bersuask') ? 'bg-gray-100 text-black' : 'text-white bg-brand-desk  hover:bg-gray-100 hover:text-black ' }} px-10 py-2 text-sm font-medium  border-t border-b border-gray-200 focus:z-10 focus:ring-2 focus:ring-white focus:text-black dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-black dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-black">
        S&K
    </a>
    <a href="/bersuatalent"
        class="{{ request()->is('bersuatalent') ? 'bg-gray-100 text-black' : 'text-white bg-brand-desk  hover:bg-gray-100 hover:text-black ' }} px-10 py-2 text-sm font-medium  border border-gray-200 rounded-e-lg focus:z-10 focus:ring-2 focus:ring-white focus:text-black dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-black">
        Talent
    </a>
</div>
