@extends('layouts/base')
@section('title', 'Book a Air BNB')
@section('class-body', 'bg-gradient-to-tr from-blue-50 to-white')

@section('content')
    @include('layouts/header')

    <div class="min-h-screen flex justify-center items-start pt-32 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md sm:max-w-lg md:max-w-xl lg:max-w-2xl relative items-center rounded-lg">
            <form>
                <div class="flex flex-col gap-6 p-6 sm:p-10 rounded-2xl shadow-lg border border-black bg-white">
                    <h1 class="text-2xl sm:text-4xl font-serif italic">Book a Air bnb</h1>
                    <p class="text-xs text-gray-500">Air bnb n°</p>

                    <div class="flex flex-col gap-1.5">
                        <label for="start-date">Date de début:</label>
                        <input type="date"
                               class="border border-neutral-300 rounded-md bg-white
                               text-gray-800 px-3 py-2 text-sm placeholder-gray-400 w-full">
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <label for="end-date">Date de fin:</label>
                        <input type="date"
                               class="border border-neutral-300 rounded-md bg-white
                               text-gray-800 px-3 py-2 text-sm placeholder-gray-400 w-full">
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <label for="number-per">Nombre de personne:</label>
                        <input type="number"
                               min="1"
                               class="border border-neutral-300 rounded-md bg-white
                               text-gray-800 px-3 py-2 text-sm placeholder-gray-400 w-full sm:w-1/2">
                    </div>

                    <button
                        class="bg-[#1E1D1C] hover:bg-blue-300
                                active:scale-98 active:bg-blue-400 text-white px-4 py-2 rounded-lg
                                w-full sm:w-1/2 mx-auto transition-all duration-200 ease-in-out">
                        Book
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
