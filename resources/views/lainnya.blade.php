<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- datepicker | untuk mengatur tanggal dan waktu --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>

    {{-- untuk membuat form deskripsi --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('storage/images/logo.png') }}">
    <title>KonserKita DashBoard</title>
</head>
<body>
    {{-- navbar --}}
    @include('layouts.header')

    <!-- Sidebar -->
    @include('layouts.sidebar')
    <div class="bg-brand-blue h-auto w-full font-sans justify-center items-center mt-16">
        <div
            class="relative w-full h-full bg-gray-900 border border-brand-blue shadow dark:bg-gray-800 dark:border-gray-700">
            <img src="{{ asset('storage/images/2.jpg') }}"
                class="absolute inset-0 w-full h-full object-cover mix-blend-overlay brightness-50" alt="Background Image">
            <div class="relative p-10">
                <h5 class="mb-2 text-2xl font-bold text-center tracking-tight text-white dark:text-white">Sebentar Lagi!
                </h5>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    <div>
                        <img class="max-w-full rounded-lg p-6" src="{{ asset('storage/poster-images/poster1.png') }}" alt="">
                    </div>
                    <div>
                        <img class="max-w-full rounded-lg p-6" src="{{ asset('storage/poster-images/poster2.png') }}"
                            alt="">
                    </div>
                    <div>
                        <img class="max-w-full rounded-lg p-6" src="{{ asset('storage/poster-images/poster3.png') }}"
                            alt="">
                    </div>
                    <div>
                        <img class="max-w-full rounded-lg p-6" src="{{ asset('storage/poster-images/poster4.png') }}"
                            alt="">
                    </div>
                    <div>
                        <img class="max-w-full rounded-lg p-6" src="{{ asset('storage/poster-images/poster5.png') }}"
                            alt="">
                    </div>
                    <div>
                        <img class="max-w-full rounded-lg p-6" src="{{ asset('storage/poster-images/poster6.png') }}"
                            alt="">
                    </div>
                    <div>
                        <img class="max-w-full rounded-lg p-6" src="{{ asset('storage/poster-images/poster4.png') }}"
                            alt="">
                    </div>
                    <div>
                        <img class="max-w-full rounded-lg p-6" src="{{ asset('storage/poster-images/poster5.png') }}"
                            alt="">
                    </div>
                    <div>
                        <img class="max-w-full rounded-lg p-6" src="{{ asset('storage/poster-images/poster6.png') }}"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
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
