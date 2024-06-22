@extends('layouts.main')

@section('content')
    <div class="mt-16 min-h-screen font-sans flex flex-col justify-center items-center bg-brand-blue">
        {{-- alert --}}
        <div id="alert" class="flex p-4 mt-32 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div>
              <span class="font-bold">Perhatian :</span>
                <ul class="mt-1.5 list-disc list-inside font-semibold">
                  <li>Demi keamanan dan Kenyamanan kami membatasi pembeli membeli tiket di satu konser sebanyak satu kali</li>
                  <li>Tiket yang dibeli tidak boleh diperjual belikan</li>
                  <li>Segala transaksi diluar KonserKita bukan tanggung jawab kami</li>
              </ul>
            </div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700" data-dismiss-target="#alert" aria-label="Close">
                <span class="sr-only">Dismiss</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
              </button>
        </div>

        {{-- error --}}
        @if (session()->has('errortiket'))
            <div id="session" class="flex max-w-md items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-red-800 dark:text-red-400" role="alert">
                <div class="ms-3 text-sm font-medium">
                    {{ session('errortiket') }}
                </div>
                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-red-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#session" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>
        @endif

        <div class="mt-5">
        <img class="h-auto max-w-lg transition-all duration-300 rounded-lg" src="{{ asset('storage/' . $ticket->konser->image) }}" alt="image description">
        </div>
        <form class="space-y-6" action="/checkout" method="POST">
            @csrf
            <div class=" w-full max-w-screen-sm mx-auto items-center p-4mt-14 mb-5 bg-brand-desk border border-brand-desk rounded-lg shadow sm:p-6 md:p-8">
                <div class="flex space-x-2 items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Zm6-10.125a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0Zm1.294 6.336a6.721 6.721 0 0 1-3.17.789 6.721 6.721 0 0 1-3.168-.789 3.376 3.376 0 0 1 6.338 0Z" />
                    </svg>
    
                    <span class="text-xl font-medium text-center items-center text-white">
                        Data Pemesan - {{ $ticket->konser->title }}  {{ $ticket->title }}
                    </span>
                </div>
                <hr class="mb-2 border-gray-200 sm:mx-auto" />
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-white">Nama Lengkap
                    </label>
                    <input type="hidden" name="slug" id="slug" value="{{ $ticket->konser->slug }}">
                    <input type="hidden" name="id" id="id" value="{{ $ticket->id }}">
                    <input type="hidden" name="name" id="name" value="{{ Auth::user()->name }}">
                    <input type="text" name="name" id="name" value="{{ Auth::user()->name }}"
                        class="bg-brand-blue border border-gray-300 text-white text-sm rounded-lg focus:ring-white focus:border-gray-300 block w-full p-2.5"
                        readonly />
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-white">Email
                    </label>
                    <input type="hidden" name="email" id="email" value="{{ Auth::user()->email }}">
                    <input type="email" name="email" id="email" value="{{ Auth::user()->email }}"
                        class="bg-brand-blue border border-gray-300 text-white text-sm rounded-lg focus:ring-white focus:border-gray-300 block w-full p-2.5"
                        readonly />
                </div>
                <div>
                    <label for="nik" class="block mb-2 text-sm font-medium text-white">NIK
                    </label>
                    <input type="nik" name="nik" id="nik" value="{{ old('nik') }}"
                        class="bg-brand-blue border border-gray-300 text-white text-sm rounded-lg focus:ring-white focus:border-gray-300 block w-full p-2.5" />
                    @error('nik')    
                        <p class="mt-1 text-sm font-bold text-brand-ungu">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="nohp" class="block mb-2 text-sm font-medium text-white">No HP (opsional)
                    </label>
                    <input type="nohp" name="nohp" id="nohp" value="{{ old('nohp') }}"
                        class="bg-brand-blue border border-gray-300 text-white text-sm rounded-lg focus:ring-white focus:border-gray-300 block w-full p-2.5" />
                    @error('nohp')    
                    <p class="mt-1 text-sm font-bold text-brand-ungu">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="price" class="block mb-2 text-sm font-medium text-white">Harga Tiket
                    </label>
                    <input type="hidden" name="price" id="price" value="{{ $ticket->price }}">
                    <input type="price" name="price" id="price" value="{{ $ticket->price }}"
                        class="bg-brand-blue border border-gray-300 text-white text-sm rounded-lg focus:ring-white focus:border-gray-300 block w-full p-2.5"
                        readonly />
                </div>
                <div class=" mt-4 flex text-right justify-end">
                    <button id="submit2" data-modal-target="modal" data-modal-toggle="modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-semibold rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>
                </div>
            </div>
            <!-- Top Right Modal -->
            <div id="modal" data-modal-placement="top-center" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white">
                                KonserKita Validation
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5 space-y-4">
                            <p class="text-base font-semibold leading-relaxed text-gray-500 dark:text-gray-400">
                                Pastikan data diri yang diisi benar, jika anda belum yakin silahkan klik tombol kembali.
                            </p>
                            <p class="text-base font-semibold leading-relaxed text-gray-500 dark:text-gray-400">
                                Dengan mengklik tombol checkout anda setuju dengan syarat dan ketentuan yang berlaku.
                            </p>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex items-center p-4 md:p-5 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button data-modal-hide="modal" type="Submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Checkout</button>
                            <button data-modal-hide="modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-bold text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Kembali</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

<script></script>