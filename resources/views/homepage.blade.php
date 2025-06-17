@extends('layouts/base')
@section('title', 'Homepage')
@section('content')
    @extends('layouts/header')
    @section('class-body', ' bg-gradient-to-tr from-pink-100 to-white')
    <div>
        <h1 class="font-serif text-2xl mt-4 text-center">The 3 most rented locations: </h1>


        <div class="flex flex-row gap-6 mt-5 ">

            <div class="flex flex-col text-center ">
                <h1 class="w-66  h-auto font-serif text-2xl ">Paris</h1>
                <p class="text-gray-700 text-sm ">
                    <span class="font-semibold text-indigo-600 ">Description :</span>
                </p>
                <p class="text-center p-3 ">Paris, the capital of France, <br>is famous for its landmarks like<br> the
                    Eiffel Tower and the Louvre. <br>Known as "The City of Light," <br>it’s a global hub for art,
                    fashion,<br> and culture.
                </p>
            </div>

            <div class="  flex flex-col items-center  ">
                <div class="flex flex-col items-center p-5 gap-2">
                    <img src="{{'/img-app.jpeg'}}" class="border-2 rounded-3xl w-3/6 h-auto
                m-2 transition duration-200 ease-in-out hover:scale-101 mt-2 ">
                    <p>Appartement Vue Tour Eiffel:</p>
                    <p>170.-/nuits</p>

                    <button class="bg-[#1E1D1C] hover:bg-pink-300
                    active:scale-98 active:bg-pink-800 text-white
                     px-4 py-2 rounded-lg w-1/3 mx-auto transition-all duration-200 ease-in-out m-1"
                            href="http://localhost/avaibleapt"><a href="http://localhost/avaibleapt"> See location</a>

                    </button>
                </div>

            </div>
            <div class=" flex flex-col items-center rounded-3xl ">
                <div class="flex flex-col items-center p-5 gap-2">

                    <img src="{{'/img-app.jpeg'}}" class="border-2 rounded-3xl w-3/6 h-auto
                m-2 transition duration-200 ease-in-out hover:scale-101 mt-2 ">
                    <p>Appartement Champs-Élysées:</p>
                    <p>190.-/nuits</p>
                    <button class="bg-[#1E1D1C] hover:bg-pink-300
                    active:scale-98 active:bg-pink-800 text-white
                     px-4 py-2 rounded-lg w-1/3 mx-auto transition-all duration-200 ease-in-out m-1"
                            href="http://localhost/avaibleapt"><a href="http://localhost/avaibleapt"> See location</a>

                    </button>
                </div>

            </div>
        </div>


        <div class="flex flex-row gap-6 mt-5 ">

            <div class="flex flex-col w-66 min-h-[260px] text-center">
                <h1 class="font-serif text-2xl mt-4 ">New York</h1>
                <p class="text-gray-700 text-sm pt-2">
                    <span class="font-semibold text-indigo-600">Description :</span>
                </p>
                <p class="p-3">
                    New York City, the largest city <br>
                    in the USA, is known for iconic sites <br>
                    like Times Square, Central Park, <br>
                    and the Statue of Liberty. <br>
                    It’s a major center for finance, <br>
                    culture, and entertainment.
                </p>
            </div>


            <div class="  flex flex-col items-center  ">
                <div class="flex flex-col items-center p-5 gap-2">
                    <img src="{{'/img-app.jpeg'}}" class="border-2 rounded-3xl w-3/6 h-auto
                m-2 transition duration-200 ease-in-out hover:scale-101 mt-2 ">
                    <p>Luxury Loft in SoHo:</p>
                    <p>180.-/nuits</p>
                    <button class="bg-[#1E1D1C] hover:bg-pink-300
                    active:scale-98 active:bg-pink-800 text-white
                     px-4 py-2 rounded-lg w-1/3 mx-auto transition-all duration-200 ease-in-out m-1"
                            href="http://localhost/avaibleapt"><a href="http://localhost/avaibleapt"> See location</a>

                    </button>
                </div>

            </div>
            <div class=" flex flex-col items-center rounded-3xl ">
                <div class="flex flex-col items-center p-5 gap-2">

                    <img src="{{'/img-app.jpeg'}}" class="border-2 rounded-3xl w-3/6 h-auto
                m-2 transition duration-200 ease-in-out hover:scale-101 mt-2 ">
                    <p>Charming Brownstone in Brooklyn:</p>
                    <p>200.-/nuits</p>
                    <button class="bg-[#1E1D1C] hover:bg-pink-300
                    active:scale-98 active:bg-pink-800 text-white
                     px-4 py-2 rounded-lg w-1/3 mx-auto transition-all duration-200 ease-in-out m-1"
                            href="http://localhost/avaibleapt"><a href="http://localhost/avaibleapt"> See location</a>

                    </button>
                </div>

            </div>
        </div>


        <div class="flex flex-row gap-6 mt-5 ">

            <div class="flex flex-col w-66 min-h-[260px] text-center">
                <h1 class="font-serif text-2xl mt-4 ">Tokyo</h1>
                <p class="text-gray-700 text-sm  pt-2">
                    <span class="font-semibold text-indigo-600">Description :</span>
                </p>
                <p class="p-3">
                    Tokyo is Japan’s capital <br>
                    known for its blend of ancient <br>
                    temples and modern skyscrapers. <br>
                    It’s a bustling city <br>
                    famous for technology, <br>
                    culture, and world-class food.
                </p>
            </div>


            <div class="  flex flex-col items-center  ">
                <div class="flex flex-col items-center p-5 gap-2">
                    <img src="{{'/img-app.jpeg'}}" class="border-2 rounded-3xl w-3/6 h-auto
                m-2 transition duration-200 ease-in-out hover:scale-101 mt-2 ">
                    <p>Entire Apartment by Moshi Moshi Rooms (Sakura):</p>
                    <p>250.-/nuits</p>
                    <button class="bg-[#1E1D1C] hover:bg-pink-300
                    active:scale-98 active:bg-pink-800 text-white
                     px-4 py-2 rounded-lg w-1/3 mx-auto transition-all duration-200 ease-in-out m-1"
                            href="http://localhost/avaibleapt"><a href="http://localhost/avaibleapt"> See location</a>

                    </button>
                </div>

            </div>
            <div class=" flex flex-col items-center rounded-3xl ">
                <div class="flex flex-col items-center p-5 gap-2">

                    <img src="{{'/img-app.jpeg'}}" class="border-2 rounded-3xl w-3/6 h-auto
                m-2 transition duration-200 ease-in-out hover:scale-101 mt-2 ">
                    <p>Shinjuku Cosy Room:</p>
                    <p>150.-/nuits</p>
                    <button class="bg-[#1E1D1C] hover:bg-pink-300
                    active:scale-98 active:bg-pink-800 text-white
                     px-4 py-2 rounded-lg w-1/3 mx-auto transition-all duration-200 ease-in-out m-1"
                            href="http://localhost/avaibleapt"><a href="http://localhost/avaibleapt"> See location</a>

                    </button>
                </div>

            </div>
        </div>

@endsection

