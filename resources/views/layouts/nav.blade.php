<nav class="w-full py-6 px-8 md:px-16 @if (Route::current()->getName() == 'shushop.landing') bg-purple-800 shadow-md @else bg-purple-900 @endif flex flex-row justify-between items-center flex-shrink-0" x-data="{responsiveNav : false, accountDropdown : false}">
    <a href="{{ route('shushop.landing') }}" class="tt600 text-white text-xl"><i class="fas fa-shoe-prints text-xs"></i> Shu<span class="tt400">Shop</span></a>

    <form action="search/" method="post" class="ml-auto lg:ml-0 hidden lg:flex flex-row">
        @csrf
        @method('POST')
        <select class="block appearance-none bg-gray-900 md:px-3 lg:pl-6 lg:pr-4 py-2 rounded rounded-r-none shadow gte200 text-sm text-white leading-tight focus:outline-none focus:shadow-outline" name="category">
            <option>All Products <i data-feather="chevron-down" class="text-white"></i></option>
            <option>Basketball</option>
            <option>Training & Gym</option>
            <option>Football</option>
            <option>Golf</option>
        </select>
        <input class="md:w-60 lg:w-96 appearance-none block bg-purple-200 rounded rounded-l-none py-3 px-4 gte300 text-sm text-gray-900 leading-tight transition ease-in-out duration-200 focus:bg-white focus:shadow-md focus:outline-none" type="text" placeholder="Find a product" name="search">
    </form>

    <ul class="justify-center items-center list-none hidden lg:flex flex-row">
        {{-- Authentication Links --}}
        @guest
            @if (Route::has('login'))
                <li>
                    <a href="{{ route('login') }}" class="tt400 text-white flex flex-row justify-center items-center focus:outline-none">Log In</a>
                </li>
            @endif

        @else

        <li>
            <button class="tt400 text-white flex flex-row justify-center items-center focus:outline-none" @click="accountDropdown = true">{{ Auth::user()->first_name }} <i data-feather="chevron-down" class="mb-1 transform scale-50"></i></button>
        </li>

        @endguest
        <span class="w-px h-8 bg-purple-500 mx-10"></span>
        <li class="mr-10">
            <button class="flex flex-row focus:outline-none">
                <img src="{{ asset('./storage/img/us-flag.png') }}" alt="English" class="h-8 w-8 rounded-full object-cover border-2 border-solid border-white">
                <i data-feather="chevron-down" class="text-white my-auto transform scale-50"></i>
            </button>
        </li>
        <li>
            <a href="{{ route('shushop.basket') }}" class="tt400 text-md text-white flex flex-row justify-center items-center focus:outline-none">
                <i data-feather="shopping-cart" class="transform scale-75"></i>
                <span class="ml-1 mt-1">Cart</span>
                <div class="h-8 w-8 relative flex-shrink-0 flex ml-2 bg-green-500 text-white rounded-full">
                    <span class="tt600 text-gray-900 m-auto pt-1">{{ Cart::count() }}</span>
                </div>
            </a>
        </li>
    </ul>

    {{-- Account Dropdown - Large Screens --}}
    <section class="w-auto h-screen py-8 px-16 fixed top-0 right-0 bg-gray-900 flex flex-col z-50" x-show.transition.in="accountDropdown" @click.away="accountDropdown = false">
        <button type="button" class="absolute top-8 right-8 grid grid-rows-2 focus:outline-none" @click="accountDropdown = false">
            <span class="w-6 h-0.5 bg-gray-700 rounded transform rotate-45"></span>
            <span class="w-6 h-0.5 bg-gray-700 rounded transform -rotate-45"></span>
        </button>

        <ul class="my-auto gte300 text-gray-400 list-none grid grid-cols-1 gap-y-10">
            <span class="-mb-6 gte700 font-bold text-green-500 uppercase text-xs">Account</span>

            <li>
                <a href="{{ route('shushop.wishlist.index') }}" class="flex flex-row transition ease-in-out duration-200 hover:text-white">
                    <i data-feather="heart" class="h-4 mt-1 mr-1"></i>
                    <span class="">
                        Wishlist
                    </span>
                </a>
            </li>

            <li>
                <a href="{{ route('shushop.orders.index') }}" class="flex flex-row transition ease-in-out duration-200 hover:text-white">
                    <i data-feather="credit-card" class="h-4 mt-1 mr-1"></i>
                    <span class="">
                        My Orders
                    </span>
                </a>
            </li>

            <li>
                <a href="{{ route('shushop.invite.index') }}" class="flex flex-row transition ease-in-out duration-200 hover:text-white">
                    <i data-feather="code" class="h-4 mt-1 mr-1"></i>
                    <span class="">
                        Invite Code
                    </span>
                </a>
            </li>

            <li>
                <a href="{{ route('shushop.coupons.index') }}" class="flex flex-row transition ease-in-out duration-200 hover:text-white">
                    <i data-feather="dollar-sign" class="h-4 mt-1 mr-1"></i>
                    <span class="">
                        Coupons
                    </span>
                </a>
            </li>

            <span class="-mb-6 gte700 font-bold text-green-500 uppercase text-xs">Extras</span>

            <li>
                <a href="{{ route('shushop.settings.index') }}" class="flex flex-row transition ease-in-out duration-200 hover:text-white">
                    <i data-feather="settings" class="h-4 mt-1 mr-1"></i>
                    <span class="">
                        Settings
                    </span>
                </a>
            </li>

            <li>
                <a href="{{ route('logout') }}" class="flex flex-row transition ease-in-out duration-200 hover:text-white" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i data-feather="lock" class="h-4 mt-1 mr-1"></i>
                    <span class="">
                        {{ __('Log Out') }}
                    </span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </section>

    {{-- Responsive Cart Button --}}
    <button type="button" class="h-6 w-6 flex lg:hidden ml-auto mr-12 relative focus:outline-none">
        <i data-feather="shopping-cart" class="text-white"></i>
        <span class="absolute top-0 right-0 transform translate-x-1/2 -translate-y-1/2 bg-gray-900 border-2 border-solid border-purple-800 shadow-md text-white gte300 py-0.5 px-2 rounded-full">0</span>
    </button>

    {{-- Responsive Menu button --}}
    <button type="button" class="mt-2 p-0 transform -translate-y-1 grid lg:hidden grid-rows-2 gap-y-2 focus:outline-none" @click="responsiveNav = true">
        <span class="w-8 h-0.5 bg-white rounded"></span>
        <span class="ml-auto w-6 h-0.5 bg-white rounded"></span>
    </button>

    {{-- Responsive Menu --}}
    <section class="w-full h-screen overflow-y-scroll fixed lg:hidden top-0 left-0 z-50 bg-black bg-opacity-40" x-show.transition.origin.top.right="responsiveNav">
        <div class="h-full w-11/12 md:w-3/4 p-8 flex flex-col bg-white" @click.away="responsiveNav = false">
            <div class="w-full md:justify-between flex flex-row">
                <a href="#" class="tt600 text-purple-900 text-4xl">
                    <i class="fas fa-shoe-prints text-md" style="transform: scale(0.6) translateX(-10%)"></i> Shu<span class="tt400">Shop</span>
                </a>

                <button type="button" class="ml-auto my-auto p-0 grid grid-rows-2 focus:outline-none" @click="responsiveNav = false">
                    <span class="w-6 h-0.5 bg-gray-700 rounded transform rotate-45"></span>
                    <span class="w-6 h-0.5 bg-gray-700 rounded transform -rotate-45"></span>
                </button>
            </div>

            <span class="mt-10 gte400 text-gray-900 text-md">What are you looking for?</span>
            <form method="post" class="mt-2 md:mt-4 flex flex-row">
                <select class="flex-shrink-0 hidden md:block appearance-none bg-gray-900 px-2 md:px-3 py-2 rounded rounded-r-none shadow gte200 text-sm text-white leading-tight focus:outline-none focus:shadow-outline">
                    <option value="All">All Products</option>
                    <option value="Basketball">Basketball</option>
                    <option value="Training">Training & Gym</option>
                    <option value="Football">Football</option>
                    <option value="Lifestyle">Lifestyle</option>
                </select>
                <input class="w-full block bg-purple-200 rounded md:rounded-l-none py-3 px-4 gte300 text-sm text-gray-900 leading-tight transition ease-in-out duration-200 focus:shadow-md focus:outline-none" type="text" placeholder="Find a product">
            </form>

            @guest

                <ul class="mt-8 md:mt-16 gte500 text-gray-900 text-md md:text-lg list-none grid grid-cols-1 gap-y-6">
                    <span class="-mb-2 gte700 font-bold text-purple-900 uppercase text-sm md:text-lg">Join the Family</span>

                    <li>
                        <a href="{{ route('login') }}" class="flex flex-row">
                            <i data-feather="user" class="h-4 mt-1 mr-1"></i>
                            <span class="">
                                {{ __('Log In') }}
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('register') }}" class="flex flex-row">
                            <i data-feather="edit-3" class="h-4 mt-1 mr-1"></i>
                            <span class="">
                                {{ __('Create an Account') }}
                            </span>
                        </a>
                    </li>
                </ul>

            @else
    
                <ul class="mt-8 md:mt-16 gte500 text-gray-900 text-md md:text-lg list-none grid grid-cols-1 gap-y-6 md:gap-y-10">
                    <span class="-mb-2 md:-mb-4 gte700 font-bold text-purple-900 uppercase text-sm md:text-lg">{{ __('Account') }}</span>
    
                    <li>
                        <a href="{{ route('shushop.wishlist.index') }}" class="flex flex-row">
                            <i data-feather="heart" class="h-4 mt-1 mr-1"></i>
                            <span class="">
                                {{ __('Wishlist') }}
                            </span>
                        </a>
                    </li>
    
                    <li>
                        <a href="{{ route('shushop.orders.index') }}" class="flex flex-row">
                            <i data-feather="credit-card" class="h-4 mt-1 mr-1"></i>
                            <span class="">
                                {{ __('My Orders') }}
                            </span>
                        </a>
                    </li>
    
                    <li>
                        <a href="{{ route('shushop.invite.index') }}" class="flex flex-row">
                            <i data-feather="code" class="h-4 mt-1 mr-1"></i>
                            <span class="">
                                {{ __('Invite Code') }}
                            </span>
                        </a>
                    </li>
    
                    <li>
                        <a href="{{ route('shushop.coupons.index') }}" class="flex flex-row">
                            <i data-feather="dollar-sign" class="h-4 mt-1 mr-1"></i>
                            <span class="">
                                {{ __('Coupons') }}
                            </span>
                        </a>
                    </li>
    
                    <span class="-mb-2 md:-mb-4 ml-1 gte700 font-bold text-purple-900 uppercase">{{ __('Extras') }}</span>
    
                    <li>
                        <a href="{{ route('shushop.settings.index') }}" class="flex flex-row">
                            <i data-feather="settings" class="h-4 mt-1 mr-1"></i>
                            <span class="">
                                {{ __('Settings') }}
                            </span>
                        </a>
                    </li>
    
                    <li>
                        <a href="{{ route('logout') }}" class="flex flex-row" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i data-feather="lock" class="h-4 mt-1 mr-1"></i>
                            <span class="">
                                {{ __('Log Out') }}
                            </span>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
    
            @endguest

            <span class="gte400 mt-auto text-gray-700 hidden md:block">
                &copy; <script>document.write(new Date().getFullYear());</script> ShuShop. Made with <i class="fas fa-heart text-green-500 text-xs"></i> by <a href="https://derickmasai.com" class="underline" target="_blank" rel="nofollow noreferrer">Derick Masai</a> using Laravel.
            </span>
        </div>
    </section>
</nav>