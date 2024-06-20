@extends('layouts.main')

@section('content')
    <div class=" mt-16">
        <section class="bg-center bg-no-repeat w-full relative">
            <img src="{{ asset('storage/images/1.jpg') }}" class="w-full h-full object-cover absolute top-0 left-0 mix-blend-overlay brightness-50" alt="Example Image">

            @if (session()->has('success'))
        <div id="alert-3" class=" ml-80 inline-flex w-3/6 relative items-center justify-items-center p-4 mb-4 z-10 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-sm font-medium">
              {{ session('success') }}
            </div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
              <span class="sr-only">Close</span>
              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
              </svg>
            </button>
        </div>
        @endif

            <div class="relative z-10 flex flex-col px-8 mx-auto max-w-screen-xl py-24 lg:py-56">
                <h1
                    class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-center text-white md:text-5xl lg:text-6xl">
                    KonserKita.
                </h1>
                <h2 class="mb-8 text-lg font-normal italic text-center text-white lg:text-xl sm:px-16 lg:px-48">
                    Langsung ke Konser Favoritmu Tanpa Antri!
                </h2>
            </div>
        </section>
        <!--carousel-->
        <div
            class="block w-full px-5 py-5 p-10 bg-brand-blue shadow">
    
            <h5 class="mx-10 mt-5 mb-2 text-2xl font-bold tracking-tight text-white italic">Paling Banyak Dibeli!</h5>
            <p class="mx-10 font-normal text-white mb-8 text-base">Kumpulan konser yang paling banyak dibeli di
                Konserkita yang mungkin kamu sukai.</p>
    
    
            <div id="default-carousel" class="relative w-full h-full max-w-screen-xl max-h-svh" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    @foreach ($konsers as $k )
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <a href="/{{ $k['slug'] }}">
                            <img src="{{ asset('storage/' . $k['image']) }}"
                                class="absolute block w-fit h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="">
                        </a>
                    </div>
                    @endforeach
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-3 left-1/2 space-x-3 rtl:space-x-reverse">
                    @foreach ($konsers as $k)
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    @endforeach
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
    
        </div>
    
        <!--grid-->
        <div
            class="relative w-full h-full bg-gray-900 border border-brand-blue shadow">
            <img src="{{ asset('storage/images/2.jpg') }}"
                class="absolute inset-0 w-full h-full object-cover mix-blend-overlay brightness-50" alt="Background Image">
            <div class="relative p-10">
                <h5 class="mb-2 text-2xl font-bold text-center tracking-tight text-white">Sebentar Lagi!
                </h5>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    <div>
                        <img class="max-w-full rounded-lg p-6" src="{{ asset('storage/poster-images/poster1.png') }}"
                            alt="">
                    </div>
                    <div>
                        <img class="max-w-full rounded-lg p-6" src="{{ asset('storage/poster-images/poster2.png') }}"
                            alt="">
                    </div>
                    <div>
                        <img class="max-w-full rounded-lg p-6" src="{{ asset('storage/poster-images/poster3.png') }}"
                            alt="">
                    </div>
                </div>
                <div class="flex justify-center mt-8">
                    <a href="/lainnya"
                        class="inline-flex items-center px-5 py-3 text-sm font-medium text-center text-white bg-transparent border border-white rounded-lg hover:bg-brand-purple focus:ring-4 focus:outline-none focus:ring-gray-900 dark:bg-brand-purple dark:hover:bg-brand-purple dark:focus:ring-brand-ungu">
                        Lainnya
                    </a>
                </div>
            </div>
        </div>
    
        <!--penyanyi-->
        <div
            class="block w-full px-5 py-2 p-10 bg-brand-blue shadow">
    
            <h5 class="mx-10 mt-5 mb-3 text-2xl font-bold tracking-tight text-white italic">Cari Penyanyi Favoritmu!</h5>
            <p class="mx-10 font-normal text-white mb-8 text-base">Ayo cari konser sesuai penyanyi favoritmu.</p>
    
            <div id="talent-poster" class="relative" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="grid grid-cols-2 md:grid-cols-5 gap-1 relative pb-10">
                    <!-- Images -->
                    <div class="carousel-item">
                        <img class="max-w-full rounded-lg p-6" src="{{ asset('storage/talent-posters/tiara.png') }}"
                            alt="Tiara">
                    </div>
                    <div class="carousel-item">
                        <img class="max-w-full rounded-lg p-6" src="{{ asset('storage/talent-posters/nadin.png') }}"
                            alt="Nadin">
                    </div>
                    <div class="carousel-item">
                        <img class="max-w-full rounded-lg p-6" src="{{ asset('storage/talent-posters/ardhito.png') }}"
                            alt="Ardhito">
                    </div>
                    <div class="carousel-item">
                        <img class="max-w-full rounded-lg p-6" src="{{ asset('storage/talent-posters/tulus.png') }}"
                            alt="Tulus">
                    </div>
                    <div class="carousel-item">
                        <img class="max-w-full rounded-lg p-6" src="{{ asset('storage/talent-posters/mahalini.png') }}"
                            alt="Mahalini">
                    </div>
    
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const carousel = document.querySelector('#controls-carousel');
        const items = carousel.querySelectorAll('.carousel-item');
        let currentItem = 0;

        function updateCarousel() {
            items.forEach((item, index) => {
                // Show 5 items at a time
                if (index >= currentItem && index < currentItem + 5) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        const prevButton = carousel.querySelector('[data-carousel-prev]');
        const nextButton = carousel.querySelector('[data-carousel-next]');

        prevButton.addEventListener('click', function() {
            currentItem = Math.max(0, currentItem - 1);
            updateCarousel();
        });

        nextButton.addEventListener('click', function() {
            currentItem = Math.min(items.length - 5, currentItem + 1);
            updateCarousel();
        });

        updateCarousel(); // Initialize the carousel display
    });
</script>