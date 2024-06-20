@extends('layouts.main')

@section('content')
    <div class="mt-16 bg-brand-blue h-auto w-full font-mono justify-center items-center">
        <div class="text-white py-8 px-10">
            <h1 class="text-2xl font-extrabold ml-5 leading-none md:text-3xl lg:text-4xl">{{ $konser->title }}</h1>
        </div>
        <div class="relative flex flex-col max-w-screen-xl max-h-svh items-center bg-brand-blue shadow md:flex-row dark:border-gray-700 dark:bg-gray-800">
                @if ($konser->image)
                    <img class="object-cover py-5 px-10 w-auto h-64 md:h-auto md:w-3/4 rounded-t-lg md:rounded-none md:rounded-s-lg" 
                    src="{{ asset('storage/' . $konser->image) }}" alt="" />    
                    @else
                    <img class="object-cover py-5 px-10 w-auto h-64 md:h-auto md:w-3/4 rounded-t-lg md:rounded-none md:rounded-s-lg" 
                    src="{{ asset('storage/images/default.png') }}" alt="" />    
                    @endif
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
                            <span class="text-white">{{ \Carbon\Carbon::parse($konser['date_start'])->format('j F Y') }} - {{ \Carbon\Carbon::parse($konser['date_end'])->format('j F Y') }}</span>
                        </div>
                    </li>
                    <li>
                        <div class="mb-3 flex space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <span class="text-white">{{ \Carbon\Carbon::parse($konser['time'])->format('H:i') }}</span>
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
                                {{ $konser['lokasi'] }}</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    
        <div class="inline-flex items-center justify-between mt-3 mb-8 px-10">
            <button onclick="toggleTeks('deskripsi', ['tiket', 'sk', 'talent'])" aria-current="page"
                class="px-10 py-2 text-sm font-bold text-white bg-brand-desk border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-black focus:z-10 focus:ring-2 focus:ring-white focus:text-black dark:bg-white dark:border-gray-700 dark:text-white dark:hover:text-black dark:hover:bg-white dark:focus:ring-blue-500 dark:focus:text-black">
                Deskripsi
            </button>
            <button onclick="toggleTeks('tiket', ['deskripsi', 'talent','sk'])"
                class="px-10 py-2 text-sm font-bold text-white bg-brand-desk border-t border-b border-gray-200 hover:bg-gray-100 hover:text-black focus:z-10 focus:ring-2 focus:ring-white focus:text-black dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-black dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-black">
                Tiket
            </button>
            <button onclick="toggleTeks('talent', ['deskripsi','tiket', 'sk'])"
                class="px-10 py-2 text-sm font-bold text-white bg-brand-desk border border-gray-200 hover:bg-gray-100 hover:text-black focus:z-10 focus:ring-2 focus:ring-white focus:text-black dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-black dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-black">
                Talent
            </button>
            <button onclick="toggleTeks('sk', ['deskripsi','tiket', 'talent'])"
                class="px-10 py-2 text-sm font-bold text-white bg-brand-desk border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-black focus:z-10 focus:ring-2 focus:ring-white focus:text-black dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-black dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-black">
                S&K
            </button>
        </div>
    
        <div id="deskripsi" class="hidden w-auto mx-10 p-6 mb-20 bg-brand-desk rounded-lg shadow md:w-1/2 ">
            <div id="trix-content">{!! $konser['deskripsi'] !!}</div>
        </div>
    
        <div id="tiket" class="hidden">
            @if (!empty($konser->ticket))
                @foreach ($konser->ticket as $t)
                    <div class="mx-10 p-6 mb-10 bg-brand-desk rounded-xl shadow md:w-2/3">
                        <div class="flex justify-between items-center mb-2">
                            <h5 class="text-2xl font-bold text-white dark:text-white">{{ $t->title }}</h5>
                            <button class="px-4 py-2 font-bold bg-white text-brand-blue rounded-xl">{{ $t->status }}</button>
                        </div>
                        <hr class="mb-2 border-gray-200 sm:mx-auto dark:border-gray-700" />
                        <p class="font-normal text-gray-200 dark:text-gray-400">Harga</p>
                        <div class="flex justify-between items-center">
                            <h6 class="text-2xl font-bold text-white dark:text-gray-400">{{ Number::format($t->price, locale : 'de') }}</h6>
                            <a href="/datatiket/{{ $konser['slug']}}/{{ $t->id }}" class="px-4 py-2 bg-brand-button font-bold text-white rounded-xl hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Beli</a>
                        </div>
                    </div>
                @endforeach
            @else
            <div class="w-auto mx-10 p-6 mb-20 bg-brand-desk rounded-lg shadow md:w-1/2">
            <p class="font-normal text-white dark:text-gray-400 text-justify">No tikets available for this konser.</p>
            </div>
            @endif
        </div>
    
        <div id="talent" class="hidden grid-cols-10 gap-5 p-4  ">
            @foreach ($konser->talent as $item)
            <div class="flex flex-col items-center p-2 bg-brand-desk border-gray-200 rounded-xl shadow dark:border-gray-700 dark:bg-gray-800">
                <img class="object-cover w-fit rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                    src="storage/{{ $item->image }}" alt="">
                <div class="flex flex-col justify-center items-center p-2 w-full">
                    <h5 class="text-2xl font-normal text-center text-white dark:text-white">{{ $item->name }}</h5>
                </div>
            </div>
            @endforeach
        </div>
    
        <div id="sk" class="hidden w-auto mx-10 p-6 mb-20 bg-brand-desk rounded-lg shadow md:w-1/2 ">
            @foreach ($konser->syaratketentuan as $item)
            <ul>
            <li><div id="trix-content">{!! $item['syaratketentuan'] !!}</div></li>
            </ul>
            @endforeach
        </div>
    </div>
@endsection

<script>
    function toggleTeks(idTeksToShow, idsTeksToHide) {
        var teksToShow = document.getElementById(idTeksToShow);
        // Menampilkan atau menyembunyikan teks yang ditargetkan
        if (idTeksToShow === 'talent') {
        // Mengatur display menjadi 'grid' atau 'none'
        teksToShow.style.display = (teksToShow.style.display === "none" || teksToShow.style.display === "") ? "grid" : "none";
        } else {
        // Untuk elemen lain, gunakan logika block/none seperti sebelumnya
        teksToShow.style.display = (teksToShow.style.display === "none" || teksToShow.style.display === "") ? "block" : "none";
        }

        // Menyembunyikan semua teks lain
        idsTeksToHide.forEach(function(id) {
            var teksToHide = document.getElementById(id);
            teksToHide.style.display = "none";
        });
    }
</script>


</html>
