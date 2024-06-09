@extends('layouts.main')

@section('content')
    <div class="mt-16 min-h-screen font-sans flex flex-col justify-center items-center bg-brand-blue">
        {{-- alert --}}
        <div id="alert" class="flex p-4 mt-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div>
              <span class="font-bold">Perhatian :</span>
                <ul class="mt-1.5 list-disc list-inside font-semibold">
                  <li>Demi keamanan dan Kenyamanan kami membatasi pembeli membeli tiket di satu konser sebanyak dua kali</li>
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

        <div class=" w-full max-w-screen-sm mx-auto items-center p-4 my-14 bg-brand-desk border border-brand-desk rounded-lg shadow sm:p-6 md:p-8">
            <form class="space-y-6" action="" method="POST">
                @csrf
                <div class="flex space-x-2 items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Zm6-10.125a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0Zm1.294 6.336a6.721 6.721 0 0 1-3.17.789 6.721 6.721 0 0 1-3.168-.789 3.376 3.376 0 0 1 6.338 0Z" />
                    </svg>
    
                    <span class="text-xl font-medium text-center items-center text-white">
                        Data Pemesan 1 - {{ $konser->title }}  {{ $konser->ticket[0]->title }}
                    </span>
                </div>
                <hr class="mb-2 border-gray-200 sm:mx-auto" />
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-white">Nama Lengkap
                    </label>
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
                        class="bg-brand-blue border border-gray-300 text-white text-sm rounded-lg focus:ring-white focus:border-gray-300 block w-full p-2.5"
                        required />
                </div>
                <div>
                    <label for="nohp" class="block mb-2 text-sm font-medium text-white">No HP (opsional)
                    </label>
                    <input type="nohp" name="nohp" id="nohp" value="{{ old('nohp') }}"
                        class="bg-brand-blue border border-gray-300 text-white text-sm rounded-lg focus:ring-white focus:border-gray-300 block w-full p-2.5" />
                </div>
                <div class="flex text-right justify-end">
                    <button id="submit1" onclick="toggleElements()" data-dismiss-target="#submit1, #submit2" aria-label="close" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-semibold rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah Tiket</button>
                    <button id="submit2" role="submit1" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-semibold rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>
                </div>
            <div id="deleteIfForm2Display">
            </form>
            </div>
        </div>
    
        <div id="formtambahan" class="hidden w-full max-w-screen-sm mx-auto items-center p-4 my-14 bg-brand-desk border border-brand-desk rounded-lg shadow sm:p-6 md:p-8">
            <div id="deleteIfForm2Display">
            <form class="space-y-6" action="" method="POST">
                @csrf
            </div>
                <div class="flex space-x-2 items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Zm6-10.125a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0Zm1.294 6.336a6.721 6.721 0 0 1-3.17.789 6.721 6.721 0 0 1-3.168-.789 3.376 3.376 0 0 1 6.338 0Z" />
                    </svg>
    
                    <span class="text-xl font-medium text-center items-center text-white">
                        Data Pemesan 1 - {{ $konser->title }}  {{ $konser->ticket[0]->title }}
                    </span>
                </div>
                <hr class="mb-2 border-gray-200 sm:mx-auto" />
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-white">Nama Lengkap
                    </label>
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
                        class="bg-brand-blue border border-gray-300 text-white text-sm rounded-lg focus:ring-white focus:border-gray-300 block w-full p-2.5"
                        required />
                </div>
                <div>
                    <label for="nohp" class="block mb-2 text-sm font-medium text-white">No HP (opsional)
                    </label>
                    <input type="nohp" name="nohp" id="nohp" value="{{ old('nohp') }}"
                        class="bg-brand-blue border border-gray-300 text-white text-sm rounded-lg focus:ring-white focus:border-gray-300 block w-full p-2.5" />
                </div>
                <div class="flex text-right justify-end">
                    <button id="submit2" role="submit1" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-semibold rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>
                </div>
            </form>
        </div>
    
        <x-footer></x-footer>
    </div>
@endsection

<script>
    function toggleElements() {
        // Sembunyikan tombol submit1 dan submit2
        document.getElementById('submit1').style.display = 'none';
        document.getElementById('submit2').style.display = 'none';
        
        // Tampilkan div formtambahan
        document.getElementById('formtambahan').style.display = 'block';

        document.getElementById('deleteIfForm2Display').style.display = 'hidden';
    }
    </script>