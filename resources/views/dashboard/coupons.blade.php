@extends('dashboard.app')

@section('content')
    <section class="w-full m-0 p-0 flex flex-row" x-data="{ asideNav : false }">
        @include('dashboard.aside')

        <main class="w-full md:w-4/5 absolute top-0 right-0 flex flex-col overflow-y-scroll">
            {{-- Nav --}}
            @include('dashboard.nav')

            <section class="h-auto w-full mt-20 p-8 flex flex-col">
                <h1 class="gte700 text-3xl text-gray-900">
                    {{ __('Coupons') }}
                </h1>
                <span class="tt400 text-gray-700">
                    Here are some of the active coupons you can use to save when shopping with us  
                </span>

                @if ($coupons->count() == 0)
                    <span class="w-full px-2 pt-2 pb-1 border border-solid border-purple-400 rounded-sm shadow-md mt-8 tt400 text-gray-700 text-center md:text-left">
                        {{ __('(*^▽^*) There aren\'t any active coupons at this time.') }}
                    </span>
                @else
                    <table class="mt-12 table-fixed hidden md:table">
                        <thead class="border-b border-solid border-gray-300">
                            <tr class="gte300 text-gray-600 text-left">
                                <th class="pb-8">
                                    Code
                                </th>
                                <th class="pb-8">
                                    Category
                                </th>
                                <th class="pb-8">
                                    Redeemed
                                </th>
                                <th class="pb-8">
                                    Expiry
                                </th>
                            </tr>
                        </thead>
                        <tbody class="tt400 text-gray-700 text-left">
                            @foreach ($coupons as $coupon)
                                <tr>
                                    <td class="py-8 uppercase">
                                        {{ $coupon->code }}
                                    </td>
                                    <td class="py-8">
                                        {{ $coupon->category_applicable }}
                                    </td>
                                    <td class="py-8">
                                        {{ $coupon->number_redeemed . '/' . $coupon->number_limit }}
                                    </td>
                                    <td class="py-8">
                                        @if ($coupon->expiry_date == null)
                                            {{ __('N/A') }}
                                        @else
                                            {{ Carbon\Carbon::parse($coupon->expiry_date)->format('d F') }}
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @foreach ($coupons as $coupon)
                        <div class="mt-6 border border-solid border-gray-400 shadow-md rounded-sm p-2 flex md:hidden flex-col">

                            <h2 class="tt600 text-gray-700 text-left overflow-x-none">
                                {{ $coupon->code }}
                            </h2>

                            <span class="tt400 text-gray-700 mt-1 mb-2">{{ $coupon->category_applicable }}</span>

                            <div class="mt-auto flex flex-row">
                                <div class="flex flex-col">
                                    <i data-feather="hash" class="text-gray-400 h-4"></i>
                                    <span class="tt400 text-gray-900 mt-1 pl-2">{{ $coupon->number_redeemed . '/' . $coupon->number_limit }}</span>
                                </div>

                                <div class="ml-6 flex flex-col">
                                    <i data-feather="calendar" class="text-gray-400 h-4"></i>
                                    <span class="tt400 text-gray-900 mt-1 mx-auto">{{ Carbon\Carbon::parse($coupon->expiry_date)->format('d F') }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </section>
        </main>
    </section>
@endsection