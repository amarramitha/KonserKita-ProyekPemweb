@extends('layouts.main')

@section('content')
    <div class="mt-16 min-h-screen bg-brand-blue">
        <div class="block w-full px-5 pt-10 bg-brand-blue">
            <p class="text-white font-bold text-3xl">Konsers</p>
            <hr>
        </div>
        <div class=" py-8 antialiased md:py-12">
            <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
                {{-- daftar konser --}}
              <div class="mb-4 grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-4 md:mb-8">
                @foreach ( $konsers as $k)
                <div class="rounded-lg border border-gray-200 bg-gray-100 p-6 shadow-sm">
                  <div class="h-52 w-full">
                    <a href="{{ $k->slug }}">
                      <img class="mx-auto h-full" src="{{ asset('storage/' . $k->image) }}" alt="{{ $k->title }}" />
                    </a>
                  </div>
                  <div class="pt-2">
                    <div class="mb-2 flex items-center justify-between gap-4">
                      <span class="me-2 rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium"> {{ \Carbon\Carbon::parse($k['date_start'])->format('j F Y') }} </span>
                    </div>
                    <a href="#" class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">{{ $k->title }}</a>
                    <div class="mt-2 flex items-center gap-2">
                      <p class="text-sm font-medium text-gray-900 dark:text-white">{{ $k->lokasi }}</p>
                    </div>
                    <ul class="mt-2 flex items-center gap-4">
                        @if ($k->talent->count() == 0)
                        <p class="text-sm font-medium text-brand-ungu hover:underline">Tenang, Talent masih rahasia xixi</p>
                        @else
                            @foreach ( $k->talent as $t)
                            <li class="flex items-center gap-2">
                            <p class="text-sm font-medium text-brand-ungu hover:underline">{{ $t->name }}</p>
                            </li>
                            @endforeach
                        @endif
                    </ul>
                    <hr>
                    <div class="mt-4 flex items-center justify-between gap-4">
                        <p class=" text-gray-400">Start From</p>
                        <p class="text-2xl font-extrabold leading-tight text-yellow-400 dark:text-white">{{ Number::format($k->ticket->min('price'), locale: 'de') }}</p>  
                    </div>
                  </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
