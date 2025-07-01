@extends('layouts/base')
@section('title', 'Detail of an Airbnb')

@section('class-body', 'bg-gradient-to-tr from-blue-50 to-white')

@section('content')
    @include('layouts/header')

    <div class="min-h-screen flex justify-center mt-20 px-4">
        <div class="w-full sm:w-11/12 md:w-4/5 lg:w-2/4 relative rounded-lg">
            <div class="flex flex-col gap-6 p-6 md:p-10 rounded-4xl shadow-lg border border-blue-100 bg-white">
                <div class="flex flex-col gap-5">
                    @if (session('success'))
                        <div class="mb-4 p-4 bg-green-100 text-green-700 rounded text-center">
                            {{ session('success') }}
                        </div>
                    @endif
                    <h1 class="text-3xl md:text-4xl font-serif italic text-center">Air BNB</h1>

                    <img
                        class="border-2 border-gray-300 rounded-3xl h-auto w-full sm:w-3/4 mx-auto"
                        src="{{ asset('storage/' . ltrim($appartement->picture, '/')) }}"
                        alt="image-logement"
                      >

                    <div class="flex flex-col gap-2 text-sm md:text-base">
                        <p><strong>Description du Logement :</strong></p>
                        <p class="text-gray-700">
                            <span class="font-semibold text-indigo-600">City :</span> {{$appartement->city}}
                        </p>
                        <p class="text-gray-700">
                            <span class="font-semibold text-indigo-600">Price per day  :</span> {{$appartement->price_per_day}} .- /personne
                        </p>
                        <p>
                            {{ $appartement->description }}
                        </p>
                    </div>

                    <p class="text-center">Séjourner chez <strong>@  {{$appartement->user->name}}</strong> !</p>

                    <a href="http://localhost/bookapt?"
                       class="bg-blue-100 hover:bg-blue-300 active:scale-98 active:bg-blue-800 text-black text-center px-4 py-2 rounded-lg w-2/3 sm:w-1/3 mx-auto transition-all duration-200 ease-in-out">
                        Book an Airbnb
                    </a>

                    <a href="http://localhost/editapt/{{$appartement->id}}"
                       class="bg-blue-100 hover:bg-blue-300 active:scale-98 active:bg-blue-800 text-black text-center px-4 py-2 rounded-lg w-2/3 sm:w-1/3 mx-auto transition-all duration-200 ease-in-out">
                        Edit an Airbnb
                    </a>

                    <a href="http://localhost/deleteapt/{{$appartement->id}}"
                       class="bg-blue-100 hover:bg-blue-300 active:scale-98 active:bg-blue-800 text-black text-center px-4 py-2 rounded-lg w-2/3 sm:w-1/3 mx-auto transition-all duration-200 ease-in-out">
                        Delete
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

