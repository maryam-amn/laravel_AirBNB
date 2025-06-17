@extends('layouts/base')
@section('title', 'Air BNB')
@section('content')
    @extends('layouts/header')
    <div class=" flex flex-col items-start shadow-lg ">
    <h1 class="grid grid-cols-1 gap-2 p-2 pl-6 font-serif text-2xl">All available flats:  </h1>
    <div class="grid grid-cols-6 gap-2">

        @for ($i = 0; $i < 20; $i++)
            <div class=" flex flex-col justify-center items-center p-5
            ">
                <a href="http://localhost/detailapt">
                <img
                    class="border-2 rounded-3xl w-60 h-auto
                m-2 transition duration-200 ease-in-out hover:scale-105 "
                    src="{{ asset('/img-app.jpeg') }}"
                    alt="Image {{ $i + 1 }}"
                /></a>
                <p class="text-center">Apartments: Ville</p>
                <p class="text-center text-xs">du 6 au 17 sep. 2025</p>
                <p class="text-center text-xs">Prix: 32.- / nuits</p>
            </div>

        @endfor

    </div>
    </div>
@endsection
