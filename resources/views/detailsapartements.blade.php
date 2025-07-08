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
                            <span
                                    class="font-semibold text-indigo-600">Price per day  :</span> {{$appartement->price_per_day}}
                            .- / per.
                        </p>
                        <p>
                            {{ $appartement->description }}
                        </p>
                    </div>
                    <p class="text-center">Séjourner chez <strong>@ {{$appartement->user->name}}</strong> !</p>
                    @auth
                        <a href="{{ route('reservations.show', $appartement->id) }}"
                           class="flex items-center justify-center gap-2 bg-blue-100 hover:bg-blue-300 active:scale-95 active:bg-blue-800 text-black font-medium px-4 py-2 rounded-lg w-2/3 sm:w-1/3 mx-auto transition duration-200 ease-in-out text-center p-10">

                            <svg class="w-4 h-4" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M3.5 0V5M11.5 0V5M3 7.5H6M12 7.5H9M3 10.5H6M9 10.5H12M1.5 2.5H13.5C14.0523 2.5 14.5 2.94772 14.5 3.5V13.5C14.5 14.0523 14.0523 14.5 13.5 14.5H1.5C0.947716 14.5 0.5 14.0523 0.5 13.5V3.5C0.5 2.94772 0.947715 2.5 1.5 2.5Z"
                                        stroke="currentColor"/>
                            </svg>
                            Book
                        </a>

                    @endauth
                    @if(!Auth::id())
                        <p class="text-gray-700 text-center">
                            Inscrivez-vous <a href="/Register" class="text-blue-600 hover:underline">ici</a> pour
                            réserver
                            cet appartement.
                        </p>
                    @endif
                    @if (Auth::id() === $appartement->user_id)

                        <a href="{{ route('appartements.edit', $appartement->id) }}"
                           class="flex items-center justify-center gap-2 bg-blue-100 hover:bg-blue-300 active:scale-95 active:bg-blue-800 text-black font-medium px-4 py-2 rounded-lg w-2/3 sm:w-1/3 mx-auto transition duration-200 ease-in-out text-center">

                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                 aria-hidden="true" focusable="false">
                                <path opacity="0.15" d="M8 16H12L18 10L14 6L8 12V16Z" fill="currentColor"/>
                                <path d="M14 6L8 12V16H12L18 10M14 6L17 3L21 7L18 10M14 6L18 10M10 4L4 4L4 20L20 20V14"
                                      stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>

                            Edit an Airbnb
                        </a>

                        <form action="{{ route('appartements.destroy', $appartement->id) }}" method="POST"
                              class="w-2/3 sm:w-1/3 mx-auto text-center">
                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="flex items-center justify-center gap-2
                                    bg-blue-100 hover:bg-blue-300 active:scale-95
                                    active:bg-blue-800 text-black font-medium px-4 py-2 rounded-lg w-full transition duration-200 ease-in-out">

                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                     aria-hidden="true" focusable="false">
                                    <path d="M10 12V17" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                    <path d="M14 12V17" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                    <path d="M4 7H20" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                    <path d="M6 10V18C6 19.6569 7.34315 21 9 21H15C16.6569 21 18 19.6569 18 18V10"
                                          stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                    <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z"
                                          stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>

                                Delete
                            </button>

                        </form>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection

