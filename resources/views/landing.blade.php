@extends('layouts.app')

@section('content')
    <main class="h-auto mb-16 w-full flex flex-col flex-shrink-0">
        <header class="h-auto lg:h-screen w-full flex flex-col bg-gray-200 lg:bg-purple-900">
            {{-- Banner --}}
            <div class="banner py-4 px-8 md:px-16 flex flex-row justify-between items-center flex-shrink-0">
                <div class="promo tt500 text-gray-900 lg:text-gray-200 text-md flex flex-row justify-center items-center">
                    <script src="https://cdn.lordicon.com//libs/frhvbuzj/lord-icon-2.0.2.js"></script>
                    <lord-icon
                        src="https://cdn.lordicon.com//dnoiydox.json"
                        trigger="loop"
                        colors="primary:#ffffff,secondary:#08a88a"
                        stroke="65"
                        class="h-8 w-8">
                    </lord-icon>
                    <span class="mt-2 ml-2">
                        Free delivery on orders over Ksh. 2,500
                    </span>
                </div>
                <button class="ml-auto rounded py-2 px-3 bg-gray-900 tt400 text-white text-sm hidden md:flex">
                    <span class="text-gray-300">Don't miss out.</span><span class="tt500 ml-1">Subscribe now!</span>
                </button> 
            </div>
    
            {{-- Nav --}}
            @include('layouts.nav')
    
            {{-- CTA --}}
            <section class="h-full w-full px-8 md:px-16 flex flex-col lg:flex-row">
                <div class="w-full pb-12 lg:pb-0 lg:w-1/2  lg:mt-20 order-2 lg:order-1 flex flex-col">
                    <span class="uppercase tt600 text-xs text-green-500 lg:text-green-300">25% OFF PROMO SALE TILL 23/04/21</span>
                    <h1 class="mt-4 gte700 text-purple-900 lg:text-white text-5xl">
                        Take your game to the next level
                    </h1>
                    <p class="mt-6 gte200 text-md text-gray-900 lg:text-purple-100">
                        Our specially engineered breathable fabric and custom footsole technology ensures that the shoes you purchase from us will be the most comfortable you've ever slipped on, period.
                    </p>
                    <a href="#" class="mt-10 bg-purple-900 lg:bg-transparent border-2 border-solid border-purple-900 lg:border-white mr-auto tt600 text-white pt-3 pb-2 px-4 rounded flex flex-row justify-center items-center">
                        <i data-feather="shopping-cart" class="mr-2 transform scale-75"></i> Shop The Collection
                    </a>
                </div>

                <div class="lg:h-full my-10 lg:my-0 w-full lg:w-1/2 order-1 lg:order-2 lg:flex relative">
                    <div class="h-80 lg:h-96 w-80 lg:w-96 animate-bg rounded-full absolute top-1/2 right-1/2 transform translate-x-1/2 -translate-y-1/2 z-0" style="filter: blur(8px);-webkit-filter: blur(8px);opacity: 0.85;"></div>
                    <img src="{{ asset('./storage/img/header-2.png') }}" class="h-80 lg:h-auto object-fit lg:-mt-6 transform scale-90 z-10">
                </div>
            </section>
        </header>

        {{-- Shortcuts --}}
        <section class="w-full px-8 md:px-16 mt-20 grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="h-40 w-full md:col-start-1 rounded relative">
                <img src="{{ asset('./storage/img/1.jpg') }}" alt="" class="h-full w-full object-cover rounded z-0">
                <a href="#football" class="absolute top-0 left-0 h-full w-full bg-gray-900 bg-opacity-60 rounded z-10"></a>
                <a href="#football" class="absolute bottom-0 left-1/2 transform translate-y-1/2 -translate-x-1/2 py-1 px-6 rounded bg-white border-4 border-solid border-white z-20 tt500 text-lg font-bold text-gray-700 transition ease-in-out duration-200 hover:text-gray-900">
                    Football
                </a>
            </div>

            <div class="h-40 w-full md:col-start-2 bg-purple-900 rounded relative">
                <img src="{{ asset('./storage/img/4.jpg') }}" alt="" class="h-full w-full object-cover rounded z-0">
                <a href="#training" class="absolute top-0 left-0 h-full w-full bg-gray-900 bg-opacity-60 rounded z-10"></a>
                <a href="#training" class="absolute bottom-0 left-1/2 transform translate-y-1/2 -translate-x-1/2 py-1 px-6 rounded bg-white border-4 border-solid border-white z-20 tt500 text-lg font-bold text-gray-700 transition ease-in-out duration-200 hover:text-gray-900">
                    Training
                </a>
            </div>

            <div class="h-40 w-full md:col-start-3 bg-purple-900 rounded relative">
                <img src="{{ asset('./storage/img/3.jpg') }}" alt="" class="h-full w-full object-cover rounded z-0">
                <a href="#lifestyle" class="absolute top-0 left-0 h-full w-full bg-gray-900 bg-opacity-60 rounded z-10"></a>
                <a href="#lifestyle" class="absolute bottom-0 left-1/2 transform translate-y-1/2 -translate-x-1/2 py-1 px-6 rounded bg-white border-4 border-solid border-white z-20 tt500 text-lg font-bold text-gray-700 transition ease-in-out duration-200 hover:text-gray-900">
                    Lifestyle
                </a>
            </div>

            <div class="h-40 w-full md:col-start-4 bg-purple-900 rounded relative">
                <img src="{{ asset('./storage/img/2.jpg') }}" alt="" class="h-full w-full object-cover rounded z-0">
                <a href="#basketball" class="absolute top-0 left-0 h-full w-full bg-gray-900 bg-opacity-60 rounded z-10"></a>
                <a href="#basketball" class="absolute bottom-0 left-1/2 transform translate-y-1/2 -translate-x-1/2 py-1 px-6 rounded bg-white border-4 border-solid border-white z-20 tt500 text-lg font-bold text-gray-700 transition ease-in-out duration-200 hover:text-gray-900">
                    Basketball
                </a>
            </div>
        </section>

        {{-- Best Sellers --}}
        <section class="w-full px-8 md:px-16 pt-20 flex flex-col">
            <h2 class="tt700 text-purple-900 text-4xl relative">
                Best Sellers
                <div class="h-1 w-8 bg-gradient-to-r from-green-400 to-blue-500 absolute bottom-0 left-0 transform translate-y-1"></div>
            </h2>

            <div class="w-full mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 grid-rows-4 md:grid-rows-2 lg:grid-rows-1  gap-8 lg:gap-16">
                @foreach ($bestsellers as $shoe)
                    <x-shoe :shoe="$shoe" />
                @endforeach
            </div>
        </section>

        {{-- Promos --}}
        <section class="w-full px-8 md:px-16 mt-20 md:mt-32 flex flex-col">
            <div class="mt-8 w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 grid-rows-1 md:grid-rows-3 gap-x-16 gap-y-8">
                <div class="h-48 w-full row-start-1 md:row-end-4 lg:row-end-4 hidden md:flex flex-col border border-solid border-gray-300 rounded-md">
                    <div class="h-96 w-full flex-shrink-0 rounded-md rounded-b-none overflow-hidden">
                        <img src="{{ asset('./storage/img/promo-football.jpg') }}" class="transform scale-150 object-contain">
                    </div>
                    <div class="p-12 w-full border  rounded-md rounded-t-none border-t-0 border-solid border-gray-300 flex flex-col justify-center items-center">
                        <i data-feather="activity" class="text-green-500"></i>
                        <h4 class="mt-4 mb-8 gte500 text-md text-gray-900 text-center">
                            Get the right brush to make football an art
                        </h4>
                        <a href="{{ route('shushop.category', 'Football') }}" class="gte400 text-gray-900 text-sm py-3 px-8 border border-solid border-gray-300 mx-auto rounded shadow-lg bg-gray-200 transform ease-in-out duration-200 hover:bg-purple-900 hover:text-white">Shop The Collection</a>
                    </div>
                </div>
    
                <div class="h-48 md:col-start-2 md:col-end-4 lg:col-end-3 row-start-1 row-end-2 bg-purple-900 rounded flex flex-col relative">
                    <img src="{{ asset('./storage/img/header.png') }}" class="absolute -top-3 left-1/2 transform -translate-y-1/2 -translate-x-1/2 scale-75 z-0">
                    <h4 class="gte500 text-purple-300 text-3xl mx-auto mt-auto z-10">Raise your game.</h4>
                    <a href="{{ route('shushop.category', 'Basketball') }}" class="my-4 gte400 text-white text-sm py-2 px-6 mx-auto rounded shadow-lg bg-purple-800 transform ease-in-out duration-200 hover:bg-purple-700 hover:text-white z-10">
                        Shop Now
                    </a>
                </div>
    
                <div class="h-96 md:h-auto px-8 col-start-2 md:col-end-4 lg:col-end-3 row-start-1 row-end-3 md:row-start-2 md:row-end-4 bg-gray-900 border border-solid border-gray-300 rounded ring-1 ring-green-500 ring-offset-4 ring-offset-white hidden md:flex flex-col justify-center items-center">
                    <i data-feather="hash" class="transform scale-150 mb-8 text-gray-700 text-8xl"></i>
                    <h3 class="gte500 text-green-500 text-3xl text-center">
                        Tag Us & Join Our Weekly Giveaway
                    </h3>
                    <span id="hashtag" class="hashtag mt-12 tt500 text-white mx-auto pt-3 pb-2 px-6 border border-dashed border-white cursor-pointer" title="Click to copy">#ShuShopSoldIt</span>
                </div>
    
                <div class="w-full col-start-3 col-end-4 lg:row-start-1 lg:row-end-4 hidden lg:flex flex-col border border-solid border-gray-300 rounded-md">
                    <div class="h-96 w-full flex-shrink-0 rounded-md rounded-b-none">
                        <img src="{{ asset('./storage/img/shoe-banner-4.jpg') }}" class="h-full w-full object-cover">
                    </div>
                    <div class="p-12 bg-gray-100 w-full flex flex-col justify-center items-center">
                        <i data-feather="sun" class="text-green-500"></i>
                        <h4 class="mt-4 mb-8 gte500 text-md text-gray-900 text-center">
                            Up to 25% off on all lifestyle shoes
                        </h4>
                        <a href="{{ route('shushop.category', 'Lifestyle') }}" class="gte400 text-gray-900 text-sm py-3 px-8 border border-solid border-gray-300 mx-auto rounded shadow-lg bg-white transform ease-in-out duration-200 hover:bg-purple-900 hover:text-white">{{ __('Browse Products') }}</a>
                    </div>
                </div>
            </div>
        </section>

        {{-- Training & Gym --}}
        <section id="training" class="w-full px-8 md:px-16 pt-20 flex flex-col">
            <h2 class="tt700 text-purple-900 text-4xl relative">
                Training & Gym
                <div class="h-1 w-8 bg-gradient-to-r from-green-400 to-blue-500 absolute bottom-0 left-0 transform translate-y-1"></div>
            </h2>

            <div class="w-full mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 grid-rows-4 md:grid-rows-2 lg:grid-rows-1  gap-8 lg:gap-16">
                @foreach ($training as $shoe)
                    <x-shoe :shoe="$shoe" />
                @endforeach
            </div>
        </section>

        {{-- Shortcuts --}}
        <section class="w-full px-8 md:px-16 mt-20 grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="h-40 w-full md:col-start-1 rounded relative">
                <img src="{{ asset('./storage/img/1.jpg') }}" alt="" class="h-full w-full object-cover rounded z-0">
                <a href="#football" class="absolute top-0 left-0 h-full w-full bg-gray-900 bg-opacity-60 rounded z-10"></a>
                <a href="#football" class="absolute bottom-0 left-1/2 transform translate-y-1/2 -translate-x-1/2 py-1 px-6 rounded bg-white border-4 border-solid border-white z-20 tt500 text-lg font-bold text-gray-700 transition ease-in-out duration-200 hover:text-gray-900">
                    Football
                </a>
            </div>

            <div class="h-40 w-full md:col-start-2 bg-purple-900 rounded relative">
                <img src="{{ asset('./storage/img/4.jpg') }}" alt="" class="h-full w-full object-cover rounded z-0">
                <a href="#training" class="absolute top-0 left-0 h-full w-full bg-gray-900 bg-opacity-60 rounded z-10"></a>
                <a href="#training" class="absolute bottom-0 left-1/2 transform translate-y-1/2 -translate-x-1/2 py-1 px-6 rounded bg-white border-4 border-solid border-white z-20 tt500 text-lg font-bold text-gray-700 transition ease-in-out duration-200 hover:text-gray-900">
                    Training
                </a>
            </div>

            <div class="h-40 w-full md:col-start-3 bg-purple-900 rounded relative">
                <img src="{{ asset('./storage/img/3.jpg') }}" alt="" class="h-full w-full object-cover rounded z-0">
                <a href="#lifestyle" class="absolute top-0 left-0 h-full w-full bg-gray-900 bg-opacity-60 rounded z-10"></a>
                <a href="#lifestyle" class="absolute bottom-0 left-1/2 transform translate-y-1/2 -translate-x-1/2 py-1 px-6 rounded bg-white border-4 border-solid border-white z-20 tt500 text-lg font-bold text-gray-700 transition ease-in-out duration-200 hover:text-gray-900">
                    Lifestyle
                </a>
            </div>

            <div class="h-40 w-full md:col-start-4 bg-purple-900 rounded relative">
                <img src="{{ asset('./storage/img/2.jpg') }}" alt="" class="h-full w-full object-cover rounded z-0">
                <a href="#basketball" class="absolute top-0 left-0 h-full w-full bg-gray-900 bg-opacity-60 rounded z-10"></a>
                <a href="#basketball" class="absolute bottom-0 left-1/2 transform translate-y-1/2 -translate-x-1/2 py-1 px-6 rounded bg-white border-4 border-solid border-white z-20 tt500 text-lg font-bold text-gray-700 transition ease-in-out duration-200 hover:text-gray-900">
                    Basketball
                </a>
            </div>
        </section>

        {{-- Football --}}
        <section id="football" class="w-full px-8 md:px-16 pt-20 flex flex-col">
            <h2 class="tt700 text-purple-900 text-4xl relative">
                Football
                <div class="h-1 w-8 bg-gradient-to-r from-green-400 to-blue-500 absolute bottom-0 left-0 transform translate-y-1"></div>
            </h2>

            <div class="w-full mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 grid-rows-4 md:grid-rows-2 lg:grid-rows-1  gap-8 lg:gap-16">
                @foreach ($football as $shoe)
                    <x-shoe :shoe="$shoe" />
                @endforeach
            </div>
        </section>

        {{-- Promos --}}
        <section class="w-full px-8 md:px-16 mt-8 md:mt-32 flex flex-col">
            <div class="mt-8 w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 grid-rows-2 md:grid-rows-3 gap-x-16 gap-y-8">
                <div class="h-48 w-full row-start-1 md:row-end-4 lg:row-end-4 hidden md:flex flex-col border border-solid border-gray-300 rounded-md">
                    <div class="h-96 w-full flex-shrink-0 rounded-md rounded-b-none overflow-hidden">
                        <img src="{{ asset('./storage/img/promo-football.jpg') }}" class="transform scale-150 object-contain">
                    </div>
                    <div class="p-12 w-full border  rounded-md rounded-t-none border-t-0 border-solid border-gray-300 flex flex-col justify-center items-center">
                        <i data-feather="activity" class="text-green-500"></i>
                        <h4 class="mt-4 mb-8 gte500 text-md text-gray-900 text-center">
                            Get the right brush to make football an art
                        </h4>
                        <a href="{{ route('shushop.category', 'Football') }}" class="gte400 text-gray-900 text-sm py-3 px-8 border border-solid border-gray-300 mx-auto rounded shadow-lg bg-gray-200 transform ease-in-out duration-200 hover:bg-purple-900 hover:text-white">Shop The Collection</a>
                    </div>
                </div>
    
                <div class="h-48 md:col-start-2 md:col-end-4 lg:col-end-3 row-start-1 row-end-2 bg-purple-900 rounded hidden md:flex flex-col relative">
                    <img src="{{ asset('./storage/img/header.png') }}" class="absolute -top-3 left-1/2 transform -translate-y-1/2 -translate-x-1/2 scale-75 z-0">
                    <h4 class="gte500 text-purple-300 text-3xl mx-auto mt-auto z-10">Raise your game.</h4>
                    <a href="{{ route('shushop.category', 'Basketball') }}" class="my-4 gte400 text-white text-sm py-2 px-6 mx-auto rounded shadow-lg bg-purple-800 transform ease-in-out duration-200 hover:bg-purple-700 hover:text-white z-10">
                        Shop Now
                    </a>
                </div>
    
                <div class="h-96 md:h-auto px-8  md:col-start-2 md:col-end-4 lg:col-end-3 row-start-1 row-end-3 md:row-start-2 md:row-end-4 bg-gray-900 border border-solid border-gray-300 rounded ring-1 ring-green-500 ring-offset-4 ring-offset-white flex flex-col justify-center items-center">
                    <i data-feather="hash" class="transform scale-150 mb-8 text-gray-700 text-8xl"></i>
                    <h3 class="gte500 text-green-500 text-3xl text-center">
                        Tag Us & Join Our Weekly Giveaway
                    </h3>
                    <span id="hashtag" class="hashtag mt-12 tt500 text-white mx-auto pt-3 pb-2 px-6 border border-dashed border-white">#ShuShopSoldIt</span>
                </div>
    
                <div class="w-full row-start-4 row-end-6 lg:row-start-1 lg:row-end-4 hidden lg:flex flex-col border border-solid border-gray-300 rounded-md">
                    <div class="h-96 w-full flex-shrink-0 rounded-md rounded-b-none">
                        <img src="{{ asset('./storage/img/shoe-banner-4.jpg') }}" class="h-full w-full object-cover">
                    </div>
                    <div class="p-12 bg-gray-100 w-full flex flex-col justify-center items-center">
                        <i data-feather="sun" class="text-green-500"></i>
                        <h4 class="mt-4 mb-8 gte500 text-md text-gray-900 text-center">
                            Up to 25% off on all lifestyle shoes
                        </h4>
                        <a href="{{ route('shushop.category', 'Lifestyle') }}" class="gte400 text-gray-900 text-sm py-3 px-8 border border-solid border-gray-300 mx-auto rounded shadow-lg bg-white transform ease-in-out duration-200 hover:bg-purple-900 hover:text-white">Browse Products</a>
                    </div>
                </div>
            </div>
        </section>

        {{-- Lifestyle --}}
        <section id="lifestyle" class="w-full px-8 md:px-16 pt-20 flex flex-col">
            <h2 class="tt700 text-purple-900 text-4xl relative">
                Lifestyle
                <div class="h-1 w-8 bg-gradient-to-r from-green-400 to-blue-500 absolute bottom-0 left-0 transform translate-y-1"></div>
            </h2>

            <div class="w-full mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 grid-rows-4 md:grid-rows-2 lg:grid-rows-1  gap-8 lg:gap-16">
                @foreach ($lifestyle as $shoe)
                    <x-shoe :shoe="$shoe" />
                @endforeach
            </div>
        </section>

        {{-- Shortcuts --}}
        <section class="w-full px-8 md:px-16 mt-20 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="h-40 w-full md:col-start-1 rounded relative">
                <img src="{{ asset('./storage/img/1.jpg') }}" alt="" class="h-full w-full object-cover rounded z-0">
                <a href="#football" class="absolute top-0 left-0 h-full w-full bg-gray-900 bg-opacity-60 rounded z-10"></a>
                <a href="#football" class="absolute bottom-0 left-1/2 transform translate-y-1/2 -translate-x-1/2 py-1 px-6 rounded bg-white border-4 border-solid border-white z-20 tt500 text-lg font-bold text-gray-700 transition ease-in-out duration-200 hover:text-gray-900">
                    Football
                </a>
            </div>
            <div class="h-40 w-full md:col-start-2 bg-purple-900 rounded ring ring-offset-4 ring-offset-white ring-transparent relative transition ease-in-out duration-200 hover:ring-green-500">
                <img src="{{ asset('./storage/img/4.jpg') }}" alt="" class="h-full w-full object-cover rounded z-0">
                <a href="#training" class="absolute top-0 left-0 h-full w-full bg-gray-900 bg-opacity-60 rounded z-10"></a>
                <a href="#training" class="absolute bottom-0 left-1/2 transform translate-y-1/2 -translate-x-1/2 py-1 px-6 rounded bg-white border-4 border-solid border-white z-20 tt500 text-lg font-bold text-gray-700 transition ease-in-out duration-200 hover:text-gray-900">
                    Training
                </a>
            </div>
            <div class="h-40 w-full md:col-start-3 bg-purple-900 rounded relative">
                <img src="{{ asset('./storage/img/3.jpg') }}" alt="" class="h-full w-full object-cover rounded z-0">
                <a href="#lifestyle" class="absolute top-0 left-0 h-full w-full bg-gray-900 bg-opacity-60 rounded z-10"></a>
                <a href="#lifestyle" class="absolute bottom-0 left-1/2 transform translate-y-1/2 -translate-x-1/2 py-1 px-6 rounded bg-white border-4 border-solid border-white z-20 tt500 text-lg font-bold text-gray-700 transition ease-in-out duration-200 hover:text-gray-900">
                    Lifestyle
                </a>
            </div>
        </section>

        {{-- Basketball --}}
        <section id="basketball" class="w-full px-8 md:px-16 pt-20 flex flex-col">
            <h2 class="tt700 text-purple-900 text-4xl relative">
                Basketball
                <div class="h-1 w-8 bg-gradient-to-r from-green-400 to-blue-500 absolute bottom-0 left-0 transform translate-y-1"></div>
            </h2>

            <div class="w-full mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 grid-rows-4 md:grid-rows-2 lg:grid-rows-1  gap-8 lg:gap-16">
                @foreach ($basketball as $shoe)
                    <x-shoe :shoe="$shoe" />
                @endforeach
            </div>
        </section>
    </main>
@endsection