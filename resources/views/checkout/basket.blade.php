@extends('layouts.app')

@section('content')
    {{-- Nav --}}
    <nav class="w-full py-6 px-32 hidden lg:flex flex-row justify-between items-center flex-shrink-0">
        <a href="#" class="tt600 text-gray-900 text-3xl">
            <i class="fas fa-shoe-prints text-md transform scale-50 -mx-2"></i> Shu<span class="tt400">Shop</span>
        </a>
    </nav>

    <section class="w-full px-32 flex flex-col">
        <h1 class="gte700 text-4xl text-gray-900">
            My Cart
        </h1>

        {{-- Breadcrumbs --}}
        <ul class="my-8 tt500 text-gray-600 flex flex-row items-center justify-start">
            <li class="flex flex-row pb-3 border-b-2 border-solid border-gray-900 text-gray-900">
                <span>
                    Basket
                </span>
                <i class="ml-8 transform scale-50" data-feather="chevron-right"></i>
            </li>
            <li class="flex flex-row pb-3 ml-8">
                <span>
                    Sign In
                </span>
                <i class="ml-8 transform scale-50" data-feather="chevron-right"></i>
            </li>
            <li class="flex flex-row pb-3 ml-8">
                <span>
                    Billing Information
                </span>
                <i class="ml-8 transform scale-50" data-feather="chevron-right"></i>
            </li>
            <li class="flex flex-row pb-3 ml-8">
                <span>
                    Payment
                </span>
                <i class="ml-8 transform scale-50" data-feather="chevron-right"></i>
            </li>
            <li class="flex flex-row pb-3 ml-8">
                <span>
                    Complete
                </span>
                <i class="ml-8 transform scale-50" data-feather="chevron-right"></i>
            </li>
        </ul>

        {{-- Items In Cart --}}
        <div class="w-full px-8 mb-16 border border-solid border-gray-300 rounded-sm flex flex-col">
            {{-- Item --}}
            @foreach ($itemsInCart as $item)
            <div class="item p-4 mt-8 border border-solid border-gray-300 rounded-sm flex flex-row">
                <a href="#" class="h-20 p-2 border border-solid border-gray-300 overflow-hidden">
                    <img src="{{ asset('./storage/Products/Shoes/' . $item->category . '/' . $item->thumbnail_main) }}" class="max-h-full transform scale-110">
                </a>

                <div class="ml-4 flex flex-col">
                    <a href="#" class="tt600 text-gray-900 text-xl">
                        {{ $item->title }}
                    </a>

                    <div class="mt-auto flex flex-row">
                        <a href="#" class="my-auto tt600 text-xs text-gray-500 tracking-wider uppercase">
                            {{ $item->category }}
                        </a>
    
                        <input type="number" class="ml-4 w-16 max-w-auto max-w-auto appearance-none block bg-white rounded border border-solid border-gray-300 p-2  gte400 text-sm text-gray-900 leading-tight focus:outline-none" value="1" min="1">
                    </div>
                </div>

                <div class="ml-auto flex flex-col">
                    <h3 class="ml-auto tt700 text-lg text-purple-900">
                        Ksh. {{ number_format($item->primary_price) }}
                    </h3>

                    <p class="ml-auto tt400 text-md text-gray-500">
                        <span class="tt500 text-sm text-green-500">
                            @if ($item->secondary_price > 0)
                                {{ round((100 - (($item->primary_price * 100) / $item->secondary_price))) . '% OFF till ' . Carbon\Carbon::parse($item->offer_expiry_date)->format('d F') }}
                            @endif
                        </span>
                    </p>

                    <form action="" method="POST" class="mt-auto ml-auto p-0">
                        @csrf
                        @method('DELETE')
                        
                        <button class=" text-gray-500 transition ease-in-out duration-200 hover:text-gray-900 focus:outline-none focus:text-gray-900" title="Remove from My Cart">
                            <i data-feather="trash-2" class="h-5"></i>
                        </button>
                    </form>
                </div>
            </div>
            @endforeach

            {{-- Subtotal --}}
            <div class="subtotal my-8 rounded-sm flex flex-col">
                <button class="ml-auto mb-4 p-0 text-gray-900 underline flex flex-row" title="Remove from My Cart">
                    <i data-feather="trash-2" class="h-4 mt-0.5"></i>
                    <span class="tt500">Empty Cart</span>
                </button>

                <div class="pt-8 w-full border-t border-solid border-gray-300 flex flex-row">
                    <h2 class="gte700 text-3xl text-gray-900 flex flex-row">
                        Subtotal <img src="{{ asset('./storage/img/kenya-flag.jpg') }}" class="h-4 my-auto ml-4 rounded-sm" title="Kenyan Shillings">
                    </h2>

                    <h3 class="ml-auto mt-auto tt600 text-3xl text-purple-900">
                        Ksh. {{ number_format($subtotal) }}
                    </h3>
                </div>

                <span class="w-full pb-8 mt-8 border-b border-solid border-gray-300 text-center gte300 text-sm text-gray-600">
                    Subtotal does not include applicable taxes
                </span>

                <a href="{{ route('shushop.landing') }}/checkout/billing" class="text-center w-full mt-8 pt-5 pb-4 bg-gray-900 tt500 text-lg text-white transition ease-in-out duration-200 hover:bg-gray-800 focus:bg-gray-800 focus:outline-none">
                    Checkout
                </a>
            </div>
        </div>
    </section>
@endsection