@extends('layouts/base')
@section('title', 'Propose a new Air BNB')
@section('class-body', 'bg-gradient-to-tr from-violet-50 to-white')

@section('content')
    @include('layouts/header')
    <form method="POST" action="{{ route('appartements.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="min-h-screen flex justify-center pt-20 px-4 sm:px-6 lg:px-8">
            <div class="w-full max-w-md sm:max-w-lg md:max-w-xl lg:max-w-2xl">
                @if ($errors->any())
                    <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="flex flex-col gap-6 p-6 sm:p-10 rounded-2xl shadow-lg border border-black bg-white">
                    <h1 class="text-2xl sm:text-4xl font-serif italic">Propose a Air bnb</h1>
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}"/>

                    <div class="flex flex-col gap-1.5">
                        <label for="Rue">Rue:</label>
                        <input type="text" placeholder="Ex: 15 avenue Victor Hugo" name="street"
                               class="border border-neutral-800 rounded-lg bg-transparent px-2 py-2 text-sm placeholder-gray-400 w-full">
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <label for="Ville">Ville:</label>
                        <input type="text" placeholder="Ex: Paris" name="city"
                               class="border border-neutral-800 rounded-lg bg-transparent px-2 py-2 text-sm placeholder-gray-400 w-full">
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <label for="Pays">Pays:</label>
                        <input type="text" placeholder="Ex: France" name="country"
                               class="border border-neutral-800 rounded-lg bg-transparent px-2 py-2 text-sm placeholder-gray-400 w-full">
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <label for="description">Description :</label>
                        <textarea
                            id="description" name="description"
                            placeholder="Describe your accommodation in a few words (size, amenities, etc.)"
                            rows="3"
                            class="border border-neutral-800 rounded-md px-2 py-2 bg-white text-sm placeholder-gray-400 w-full"
                        ></textarea>
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <label for="image">Picture :</label>
                        <input
                            type="file"
                            id="image" name="picture"
                            class="border border-neutral-800 rounded-md bg-white text-sm px-2 py-2 file:py-1 file:px-4 file:text-sm file:rounded file:bg-gray-200 file:text-black w-full"
                        />
                        <p class="text-xs text-gray-500">Add a representative photo</p>
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <label for="Prix">Prix par jour:</label>
                        <input type="number" placeholder="Ex: 50.-" name="price_per_day"
                               class="border border-neutral-800 rounded-lg bg-transparent px-2 py-2 text-sm placeholder-gray-400 w-full">
                    </div>
                    <div class="flex flex-col gap-1.5">
                        <label for="start_date">Date de début :</label>
                        <input type="date" name="start_date"
                               class="border border-neutral-800 rounded-lg px-2 py-2 w-full">
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <label for="end_date">Date de fin :</label>
                        <input type="date" name="end_date"
                               class="border border-neutral-800 rounded-lg px-2 py-2 w-full">
                    </div>


                    <button type="submit"
                            class="bg-[#1E1D1C] hover:bg-violet-300 active:scale-98 active:bg-violet-400 text-white px-4 py-2 rounded-lg w-full sm:w-1/3 mx-auto transition-all duration-200 ease-in-out">
                        Submit
                    </button>
                </div>

            </div>
        </div>
    </form>
@endsection
