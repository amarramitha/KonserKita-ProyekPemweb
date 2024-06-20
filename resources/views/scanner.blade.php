@extends('layouts.main')

@section('content')
    <div class="mt-16 h-screen">
        <br>
        {{-- Pesan --}}
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

        @if (session()->has('error'))
        <div id="session" class="flex max-w-md items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <div class="ms-3 text-sm font-medium">
                {{ session('error') }}
            </div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#session" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
        @endif
        {{-- video scanner --}}
        <div class="max-w-lg mx-auto">
            <video id="preview" class="rounded-lg"></video>
            <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Image caption</figcaption>
        </div>

        {{-- form --}}
        <form id="form" action="{{ route('store') }}" method="POST">
            @csrf
            <input type="hidden" name="dataString" id="dataString">
           {{-- <input type="hidden" name="name" id="name"> 
           <input type="hidden" name="ticket" id="ticket">
           <input type="hidden" name="konser" id="konser">
           <input type="hidden" name="kode" id="kode"> --}}
        </form>
        {{-- table --}}
        <div class="relative mt-4 max-w-lg mx-auto overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama 
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Ticket
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Konser
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kode Pembelian
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Apple MacBook Pro 17"
                        </th>
                        <td class="px-6 py-4">
                            Silver
                        </td>
                        <td class="px-6 py-4">
                            Laptop
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
        <script type="text/javascript">
            let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
            scanner.addListener('scan', function (content) {
              console.log(content);
                // Mengisi input form tersembunyi dengan content
                document.getElementById('dataString').value = content;

                // Mengirim form
                document.getElementById('form').submit();
            });
            Instascan.Camera.getCameras().then(function (cameras) {
              if (cameras.length > 0) {
                scanner.start(cameras[0]);
              } else {
                console.error('No cameras found.');
              }
            }).catch(function (e) {
              console.error(e);
            });

            // scanner.addListener('scan', function (content) {
            //     console.log(content);
            //     // Memisahkan konten berdasarkan koma
            //     let data = content.split(',');
            //     // Pastikan data memiliki 4 bagian seperti yang diharapkan
            //     if(data.length === 4) {
            //         // Mengisi form dengan data yang dipisahkan
            //         document.getElementById('name').value = data[0].trim(); // Menghapus spasi berlebih dengan trim()
            //         document.getElementById('ticket').value = data[1].trim();
            //         document.getElementById('konser').value = data[2].trim();
            //         document.getElementById('kode').value = data[3].trim();
            //         // Opsional: Submit form secara otomatis setelah data terisi
            //         document.getElementById('form').submit();
            //     } else {
            //         // Handle error jika format data tidak sesuai
            //         console.error('Format data QR code tidak sesuai.');
            //     }
            // });
          </script>
    </div>
@endsection