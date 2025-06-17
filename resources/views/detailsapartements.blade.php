@extends('layouts/base')
@section('title', 'Create a Air BNB')
@section('content')
    @extends('layouts/header')
    @section('class-body', ' bg-gradient-to-tr from-blue-50 to-white')
    <div class="min-h-screen flex  justify-center  mt-20 ">
        <div class="w-2/4 relative  rounded-lg  ">
            <div
                class=" flex   flex-col gap-6 p-10 rounded-4xl shadow-lg border-1 border-blue-100 bg-white ">
                <div class="flex flex-col gap-5">
                    <h1 class="text-4xl font-serif font-italic text-center">Air BNB </h1>
                    <img
                        class="border-2 border-gray-300 rounded-3xl h-auto m-2 w-3/4  mx-auto"
                        src="{{ asset('/img-app.jpeg') }}"
                        alt="aaa"/>
                    <div class="flex flex-col gap-2">
                        <p><strong>Description du Logement :</strong></p>
                        <p class="text-gray-700 text-sm">
                            <span class="font-semibold text-indigo-600">City :</span> Paris
                        </p>
                        <p>Découvrez ce superbe appartement de 2 pièces,
                            idéalement situé à deux pas des principaux commerces
                            et transports en commun.Il offre un séjour confortable avec un canapé cosy, une cuisine
                            entièrement équipée pour
                            préparer vos repas, ainsi qu’une chambre calme avec un grand lit double.Vous apprécierez la
                            décoration moderne et épurée, ainsi que la luminosité naturelle grâce aux grandes
                            fenêtres.Parfait pour un séjour
                            en solo, en couple ou pour un voyage d’affaires. Wifi haut débit, chauffage central, et un
                            balcon pour profiter
                            des beaux jours complètent ce logement. N’hésitez pas à nous contacter pour plus
                            d’informations ou pour organiser votre
                            arrivée !</p>
                    </div>

                    <p class="text-left mx-auto">Séjouner chez @test !</p>
                    <button
                        class="bg-blue-100 hover:bg-blue-300
                                active:scale-98 active:bg-blue-800 text-black px-4 py-2 rounded-lg w-1/4
                                mx-auto transition-all duration-200 ease-in-out">
                        Book an airbnb
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection



