<div class="item w-full p-2 border border-solid border-gray-100 relative flex flex-col transition ease-in-out duration-200 hover:border-purple-900 hover:shadow-2xl">
    <div class="h-52 w-full relative">
        @if ($shoe->tag == 'Best Seller')
            <div class="w-full absolute top-0 left-0 flex flex-row justify-between z-40">
                <svg class="w-8" title="Best Seller" version="1.1" viewBox="0 0 95.05 113.63">
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

                <button class="button" class="w-auto my-auto p-0 flex focus:outline-none" onclick="event.preventDefault();document.getElementById('delete-form').submit();">
                    <i data-feather="trash-2" class="ml-auto  text-gray-400 transition ease-in-out duration-200 hover:text-gray-900"></i>
                </button>
                <form id="delete-form" action="{{ route('shushop.landing') }}/dashboard/wishlist/{{$shoe->id}}" method="POST" class="hidden">
                    @csrf
                    @method('DELETE')
                </form>
            </div>
        @else
        <div class="w-full absolute top-0 left-0 flex flex-row justify-between z-40">
            <svg class="w-8 opacity-0 pointer-events-none" title="Best Seller" version="1.1" viewBox="0 0 95.05 113.63">
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

            <button class="button" class="w-auto m-0 p-0 flex focus:outline-none" onclick="event.preventDefault();document.getElementById('delete-form').submit();">
                <i data-feather="trash-2" class="ml-auto text-gray-400 transition ease-in-out duration-200 hover:text-gray-900"></i>
            </button>
            <form id="delete-form" action="wishlist/{{$shoe->id}}" method="POST" class="hidden">
                @csrf
                @method('DELETE')
            </form>
        </div>
        @endif

        <a href="{{ route('shushop.product', [$shoe->category, $shoe->id]) }}" class="h-full w-full m-0">
            <img loading="lazy" src="{{ asset('./storage/Products/Shoes/' . $shoe->category . '/' . $shoe->thumbnail_main) }}" class="h-full w-full m-0 object-cover z-0">
        </a>
    </div>
    <a href="{{ route('shushop.product', [$shoe->category, $shoe->id]) }}" class="mt-4 gte500 text-gray-900 leading-5">
        {{ $shoe->title }}
    </a>
    <a href="{{ route('shushop.category', $shoe->category) }}" class="my-2 mr-auto gte400 tracking-wider uppercase text-xs text-gray-500">
        {{ $shoe->category }}
    </a>
    <div class="w-full mb-2 flex flex-row flex-wrap">
        <button type="button" class="h-8 w-8 mr-2 bg-gray-300"></button>
        <button type="button" class="h-8 w-8 mr-2 bg-gray-300"></button>
        <button type="button" class="h-8 w-8 mr-2 bg-gray-300"></button>
        <span class="my-2 gte500 text-md text-gray-500">+2</span>
    </div>
    <div class="flex flex-row">
        <p class="gte700 text-md text-gray-600 cursor-default">
            Ksh. {{ number_format($shoe->primary_price) }}
        </p>

        @if ($shoe->secondary_price != 0)
            <span class="mt-0.5 ml-3 line-through gte700 text-sm text-gray-500  cursor-default">
                Ksh. {{ number_format($shoe->secondary_price) }}
            </span>
        @endif
    </div>
</div>