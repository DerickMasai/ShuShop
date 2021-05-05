@extends('layouts.app')

@section('content')
    {{-- Nav --}}
    @include('checkout.nav')

    <section class="my-16 mx-60 rounded-r-none w-auto m-auto border border-solid border-gray-300 shadow-md p-8 md:p-16 flex flex-col">
        <h1 class="mx-auto mb-12 gte700 text-4xl text-gray-900">
            Thank you<span class="text-purple-900">.</span>
        </h1>
        <p class="mx-auto tt400 text-xl text-center text-gray-700">
            Your order has been successfully confirmed and an invoice has been mailed to you at {{ Auth::user()->email }}. You can expect your delivery on or before <b class="text-purple-900">{{ Carbon\Carbon::now()->addDays(3)->format('d F Y') }}</b>. If you have any inquiries, please feel free to contact our amazing supoort team at <a href="mailto:hello@derickmasai.com" target="_blank" rel="nofollow noreferrer" class="underline">support@shushop.co.ke</a>.
        </p>
        <a href="{{ route('shushop.landing') }}" class="mt-8 mx-auto w-auto tt400 text-white text-opacity-80 text-lg bg-purple-900 shadow-xl px-10 pt-3 pb-2.5 flex flex-row transition duration-200 ease-in-out hover:text-opacity-100">
            <i data-feather="home" class="transform scale-75 mr-2"></i>Home
        </a>
    </section>
@endsection