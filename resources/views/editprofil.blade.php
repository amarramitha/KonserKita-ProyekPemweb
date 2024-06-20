@extends('layouts.main')

@section('content')
    <div class=" mt-16 bg-brand-blue">
        <div class="w-full max-w-screen-sm mx-auto items-center p-4 bg-brand-desk border border-brand-desk rounded-lg shadow sm:p-6 md:p-8">
            <form class="space-y-6" action="/editprofil/{{ Auth::user()->id }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="flex space-x-2 items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Zm6-10.125a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0Zm1.294 6.336a6.721 6.721 0 0 1-3.17.789 6.721 6.721 0 0 1-3.168-.789 3.376 3.376 0 0 1 6.338 0Z" />
                    </svg>
                    <span class="text-xl font-medium text-center items-center text-white">
                        Edit Data Profile
                    </span>
                </div>
                {{--preview profile--}}
                <div class="flex items-center justify-center">
                <div class="relative w-14 h-14 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                    @if (Auth::user()->image == null)
                    <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                    @elseif (Auth::user()->google_id != null)
                    <img src="{{ asset(Auth::user()->image) }}" class="absolute w-14 h-14 text-gray-400 cursor-pointer filter blur-sm hover:blur-none">
                    @else
                    <img src="{{ asset('storage/' . Auth::user()->image) }}" class="absolute w-10 h-10 text-gray-400 cursor-pointer filter blur-sm hover:blur-none">
                    @endif
                </div>
                </div>

                <hr class="mb-2 border-gray-200 sm:mx-auto" />
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-white">Email
                    </label>
                    <input value="{{ old('email', $user->email) }}" type="email" name="email" id="email"
                        class="bg-brand-blue border border-gray-300 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                </div>
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-white">Nama Lengkap
                    </label>
                    <input value="{{ old('name', $user->name) }}" type="text" name="name" id="name" 
                        class="bg-brand-blue border border-gray-300 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"/>
                </div>
                <input class="block w-full text-sm text-white border border-gray-300 rounded-lg cursor-pointer bg-brand-blue dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" 
                id="image" name="image" type="file" onchange="previewImage()">
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG (MAX. 5Mb).</p>
                @error('image')    
                    <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                @enderror
                <div class="flex justify-center mt-2 md:mt-0">
                    <button type="submit"
                        class="block px-4 py-2 bg-brand-blue text-white rounded-xl text-center items-center hover:bg-slate-900">Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/admin/dashboard/konsers/checkSlug?title=' + title.value)
        .then(response => response.json()) 
        .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })

</script>