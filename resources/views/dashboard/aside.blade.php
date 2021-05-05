<aside class="h-screen w-1/5 m-0 border-r border-solid border-gray-300 fixed top-0 left-0 hidden md:flex flex-col">
    <nav class="m-0 w-full h-20 px-8 border-b border-solid border-gray-300 flex z-50">
        <a href="{{ route('shushop.landing') }}" class="my-auto tt600 text-2xl flex flex-row">
            <i class="fas fa-shoe-prints text-md text-purple-900" style="transform: scale(0.6);margin-top: -2px"></i> <span class="text-gray-900">Shu</span><span class="tt400 text-gray-900">Shop</span>
        </a>
    </nav>

    <ul class="mt-8 px-8 gte300 text-sm text-gray-600 list-none grid grid-cols-1 gap-y-8">
        <span class="-mb-2 gte700 font-bold text-purple-900 uppercase text-xs">Account</span>

        <li>
            <a href="{{ route('shushop.wishlist.index') }}" class="flex flex-row transition ease-in-out duration-200 group hover:text-gray-900">
                <i data-feather="heart" class="h-4 mr-1 transition ease-in-out duration-200  @if (Route::current()->getName() == 'shushop.wishlist.index') text-green-500 @else group-hover:text-purple-900 @endif"></i>
                <span class="@if (Route::current()->getName() == 'shushop.wishlist.index') underline @endif">
                    Wishlist
                </span>
            </a>
        </li>

        <li>
            <a href="{{ route('shushop.orders.index') }}" class="flex flex-row transition ease-in-out duration-200 group hover:text-gray-900">
                <i data-feather="credit-card" class="h-4 mr-1 transition ease-in-out duration-200  @if (Route::current()->getName() == 'shushop.orders.index') text-green-500 @else group-hover:text-purple-900 @endif"></i>
                <span class="@if (Route::current()->getName() == 'shushop.orders.index') underline @endif">
                    My Orders
                </span>
            </a>
        </li>

        <li>
            <a href="{{ route('shushop.invite.index') }}" class="flex flex-row transition ease-in-out duration-200 group hover:text-gray-900">
                <i data-feather="code" class="h-4 mr-1 transition ease-in-out duration-200 @if (Route::current()->getName() == 'shushop.invite.index') text-green-500 @else group-hover:text-purple-900 @endif"></i>
                <span class="@if (Route::current()->getName() == 'shushop.invite.index') underline @endif">
                    Invite Code
                </span>
            </a>
        </li>

        <li>
            <a href="{{ route('shushop.coupons.index') }}" class="flex flex-row transition ease-in-out duration-200 group hover:text-gray-900">
                <i data-feather="dollar-sign" class="h-4 mr-1 transition ease-in-out duration-200 @if (Route::current()->getName() == 'shushop.coupons.index') text-green-500 @else group-hover:text-purple-900 @endif"></i>
                <span class="@if (Route::current()->getName() == 'shushop.coupons.index') underline @endif">
                    Coupons
                </span>
            </a>
        </li>

        <span class="-mb-2 gte700 font-bold text-purple-900 uppercase text-xs">Extras</span>

        <li>
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
</aside>