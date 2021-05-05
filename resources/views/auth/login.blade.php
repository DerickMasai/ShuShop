@extends('layouts.app')

@section('content')
    <section class="h-screen w-full bg-gray-900 flex flex-col">
        <nav class="w-full py-4 md:py-8 px-8 md:px-16 lg:px-32s flex flex-row justify-between items-center flex-shrink-0" x-data="{responsiveNav : false, accountDropdown : false}">
            <a href="#" class="tt600 text-white text-xl"><i class="fas fa-shoe-prints text-xs"></i> Shu<span class="tt400">Shop</span></a>
        </nav>

        <div class="h-full container flex flex-row">
            {{-- Quote --}}
            <div class="w-0 lg:w-1/2 px-16 hidden lg:flex flex-col justify-center items-center">
                <h2 class="gte500 text-gray-300 text-3xl text-center mx-auto">
                    "When the feet are comfortable so is the mind, body and soul"
                </h2>
                <span class="mt-4 tt400 text-gray-500 text-sm">Donald J. Pliner</span>
            </div>

            {{-- Form --}}
            <div class="w-full lg:w-1/2 h-auto flex flex-col">
                <form method="POST" action="{{ route('login') }}" class="md:mt-4 md:mb-8 w-full md:w-3/5 mt-4 mx-auto md:m-auto md:bg-gray-800 p-8 rounded md:shadow-md flex flex-col">
                    @csrf
                    <h1 class="gte700 text-white text-3xl">
                        Log In
                    </h1>
                    <p class="mt-2 gte200 text-md text-purple-300">
                        Sign in to your account to continue
                    </p>

                    <label for="email" class="mt-8 flex flex-col">
                        <span class="mb-2 gte200 text-sm text-gray-500">{{ __('Email Address') }}</span>
                        <div class="input relative group">
                            <i data-feather="at-sign" class="text-white opacity-50 h-4 absolute top-1/2 left-2 transform -translate-y-1/2"></i>
                            <input type="email" id="email" class="auth w-full py-2 pl-9 pr-2 tt400 text-white bg-black bg-opacity-25 rounded ring-2 ring-transparent ring-offset-4 ring-offset-gray-900 md:ring-offset-gray-800 transition ease-in-out duration-200 focus:ring-purple-500 focus:outline-none @error('email') border border-solid border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>
                        
                        @error('email')
                            <span class="mt-2 gte100 text-sm text-red-400" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>

                    <label for="password" class="mt-4 flex flex-col">
                        <div class="mb-2 flex flex-row justify-between">
                            <span class="gte200 text-sm text-gray-500">{{ __('Your Password') }}</span>

                            <a href="{{ route('password.request') }}" class="gte200 text-sm text-gray-500 underline">{{ __('Forgot your password?') }}</a>
                        </div>
                        <div class="input relative group">
                            <i data-feather="lock" class="text-white opacity-50 h-4 absolute top-1/2 left-2 transform -translate-y-1/2"></i>
                            <input type="password" id="password" autocomplete="off" class="auth w-full py-2 px-9 tt400 text-white bg-black bg-opacity-25 rounded ring-2 ring-transparent ring-offset-4 ring-offset-gray-900 md:ring-offset-gray-800 transition ease-in-out duration-200 focus:ring-purple-500 focus:outline-none @error('password') border border-solid border-red-500 @enderror" name="password" required autocomplete="current-password">
                            <button type="submit" class="absolute top-1/2 right-2 transform -translate-y-1/2 focus:outline-none">
                                <i data-feather="eye" class="text-white opacity-50 h-4 "></i>
                            </button>
                        </div>

                        @error('password')
                            <span class="mt-2 gte100 text-sm text-red-400" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </label>

                    <label for="remember" class="w-auto mr-auto my-6 flex justify-start items-start">
                        <div class="border-2 rounded border-gray-400 w-5 h-5 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-purple-500">
                            <input type="checkbox" class="opacity-0 absolute cursor-pointer" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <svg class="fill-current hidden w-4 h-4 text-white pointer-events-none transform scale-50" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                        </div>
                        <span class="select-none -mt-0.5 gte200 text-md text-gray-300 cursor-pointer">{{ __('Remember Me') }}</span>
                    </label>

                    <button type="submit" class="w-full py-3 bg-purple-600 rounded text-white gte500 shadow-md ring-2 ring-transparent ring-offset-2 ring-offset-gray-900 md:ring-offset-gray-800 transition ease-in-out duration-200 focus:ring-purple-500 focus:outline-none">
                        {{ __('Sign In') }}
                    </button>

                    <span class="mt-12 gte200 text-sm text-gray-300 text-opacity-90">{{ __('Not yet registered') }} <a href="{{ route('register') }}" class="gte300 text-gray-200  text-opacity-100 underline transition ease-in-out duration-200 hover:text-white focus:text-white">{{ __('Create an Account') }}</a>.</span>
                </form>
            </div>
        </div>
    </section>
@endsection
