@extends('admin.layouts.main')

@section('content')

    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <h1 class=" font-semibold">Welcome, Ini Aturan di Konsernya {{ Auth::user()->name }}</h1>
    </div>
    
     <!-- create modal -->
  <div class="overflow-y-auto flex top-0 right-0 left-0 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Tambah Syarat ketentuan
                </h3>
            </div>
            <!-- Modal body -->
            <form class="p-4" action="./" method="post">
              @csrf
              @method('put')
                <div class="mb-4">
                    <div class="mb-2">
                        <input type="hidden" name="konser_id" id="konser_id" value="{{ $konser->id }}">
                        <input value="{{ old('syaratketentuan', $sk->syaratketentuan) }}" id="x" type="hidden" name="syaratketentuan" >
                        <trix-editor input="x" class="trix-content h-80"></trix-editor>
                        @error('syaratketentuan')    
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                      </svg>                      
                    Simpan Perubahan
                </button>
            </form>
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

