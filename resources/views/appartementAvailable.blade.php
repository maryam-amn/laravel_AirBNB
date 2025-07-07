@extends('layouts/base')
@section('title', 'All flats')

@section('content')
    @include('layouts/header')

    <div class="min-h-screen bg-gradient-to-tr from-blue-50 to-white py-6 px-4 ">
        @if (session('success'))
            <div class="mb-4 p-4 bg-green-100 text-green-700 rounded text-center mt-20">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-6 mt-20 ">

             @foreach ($appartements as $appartement)
                <div
                    class="flex flex-col justify-center items-center bg-white shadow-md p-4 rounded-xl hover:shadow-lg transition">
                    <a href="http://localhost/appartements/{{$appartement->id}} ">
                        <img
                            class="border-2 rounded-2xl w-60 h-auto mb-2 transition-transform duration-200 bg-violet-700"
                            src="{{asset('storage/' . $appartement->picture) }}"
                            alt="Image"
                            width="200"
                        />

                        <p class="text-center font-medium">Apartment: {{$appartement->city}}</p>
                        <p class="text-center text-xs text-gray-600">
                            du {{ \Carbon\Carbon::parse($appartement->start_date)->translatedFormat('d. F Y') }}
                            au {{ \Carbon\Carbon::parse($appartement->end_date)->translatedFormat('d. F Y') }}
                        </p>
                        <p class="text-center text-xs text-gray-600">Prix: {{$appartement-> price_per_day}} .- /
                            nuit</p>
                    </a></div>
            @endforeach

        </div>
    </div>
@endsection
