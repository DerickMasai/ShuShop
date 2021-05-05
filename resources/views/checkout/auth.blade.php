@extends('layouts.app')

@section('content')
    {{-- Nav --}}
    @include('checkout.nav')

    <section class="w-full px-8 md:px-16 lg:px-32 flex flex-col">
        <h1 class="gte700 text-4xl text-gray-900">
            Sign In
        </h1>

        {{-- Breadcrumbs - Tablets & up --}}
        <ul class="my-8 tt500 text-gray-600 hidden md:flex flex-row items-center justify-start">
            <li class="flex flex-row pb-3">
                <span>
                    Basket
                </span>
                <i class="ml-2 md:ml-4 lg:ml-8 transform scale-50" data-feather="chevron-right"></i>
            </li>
            <li class="flex flex-row pb-3 ml-2 md:ml-4 lg:ml-8 border-b-2 border-solid border-purple-900">
                <span>
                    Sign In
                </span>
                <i class="ml-2 md:ml-4 lg:ml-8 transform scale-50" data-feather="chevron-right"></i>
            </li>
            <li class="flex flex-row pb-3 ml-2 md:ml-4 lg:ml-8">
                <span>
                    Billing
                </span>
                <i class="ml-2 md:ml-4 lg:ml-8 transform scale-50" data-feather="chevron-right"></i>
            </li>
            <li class="flex flex-row pb-3 ml-2 md:ml-4 lg:ml-8">
                <span>
                    Payment
                </span>
                <i class="ml-2 md:ml-4 lg:ml-8 transform scale-50" data-feather="chevron-right"></i>
            </li>
            <li class="flex flex-row pb-3 ml-2 md:ml-4 lg:ml-8">
                <span>
                    Complete
                </span>
                <i class="ml-2 md:ml-4 lg:ml-8 transform scale-50" data-feather="chevron-right"></i>
            </li>
        </ul>

        {{-- Breadcrumbs - Phones --}}
        <div class="my-4 flex md:hidden flex-col">
            <span class="gte400 text-gray-600">
                Step 2 of 5
            </span>
            <div class="mt-2 grid grid-cols-5 gap-4">
                <div class="h-1 bg-gray-300 rounded"></div>
                <div class="h-1 bg-purple-900 rounded"></div>
                <div class="h-1 bg-gray-300 rounded"></div>
                <div class="h-1 bg-gray-300 rounded"></div>
                <div class="h-1 bg-gray-300 rounded"></div>
            </div>
        </div>
    </section>

    <section class="mt-4 lg:mt-0 mb-16 px-8 md:px-16 lg:px-32 flex flex-col" x-data="{loginModal : true, signupModal : false}">
        <form action="" method="post" class="w-full md:w-3/4 lg:w-1/2 md:mb-16 mt-4 md:mt-0 mx-auto md:border md:border-solid md:border-gray-300 md:p-8 flex flex-col" x-show.transition.scale="loginModal">
            <h2 class="gte700 text-3xl md:mx-auto">Sign In</h2>
            <span class="tt400 text-lg mt-2 md:mx-auto text-gray-500">
                New to ShuShop? <button type="button" class="text-purple-900 underline focus:outline-none" @click="signupModal = true, loginModal = false">Create An Account</button>.
            </span>

            <label for="email" class="tt500 text-lg flex flex-col">
                <span class="mt-6 mb-1 text-gray-900">Email</span>
                <input type="email" id="email" class="w-full p-3 border border-solid border-gray-300">
            </label>

            <label for="password" class="tt500 text-lg flex flex-col">
                <span class="w-full mt-5 mb-1 text-gray-900 flex flex-row">
                    Password
                    <a href="#" class="ml-auto text-purple-900">
                        Show
                    </a>
                </span>
                <input type="password" id="email" class="w-full p-3 border border-solid border-gray-300">
            </label>

            <label class="inline-flex items-center mt-5">
                <input type="checkbox" class="form-checkbox h-4 w-4 rounded-none text-purple-900" checked>
                <span class="ml-2 mt-0.5 tt400 mt-0.5 text-gray-700">
                    Keep me signed in on this device
                </span>
            </label>

            <button type="submit" class="mt-5 w-full py-3 bg-gray-900 text-white gte500 focus:outline-none">Sign In</button>

            <a href="#" class="mt-4 mx-auto tt500 text-lg text-purple-900 underline">Forgot your password?</a>
        </form>

        <form action="" method="post" class="w-full md:w-3/4 lg:w-1/2 md:mb-16 mt-4 md:mt-0 mx-auto md:border md:border-solid md:border-gray-300 md:p-8 flex flex-col" x-show.transition.scale="signupModal">
            <h2 class="gte700 text-3xl md:mx-auto">Create An Account</h2>
            <span class="tt400 text-lg mt-2 md:mx-auto text-gray-500">
                Already have an account? <button type="button" class="text-purple-900 underline focus:outline-none" @click="loginModal = true, signupModal = false">Sign In</button>.
            </span>

            <label for="email" class="tt500 text-lg flex flex-col">
                <span class="mt-6 mb-1 text-gray-900">Email</span>
                <input type="email" id="email" class="w-full p-3 border border-solid border-gray-300">
            </label>

            <label for="username" class="tt500 text-lg flex flex-col">
                <span class="mt-5 mb-1 text-gray-900">Username</span>
                <input type="text" id="username" class="w-full p-3 border border-solid border-gray-300">
            </label>

            <label for="password" class="tt500 text-lg flex flex-col">
                <span class="w-full mt-5 mb-1 text-gray-900 flex flex-row">
                    Password
                    <a href="#" class="ml-auto text-purple-900">
                        Show
                    </a>
                </span>
                <input type="password" id="email" class="w-full p-3 border border-solid border-gray-300">
            </label>

            <label class="inline-flex items-center mt-5">
                <input type="checkbox" class="-mt-3 form-checkbox h-6 w-6 rounded-none text-purple-900" checked>
                <span class="ml-2 tt400 mt-0.5 text-gray-700">
                    I want to receive personalized offers, updates, and information about ShuShop products and services.
                </span>
            </label>

            <button type="submit" class="mt-5 w-full py-3 bg-gray-400 text-white cursor-not-allowed gte500 focus:outline-none">Create Account</button>
            <span class="mt-3 tt400 text-sm text-gray-700">
                By creating an account, you agree to ShuShop's <a href="#" class="text-purple-900 underline">Terms & Conditions</a> and <a href="#" class="text-purple-900 underline">Privacy Policy</a>
            </span>
        </form>
    </section>
@endsection