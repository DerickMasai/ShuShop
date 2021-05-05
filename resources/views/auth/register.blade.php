@extends('layouts.app')

@section('content')
    <section class="h-auto w-full bg-gray-900 flex flex-col">
        <nav class="w-full py-4 md:py-8 px-8 md:px-16 lg:px-32s flex flex-row justify-between items-center flex-shrink-0" x-data="{responsiveNav : false, accountDropdown : false}">
            <a href="#" class="tt600 text-white text-xl"><i class="fas fa-shoe-prints text-xs"></i> Shu<span class="tt400">Shop</span></a>
        </nav>

        <div class="flex flex-row">
            {{-- Quote --}}
            <div class="w-0 lg:w-1/2 px-16 hidden lg:flex flex-col justify-center items-center">
                <h2 class="gte500 text-gray-300 text-3xl text-center mx-auto">
                    "When the feet are comfortable so is the mind, body and soul"
                </h2>
                <span class="mt-4 tt400 text-gray-500 text-sm">Donald J. Pliner</span>
            </div>

            {{-- Form --}}
            <div class="w-full lg:w-1/2 h-auto flex flex-col">
                <form method="POST" action="{{ route('register') }}" class="md:mt-4 md:mb-8 w-full md:w-3/5 m-auto md:bg-gray-800 p-8 rounded md:shadow-md flex flex-col" autocomplete="off" spellcheck="false">
                    @csrf

                    <h1 class="gte700 text-white text-3xl">
                        Sign Up
                    </h1>
                    <p class="mt-2 gte200 text-md text-purple-300">
                        Create an account and start shopping
                    </p>

                    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-4">
                        <label for="first-name" class="flex flex-col">
                            <span class="mb-2 gte200 text-sm text-gray-500">{{ __('First Name') }}</span>
                            <div class="input relative group">
                                <i data-feather="user" class="text-white opacity-50 h-4 absolute top-1/2 left-2 transform -translate-y-1/2"></i>
                                <input type="text" id="first-name" autocomplete="off" class="auth w-full py-2 pl-9 pr-2 tt400 text-white bg-black bg-opacity-25 rounded ring-2 ring-transparent ring-offset-4 ring-offset-gray-900 md:ring-offset-gray-800 transition ease-in-out duration-200 focus:ring-purple-500 focus:outline-none @error('first_name') border border-solid border-red-500 @enderror" name="first_name" value="{{ old('first_name') }}" required>
                            </div>
                        </label>

                        <label for="last-name" class="flex flex-col">
                            <span class="mb-2 gte200 text-sm text-gray-500">{{ __('Last Name') }}</span>
                            <div class="input relative group">
                                <i data-feather="users" class="text-white opacity-50 h-4 absolute top-1/2 left-2 transform -translate-y-1/2"></i>
                                <input type="text" id="last-name" autocomplete="off" class="auth w-full py-2 pl-9 pr-2 tt400 text-white bg-black bg-opacity-25 rounded ring-2 ring-transparent ring-offset-4 ring-offset-gray-900 md:ring-offset-gray-800 transition ease-in-out duration-200 focus:ring-purple-500 focus:outline-none @error('last_name') border border-solid border-red-500 @enderror" name="last_name" value="{{ old('last_name') }}" required>
                            </div>
                        </label>
                    </div>

                    <label for="email" class="mt-4 flex flex-col">
                        <span class="mb-2 gte200 text-sm text-gray-500">{{ __('Email Address') }}</span>
                        <div class="input relative group">
                            <i data-feather="at-sign" class="text-white opacity-50 h-4 absolute top-1/2 left-2 transform -translate-y-1/2"></i>
                            <input type="email" id="email" autocomplete="email" class="auth w-full py-2 pl-9 pr-2 tt400 text-white bg-black bg-opacity-25 rounded ring-2 ring-transparent ring-offset-4 ring-offset-gray-900 md:ring-offset-gray-800 transition ease-in-out duration-200 focus:ring-purple-500 focus:outline-none @error('email') border border-solid border-red-500 @enderror" name="email" value="{{ old('email') }}" required>
                        </div>

                        @error('email')
                            <span class="mt-2 gte100 text-sm text-red-400" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>

                    <label for="password" class="mt-4 flex flex-col">
                        <span class="mb-2 gte200 text-sm text-gray-500">{{ __('Your Password') }}</span>
                        <div class="input relative group">
                            <i data-feather="lock" class="text-white opacity-50 h-4 absolute top-1/2 left-2 transform -translate-y-1/2"></i>
                            <input type="password" id="password" autocomplete="new-password" class="auth w-full py-2 pl-9 pr-2 tt400 text-white bg-black bg-opacity-25 rounded ring-2 ring-transparent ring-offset-4 ring-offset-gray-900 md:ring-offset-gray-800 transition ease-in-out duration-200 focus:ring-purple-500 focus:outline-none @error('password') border border-solid border-red-500 @enderror" name="password" required>
                        </div>

                        @error('password')
                            <span class="mt-2 gte100 text-sm text-red-400" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>

                    <label for="password-confirm" class="mt-4 flex flex-col">
                        <span class="mb-2 gte200 text-sm text-gray-500">{{ __('Confirm Password') }}</span>
                        <div class="input relative group">
                            <i data-feather="lock" class="text-white opacity-50 h-4 absolute top-1/2 left-2 transform -translate-y-1/2"></i>
                            <input type="password" id="password-confirm" autocomplete="new-password" class="auth w-full py-2 pl-9 pr-2 tt400 text-white bg-black bg-opacity-25 rounded ring-2 ring-transparent ring-offset-4 ring-offset-gray-900 md:ring-offset-gray-800 transition ease-in-out duration-200 focus:ring-purple-500 focus:outline-none" name="password_confirmation" required>
                        </div>

                        @error('password')
                            <span class="mt-2 gte100 text-sm text-red-400" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>

                    <button type="submit" class="mt-6 w-full py-3 bg-purple-600 rounded text-white gte500 shadow-md ring-2 ring-transparent ring-offset-2 ring-offset-gray-900 md:ring-offset-gray-800 transition ease-in-out duration-200 focus:ring-purple-500 focus:outline-none">{{ __('Sign Up') }}</button>

                    <span class="mt-2 gte200 text-sm text-gray-500">{{ __('By signing up you agree to our Terms of Use and Privacy Policy.') }}</span>

                    <span class="mt-8 gte200 text-sm text-gray-300">{{ __('Already have an account?') }} <a href="{{ route('login') }}" class="gte400 text-gray-200 underline transition ease-in-out duration-200 hover:text-white focus:text-white">{{ __('Log In') }}</a>.</span>
                </form>
            </div>
        </div>
    </section>
@endsection
