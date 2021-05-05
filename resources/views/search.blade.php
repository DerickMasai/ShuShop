@extends('layouts.app')

@section('content')
    <header class="min-h-96 w-full bg-purple-900 flex flex-col">
        {{-- Nav --}}
        @include('layouts.nav')

        {{-- Container --}}
        <section class="py-16 px-8 md:px-16 flex flex-row">
            <div class="w-1/2">
                <h1 class="mt-4 gte700 text-white text-4xl">
                    {{-- {{ $categoryDefs[0]->name }} --}}
                </h1>
                <p class="mt-6 gte200 text-md text-purple-100">
                    {{-- {{ $categoryDefs[0]->description }} --}}
                </p>
            </div>

            <div class="w-1/2 h-full flex relative">
                {{-- <img src="{{ asset('./storage/img/' . $categoryDefs[0]->thumbnail) }}" alt="" class="-mt-8 h-56 object-fit mx-auto transform scale-150"> --}}
            </div>
        </section>
    </header>

    <section class="w-full px-8 md:px-16 mt-20 grid grid-cols-3 gap-8">
        <div class="h-40 w-full col-start-1 bg-purple-900 rounded"></div>
        <div class="h-40 w-full col-start-2 bg-purple-900 rounded"></div>
        <div class="h-40 w-full col-start-3 bg-purple-900 rounded"></div>
    </section>

    {{-- Products --}}
    <div class="w-full px-8 md:px-16 my-20 grid grid-cols-4 gap-16">
        {{-- @foreach ($categoryItems as $shoe)
            <x-shoe :shoe="$shoe" />
        @endforeach --}}
    </div>
@endsection