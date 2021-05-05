@extends('layouts.app')

@section('content')

    <main class="w-full flex flex-col">
        {{-- Nav --}}
        @include('layouts.nav')

        {{-- Breadcrumbs --}}
        <div class="mt-16 mb-8 px-8 md:px-16 gte500 text-xs text-gray-500 uppercase flex flex-row items-center">
            <a href="{{ route('shushop.landing') }}" class="transition ease-in-out duration-200 hover:text-purple-900">
                Home
            </a>
            <span class="mx-4"><i data-feather="chevron-right" class="h-3"></i></span>
            <a href="{{ route('shushop.category', $product[0]->category) }}" class="transition ease-in-out duration-200 hover:text-purple-900">
                {{ $product[0]->category }}
            </a>
        </div>

        {{-- Images & Details --}}
        <section class="w-full px-8 md:px-16 mb-16 flex flex-col lg:flex-row">
            <div class="w-full lg:w-1/2 flex flex-col" x-data="{thumbnail1: true, thumbnail2: false, thumbnail3: false, thumbnail4: false, thumbnail5: false, thumbnail6: false }">
                <div class="h-auto w-full p-6 flex border border-solid border-purple-900 rounded relative" x-show="thumbnail1">
                    @if ($product[0]->tag == 'Best Seller')
                        <svg class="w-12 absolute -top-2 left-2 h-20" title="Best Seller" version="1.1" viewBox="0 0 95.05 113.63">
                            <defs id="defs2">
                                <linearGradient id="linearGradient857">
                                <stop id="stop853" offset="0" stop-color="#ff0000" stop-opacity="1"/>
                                <stop id="stop855" offset="1" stop-color="#7f00f5" stop-opacity="1"/>
                                </linearGradient>
                                <linearGradient id="linearGradient859" x1="37.47" x2="62.79" y1="9.1" y2="90.19" gradientUnits="userSpaceOnUse" xlink:href="#linearGradient857"/>
                            </defs>
                            <g id="layer1"  transform="translate(.28 -.13)">
                                <path id="flame" fill="url(#linearGradient859)" fill-opacity="1" stroke-width=".87" d="M76.12 66.56c0 15.63-13.23 28.31-29.54 28.31-16.3 0-29.73-12.68-29.53-28.31.28-21.7 21.5-33.27 22.1-50.09 10.79 2.2 36.97 24.8 36.97 50.09z" opacity="1"/>

                                <circle id="ci1" cx="46.58" cy="66.56" r="1"  />
                                <circle id="ci2" cx="46.58" cy="66.56" r="1"  />
                                <circle id="ci3" cx="46.58" cy="66.56" r="1"  />
                                <circle id="ci4" cx="46.58" cy="66.56" r="1"  />
                            </g>
                        </svg>
                    @endif
                    <img src="{{ asset('./storage/Products/Shoes/' . $product[0]->category . '/' . $product[0]->thumbnail_main) }}">
                </div>
                <div class="h-auto w-full p-6 flex border border-solid border-purple-900 rounded relative" x-show="thumbnail2">
                    @if ($product[0]->tag == 'Best Seller')
                        <svg class="w-12 absolute -top-2 left-2 h-20" title="Best Seller" version="1.1" viewBox="0 0 95.05 113.63">
                            <defs id="defs2">
                                <linearGradient id="linearGradient857">
                                <stop id="stop853" offset="0" stop-color="#ff0000" stop-opacity="1"/>
                                <stop id="stop855" offset="1" stop-color="#7f00f5" stop-opacity="1"/>
                                </linearGradient>
                                <linearGradient id="linearGradient859" x1="37.47" x2="62.79" y1="9.1" y2="90.19" gradientUnits="userSpaceOnUse" xlink:href="#linearGradient857"/>
                            </defs>
                            <g id="layer1"  transform="translate(.28 -.13)">
                                <path id="flame" fill="url(#linearGradient859)" fill-opacity="1" stroke-width=".87" d="M76.12 66.56c0 15.63-13.23 28.31-29.54 28.31-16.3 0-29.73-12.68-29.53-28.31.28-21.7 21.5-33.27 22.1-50.09 10.79 2.2 36.97 24.8 36.97 50.09z" opacity="1"/>

                                <circle id="ci1" cx="46.58" cy="66.56" r="1"  />
                                <circle id="ci2" cx="46.58" cy="66.56" r="1"  />
                                <circle id="ci3" cx="46.58" cy="66.56" r="1"  />
                                <circle id="ci4" cx="46.58" cy="66.56" r="1"  />
                            </g>
                        </svg>
                    @endif
                    <img src="{{ asset('./storage/Products/Shoes/' . $product[0]->category . '/' . $product[0]->thumbnail_one) }}">
                </div>
                <div class="h-auto w-full p-6 flex border border-solid border-purple-900 rounded relative" x-show="thumbnail3">
                    @if ($product[0]->tag == 'Best Seller')
                        <svg class="w-12 absolute -top-2 left-2 h-20" title="Best Seller" version="1.1" viewBox="0 0 95.05 113.63">
                            <defs id="defs2">
                                <linearGradient id="linearGradient857">
                                <stop id="stop853" offset="0" stop-color="#ff0000" stop-opacity="1"/>
                                <stop id="stop855" offset="1" stop-color="#7f00f5" stop-opacity="1"/>
                                </linearGradient>
                                <linearGradient id="linearGradient859" x1="37.47" x2="62.79" y1="9.1" y2="90.19" gradientUnits="userSpaceOnUse" xlink:href="#linearGradient857"/>
                            </defs>
                            <g id="layer1"  transform="translate(.28 -.13)">
                                <path id="flame" fill="url(#linearGradient859)" fill-opacity="1" stroke-width=".87" d="M76.12 66.56c0 15.63-13.23 28.31-29.54 28.31-16.3 0-29.73-12.68-29.53-28.31.28-21.7 21.5-33.27 22.1-50.09 10.79 2.2 36.97 24.8 36.97 50.09z" opacity="1"/>

                                <circle id="ci1" cx="46.58" cy="66.56" r="1"  />
                                <circle id="ci2" cx="46.58" cy="66.56" r="1"  />
                                <circle id="ci3" cx="46.58" cy="66.56" r="1"  />
                                <circle id="ci4" cx="46.58" cy="66.56" r="1"  />
                            </g>
                        </svg>
                    @endif
                    <img src="{{ asset('./storage/Products/Shoes/' . $product[0]->category . '/' . $product[0]->thumbnail_two) }}">
                </div>
                <div class="h-auto w-full p-6 flex border border-solid border-purple-900 rounded relative" x-show="thumbnail4">
                    @if ($product[0]->tag == 'Best Seller')
                        <svg class="w-12 absolute -top-2 left-2 h-20" title="Best Seller" version="1.1" viewBox="0 0 95.05 113.63">
                            <defs id="defs2">
                                <linearGradient id="linearGradient857">
                                <stop id="stop853" offset="0" stop-color="#ff0000" stop-opacity="1"/>
                                <stop id="stop855" offset="1" stop-color="#7f00f5" stop-opacity="1"/>
                                </linearGradient>
                                <linearGradient id="linearGradient859" x1="37.47" x2="62.79" y1="9.1" y2="90.19" gradientUnits="userSpaceOnUse" xlink:href="#linearGradient857"/>
                            </defs>
                            <g id="layer1"  transform="translate(.28 -.13)">
                                <path id="flame" fill="url(#linearGradient859)" fill-opacity="1" stroke-width=".87" d="M76.12 66.56c0 15.63-13.23 28.31-29.54 28.31-16.3 0-29.73-12.68-29.53-28.31.28-21.7 21.5-33.27 22.1-50.09 10.79 2.2 36.97 24.8 36.97 50.09z" opacity="1"/>

                                <circle id="ci1" cx="46.58" cy="66.56" r="1"  />
                                <circle id="ci2" cx="46.58" cy="66.56" r="1"  />
                                <circle id="ci3" cx="46.58" cy="66.56" r="1"  />
                                <circle id="ci4" cx="46.58" cy="66.56" r="1"  />
                            </g>
                        </svg>
                    @endif
                    <img src="{{ asset('./storage/Products/Shoes/' . $product[0]->category . '/' . $product[0]->thumbnail_three) }}">
                </div>
                <div class="h-auto w-full p-6 flex border border-solid border-purple-900 rounded relative" x-show="thumbnail5">
                    @if ($product[0]->tag == 'Best Seller')
                        <svg class="w-12 absolute -top-2 left-2 h-20" title="Best Seller" version="1.1" viewBox="0 0 95.05 113.63">
                            <defs id="defs2">
                                <linearGradient id="linearGradient857">
                                <stop id="stop853" offset="0" stop-color="#ff0000" stop-opacity="1"/>
                                <stop id="stop855" offset="1" stop-color="#7f00f5" stop-opacity="1"/>
                                </linearGradient>
                                <linearGradient id="linearGradient859" x1="37.47" x2="62.79" y1="9.1" y2="90.19" gradientUnits="userSpaceOnUse" xlink:href="#linearGradient857"/>
                            </defs>
                            <g id="layer1"  transform="translate(.28 -.13)">
                                <path id="flame" fill="url(#linearGradient859)" fill-opacity="1" stroke-width=".87" d="M76.12 66.56c0 15.63-13.23 28.31-29.54 28.31-16.3 0-29.73-12.68-29.53-28.31.28-21.7 21.5-33.27 22.1-50.09 10.79 2.2 36.97 24.8 36.97 50.09z" opacity="1"/>

                                <circle id="ci1" cx="46.58" cy="66.56" r="1"  />
                                <circle id="ci2" cx="46.58" cy="66.56" r="1"  />
                                <circle id="ci3" cx="46.58" cy="66.56" r="1"  />
                                <circle id="ci4" cx="46.58" cy="66.56" r="1"  />
                            </g>
                        </svg>
                    @endif
                    <img src="{{ asset('./storage/Products/Shoes/' . $product[0]->category . '/' . $product[0]->thumbnail_four) }}">
                </div>
                <div class="h-auto w-full p-6 flex border border-solid border-purple-900 rounded relative" x-show="thumbnail6">
                    @if ($product[0]->tag == 'Best Seller')
                        <svg class="w-12 absolute -top-2 left-2 h-20" title="Best Seller" version="1.1" viewBox="0 0 95.05 113.63">
                            <defs id="defs2">
                                <linearGradient id="linearGradient857">
                                <stop id="stop853" offset="0" stop-color="#ff0000" stop-opacity="1"/>
                                <stop id="stop855" offset="1" stop-color="#7f00f5" stop-opacity="1"/>
                                </linearGradient>
                                <linearGradient id="linearGradient859" x1="37.47" x2="62.79" y1="9.1" y2="90.19" gradientUnits="userSpaceOnUse" xlink:href="#linearGradient857"/>
                            </defs>
                            <g id="layer1"  transform="translate(.28 -.13)">
                                <path id="flame" fill="url(#linearGradient859)" fill-opacity="1" stroke-width=".87" d="M76.12 66.56c0 15.63-13.23 28.31-29.54 28.31-16.3 0-29.73-12.68-29.53-28.31.28-21.7 21.5-33.27 22.1-50.09 10.79 2.2 36.97 24.8 36.97 50.09z" opacity="1"/>

                                <circle id="ci1" cx="46.58" cy="66.56" r="1"  />
                                <circle id="ci2" cx="46.58" cy="66.56" r="1"  />
                                <circle id="ci3" cx="46.58" cy="66.56" r="1"  />
                                <circle id="ci4" cx="46.58" cy="66.56" r="1"  />
                            </g>
                        </svg>
                    @endif
                    <img src="{{ asset('./storage/Products/Shoes/' . $product[0]->category . '/' . $product[0]->thumbnail_five) }}">
                </div>
                {{-- Thumbnails --}}
                <div class="w-full mt-4 grid grid-cols-6 gap-2">
                    {{-- @for ($i = 0; $i < count($thumbnails); $i++) --}}
                        <button type="button" class="thumbnail w-full border border-solid border-gray-300 rounded transition ease-in-out duration-200 hover:border-green-500 focus:outline-none" @click="thumbnail1 = true, thumbnail2 = false, thumbnail3 = false, thumbnail4 = false, thumbnail5 = false, thumbnail6 = false">
                            <img src="{{ asset('./storage/Products/Shoes/' . $product[0]->category . '/' . $thumbnails[0]) }}">
                        </button>

                        <button type="button" class="thumbnail w-full border border-solid border-gray-300 rounded transition ease-in-out duration-200 hover:border-green-500 focus:outline-none" @click="thumbnail1 = false, thumbnail2 = true, thumbnail3 = false, thumbnail4 = false, thumbnail5 = false, thumbnail6 = false">
                            <img src="{{ asset('./storage/Products/Shoes/' . $product[0]->category . '/' . $thumbnails[1]) }}">
                        </button>

                        <button type="button" class="thumbnail w-full border border-solid border-gray-300 rounded transition ease-in-out duration-200 hover:border-green-500 focus:outline-none" @click="thumbnail1 = false, thumbnail2 = false, thumbnail3 = true, thumbnail4 = false, thumbnail5 = false, thumbnail6 = false">
                            <img src="{{ asset('./storage/Products/Shoes/' . $product[0]->category . '/' . $thumbnails[2]) }}">
                        </button>

                        <button type="button" class="thumbnail w-full border border-solid border-gray-300 rounded transition ease-in-out duration-200 hover:border-green-500 focus:outline-none" @click="thumbnail1 = false, thumbnail2 = false, thumbnail3 = false, thumbnail4 = true, thumbnail5 = false, thumbnail6 = false">
                            <img src="{{ asset('./storage/Products/Shoes/' . $product[0]->category . '/' . $thumbnails[3]) }}">
                        </button>

                        <button type="button" class="thumbnail w-full border border-solid border-gray-300 rounded transition ease-in-out duration-200 hover:border-green-500 focus:outline-none" @click="thumbnail1 = false, thumbnail2 = false, thumbnail3 = false, thumbnail4 = false, thumbnail5 = true, thumbnail6 = false">
                            <img src="{{ asset('./storage/Products/Shoes/' . $product[0]->category . '/' . $thumbnails[4]) }}">
                        </button>

                        <button type="button" class="thumbnail w-full border border-solid border-gray-300 rounded transition ease-in-out duration-200 hover:border-green-500 focus:outline-none" @click="thumbnail1 = false, thumbnail2 = false, thumbnail3 = false, thumbnail4 = false, thumbnail5 = false, thumbnail6 = true">
                            <img src="{{ asset('./storage/Products/Shoes/' . $product[0]->category . '/' . $thumbnails[5]) }}">
                        </button>
                    {{-- @endfor --}}
                </div>
            </div>

            <div class="w-full lg:w-1/2 mt-4 lg:mt-0 lg:pl-16 flex flex-col">
                <div class="justify-between flex flex-row">
                    <h1 class="gte700 text-gray-900 text-2xl md:text-4xl">
                        {{ $product[0]->title }}
                    </h1>

                    @if ($inWishlist == true)
                        <form id="delete-form" action="{{ route('shushop.landing') }}/dashboard/wishlist/{{$product[0]->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="relative transition ease-in-out duration-200 group focus:outline-none">
                                <i class="fas fa-heart text-green-500 transition ease-in-out duration-200 hover:text-green-600"></i>
                                
                                <span class="opacity-0 w-24 py-1 rounded bg-gray-900 absolute gte300 text-white -bottom-2 left-1/2 transform translate-y-full -translate-x-1/2 transition ease-in-out duration-200 group-hover:opacity-100">
                                    <i class="fas fa-caret-up text-gray-900 absolute top-0 left-1/2 transform -translate-y-2/3 -translate-x-1/2"></i>
                                    Remove
                                </span>
                            </button>
                        </form>
                    @else
                        <form id="wishlist-form" action="{{ route('shushop.landing') }}/dashboard/wishlist/{{ $product[0]->id }}" method="POST">
                            @csrf
                            @method('POST')
                            <button type="submit" class="relative transition ease-in-out duration-200 group focus:outline-none">
                                <i class="far fa-heart text-gray-500 transition ease-in-out duration-200 hover:text-gray-900"></i>
                                
                                <span class="opacity-0 w-16 py-1 rounded bg-gray-900 absolute gte300 text-white -bottom-2 left-1/2 transform translate-y-full -translate-x-1/2 transition ease-in-out duration-200 group-hover:opacity-100">
                                    <i class="fas fa-caret-up text-gray-900 absolute top-0 left-1/2 transform -translate-y-2/3 -translate-x-1/2"></i>
                                    Save
                                </span>
                            </button>
                        </form>
                    @endif
                </div>
                <a href="{{ route('shushop.category', $product[0]->category) }}" class="mt-2 tt600 text-xs text-purple-900 tracking-wider uppercase">
                    {{ $product[0]->category }}
                </a>

                <div class="mt-5 md:mt-10 w-full flex flex-col md:flex-row">
                    <h3 class="tt700 text-2xl md:text-4xl text-purple-900">
                        Ksh. {{ number_format($product[0]->primary_price) }}
                    </h3>

                    @if ($product[0]->secondary_price > 0)
                        {{-- Previous Price --}}
                        <div class="mt-1 md:-mt-2.5 md:mx-8 flex flex-row md:flex-col">
                            <span class="mt-1 md:mt-0 mr-2 md:mr-0 tt500 text-sm md:text-xs text-gray-500">Was</span>
                            <p class="mt-auto md:mt-0 md:-mt-0.5 tt500 text-lg md:text-xl text-gray-500 line-through">Ksh. {{ number_format($product[0]->secondary_price) }}</p>
                        </div>

                        {{-- Savings Prompt --}}
                        <div class="md:-mt-4 flex flex-col">
                            <span class="tt500 text-lg text-green-500">Save {{ round(100 - (($product[0]->primary_price * 100) / $product[0]->secondary_price)) }}%</span>
                            <p class="-mt-0.5 tt400 text-sm text-gray-500">Offer valid till {{ Carbon\Carbon::parse($product[0]->offer_expiry_date)->format('d F') }}</p>
                        </div>
                    @endif
                </div>

                <div class="mt-5 md:mt-10 w-full flex flex-col">
                    <h5 class="mb-2 tt600 text-xs text-gray-600 tracking-wider uppercase">
                        Variants
                    </h5>
                    <div class="grid grid-cols-6 gap-4">
                        <button type="button" class="w-full border border-solid border-gray-300 rounded transition ease-in-out duration-200 hover:border-green-500 focus:outline-none focus:border-green-500">
                            <img src="{{ asset('./storage/Products/Shoes/' . $product[0]->category . '/' . $product[0]->thumbnail_main) }}">
                        </button>
                    </div>
                </div>

                <p class="gte400 text-gray-500 mt-5 md:mt-10">
                    {{ $product[0]->description }}
                </p>
T
                <form action="{{ route('cart.store') }}" method="post" class="mt-16 w-full flex flex-row">
                    @csrf
                    
                    <input type="hidden" name="id" value="{{ $product[0]->id }}">
                    <input type="hidden" name="title" value="{{ $product[0]->title }}">
                    <input type="hidden" name="price" value="{{ $product[0]->primary_price }}">

                    <label for="quantity" class="mr-4 md:mr-auto relative">
                        <span class="absolute -top-0.5 left-0 transform -translate-y-full gte400 text-sm md:text-xs text-gray-500">Qnty</span>
                        <input type="number" id="quantity" class="flex-shrink-0 w-20 max-w-auto appearance-none block bg-white rounded border border-solid border-gray-400 md:border-gray-300 p-4 gte300 text-sm text-gray-900 leading-tight focus:outline-none" name="qnty" value="1" min="1">
                    </label>

                    <label for="size" class="mr-4 md:mr-auto relative">
                        <span class="absolute -top-0.5 left-0 transform -translate-y-full gte400 text-sm md:text-xs text-gray-500">Size</span>
                        <select class="flex-shrink-0 w-20 block appearance-none border border-solid border-gray-400 md:border-gray-300 p-4 gte300 text-sm text-gray-900 leading-tight focus:outline-none focus:shadow-outline" name="size">
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                        </select>
                    </label>

                    <button type="submit" class="appearance-none block bg-purple-900 rounded py-4 w-full md:w-auto md:px-20 gte400 text-sm text-white focus:outline-none">
                        Add to Cart
                    </button>
                </form>
            </div>
        </section>

        {{-- Recommendations --}}
        <section class="w-full px-8 md:px-16 mb-16 flex flex-col">
            <h2 class="tt700 text-purple-900 text-4xl relative">
                Recommendations
                <div class="h-1 w-8 bg-gradient-to-r from-green-400 to-blue-500 absolute bottom-0 left-0 transform translate-y-1"></div>
            </h2>

            <div class="w-full mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 grid-rows-4 md:grid-rows-2 lg:grid-rows-1 gap-8 lg:gap-12">
                @foreach ($recommendations as $shoe)
                    <x-shoe :shoe="$shoe" />
                @endforeach
            </div>
        </section>
    </main>
@endsection