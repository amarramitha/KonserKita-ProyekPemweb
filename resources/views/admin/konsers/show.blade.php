@extends('admin.layouts.main')

@section('content')

    <div class=" h-fit p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <div class=" py-2 px-4 flex justify-end space-x-2">
            <a href="/admin/dashboard/konsers" class="inline-flex items-center px-3 py-2 text-xs font-medium text-center text-white bg-green-400 rounded-lg hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                <svg class="w-6 h-6 text-white dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
                </svg>
                Back</a>
            <a href="/admin/dashboard/konsers/{{ $konser['slug'] }}/edit" class="inline-flex items-center px-3 py-2 text-xs font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                <svg class="w-6 h-6 text-white dark:text-dark" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z" clip-rule="evenodd"/>
                  </svg>
                Edit</a>
            {{-- tombol delete --}}
            <button type="submit" data-modal-toggle="popup-modal" data-modal-target="popup-modal" class="inline-flex items-center px-3 py-2 text-xs font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                <svg class="w-6 h-6 text-white dark:text-dark" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                  </svg>Delete
            </button>
            
            {{-- modal --}}
            <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-4 md:p-5 text-center">
                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah yakin ingin menghapus data konser?</h3>
                            <form action="/admin/dashboard/konsers/{{ $konser['slug'] }}" method="POST" class=" inline-flex">
                                @method('delete')
                                @csrf
                                <button data-modal-hide="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                Ya, saya yakin
                                </button>
                            </form>
                            <button data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                Tidak, batal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h1 class=" mt-1 px-4 font-bold">Detail {{ $konser['title'] }}</h1>
        <section class="py-8 bg-white md:py-16 dark:bg-gray-900 antialiased">
            <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
              <div class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16">
                <div class="shrink-0 max-w-md lg:max-w-lg mx-auto">
                    @if ($konser->image)
                    <img class="w-full" src="{{ asset('storage/' . $konser->image) }}" alt="" />    
                    @else
                    <img class="w-full" src="{{ asset('storage/images/default.png') }}" alt="" />    
                    @endif
                </div>

                <div class="mt-6 sm:mt-8 lg:mt-0">
                  <h1 class="text-2xl font-extrabold text-gray-900 sm:text-3xl dark:text-white">
                    {{ $konser['title'] }}
                  </h1>
                  <div class="mt-4 sm:mt-8 lg:mt-0">
                    <p class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                    {{ $konser['lokasi'] }}
                    </p>
                    <div class="mt-4 sm:mt-8 lg:mt-0">
                      <p class="text-sm font-medium leading-none text-gray-900 dark:text-white">
                        {{ \Carbon\Carbon::parse($konser['date_start'])->format('d F Y') }}
                      </p>
                    </div>
                  </div>

                  <hr class="my-2 md:my-3 border-gray-200 dark:border-gray-800" />

                  <p class="mb-6 text-gray-500 dark:text-gray-400">
                    <div id="trix-content">{!! $konser['deskripsi'] !!}</div>
                  </p>
                </div>
              </div>
            </div>
          </section>
    </div>

    <div class="mt-1">
        <div class="relative bg-gray-50 h-fit dark:bg-gray-800 p-1 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            <h2 class=" py-4 px-4 font-bold">Detail Tiket {{ $konser['title'] }}</h2>
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 rounded-lg">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-2">
                            Nama Tiket
                        </th>
                        <th scope="col" class="px-6 py-2">
                            Sisa Kuota
                        </th>
                        <th scope="col" class="px-6 py-2">
                            Harga
                        </th>
                        <th scope="col" class="px-6 py-2">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-2 text-right">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $konser->ticket as $t )
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $t['title'] }}
                        </th>
                        <td class="px-6 py-2">
                            {{ $t['kuota'] }}
                        </td>
                        <td class="px-6 py-2">
                            {{ $t['price'] }}
                        </td>
                        <td class="px-6 py-2 font-bold {{ $t['status'] == 'On Sale' ? 'text-green-400' : 'text-red-400' }}">
                            {{ $t['status'] }}
                        </td>
                        <td class="px-6 py-2 text-right">
                            <div class="flex justify-end space-x-2">
                            <a href="/admin/dashboard/ks/{{ $konser['slug'] }}" class="font-medium hover:underline">
                                <svg class="w-6 h-6 text-blue-400 dark:text-white hover:text-blue-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
                                    <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                  </svg>
                            </a>
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                <svg class="w-6 h-6 text-yellow-400 dark:text-white hover:text-yellow-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M8 7V2.221a2 2 0 0 0-.5.365L3.586 6.5a2 2 0 0 0-.365.5H8Zm2 0V2h7a2 2 0 0 1 2 2v.126a5.087 5.087 0 0 0-4.74 1.368v.001l-6.642 6.642a3 3 0 0 0-.82 1.532l-.74 3.692a3 3 0 0 0 3.53 3.53l3.694-.738a3 3 0 0 0 1.532-.82L19 15.149V20a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Z" clip-rule="evenodd"/>
                                    <path fill-rule="evenodd" d="M17.447 8.08a1.087 1.087 0 0 1 1.187.238l.002.001a1.088 1.088 0 0 1 0 1.539l-.377.377-1.54-1.542.373-.374.002-.001c.1-.102.22-.182.353-.237Zm-2.143 2.027-4.644 4.644-.385 1.924 1.925-.385 4.644-4.642-1.54-1.54Zm2.56-4.11a3.087 3.087 0 0 0-2.187.909l-6.645 6.645a1 1 0 0 0-.274.51l-.739 3.693a1 1 0 0 0 1.177 1.176l3.693-.738a1 1 0 0 0 .51-.274l6.65-6.646a3.088 3.088 0 0 0-2.185-5.275Z" clip-rule="evenodd"/>
                                  </svg>
                            </a>
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                <svg class="w-6 h-6 text-red-600 dark:text-white hover:text-red-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                                  </svg>
                            </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
     </div>

     <div class="relative mt-1 h-fit mb-4 bg-gray-50 dark:bg-gray-800 p-1 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
        <h2 class="py-4 px-4 font-bold">Detail Talent yang tampil di {{ $konser['title'] }}</h2>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 rounded-lg">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-2">
                        Image
                    </th>
                    <th scope="col" class="px-6 py-2">
                        Nama Talent
                    </th>
                    <th scope="col" class="px-6 py-2 text-right">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $konser->talent as $t )
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <img class="w-10 h-10 rounded" src="../../../storage/images/{{ $t['image'] }}" alt="Medium avatar">
                    </th>
                    <td class="px-6 py-2">
                        {{ $t['name'] }}
                    </td>
                    <td class="px-6 py-2 text-right">
                        <div class="flex justify-end space-x-2">
                        <a href="/admin/dashboard/ks/{{ $konser['slug'] }}" class="font-medium hover:underline">
                            <svg class="w-6 h-6 text-blue-400 dark:text-white hover:text-blue-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
                                <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                              </svg>
                        </a>
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            <svg class="w-6 h-6 text-yellow-400 dark:text-white hover:text-yellow-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M8 7V2.221a2 2 0 0 0-.5.365L3.586 6.5a2 2 0 0 0-.365.5H8Zm2 0V2h7a2 2 0 0 1 2 2v.126a5.087 5.087 0 0 0-4.74 1.368v.001l-6.642 6.642a3 3 0 0 0-.82 1.532l-.74 3.692a3 3 0 0 0 3.53 3.53l3.694-.738a3 3 0 0 0 1.532-.82L19 15.149V20a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Z" clip-rule="evenodd"/>
                                <path fill-rule="evenodd" d="M17.447 8.08a1.087 1.087 0 0 1 1.187.238l.002.001a1.088 1.088 0 0 1 0 1.539l-.377.377-1.54-1.542.373-.374.002-.001c.1-.102.22-.182.353-.237Zm-2.143 2.027-4.644 4.644-.385 1.924 1.925-.385 4.644-4.642-1.54-1.54Zm2.56-4.11a3.087 3.087 0 0 0-2.187.909l-6.645 6.645a1 1 0 0 0-.274.51l-.739 3.693a1 1 0 0 0 1.177 1.176l3.693-.738a1 1 0 0 0 .51-.274l6.65-6.646a3.088 3.088 0 0 0-2.185-5.275Z" clip-rule="evenodd"/>
                              </svg>
                        </a>
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            <svg class="w-6 h-6 text-red-600 dark:text-white hover:text-red-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                              </svg>
                        </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
     </div>

     <div class="relative mt-1 h-fit mb-4 bg-gray-50 dark:bg-gray-800 p-1 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
        <h2 class="py-4 px-4 font-bold">Syarat Ketentuan di {{ $konser['title'] }}</h2>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-2">
                        No
                    </th>
                    <th scope="col" class="px-6 py-2">
                        Syarat Ketentuan
                    </th>
                    <th scope="col" class="px-6 py-2 text-right">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $konser->syaratketentuan as $t )
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $loop->iteration }}.
                    </th>
                    <td class="px-6 py-2 text-justify">
                        {{ $t['syaratketentuan'] }}
                    </td>
                    <td class="px-6 py-2 text-right">
                        <div class="flex justify-end space-x-2">
                        <a href="/admin/dashboard/ks/{{ $konser['slug'] }}" class="font-medium hover:underline">
                            <svg class="w-6 h-6 text-blue-400 dark:text-white hover:text-blue-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
                                <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                              </svg>
                        </a>
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            <svg class="w-6 h-6 text-yellow-400 dark:text-white hover:text-yellow-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M8 7V2.221a2 2 0 0 0-.5.365L3.586 6.5a2 2 0 0 0-.365.5H8Zm2 0V2h7a2 2 0 0 1 2 2v.126a5.087 5.087 0 0 0-4.74 1.368v.001l-6.642 6.642a3 3 0 0 0-.82 1.532l-.74 3.692a3 3 0 0 0 3.53 3.53l3.694-.738a3 3 0 0 0 1.532-.82L19 15.149V20a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Z" clip-rule="evenodd"/>
                                <path fill-rule="evenodd" d="M17.447 8.08a1.087 1.087 0 0 1 1.187.238l.002.001a1.088 1.088 0 0 1 0 1.539l-.377.377-1.54-1.542.373-.374.002-.001c.1-.102.22-.182.353-.237Zm-2.143 2.027-4.644 4.644-.385 1.924 1.925-.385 4.644-4.642-1.54-1.54Zm2.56-4.11a3.087 3.087 0 0 0-2.187.909l-6.645 6.645a1 1 0 0 0-.274.51l-.739 3.693a1 1 0 0 0 1.177 1.176l3.693-.738a1 1 0 0 0 .51-.274l6.65-6.646a3.088 3.088 0 0 0-2.185-5.275Z" clip-rule="evenodd"/>
                              </svg>
                        </a>
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            <svg class="w-6 h-6 text-red-600 dark:text-white hover:text-red-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                              </svg>
                        </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
     </div>
 @endsection

 <script>
    var element = document.querySelector("trix-editor")
    element.editor  // is a Trix.Editor instance
  </script>