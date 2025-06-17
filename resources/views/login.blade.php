@extends('layouts/base')
@section('title', 'Login')
@section('content')
    <div class="min-h-screen flex items-center justify-center relative bg-gradient-to-tr from-violet-200 to-white">
        <div class="w-1/3 relative items-center rounded-lg border-b-pink-950">

            <img
                src="{{ asset('/account-login.svg') }}"
                class="bg-blue-50 rounded-full w-24 h-24 object-cover absolute -top-16 left-1/2
           transform -translate-x-1/2 border-4 shadow-lg  border-regal-blue mt-8"
            />

            <div class="bg-violet-50 p-15 rounded-3xl flex flex-col gap-6 border-2 border-gray-300 shadow-lg">

                <div class="flex flex-col gap-4 mt-8">
                    <h1 class=" text-3xl text-center ">Log in to your account </h1>
                    <h1 class=" text text-center  ">Welcome back ! </h1>
                    <label class="font-semibold">Email :</label>
                    <input type="text"
                           placeholder="Enter your Email"
                           class=" border p-2 rounded-lg bg-transparent text-center   "/>
                    <label class="font-semibold">Password :</label>
                    <input type="password"
                           placeholder="Enter your password"
                           class="border p-2 rounded-lg bg-transparent text-center "/>
                </div>
                <button
                    class="bg-[#1E1D1C] hover:bg-violet-300
            active:scale-98 active:bg-violet-800 text-white px-4 py-2 rounded-lg w-2/3
             mx-auto transition-all duration-200 ease-in-out">
                    Log in
                </button>

            </div>
        </div>
    </div>
@endsection
