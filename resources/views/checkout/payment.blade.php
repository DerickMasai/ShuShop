@extends('layouts.app')

@section('content')
    {{-- Nav --}}
    @include('checkout.nav')

    <section class="w-full px-8 md:px-16 lg:px-32 flex flex-col">
        <h1 class="gte700 text-4xl text-gray-900">
            Payment
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
            <li class="flex flex-row pb-3 ml-2 md:ml-4 lg:ml-8">
                <span>
                    Billing
                </span>
                <i class="ml-2 md:ml-4 lg:ml-8 transform scale-50" data-feather="chevron-right"></i>
            </li>
            <li class="flex flex-row pb-3 ml-2 md:ml-4 lg:ml-8 border-b-2 border-solid border-purple-900">
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
                <div class="h-1 bg-gray-300 rounded"></div>
                <div class="h-1 bg-purple-900 rounded"></div>
                <div class="h-1 bg-gray-300 rounded"></div>
            </div>
        </div>
    </section>

    <form action="{{ route('shushop.payment.store') }}" method="POST" class="mt-4 lg:mt-0 mb-16 px-8 md:px-16 lg:px-32 grid grid-cols-1 lg:grid-cols-3 gap-6">
        @csrf
        @method('POST')
        <div class="lg:col-start-1 lg:col-end-3 mx-0 lg:border lg:border-solid lg:border-gray-300 lg:p-8 flex flex-col">
            <h2 class="gte700 text-2xl md:text-3xl text-gray-800 mx-0 flex flex-row">Your Invoice - 789 <small class="ml-3 pt-2 pb-1 px-4 rounded tt500 bg-red-400 text-white text-sm my-auto uppercase">Unpaid</small></h2>

            <div class="w-full grid grid-cols-2 gap-6">

                <div class="flex flex-col">

                    <ul class="mt-8 list-none tt400 text-lg text-gray-700 flex flex-col">
                        <li>
                            <span class="gte500 text-gray-900 mt-5 mb-1 text-gray-900">Pay To:</span>
                        </li>
                        <li>
                            <span>
                                ShuShop Limited
                            </span>
                        </li>
                        <li>
                            <span>
                                MPESA Till Number: 123456
                            </span>
                        </li>
                        <li>
                            <span>
                                Paypal: pay@shushop.com
                            </span>
                        </li>
                    </ul>
        
                    <ul class="mt-4 list-none tt400 text-lg text-gray-700 flex flex-col">
                        <li>
                            <span>
                                Bank Name: KCB Bank
                            </span>
                        </li>
                        <li>
                            <span>
                                Account Name: ShuShop Ltd
                            </span>
                        </li>
                        <li>
                            <span>
                                Account Number:1234 567 890 123
                            </span>
                        </li>
                        <li>
                            <span>
                                Branch: CBD
                            </span>
                        </li>
                    </ul>

                </div>

                <div class="flex flex-col">

                    <ul class="mt-8 list-none tt400 text-lg text-gray-700 flex flex-col">
                        <li>
                            <span class="gte500 text-gray-900 mt-5 mb-1 text-gray-900">Invoice To:</span>
                        </li>
                        <li>
                            <span>
                                {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}
                            </span>
                        </li>
                        <li>
                            <span>
                                +254 {{ wordwrap(Auth::user()->phone_number , 3 , ' ' , true ) }}
                            </span>
                        </li>
                        <li>
                            <span>
                                {{ Auth::user()->address }}
                            </span>
                        </li>
                        <li>
                            <span>
                                Kenya.
                            </span>
                        </li>
                    </ul>

                </div>

            </div>

            {{-- Invoice Items --}}
            <div class="w-full flex flex-col">
                <span class="gte500 text-gray-900 text-lg mt-8 mb-1">Invoice Items:</span>
                <div class="w-full grid grid-cols-8 py-3 border-b border-solid border-gray-300">
                    <div class="col-start-1 col-end-2">
                        <h4 class="tt400 text-lg text-gray-500">#</h4>
                    </div>
                    <div class="col-start-2 col-end-8">
                        <h4 class="tt400 text-lg text-gray-500">Description</h4>
                    </div>
                    <div class="col-start-8 col-end-9">
                        <h4 class="tt400 text-lg text-gray-500">Amount</h4>
                    </div>
                </div>

                {{-- Items --}}
                @foreach ($itemsInCart as $item)
                    <div class="mt-3 w-full grid grid-cols-8 py-3">
                        <div class="col-start-1 col-end-2">
                            <h4 class="tt400 text-lg text-gray-500">{{ $i += 1 }}.</h4>
                        </div>
                        <div class="col-start-2 col-end-8">
                            <h4 class="tt400 text-lg text-gray-900">{{ $item->title }}</h4>
                        </div>
                        <div class="col-start-8 col-end-9">
                            <h4 class="tt400 text-lg text-gray-900">Ksh. {{ number_format($item->primary_price) }}</h4>
                        </div>
                    </div>
                @endforeach

                {{-- Total --}}
                <div class="mt-3 w-full border-t border-solid border-gray-300 grid grid-cols-8 py-6">
                    <div class="col-start-1 col-end-2">
                        
                    </div>
                    <div class="col-start-2 col-end-8">
                        <h4 class="text-right mr-10 tt400 text-lg text-gray-900"><strong>Total</strong></h4>
                    </div>
                    <div class="col-start-8 col-end-9">
                        <h4 class="tt400 text-lg text-gray-900">Ksh. {{ number_format($subtotal) }}</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="h-auto mb-16 lg:mb-auto lg:col-start-3 lg:col-end-4 bg-purple-900 p-4 md:p-8 flex flex-col ring-1 ring-green-500 ring-offset-4 ring-offset-white">
            <h2 class="gte700 text-2xl md:text-3xl text-white mx-0">Your Total</h2>

            <span class="gte400 text-lg mt-4 text-white">Payment Method:</span>
            <h4 class="tt400 text-md text-white flex flex-row items-center"><i data-feather="smartphone" class="h-4"></i> <span class="mt-1">MPESA</span></h4>

            <ol class="mb-2 tt400 text-lg text-white flex flex-col" type="1">
                <span class="gte500 underline mt-5 mb-1">Payment Instructions (123456)</span>
                <li>
                    <span>
                        1. Go to M-Pesa menu
                    </span>
                </li>
                <li>
                    <span>
                        2. Click on Lipa na M-Pesa
                    </span>
                </li>
                <li>
                    <span>
                        3. Click on Buy Goods and Services
                    </span>
                </li>
                <li>
                    <span>
                        4. Enter till no <strong>123456</strong>
                    </span>
                </li>
                <li>
                    <span>
                        5. Enter amount <strong>KSH. {{ number_format($subtotal) }}</strong>
                    </span>
                </li>
                <li>
                    <span>
                        6. Wait for the M-Pesa message
                    </span>
                </li>
                <li>
                    <span>
                        7. Click Pay Now.
                    </span>
                </li>
                
            </ol>
            <span class="mb-2 tt400 text-lg text-white">
                Reference Number: 789
            </span>

            <label for="transaction-id">
                <span class="tt500 mt-4 mb-1 text-white">8. Enter your MPESA Transaction ID <small class="text-red-500">*</small></span>
                <input type="text" id="transaction-id" autocomplete="off" class="w-full pt-3 pb-2 px-3 bg-purple-200 tt600 text-gray-900 uppercase ring-2 ring-transparent ring-offset-2 ring-offset-purple-900 transition ease-in-out duration-200 focus:outline-none focus:ring-purple-700 focus:bg-white" name="transaction_id" placeholder="eg. PDR6AKAX76" required>
            </label>

            <button type="submit" class="mt-8 w-full py-3 bg-white text-gray-900 gte500 ring-2 ring-transparent ring-offset-2 ring-offset-purple-900 transition ease-in-out duration-200 hover:bg-purple-200 focus:outline-none focus:ring-purple-700">Pay Now</button>
        </div>
    </form>
@endsection