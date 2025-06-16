@extends('layouts/base')
@section('title', 'Register')
@section('content')

    <div class="min-h-screen flex items-center justify-center relative bg-gradient-to-tr from-white to-pink-200">
        <div class="w-1/3 relative items-center rounded-lg border-b-pink-950">

            <div class="bg-violet-50 p-10 rounded-3xl flex flex-col gap-6 border-2 border-gray-300 shadow-lg">

                <div class="flex flex-col gap-4">
                    <h1 class="text-3xl text-center">Register</h1>
                    <h1 class="text text-center">Create your account!</h1>
                    <h1 class="text text-center">Welcome!</h1>

                    <label class="font-semibold">Email :</label>
                    <input type="text" placeholder="Enter a email" class="border p-2 rounded-lg bg-transparent text-center"/>

                    <label class="font-semibold">Username :</label>
                    <input type="text" placeholder="Enter your username" class="border p-2 rounded-lg bg-transparent text-center"/>

                    <label class="font-semibold">Password :</label>
                    <input type="password" placeholder="Enter a password" class="border p-2 rounded-lg bg-transparent text-center"/>

                    <label class="font-semibold">Confirm your password :</label>
                    <input type="password" placeholder="Confirm your password" class="border p-2 rounded-lg bg-transparent text-center"/>
                </div>

                <a class="text-center" href="http://localhost/Login">Already have an account?</a>

                <button class="bg-[#1E1D1C] hover:bg-pink-300 active:scale-98 active:bg-pink-800 text-white px-4 py-2 rounded-lg w-2/3 mx-auto transition-all duration-200 ease-in-out">
                    Log in
                </button>

            </div>
        </div>
    </div>

@endsection
