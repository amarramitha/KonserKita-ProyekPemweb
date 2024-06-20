@extends('admin.layouts.main')

@section('content')
@foreach ( $konser as $k )
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <h1>Welcome, Ini Transaksi di {{ $k->title }}</h1>
    </div>

    @if (session()->has('success'))
    <div id="session" class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <div class="flex max-w-md items-center p-4 mb-4 text-green-800 rounded-lg bg-green-300 dark:bg-gray-800 dark:text-green-400" role="alert">
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
    </div>
    @endif

    {{-- Daftar Konser --}}
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <div class=" px-1 py-1 flex justify-end">
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama Pembeli
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jenis Tiket
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kode Pembelian
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($k->ticket as $t) {{-- Asumsi relasi konser ke tiket adalah 'tickets' --}}
                            @foreach ($t->purchase as $p) {{-- Asumsi relasi tiket ke pembelian adalah 'purchases' --}}
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $p->user->name }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $t->title }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $p->snap_token }}
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div class="flex space-x-2">

                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

 @endsection
