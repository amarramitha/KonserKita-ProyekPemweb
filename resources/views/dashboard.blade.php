<x-header></x-header>

<body class="h-auto font-sans">
    <x-navbar></x-navbar>


    <section class="bg-center bg-no-repeat
     w-full relative">
        <img src="{{ asset('storage/images/1.jpg') }}"
            class="w-full h-full object-cover absolute top-0 left-0 mix-blend-overlay brightness-50" alt="Example Image">
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

                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <a href="/bersuaproject">
                        <img src="{{ asset('storage/images/bersua.png') }}"
                            class="absolute block w-fit h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="bersua">
                    </a>
                </div>

                <!-- Item 2 -->

                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <a href="/bigufestival">
                        <img src="{{ asset('storage/images/bigu.png') }}"
                            class="absolute block w-fit h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="bigu">
                    </a>
                </div>

                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <a href="#">
                        <img src="{{ asset('storage/images/purnama.png') }}"
                            class="absolute block w-fit h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="purnama">
                    </a>
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <a href="#">
                        <img src="{{ asset('storage/images/cilacapfair.jpg') }}"
                            class="absolute block w-fit h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="cilacapfair">
                    </a>
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <a href="#">
                        <img src="{{ asset('storage/images/reality.jpg') }}"
                            class="absolute block w-fit h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="reality">
                    </a>
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-3 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                    data-carousel-slide-to="4"></button>
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
                    <img class="max-w-full rounded-lg p-6" src="{{ asset('storage/images/poster1.png') }}"
                        alt="">
                </div>
                <div>
                    <img class="max-w-full rounded-lg p-6" src="{{ asset('storage/images/poster2.png') }}"
                        alt="">
                </div>
                <div>
                    <img class="max-w-full rounded-lg p-6" src="{{ asset('storage/images/poster3.png') }}"
                        alt="">
                </div>
                <div>
                    <img class="max-w-full rounded-lg p-6" src="{{ asset('storage/images/poster4.png') }}"
                        alt="">
                </div>
                <div>
                    <img class="max-w-full rounded-lg p-6" src="{{ asset('storage/images/poster5.png') }}"
                        alt="">
                </div>
                <div>
                    <img class="max-w-full rounded-lg p-6" src="{{ asset('storage/images/poster6.png') }}"
                        alt="">
                </div>
            </div>
            <div class="flex justify-center mt-8">
<<<<<<< HEAD:resources/views/dashboard.blade.php
                <a href="#"
                    class="inline-flex items-center px-5 py-3 text-sm font-medium text-center text-white bg-transparent border border-white rounded-lg hover:bg-brand-purple focus:ring-4 focus:outline-none focus:ring-gray-900">
=======
                <a href="/lainnya"
                    class="inline-flex items-center px-5 py-3 text-sm font-medium text-center text-white bg-transparent border border-white rounded-lg hover:bg-brand-purple focus:ring-4 focus:outline-none focus:ring-gray-900 dark:bg-brand-purple dark:hover:bg-brand-purple dark:focus:ring-brand-ungu">
>>>>>>> 7fb0d42b3a8a635cc2bcfce2e932e4d051aa64fe:resources/views/home.blade.php
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

        <div id="controls-carousel" class="relative" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="grid grid-cols-2 md:grid-cols-5 gap-1 relative pb-10">
                <!-- Images -->
                <div class="carousel-item">
                    <img class="max-w-full rounded-lg p-6" src="{{ asset('storage/images/tiara.png') }}"
                        alt="Tiara">
                </div>
                <div class="carousel-item">
                    <img class="max-w-full rounded-lg p-6" src="{{ asset('storage/images/nadin.png') }}"
                        alt="Nadin">
                </div>
                <div class="carousel-item">
                    <img class="max-w-full rounded-lg p-6" src="{{ asset('storage/images/ardhito.png') }}"
                        alt="Ardhito">
                </div>
                <div class="carousel-item">
                    <img class="max-w-full rounded-lg p-6" src="{{ asset('storage/images/tulus.png') }}"
                        alt="Tulus">
                </div>
                <div class="carousel-item">
                    <img class="max-w-full rounded-lg p-6" src="{{ asset('storage/images/mahalini.png') }}"
                        alt="Mahalini">
                </div>
                <div class="carousel-item">
                    <img class="max-w-full rounded-lg p-6" src="{{ asset('storage/images/tiara.png') }}"
                        alt="Tiara">
                </div>
                <div class="carousel-item">
                    <img class="max-w-full rounded-lg p-6" src="{{ asset('storage/images/nadin.png') }}"
                        alt="Nadin">
                </div>
                <div class="carousel-item">
                    <img class="max-w-full rounded-lg p-6" src="{{ asset('storage/images/ardhito.png') }}"
                        alt="Ardhito">
                </div>
                <div class="carousel-item">
                    <img class="max-w-full rounded-lg p-6" src="{{ asset('storage/images/tulus.png') }}"
                        alt="Tulus">
                </div>
                <div class="carousel-item">
                    <img class="max-w-full rounded-lg p-6" src="{{ asset('storage/images/mahalini.png') }}"
                        alt="Mahalini">
                </div>
<<<<<<< HEAD:resources/views/dashboard.blade.php

                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M5 1 1 5l4 4" />
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
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
=======
>>>>>>> 7fb0d42b3a8a635cc2bcfce2e932e4d051aa64fe:resources/views/home.blade.php
            </div>

            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
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
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>
    <x-footer></x-footer>

</body>

</html>
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
