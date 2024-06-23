@extends('layouts.main')

<style>
    .scanner-container {
        position: relative;
        width: 100%; /* Sesuaikan dengan lebar container video */
        max-width: 640px; /* Sesuaikan dengan lebar maksimal video */
        margin: auto;
    }
    
    #preview {
        width: 100%; /* Sesuaikan dengan kebutuhan */
    }
    
    .scanner-line {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background-color: red;
        animation: scan-line 3s infinite linear;
    }
    
    @keyframes scan-line {
        0% {
            top: 0;
        }
        50% {
            top: 100%;
        }
        100% {
            top: 0;
        }
    }
</style>

@section('content')
    <div class="mt-16 h-screen">
        <br>
        {{-- Pesan --}}
        @if (session()->has('success'))
        <div id="session" class="flex max-w-md items-center justify-center p-4 mb-4 text-green-800 rounded-lg bg-green-50" role="alert">
            <div class="ms-3 text-sm font-medium">
                {{ session('success') }}
            </div>
        </div>
        @endif

        @if (session()->has('error'))
        <div id="session" class="flex max-w-md mx-auto items-center justify-center p-4 mb-4 text-red-800 rounded-lg bg-red-50" role="alert">
            <div class="ms-3 text-sm font-medium">
                {{ session('error') }}
            </div>
        </div>
        @endif
        {{-- video scanner --}}
        <div class="max-w-lg mx-auto">
            <div class="scanner-container">
                <video id="preview" class="rounded-lg"></video>
                <div class="scanner-line"></div>
            </div>
            <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Silahkan Absen</figcaption>
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
        {{-- <div class="relative mt-4 max-w-xl mx-auto overflow-x-auto shadow-md sm:rounded-lg">
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
                    @if(session()->has('success'))
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $absen->name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $absen->ticket }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $absen->konser }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $absen->kode }}
                        </td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div> --}}

        <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
        <script type="text/javascript">
            window.onload = function() {
            setTimeout(function() {
            const sessionMessage = document.getElementById('session');
            if(sessionMessage) {
                sessionMessage.style.display = 'none';
            }
            }, 3000)
            }

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