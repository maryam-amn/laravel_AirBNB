@extends('layouts/base')
@section('title', 'Book a Air BNB')
@section('class-body', 'bg-gradient-to-tr from-blue-50 to-white')

@section('content')
    @include('layouts/header')

    <div class="min-h-screen flex justify-center items-start pt-32 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md sm:max-w-lg md:max-w-xl lg:max-w-2xl relative items-center rounded-lg">
            <form method="POST" action="{{ route('reservations.store') }}">
                <div class="flex flex-col gap-6 p-6 sm:p-10 rounded-2xl shadow-lg border border-black bg-white">
                    <h1 class="text-2xl sm:text-4xl font-serif italic">Book a Air bnb</h1>
                    @csrf
                    @if ($errors->any())
                        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <p class="text-xs text-gray-500">Air bnb n°{{$res->id}}</p>
                    <input name="appartement_id" class="hidden" value="{{$res->id}}">
                    <input type="hidden" name="user_id" value="1">

                    <div class="flex flex-col gap-1.5">
                        <label for="date_reserved">Date réservée:</label>
                        <input type="date" name="date_reserved"
                               class="border border-neutral-300 rounded-md bg-white
                               text-gray-800 px-3 py-2 text-sm placeholder-gray-400 w-full">
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <label for="nbr_of_people">Nombre de personne:</label>
                        <input type="number" name="nbr_of_people"
                               min="1"
                               class="border border-neutral-300 rounded-md bg-white
                               text-gray-800 px-3 py-2 text-sm placeholder-gray-400 w-full sm:w-1/2">
                    </div>

                    <button type="submit"
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
