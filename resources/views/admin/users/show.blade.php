@extends('admin.layouts.main')

@section('content')
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

    {{-- Daftar User --}}
    <div class=" mt-16">
        <div class="w-full max-w-screen-sm mx-auto items-center p-4 border rounded-lg shadow sm:p-6 md:p-8">
            <form class="space-y-6" action="./" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="flex space-x-2 items-center justify-center">
                    <span class="text-xl font-medium text-center items-center text-black">
                    Data Profile
                    </span>
                </div>
                {{--preview profile--}}
                <div class="flex items-center justify-center">
                    <div class="relative w-14 h-14 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600 mb-2">
                        @if ($user->image == null)
                        <svg class="absolute w-14 h-14 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                        @elseif ($user->google_id != null && filter_var($user->image, FILTER_VALIDATE_URL))
                        <img src="{{ asset($user->image) }}" class="absolute w-14 h-14 text-gray-400">
                        @else
                        <img src="{{ asset('storage/' . $user->image) }}" class="absolute w-10 h-10 text-gray-400">
                        @endif
                    </div>
                </div>
                    <hr class="mb-2 border-gray-200 sm:mx-auto" />
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-black">Email
                    </label>
                    <input value="{{ old('email', $user->email) }}" type="email" name="email" id="email"
                        class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                    @error('email')    
                    <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="name" class="block mb-1 mt-2 text-sm font-medium text-black">Nama Lengkap
                    </label>
                    <input value="{{ old('name', $user->name) }}" type="text" name="name" id="name" 
                        class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"/>
                    @error('name')    
                    <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="name" class="block mb-1 mt-2 text-sm font-medium text-black">Login via
                    </label>
                    <input value="@if ($user->google_id != null)Google @else Form @endif" type="text" readonly
                        class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"/>
                </div>
                <div class="mb-2">
                    <label for="nik" class="block mb-1 mt-2 text-sm font-medium text-black">NIK
                    </label>
                    <input value="{{ old('nik', $user->nik) }}" type="text" name="nik" id="nik" 
                        class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"/>
                    @error('nik')    
                    <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="nohp" class="block mb-1 mt-2 text-sm font-medium text-black">Nomor HP
                    </label>
                    <input value="{{ old('nohp', $user->nohp) }}" type="text" name="nohp" id="nohp" 
                        class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"/>
                    @error('nohp')    
                    <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <label for="image" class="block mt-2 text-sm font-medium text-black">Edit Foto Pengguna(ubah jika diperlukan)</label>
                <input class="block w-full text-sm text-black border border-gray-300 rounded-lg cursor-pointer bg-white dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" 
                id="image" name="image" type="file" onchange="previewImage()">
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG (MAX. 5Mb).</p>
                @error('image')    
                    <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
                <div class="flex justify-end mt-2 md:mt-0">
                    <a href="./"
                        class="block px-4 py-2 mr-2 bg-blue-600 text-white font-medium rounded-xl text-center items-center hover:bg-blue-800">Kembali
                    </a>
                    <button type="submit"
                        class="block px-4 py-2 bg-green-500 text-white font-medium rounded-xl text-center items-center hover:bg-green-600">Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>


@endsection
