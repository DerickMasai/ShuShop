@extends('dashboard.app')

@section('content')
    <section class="w-full m-0 p-0 flex flex-row" x-data="{ asideNav : false }">
        @include('dashboard.aside')

        <main class="w-full md:w-4/5 absolute top-0 right-0 flex flex-col overflow-y-scroll">
            {{-- Nav --}}
            @include('dashboard.nav')

            <section class="h-auto w-full mt-20 p-8 flex flex-col">
                <h1 class="gte700 text-3xl text-gray-900">
                    {{ __('Invite Code') }}
                </h1>
                <span class="tt400 text-gray-700">
                    Send your invite code to friends and earn points and prizes*  
                </span>

                <span class="w-full md:px-2 md:pt-2 pb-1 border border-solid md:border-purple-400 rounded-sm md:shadow-md mt-8 tt400 text-green-500 md:text-gray-700" style="word-break: break-all">
                    <span class="hidden md:inline md:mr-1">👉</span>{{ __(route('shushop.landing') . '/register?invite=' . md5(uniqid(Auth::user()->id, true)) . '&id=' . Auth::user()->id ) }}
                </span>
            </section>
        </main>
    </section>
@endsection