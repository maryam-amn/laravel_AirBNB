@extends('layouts/base')
@section('title', 'Edit a Air BNB')
@section('class-body', 'bg-gradient-to-tr from-blue-50 to-white')

@section('content')
    @include('layouts/header')

    <div class="min-h-screen flex justify-center pt-20 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md sm:max-w-lg md:max-w-xl lg:max-w-2xl">
            <div class="flex flex-col gap-6 p-6 sm:p-10 rounded-2xl shadow-lg border border-black bg-white">
                <h1 class="text-2xl sm:text-4xl font-serif italic">Edit a Air bnb</h1>

                <div class="flex flex-col gap-1.5">
                    <label for="Rue">Neighborhood:</label>
                    <input type="text" placeholder="Ex: 15 avenue Victor Hugo"
                           class="border border-neutral-800 rounded-lg bg-transparent text-pretty px-2 py-1 text-sm placeholder-gray-400 w-full">
                </div>

                <div class="flex flex-col gap-1.5">
                    <label for="Ville">City:</label>
                    <input type="text" placeholder="Ex: Paris"
                           class="border border-neutral-800 rounded-lg bg-transparent text-pretty px-2 py-1 text-sm placeholder-gray-400 w-full">
                </div>

                <div class="flex flex-col gap-1.5">
                    <label for="Pays">Country:</label>
                    <input type="text" placeholder="Ex: France"
                           class="border border-neutral-800 rounded-lg bg-transparent text-pretty px-2 py-1 text-sm placeholder-gray-400 w-full">
                </div>

                <div class="flex flex-col gap-1.5">
                    <label for="description">Description :</label>
                    <textarea id="description"
                              placeholder="Describe your accommodation in a few words (size, amenities, etc.)"
                              rows="2"
                              class="border border-neutral-800 rounded-md px-2 py-1 bg-white text-sm placeholder-gray-400 text-pretty w-full"></textarea>
                </div>

                <div class="flex flex-col gap-1.5">
                    <label for="image">Picture :</label>
                    <input type="file"
                           id="image"
                           class="border border-neutral-800 rounded-md bg-white text-sm px-2 py-1 file:py-1 file:px-4 file:text-sm file:rounded file:bg-gray-200 file:text-black w-full"/>
                    <p class="text-xs text-gray-500">Edit the photo if necessary</p>
                </div>

                <div class="flex flex-col gap-1.5">
                    <label for="Prix">Price per day :</label>
                    <input type="number" placeholder="Ex: 50.-"
                           class="border border-neutral-800 rounded-lg bg-transparent text-pretty px-2 py-1 text-sm placeholder-gray-400 w-full">
                </div>

                <button
                    class="bg-[#1E1D1C] hover:bg-violet-300 active:scale-98 active:bg-violet-400 text-white px-4 py-2 rounded-lg w-full sm:w-1/3 mx-auto transition-all duration-200 ease-in-out">
                    Edit
                </button>
            </div>
        </div>
    </div>
@endsection
