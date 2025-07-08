@extends('layouts/base')
@section('title', 'Login')
@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-tr from-violet-200 to-white">
        <div class="w-full sm:w-3/4 md:w-1/2 lg:w-1/3 px-4 relative flex justify-center">
            <div class="w-full max-w-lg relative">
                <img
                    src="{{ asset('/account-login.svg') }}"
                    class="bg-blue-50 rounded-full w-24 h-24 object-cover absolute -top-16 left-1/2 transform -translate-x-1/2 border-4 shadow-lg border-regal-blue"
                    alt="Login Icon"
                />
                <form action="{{route('login')}}" method="POST">
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
                    <div
                        class="bg-violet-50 p-8 rounded-3xl flex flex-col gap-6 border-2 border-gray-300 shadow-lg mt-12">
                        <div class="flex flex-col gap-4">
                            <h1 class="text-3xl text-center">Log in to your account</h1>
                            <h2 class="text-center">Welcome back!</h2>
                            <label class="font-semibold">Email :</label>
                            <input
                                type="text" name="email"
                                placeholder="Enter your Email"
                                class="border p-2 rounded-lg bg-transparent text-center"
                            />
                            <label class="font-semibold">Password :</label>
                            <input
                                type="password" name="password"
                                placeholder="Enter your password"
                                class="border p-2 rounded-lg bg-transparent text-center"
                            />
                        </div>
                        <button
                            class="bg-[#1E1D1C] hover:bg-violet-300 active:scale-98 active:bg-violet-800 text-white px-4 py-2 rounded-lg w-2/3 mx-auto transition-all duration-200 ease-in-out"
                        >
                            Log in
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
