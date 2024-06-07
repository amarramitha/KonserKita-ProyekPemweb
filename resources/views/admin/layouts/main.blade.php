<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin DashBoard</title>
</head>
<body>



    {{-- navbar --}}
    @include('admin.layouts.header')

    <!-- Sidebar -->
    @include('admin.layouts.sidebar')

      <div class="p-4 sm:ml-64">
         @yield('content')
      </div>


</body>
</html>
