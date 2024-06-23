@extends('layouts.main')

@section('content')
    <div class="mt-16 bg-brand-blue h-auto w-full font-sans min-h-screen">
        <div class="justify-center items-center">
            <div class="w-full mx-auto p-6 mb-5 bg-transparent rounded-xl shadow md:w-3/4">
                <div class="flex justify-between items-center mb-2">
                    <h2 class="text-2xl font-bold text-white md:text-4xl">Riwayat Transaksi</h2>
                </div>
            </div>

            <div class="relative p-2 mx-auto bg-brand-desk overflow-x-auto shadow-md rounded-lg md:w-3/4">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-md text-white uppercase border-t border-b">
                        <tr>
                            <th scope="col" class="px-16 py-3">
                                <span class="sr-only">Image</span>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Tiket
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Waktu Beli
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Total
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody class="border-b">
                        @foreach ($purchase as $p)
                        <tr class="hover:bg-brand-ungu">
                            <td class="p-4">
                                <img src="{{ asset('storage/' . $p->ticket->konser->image) }}" class="w-16 md:w-32 max-w-full max-h-full" alt="">
                            </td>
                            <td class="px-6 py-4 font-semibold text-white">
                                {{ $p->ticket->konser->title }} - {{ $p->ticket->title }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center text-white">
                                {{ \Carbon\Carbon::parse($p['created_at'])->format('j F Y - H:i') }}   
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center text-white">
                                {{ $p->ticket->price+5000 }}        
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                @if ($p->status != 'success')
                                <button type="button" class="focus:outline-none text-white font-semibold bg-red-700 focus:ring-4 focus:ring-red-300 rounded-lg text-sm px-2.5 py-0.5">Pending</button>
                                @else
                                <button type="button" class="focus:outline-none text-white font-semibold bg-green-700 focus:ring-4 focus:ring-green-300 rounded-lg text-sm px-2.5 py-0.5">Success</button>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                @if ($p->status != 'success')
                                <a href="/checkout/{{ $p->id }}" class=" focus:outline-none bg-blue-100 text-blue-800 hover:bg-blue-800 hover:text-white text-xs font-semibold me-2 px-2.5 py-0.5 rounded inline-flex items-center justify-center">
                                    bayar sekarang  
                                </a>
                                @endif
                                @if ($p->status == 'success')
                                <a href="/tiket/{{ $p->id }}" class=" focus:outline-none bg-blue-100 text-blue-800 hover:bg-blue-800 hover:text-white text-xs font-semibold me-2 px-2.5 py-0.5 rounded inline-flex items-center justify-center">
                                    Download Tiket  
                                </a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

<script>
    
</script>
