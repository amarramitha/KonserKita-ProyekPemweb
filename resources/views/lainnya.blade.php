<x-header></x-header>

<body class="bg-brand-blue h-auto w-full font-sans justify-center items-center">
    <x-navbar></x-navbar>

    <!--grid-->
    <div
        class="relative w-full h-full bg-gray-900 border border-brand-blue shadow dark:bg-gray-800 dark:border-gray-700">
        <img src="{{ asset('storage/images/2.jpg') }}"
            class="absolute inset-0 w-full h-full object-cover mix-blend-overlay brightness-50" alt="Background Image">
        <div class="relative p-10">
            <h5 class="mb-2 text-2xl font-bold text-center tracking-tight text-white dark:text-white">Sebentar Lagi!
            </h5>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <div>
                    <img class="max-w-full rounded-lg p-6" src="{{ asset('storage/images/poster1.png') }}" alt="">
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
            <div class="flex justify-center mt-4 space-x-2">
                <button id="prev" class="px-3 py-1 text-white hover:bg-brand-purple">
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                </button>
                <div id="carouselIndicators" class="flex space-x-1">
                    @for ($i = 1; $i <= 9; $i++)
                        <a href="#"
                            class="indicator mx-1 px-3 py-1 text-sm font-medium text-center text-white hover:bg-brand-purple focus:outline-none focus:ring-4 focus:ring-gray-900 dark:bg-brand-purple dark:hover:bg-brand-purple dark:focus:ring-brand-ungu"
                            style="display: none;">
                            {{ $i }}
                        </a>
                    @endfor
                </div>
                <button id="next" class="px-3 py-1 text-white hover:bg-brand-purple">
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                </button>
            </div>
        </div>
    </div>

</body>

</html>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const indicators = document.querySelectorAll('.indicator');
        let currentStart = 0;
        const visibleCount = 5;

        function updateIndicators() {
            indicators.forEach((el, index) => {
                if (index >= currentStart && index < currentStart + visibleCount) {
                    el.style.display = 'block';
                } else {
                    el.style.display = 'none';
                }
            });
        }

        document.getElementById('next').addEventListener('click', function() {
            if (currentStart + visibleCount < indicators.length) {
                currentStart++;
                updateIndicators();
            }
        });

        document.getElementById('prev').addEventListener('click', function() {
            if (currentStart > 0) {
                currentStart--;
                updateIndicators();
            }
        });

        updateIndicators(); // Initialize the indicators on load
    });
</script>
