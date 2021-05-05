@extends('layouts.app')

@section('content')
    {{-- Nav --}}
    @include('checkout.nav')

    <section class="w-full px-8 md:px-16 lg:px-32 flex flex-col">
        <h1 class="gte700 text-4xl text-gray-900">
            Billing
        </h1>

        {{-- Breadcrumbs - Tablets & up --}}
        <ul class="my-8 tt500 text-gray-600 hidden md:flex flex-row items-center justify-start">
            <li class="flex flex-row pb-3">
                <span>
                    Basket
                </span>
                <i class="ml-2 md:ml-4 lg:ml-8 transform scale-50" data-feather="chevron-right"></i>
            </li>
            <li class="flex flex-row pb-3 ml-2 md:ml-4 lg:ml-8">
                <span>
                    Sign In
                </span>
                <i class="ml-2 md:ml-4 lg:ml-8 transform scale-50" data-feather="chevron-right"></i>
            </li>
            <li class="flex flex-row pb-3 ml-2 md:ml-4 lg:ml-8 border-b-2 border-solid border-purple-900">
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
                Step 3 of 5
            </span>
            <div class="mt-2 grid grid-cols-5 gap-4">
                <div class="h-1 bg-gray-300 rounded"></div>
                <div class="h-1 bg-gray-300 rounded"></div>
                <div class="h-1 bg-purple-900 rounded"></div>
                <div class="h-1 bg-gray-300 rounded"></div>
                <div class="h-1 bg-gray-300 rounded"></div>
            </div>
        </div>
    </section>

    <section class="w-full mt-4 lg:mt-0 mb-16 px-8 md:px-16 lg:px-32 flex flex-col">
        <form action="/checkout/billing/{{ Auth::user()->id }}" method="post" class="w-full lg:w-3/5 mb-4 md:mb-8 lg:mb-16 lg:mx-auto lg:border lg:border-solid lg:border-gray-300 lg:p-8 flex flex-col">
            @csrf
            @method('PUT')

            <h2 class="gte700 text-2xl md:text-3xl mx-0 text-purple-900">Billing Information</h2>

            {{-- <div class="mt-6 w-full grid grid-cols-1 md:grid-cols-2 gap-y-6 md:gap-4">
                <label for="first-name" class="tt500 text-lg flex flex-col">
                    <span class="mb-1 text-gray-900">First Name <small class="text-red-500">*</small></span>
                    <input type="text" id="first-name" autocomplete="off" class="text-gray-700 w-full p-3 border border-solid border-gray-300 focus:outline-none" value="{{ Auth::user()->first_name }}" readonly>
                </label>

                <label for="last-name" class="tt500 text-lg flex flex-col">
                    <span class="mb-1 text-gray-900">Last Name <small class="text-red-500">*</small></span>
                    <input type="text" id="last-name" autocomplete="off" class="text-gray-700 w-full p-3 border border-solid border-gray-300 focus:outline-none" value="{{ Auth::user()->last_name }}" readonly>
                </label>
            </div> --}}

            <label for="phone" class="tt500 text-lg flex flex-col relative">
                <span class="mt-5 mb-1 text-gray-900">Phone Number <small class="text-red-500">*</small></span>
                <span class="absolute left-4 text-gray-700" style="top:4.05rem">+254</span>
                <input type="text" id="phone" autocomplete="off" class="w-full py-3 pr-3 border border-solid border-gray-300 ring-1 ring-transparent ring-offset-4 ring-offset-white transition ease-in-out duration-200 focus:outline-none focus:border-gray-500 focus:ring-purple-800" placeholder="700 123 456" style="padding-left: 3.5rem" name="phone_number" value="{{ Auth::user()->phone_number }}" required minlength="9">
            </label>

            <label for="address" class="tt500 text-lg flex flex-col">
                <span class="mt-5 mb-1 text-gray-900">Address <small class="text-red-500">*</small></span>
                <input type="text" id="address" autocomplete="off" class="w-full p-3 border border-solid border-gray-300 ring-1 ring-transparent ring-offset-4 ring-offset-white transition ease-in-out duration-200 focus:outline-none focus:border-gray-500 focus:ring-purple-800" name="address" value="{{ Auth::user()->address }}" required>
            </label>

            <div class="mt-6 w-full grid grid-cols-1 md:grid-cols-2 gap-y-6 md:gap-4">
                <label for="zip-code" class="tt500 text-lg flex flex-col">
                    <span class="mb-1 text-gray-900">Zip Code <small class="text-red-500">*</small></span>
                    <input type="text" id="zip-code" autocomplete="off" class="w-full p-3 border border-solid border-gray-300 ring-1 ring-transparent ring-offset-4 ring-offset-white transition ease-in-out duration-200 focus:outline-none focus:border-gray-500 focus:ring-purple-800" name="zip_code" value="{{ Auth::user()->zip_code }}" required maxlength="9">
                </label>

                <label for="region" class="tt500 text-lg flex flex-col">
                    <span class="mb-1 text-gray-900">Province/Region <small class="text-red-500">*</small></span>
                    <input type="text" id="region" autocomplete="off" class="w-full p-3 border border-solid border-gray-300 ring-1 ring-transparent ring-offset-4 ring-offset-white transition ease-in-out duration-200 focus:outline-none focus:border-gray-500 focus:ring-purple-800" name="region" value="{{ Auth::user()->region }}" required maxlength="25">
                </label>
            </div>

            <label for="city" class="tt500 text-lg flex flex-col">
                <span class="mt-5 mb-1 text-gray-900">City <small class="text-red-500">*</small></span>
                <input type="text" id="city" autocomplete="off" class="w-full p-3 border border-solid border-gray-300 ring-1 ring-transparent ring-offset-4 ring-offset-white transition ease-in-out duration-200 focus:outline-none focus:border-gray-500 focus:ring-purple-800" name="city" value="{{ Auth::user()->city }}" required maxlength="20">
            </label>

            <label for="organization" class="tt500 text-lg flex flex-col">
                <span class="mt-5 mb-1 text-gray-900">Organization</span>
                <input type="text" id="organization" autocomplete="off" class="w-full p-3 border border-solid border-gray-300 ring-1 ring-transparent ring-offset-4 ring-offset-white transition ease-in-out duration-200 focus:outline-none focus:border-gray-500 focus:ring-purple-800" name="organization" value="{{ Auth::user()->organization }}">
            </label>

            <button type="submit" class="mt-12 w-full py-3 bg-gray-900 text-white gte500 transition ease-in-out duration-200 focus:outline-none focus:bg-purple-900">Save</button>
        </form>
    </section>
@endsection