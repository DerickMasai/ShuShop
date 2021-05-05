@extends('dashboard.app')

@section('content')
    <section class="w-full m-0 p-0 flex flex-row" x-data="{ asideNav : false }">
        @include('dashboard.aside')

        <main class="w-full md:w-4/5 absolute top-0 right-0 flex flex-col overflow-y-scroll">
            {{-- Nav --}}
            @include('dashboard.nav')

            <section class="h-auto w-full mt-20 p-8 flex flex-col">
                <h1 class="gte700 text-3xl text-gray-900">
                    Wishlist
                </h1>
                <span class="tt400 text-gray-700">
                    A collection of shoes you really like and would like to get sometime later.
                </span>

                @if ($wishlist->count() == 0)
                    <span class="w-full px-2 pt-2 pb-1 border border-solid border-purple-400 rounded-sm shadow-md mt-8 tt400 text-gray-700">
                        {{ __('¯\_(ツ)_/¯ You have no items saved to your Wishlist at this time.') }}
                    </span>
                @else
                    <div class="w-full mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 grid-rows-4 md:grid-rows-2 lg:grid-rows-1  gap-8 gap-y-8 lg:gap-16">
                        @foreach ($wishlist as $shoe)
                            <x-wishlist-shoe :shoe="$shoe" />
                        @endforeach
                    </div>
                @endif
            </section>
        </main>
    </section>
@endsection