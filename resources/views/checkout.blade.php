@extends('layouts.main')

@section('content')
    <div class="mt-16 bg-brand-desk">
        <div id="alert" class="flex p-4 mt-32 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div>
              <span class="font-bold">Perhatian :</span>
                <ul class="mt-1.5 list-disc list-inside font-semibold">
                  <li>Pesanan Berhasil dibuat, silahkan lakukan pembayaran</li>
              </ul>
            </div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert" aria-label="Close">
                <span class="sr-only">Dismiss</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
              </button>
        </div>
        <div class=" w-full max-w-screen-sm mx-auto items-center p-4 my-20 bg-brand-desk border border-brand-desk rounded-lg shadow sm:p-6 md:p-8">
            <div class="space-y-6" action="#">
                <div class="flex space-x-2 items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                    </svg>

                    <span class="text-xl font-medium text-center items-center text-white">
                        Rincian Pesanan
                    </span>
                </div>
                <hr class="mb-2 border-gray-200 sm:mx-auto" />
                <img class="w-max-sms" src="{{ asset('storage/' . $konser->image) }}">
                <h5 class="text-xl font-bold text-white">{{ $konser->title }} ({{ $konser->lokasi }})</h5>
                <hr class="mb-2 border-gray-200 sm:mx-auto" />
                <div class="flex justify-between w-full">
                    <h5 class="text-l font-semibold text-brand-huruf">Tiket</h5>
                    <h5 class="text-l font-semibold text-brand-huruf">Jumlah</h5>
                </div>
                <div class="flex justify-between w-full">
                    <h5 class="text-xl text-white font-semibold">{{ $konser->ticket[0]->title }}</h5>
                    <h5 class="text-xl font-semibold text-white">x1</h5>
                </div>
                <h5 class="text-xl font-semibold text-white">Rp {{ $konser->ticket[0]->price }}</h5>
                <hr class="mb-2 border-gray-200 sm:mx-auto" />
                <div class="flex justify-between w-full">
                    <h5 class="text-xl text-brand-huruf font-bold">Subtotal</h5>
                    <h5 class="text-xl font-semibold text-white">Rp {{ $konser->ticket[0]->price }}</h5>
                </div>
                <div class="flex justify-between w-full">
                    <h5 class="text-xl text-brand-huruf font-bold">Biaya Layanan</h5>
                    <h5 class="text-xl font-semibold text-white">Rp 5.000</h5>
                </div>
                <hr class="mb-2 border-gray-200 sm:mx-auto" />
                <div class="flex justify-between w-full">
                    <h5 class="text-xl text-brand-huruf font-bold">Total</h5>
                    <h5 class="text-xl font-semibold text-white">Rp {{ $konser->ticket[0]->price+5000 }}</h5>
                </div>
            </div>
                <div class="flex justify-center mt-2 md:mt-0">
                    <button id="pay-button" class="block px-4 py-2 bg-brand-ungu hover:bg-brand-purple text-white rounded-xl text-center items-center">Bayar Sekarang</button>
                    {{-- <pre><div id="result-json">JSON result will appear here after payment:<br></div></pre>  --}}
                </div>
            
        </div>

    </div>
@endsection

@section('midtrans')
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
<script type="text/javascript">
    document.getElementById('pay-button').onclick = function(){
      // SnapToken acquired from previous step
      snap.pay('{{ $purchase->snap_token }}', {
        // Optional
        onSuccess: function(result){
          window.location.href = '{{ route('success', $purchase->id ) }}';
        },
        // Optional
        onPending: function(result){
          /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
        },
        // Optional
        onError: function(result){
          /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
        }
      });
    };
</script>
@endsection
