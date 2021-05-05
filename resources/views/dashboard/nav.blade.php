<nav class="fixed top-0 right-0 bg-white h-20 w-full md:w-4/5 px-8 border-b border-solid border-gray-300 flex flex-row z-50">
    <a href="{{ route('shushop.landing') }}" class="my-auto mr-auto tt600 text-2xl md:text-xl flex md:hidden flex-row">
        <i class="fas fa-shoe-prints text-md text-purple-900" style="transform: scale(0.6);margin-top: -1px"></i> <span class="text-gray-900">Shu</span><span class="tt400 text-gray-900">Shop</span>
    </a>
    
    <li class="list-none my-auto ml-auto ">
        <button class="tt400 text-gray-600 hidden md:flex flex-row justify-center items-center focus:outline-none">
            <div class="h-5 w-5 border border-solid border-gray-900 rounded-full flex">
                <i data-feather="user" class="h-3.5 m-auto text-gray-900"></i>
            </div>
            <span class="ml-1.5 mt-1">
                {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}
            </span>
        </button>

        {{-- For smaller screens --}}
        <button class="tt400 text-gray-600 flex md:hidden flex-row justify-center items-center focus:outline-none" @click="asideNav = true">
            <div class="h-5 w-5 border border-solid border-gray-900 rounded-full flex">
                <i data-feather="user" class="h-3.5 m-auto text-gray-900"></i>
            </div>
            <i data-feather="menu" class="mb-1 mt-1 transform scale-50 flex"></i>
        </button>
    </li>

    <ul class="h-screen w-4/5 fixed top-0 left-0 px-8 bg-white border border-solid border-purple-300 shadow-xl gte300 text-sm text-gray-600 list-none flex flex-col z-50" x-show.transition.origin.top.right="asideNav" @click.away="asideNav = false">

        <a href="{{ route('shushop.landing') }}" class="mt-8 mr-auto tt600 text-xl flex md:hidden flex-row">
            <i class="fas fa-shoe-prints text-md text-purple-900" style="transform: scale(0.6);margin-top: -1px"></i> <span class="text-gray-900">Shu</span><span class="tt400 text-gray-900">Shop</span>
        </a>

        <button type="button" class="absolute top-11 right-8 grid grid-rows-2 focus:outline-none" @click="asideNav = false">
            <span class="w-5 bg-gray-700 rounded transform rotate-45" style="height: 1px;"></span>
            <span class="w-5 bg-gray-700 rounded transform -rotate-45" style="height: 1px;"></span>
        </button>

        <span class="mt-8 mb-6 gte700 font-bold text-purple-900 uppercase text-xs">Account</span>

        <li class="mb-8">
            <a href="{{ route('shushop.wishlist.index') }}" class="flex flex-row transition ease-in-out duration-200 group hover:text-gray-900">
                <i data-feather="heart" class="h-4 mr-1 transition ease-in-out duration-200  @if (Route::current()->getName() == 'shushop.wishlist.index') text-green-500 @else group-hover:text-purple-900 @endif"></i>
                <span class="@if (Route::current()->getName() == 'shushop.wishlist.index') underline @endif">
                    Wishlist
                </span>
            </a>
        </li>

        <li class="mb-8">
            <a href="{{ route('shushop.orders.index') }}" class="flex flex-row transition ease-in-out duration-200 group hover:text-gray-900">
                <i data-feather="credit-card" class="h-4 mr-1 transition ease-in-out duration-200  @if (Route::current()->getName() == 'shushop.orders.index') text-green-500 @else group-hover:text-purple-900 @endif"></i>
                <span class="@if (Route::current()->getName() == 'shushop.orders.index') underline @endif">
                    My Orders
                </span>
            </a>
        </li>

        <li class="mb-8">
            <a href="{{ route('shushop.invite.index') }}" class="flex flex-row transition ease-in-out duration-200 group hover:text-gray-900">
                <i data-feather="code" class="h-4 mr-1 transition ease-in-out duration-200 @if (Route::current()->getName() == 'shushop.invite.index') text-green-500 @else group-hover:text-purple-900 @endif"></i>
                <span class="@if (Route::current()->getName() == 'shushop.invite.index') underline @endif">
                    Invite Code
                </span>
            </a>
        </li>

        <li class="mb-8">
            <a href="{{ route('shushop.coupons.index') }}" class="flex flex-row transition ease-in-out duration-200 group hover:text-gray-900">
                <i data-feather="dollar-sign" class="h-4 mr-1 transition ease-in-out duration-200 @if (Route::current()->getName() == 'shushop.coupons.index') text-green-500 @else group-hover:text-purple-900 @endif"></i>
                <span class="@if (Route::current()->getName() == 'shushop.coupons.index') underline @endif">
                    Coupons
                </span>
            </a>
        </li>

        <span class="mt-2 mb-6 gte700 font-bold text-purple-900 uppercase text-xs">Extras</span>

        <li class="mb-8">
            <a href="{{ route('shushop.settings.index') }}" class="flex flex-row transition ease-in-out duration-200 group">
                <i data-feather="settings" class="h-4 mr-1 transition ease-in-out duration-200 @if (Route::current()->getName() == 'shushop.settings.index') text-green-500 @else group-hover:text-purple-900 @endif"></i>
                <span class="@if (Route::current()->getName() == 'shushop.settings.index') underline @endif">
                    Settings
                </span>
            </a>
        </li>

        <li>
            <a href="{{ route('logout') }}" class="flex flex-row transition ease-in-out duration-200 group hover:text-gray-900" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i data-feather="lock" class="h-4 mr-1 transition ease-in-out duration-200 group-hover:text-green-500"></i>
                <span class="">
                    {{ __('Log Out') }}
                </span>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</nav>