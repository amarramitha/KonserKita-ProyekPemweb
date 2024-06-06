@extends('admin.layouts.main')

@section('content')
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <section class="py-8 bg-white md:py-16 dark:bg-gray-900 antialiased">
            <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
              <div class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16">
                <div class="shrink-0 max-w-md lg:max-w-lg mx-auto">
                  <img class="w-full dark:hidden" src="../../../storage/images/{{ $konser['image'] }}" alt="" />
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
                      <p href="#" class="text-sm font-medium leading-none text-gray-900 dark:text-white">
                        {{ \Carbon\Carbon::parse($konser['date'])->format('d F Y - H:i') }}
                      </p>
                    </div>
                  </div>

                  <hr class="my-6 md:my-8 border-gray-200 dark:border-gray-800" />

                  <p class="mb-6 text-gray-500 dark:text-gray-400">
                    {{$konser['description']}}
                  </p>
                </div>
              </div>
            </div>
          </section>
    </div>

    <div class="grid grid-cols-2 gap-4 mb-4 mt-2">
        <div class="flex items-center justify-center bg-gray-50 h-28 dark:bg-gray-800 p-1 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama Konser
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal & Waktu
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Lokasi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Poster
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $konser as $k )
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $k['title'] }}
                        </th>
                        <td class="px-6 py-4">
                            {{ \Carbon\Carbon::parse($k['date'])->format('d F Y - H:i') }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $k['lokasi'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $k['image'] }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex space-x-2">
                            <a href="/admin/dashboard/ks/{{ $k['slug'] }}" class="font-medium hover:underline">
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
        <div class="flex items-center justify-center bg-gray-50 h-28 dark:bg-gray-800 p-1 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
           <p class="text-2xl text-gray-400 dark:text-gray-500">
              <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
              </svg>
           </p>
        </div>
     </div>
     <div class="flex items-center justify-center h-48 mb-4 bg-gray-50 dark:bg-gray-800 p-1 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
        <p class="text-2xl text-gray-400 dark:text-gray-500">
           <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
           </svg>
        </p>
     </div>
 @endsection
