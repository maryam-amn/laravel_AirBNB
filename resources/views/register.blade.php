@extends('layouts/base')
@section('title', 'Register')
@section('content')
    <form action="{{route('register')}}" method="POST">
        <div class="min-h-screen flex items-center justify-center bg-gradient-to-tr from-white to-pink-200">
            <div class="w-[95%] sm:w-[90%] md:w-[80%] lg:w-[60%] xl:w-[40%] px-4 relative flex justify-center">
                <div class="w-full max-w-lg">
                    <div

                        class="bg-violet-50 p-4 sm:p-6 rounded-3xl flex flex-col gap-4 sm:gap-6 border-2 border-gray-300 shadow-lg">

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
                        <div class="flex flex-col gap-3 sm:gap-4">

                            <h1 class="text-2xl sm:text-3xl text-center">Register</h1>
                            <h2 class="text-base sm:text-lg text-center">Create your account!</h2>
                            <h3 class="text-sm sm:text-base text-center text-gray-600">Welcome!</h3>

                            <label class="font-semibold text-base sm:text-lg">Email :</label>
                            <input type="email" placeholder="Enter your email" name="email"
                                   class="border p-2 rounded-lg bg-transparent text-center text-base sm:text-lg"/>

                            <label class="font-semibold text-base sm:text-lg">Username :</label>
                            <input type="text" placeholder="Enter your username" name="name"
                                   class="border p-2 rounded-lg bg-transparent text-center text-base sm:text-lg"/>

                            <label class="font-semibold text-base sm:text-lg">Password :</label>
                            <input type="password" placeholder="Enter a password" name="password"
                                   class="border p-2 rounded-lg bg-transparent text-center text-base sm:text-lg"/>

                            <label class="font-semibold text-base sm:text-lg">Confirm your password :</label>
                            <input type="password" placeholder="Confirm your password" name="password_confirmation"
                                   class="border p-2 rounded-lg bg-transparent text-center text-base sm:text-lg"/>


                        </div>

                        <a class="text-center text-sm sm:text-base hover:text-pink-600 transition-colors duration-200"
                           href="http://localhost/Login">Already have an account?</a>

                        <button type="submit"
                                class="bg-[#1E1D1C] hover:bg-pink-300 active:scale-98 active:bg-pink-800 text-white px-4 py-3 sm:py-2 rounded-lg w-full sm:w-2/3 mx-auto transition-all duration-200 ease-in-out text-base sm:text-lg">
                            Register
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
