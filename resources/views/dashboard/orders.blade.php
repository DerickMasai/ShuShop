@extends('dashboard.app')

@section('content')
    <section class="w-full m-0 p-0 flex flex-row" x-data="{ asideNav : false }">
        @include('dashboard.aside')

        <main class="w-full md:w-4/5 absolute top-0 right-0 flex flex-col overflow-y-scroll">
            {{-- Nav --}}
            @include('dashboard.nav')

            <section class="h-auto w-full mt-20 p-8 flex flex-col">
                <h1 class="gte700 text-3xl text-gray-900">
                    My Orders
                </h1>
                <span class="mt-1 mb-6 md:mb-0 tt400 text-gray-700">
                    A collection of shoes you already successfully ordered from us.
                </span>

                @if ($orders->count() == 0)
                    <span class="w-full px-2 pt-2 pb-1 border border-solid border-purple-400 rounded-sm shadow-md mt-8 tt400 text-gray-700">
                        {{ __('(*^▽^*) You have no items saved to your Wishlist at this time.') }}
                    </span>
                @else
                    <table class="mt-12 table-auto hidden md:table">
                        <thead>
                            <tr class="gte300 text-gray-600 text-left">
                                <th>
                                    <i data-feather="image" class="h-5"></i>
                                </th>
                                <th>
                                    Title
                                </th>
                                <th>
                                    Qnty
                                </th>
                                <th>
                                    Price
                                </th>
                                <th>
                                    Status
                                </th>
                            </tr>
                        </thead>
                        <tbody class="tt400 text-gray-700 text-left">
                            @foreach ($orders as $order)
                                <tr>
                                    <td class="pt-6">
                                        <a href="{{ route('shushop.product', [$order->item_category, $order->item_id]) }}" class="w-16 mr-0 bg-red-200 inline-block">
                                            <img src="{{ asset('./storage/Products/Shoes/' . $order->item_category . '/' . $order->item_thumbnail) }}" alt="" class="w-full border border-dashed border-gray-400">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('shushop.product', [$order->item_category, $order->item_id]) }}">
                                            {{ $order->item_title }}
                                        </a>
                                    </td>
                                    <td>
                                        {{ $order->item_quantity }}
                                    </td>
                                    <td>
                                        {{ $order->item_price }}
                                    </td>
                                    <td>
                                        {{ $order->item_status }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @foreach ($orders as $order)
                        <div class="mt-6 grid md:hidden grid-cols-3 grid-rows-2">
                            <a href="{{ route('shushop.product', [$order->item_category, $order->item_id]) }}" class="w-3/4 col-start-1 col-end-2 row-start-1 row-end-3 inline-block">
                                <img src="{{ asset('./storage/Products/Shoes/' . $order->item_category . '/' . $order->item_thumbnail) }}" alt="" class="w-full border border-dashed border-gray-400">
                            </a>

                            <a href="{{ route('shushop.product', [$order->item_category, $order->item_id]) }}" class="mt-1 tt600 text-gray-700 text-left col-start-2 col-end-4 row-start-1 row-end-2 overflow-x-none">
                                {{ $order->item_title }}
                            </a>

                            <div class="mt-auto flex flex-row justify-between col-start-2 col-end-4 row-start-2 row-end-3">
                                <div class="flex flex-col">
                                    <i data-feather="hash" class="text-green-400 h-4"></i>
                                    <span class="tt300 text-gray-900 mt-1 pl-2">{{ $order->item_quantity }}</span>
                                </div>

                                <div class="flex flex-col">
                                    <i data-feather="dollar-sign" class="text-green-400 h-4 mx-auto"></i>
                                    <span class="tt300 text-gray-900 mt-1 mx-auto">{{ $order->item_price }}</span>
                                </div>

                                <div class="flex flex-col">
                                    <i data-feather="truck" class="text-green-400 h-4 mx-auto"></i>
                                    <span class="tt300 text-gray-900 mt-1 mx-auto">{{ $order->item_status }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </section>
        </main>
    </section>
@endsection