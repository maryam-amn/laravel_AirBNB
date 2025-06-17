@extends('layouts/base')
@section('title', 'Edit a Air BNB')
@section('content')
    @extends('layouts/header')
    @section('class-body', ' bg-gradient-to-tr from-blue-50 to-white')
    <div class="min-h-screen flex  justify-center  mt-20 ">

        <div class="w-2/4 relative items-center rounded-lg  ">

            <div class=" flex flex-col gap-6 p-10 rounded-4xl shadow-lg border-1 border-black bg-white">
                <h1 class="text-4xl font-serif font-italic">Edit  a Air bnb</h1>
                <div class="flex flex-col gap-1.5">
                    <label for="Rue">Neighborhood:</label>
                    <input type="text" placeholder="Ex: 15 avenue Victor Hugo"
                           class=" border border-b-neutral-800  rounded-lg bg-transparent text-pretty px-2 py-1 text-sm p-2 placeholder-gray-400  ">
                </div>
                <div class="flex flex-col gap-1.5">
                    <label for="Ville">City:</label>
                    <input type="text" placeholder="Ex: Paris"
                           class=" border border-b-neutral-800  rounded-lg bg-transparent text-pretty  px-2 py-1 text-sm placeholder-gray-400  ">
                </div>
                <div class="flex flex-col gap-1.5">
                    <label for="Pays">Country:</label>
                    <input type="text" placeholder="Ex: France"
                           class=" border border-b-neutral-800  rounded-lg bg-transparent text-pretty  px-2 py-1 text-sm placeholder-gray-400  ">
                </div>
                <div class="flex flex-col gap-1.5">
                    <label for="description">Description :</label>

                    <textarea
                        id="description"
                        placeholder="Describe your accommodation in a few words (size, amenities, etc.)"
                        rows="2"
                        class="border border-neutral-800  rounded-md px-2 py-1 bg-white text-sm placeholder-gray-400  text-pretty"
                    ></textarea>
                </div>

                <div class="flex flex-col gap-1.5">
                    <label for="image">Picture :</label>
                    <input
                        type="file"
                        id="image"
                        class="border border-b-neutral-800 rounded-md bg-white t
                        ext-sm px-2 py-1 file:py-1 file:px-4 file:text-sm file:rounded
                        file:bg-gray-200 file:text-black "
                    />
                    <p class="text-xs text-gray-500">Edit the photo if necessary</p>
                </div>
                <div class="flex flex-col gap-1.5">
                    <label for="Prix">Price per day :</label>
                    <input type="number" placeholder="Ex: 50.-"
                           class=" border border-b-neutral-800  rounded-lg bg-transparent text-pretty  px-2 py-1 text-sm placeholder-gray-400  ">
                </div>
                <button
                    class="bg-[#1E1D1C] hover:bg-violet-300
                                active:scale-98 active:bg-violet-400 text-white px-4 py-2 rounded-lg w-1/4
                                mx-auto transition-all duration-200 ease-in-out placeholder-gray-400 ">
                    Edit
                </button>
            </div>


        </div>
@endsection

