<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- datepicker | untuk mengatur tanggal dan waktu --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>

    {{-- untuk membuat form deskripsi --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
    <style>
        trix-toolbar [data-trix-button-group="file-tools"]{
            display: none;
        }
    </style>

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
      <div class="h-auto">
         @yield('content')
      </div>
    <x-footer></x-footer>
</body>

@yield('midtrans')
<script src="../path/to/flowbite/dist/datepicker.js"></script>
</html>
