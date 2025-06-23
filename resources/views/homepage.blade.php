@extends('layouts/base')
@section('title', 'Welcome back !')
@section('class-body', 'bg-gradient-to-tr from-blue-50 to-white')

@section('content')
    @include('layouts/header')

    <div class="px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">

        <h1 class="font-serif text-3xl sm:text-4xl md:text-5xl lg:text-6xl mt-4 p-15 text-center">
            The 3 most rented locations
        </h1>

        <section class="flex flex-wrap gap-6 mt-5 justify-center">

            <div class="flex flex-col max-w-xs text-center">
                <h2 class="font-serif text-2xl mb-2">Paris</h2>
                <p class="text-gray-700 text-sm">
                    <span class="font-semibold text-indigo-600">Description :</span>
                </p>
                <p class="p-3">
                    Paris, the capital of France,<br>
                    is famous for its landmarks like<br> the Eiffel Tower and the Louvre.<br>
                    Known as "The City of Light,"<br> it’s a global hub for art,<br> fashion, and culture.
                </p>
            </div>

            <div class="flex flex-col items-center max-w-xs p-5 gap-2 bg-white rounded-3xl shadow-md">
                <a href="http://localhost/avaibleapt" class="flex justify-center">
                    <img src="{{ '/img-app.jpeg' }}" alt="Appartement Vue Tour Eiffel"
                         class="border-2 rounded-3xl w-3/6 h-auto m-2 transition duration-200 ease-in-out hover:scale-105 mt-2">
                </a>
                <p>Appartement Vue Tour Eiffel:</p>
                <p>170.-/nuits</p>
                <a href="http://localhost/avaibleapt"
                   class="bg-[#1E1D1C] hover:bg-pink-300 active:scale-95 active:bg-pink-800 text-white px-4 py-2 rounded-lg w-1/2 mx-auto
                          transition-all duration-200 ease-in-out text-center block">
                    See flats
                </a>
            </div>

            <div class="flex flex-col items-center max-w-xs p-5 gap-2 bg-white rounded-3xl shadow-md">
                <a href="http://localhost/avaibleapt" class="flex justify-center">
                    <img src="{{ '/img-app.jpeg' }}" alt="Appartement Champs-Élysées"
                         class="border-2 rounded-3xl w-3/6 h-auto m-2 transition duration-200 ease-in-out hover:scale-105 mt-2">
                </a>
                <p>Appartement Champs-Élysées:</p>
                <p>190.-/nuits</p>
                <a href="http://localhost/avaibleapt"
                   class="bg-[#1E1D1C] hover:bg-pink-300 active:scale-95 active:bg-pink-800 text-white px-4 py-2 rounded-lg w-1/2 mx-auto
                          transition-all duration-200 ease-in-out text-center block">
                    See location
                </a>
            </div>
        </section>


        <section class="flex flex-wrap gap-6 mt-10 justify-center">

            <div class="flex flex-col max-w-xs text-center">
                <h2 class="font-serif text-2xl mb-2">New york </h2>
                <p class="text-gray-700 text-sm">
                    <span class="font-semibold text-indigo-600">Description :</span>
                </p>
                <p class="p-3">
                    Tokyo is Japan’s capital<br>
                    known for its blend of ancient<br>
                    temples and modern skyscrapers.<br>
                    It’s a bustling city<br>
                    famous for technology,<br>
                    culture, and world-class food.
                </p>
            </div>

            <div class="flex flex-col items-center max-w-xs p-5 gap-2 bg-white rounded-3xl shadow-md">
                <a href="http://localhost/avaibleapt" class="flex justify-center">
                    <img src="{{ '/img-app.jpeg' }}" alt="Entire Apartment by Moshi Moshi Rooms (Sakura)"
                         class="border-2 rounded-3xl w-3/6 h-auto m-2 transition duration-200 ease-in-out hover:scale-105 mt-2">
                </a>
                <p>Entire Apartment by Moshi Moshi Rooms (Sakura):</p>
                <p>250.-/nuits</p>
                <a href="http://localhost/avaibleapt"
                   class="bg-[#1E1D1C] hover:bg-pink-300 active:scale-95 active:bg-pink-800 text-white px-4 py-2 rounded-lg w-1/2 mx-auto
                          transition-all duration-200 ease-in-out text-center block">
                    See location
                </a>
            </div>

            <div class="flex flex-col items-center max-w-xs p-5 gap-2 bg-white rounded-3xl shadow-md">
                <a href="http://localhost/avaibleapt" class="flex justify-center">
                    <img src="{{ '/img-app.jpeg' }}" alt="Shinjuku Cosy Room"
                         class="border-2 rounded-3xl w-3/6 h-auto m-2 transition duration-200 ease-in-out hover:scale-105 mt-2">
                </a>
                <p>Shinjuku Cosy Room:</p>
                <p>150.-/nuits</p>
                <a href="http://localhost/avaibleapt"
                   class="bg-[#1E1D1C] hover:bg-pink-300 active:scale-95 active:bg-pink-800 text-white px-4 py-2 rounded-lg w-1/2 mx-auto
                          transition-all duration-200 ease-in-out text-center block">
                    See location
                </a>
            </div>
        </section>

        <section class="flex flex-wrap gap-6 mt-10 justify-center">

            <div class="flex flex-col max-w-xs text-center">
                <h2 class="font-serif text-2xl mb-2">Tokyo</h2>
                <p class="text-gray-700 text-sm">
                    <span class="font-semibold text-indigo-600">Description :</span>
                </p>
                <p class="p-3">
                    Tokyo is Japan’s capital<br>
                    known for its blend of ancient<br>
                    temples and modern skyscrapers.<br>
                    It’s a bustling city<br>
                    famous for technology,<br>
                    culture, and world-class food.
                </p>
            </div>

            <div class="flex flex-col items-center max-w-xs p-5 gap-2 bg-white rounded-3xl shadow-md">
                <a href="http://localhost/avaibleapt" class="flex justify-center">
                    <img src="{{ '/img-app.jpeg' }}" alt="Entire Apartment by Moshi Moshi Rooms (Sakura)"
                         class="border-2 rounded-3xl w-3/6 h-auto m-2 transition duration-200 ease-in-out hover:scale-105 mt-2">
                </a>
                <p>Entire Apartment by Moshi Moshi Rooms (Sakura):</p>
                <p>250.-/nuits</p>
                <a href="http://localhost/avaibleapt"
                   class="bg-[#1E1D1C] hover:bg-pink-300 active:scale-95 active:bg-pink-800 text-white px-4 py-2 rounded-lg w-1/2 mx-auto
                          transition-all duration-200 ease-in-out text-center block">
                    See location
                </a>
            </div>

            <div class="flex flex-col items-center max-w-xs p-5 gap-2 bg-white rounded-3xl shadow-md">
                <a href="http://localhost/avaibleapt" class="flex justify-center">
                    <img src="{{ '/img-app.jpeg' }}" alt="Shinjuku Cosy Room"
                         class="border-2 rounded-3xl w-3/6 h-auto m-2 transition duration-200 ease-in-out hover:scale-105 mt-2">
                </a>
                <p>Shinjuku Cosy Room:</p>
                <p>150.-/nuits</p>
                <a href="http://localhost/avaibleapt"
                   class="bg-[#1E1D1C] hover:bg-pink-300 active:scale-95 active:bg-pink-800 text-white px-4 py-2 rounded-lg w-1/2 mx-auto
                          transition-all duration-200 ease-in-out text-center block">
                    See location
                </a>
            </div>
        </section>

    </div>
@endsection
