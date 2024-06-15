@extends('admin.layouts.main')

@section('content')

    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <h1 class=" font-semibold">Welcome, Ini Tiket Konsernya {{ Auth::user()->name }}</h1>
    </div>
    
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-2">
        <h2 class="font-semibold">Form Edit Talent</h2>
        <div class="overflow-y-auto flex top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Edit Talent
                        </h3>
                    </div>
                    <form class="p-4 md:p-5" action="./" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('put')
                        <div class="grid gap-4 mb-4 grid-cols-2">
                          <div class="col-span-2">
                              <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Talent</label>
                              <input type="hidden" name="konser_id" id="konser_id" value="{{ $konser->id }}">
                              <input type="text" name="name" id="name" value="{{ old('name', $talent->name) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                              @error('name')    
                              <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                              @enderror
                          </div>
                          <div class="col-span-2">
                              <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                              <input type="hidden" name="oldImage" value="{{ $talent->image }}">
                              @if ($talent->image)
                              <img src="{{ asset('storage/' . $talent->image) }}" class="py-1 img-preview h-auto w-20 transition-all duration-300 rounded-lg blur-sm hover:blur-none">    
                              @else
                              <img class="py-1 img-preview h-auto w-20 transition-all duration-300 rounded-lg blur-sm hover:blur-none">
                              @endif
                              <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" 
                              id="image" name="image" type="file" onchange="previewImage()">
                              <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG (MAX. 10Mb).</p>
                              @error('image')    
                                  <p class="mt-1 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                              @enderror
                          </div>
                        </div>
                        <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                              </svg>Simpan perubahan
                        </button>
                    </form>
                </div>
            </div>
        </div> 
  
    </div>

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
@endsection

