@extends('layouts.main')

@section('content')
<div class="mt-16 h-screen bg-brand-blue flex justify-center items-center">
    
    <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-center text-green-600">Pembayaran Berhasil</h5>
    <p class="font-semibold text-center text-gray-700 mb-4">Terima kasih telah melakukan pembayaran.</p>
    <a href="/transaksi" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none flex justify-center">Lihat transaksi</a>
    </div>
    
</div>
@endsection