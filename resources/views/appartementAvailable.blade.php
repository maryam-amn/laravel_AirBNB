@extends('layouts/base')
@section('title', 'All flats')

@section('content')
    @include('layouts/header')

    <div class="min-h-screen bg-gradient-to-tr from-blue-50 to-white py-6 px-4">
        <h1 class="text-2xl font-serif mb-4">All available flats:</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-6">
            @for ($i = 0; $i < 20; $i++)
                <div class="flex flex-col justify-center items-center bg-white shadow-md p-4 rounded-xl hover:shadow-lg transition">
                    <a href="http://localhost/detailapt">
                        <img
                            class="border-2 rounded-2xl w-60 h-auto mb-2 transition-transform duration-200 hover:scale-105"
                            src="{{ asset('/img-app.jpeg') }}"
                            alt="Image {{ $i + 1 }}"
                        />

                    <p class="text-center font-medium">Apartment: Ville</p>
                    <p class="text-center text-xs text-gray-600">du 6 au 17 sep. 2025</p>
                    <p class="text-center text-xs text-gray-600">Prix: 32.- / nuit</p>
                    </a> </div>
            @endfor
        </div>
    </div>
@endsection
