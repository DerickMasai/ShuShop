@extends('dashboard.app')

@section('content')
    <section class="w-full m-0 p-0 flex flex-row" x-data="{ asideNav : false }">
        @include('dashboard.aside')

        <main class="w-full md:w-4/5 absolute top-0 right-0 flex flex-col overflow-y-scroll">
            {{-- Nav --}}
            @include('dashboard.nav')

            <section class="h-auto w-full mt-20 p-8 flex flex-col">
                <h1 class="gte700 text-3xl text-gray-900">
                    {{ __('Settings') }}
                </h1>
                <span class="mt-2 tt400 text-gray-700">
                    Take a look at your info and edit it to best match your needs
                </span>
        
                <div class="mt-10 md:mt-12 w-full grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <form action="{{ route('shushop.settings.update', Auth::user()->id) }}" method="post" class="relative flex flex-col">
                        @csrf
                        @method('PUT')

                        @isset($general_response)
                            @if ($general_response = 'Your changes have been saved successfully.')
                                <div class="w-full absolute -top-2 left-0 transform -translate-y-full py-1 px-2 bg-green-200 tt400 text-black text-sm border border-solid border-green-500 flex flex-row items-center">
                                    <div class="h-5 w-5 border border-solid border-black rounded-full flex">
                                        <i data-feather="check" class="h-3 m-auto"></i>
                                    </div>
                                    <span class="mt-1 ml-2">
                                        {{ $general_response }}
                                    </span>
                                </div>
                            @elseif ($general_response == 'No changes have been made in this section.')
                                <div class="w-full absolute -top-2 left-0 transform -translate-y-full py-1 px-2 bg-yellow-200 tt400 text-black text-sm border border-solid border-yellow-500 flex flex-row items-center">
                                    <i data-feather="alert-circle" class="h-5"></i>
                                    <span class="mt-1 ml-2">
                                        {{ $general_response }}
                                    </span>
                                </div>
                            @elseif ($general_response == 'Please fill out all the required fields before saving.')
                                <div class="w-full absolute -top-2 left-0 transform -translate-y-full py-1 px-2 bg-gray-600-200 tt400 text-white text-sm border border-solid border-gray-900 flex flex-row items-center">
                                    <i data-feather="help-circle" class="h-5"></i>
                                    <span class="mt-1 ml-2">
                                        {{ $general_response }}
                                    </span>
                                </div>
                            @elseif ($general_response == 'An error prevented saving your changes. Please try again.')
                                <div class="w-full absolute -top-2 left-0 transform -translate-y-full py-1 px-2 bg-red-200 tt400 text-black text-sm border border-solid border-red-500 flex flex-row items-center">
                                    <div class="h-5 w-5 border border-solid border-black rounded-full flex">
                                        <i data-feather="x" class="h-3 m-auto"></i>
                                    </div>
                                    <span class="mt-1 ml-2">
                                        {{ $general_response }}
                                    </span>
                                </div>
                            @endif
                        @endisset
            
                        <h2 class="gte700 text-xl mb-3 text-purple-500">General Info</h2>

                        <div class="mt-3 w-full grid grid-cols-1 md:grid-cols-2 gap-6">
                            <label for="first-name" class="tt500 flex flex-col">
                                <span class="mb-1 text-gray-900">First Name <small class="text-red-500">*</small></span>
                                <input type="text" id="first-name" autocomplete="off" class="text-gray-900 w-full p-3 border border-solid border-gray-300 transition ease-in-out duration-200 focus:outline-none focus:border-purple-700" name="first_name" value="{{ Auth::user()->first_name }}" required>
                            </label>
            
                            <label for="last-name" class="tt500 flex flex-col">
                                <span class="mb-1 text-gray-900">Last Name <small class="text-red-500">*</small></span>
                                <input type="text" id="last-name" autocomplete="off" class="text-gray-900 w-full p-3 border border-solid border-gray-300 transition ease-in-out duration-200 focus:outline-none focus:border-purple-700" name="last_name" value="{{ Auth::user()->last_name }}" required>
                            </label>
                        </div>

                        <label for="email" class="mt-6 tt500 flex flex-col">
                            <span class="mb-1 text-gray-900">Email Address <small class="text-red-500">*</small></span>
                            <input type="text" id="email" autocomplete="off" class="text-gray-900 w-full p-3 border border-solid border-gray-300 transition ease-in-out duration-200 focus:outline-none focus:border-purple-700" name="email" value="{{ Auth::user()->email }}" required>
                        </label>

                        <label for="phone" class="mt-6 tt500 flex flex-col relative">
                            <span class="mb-1 text-gray-900">
                                Phone Number <small class="text-red-500">*</small>
                            </span>
                            <span class="absolute left-4 text-gray-600" style="top: 2.55rem">+254</span>
                            <input type="text" id="phone" autocomplete="off" class="text-gray-900 w-full p-3 border border-solid border-gray-300 transition ease-in-out duration-200 focus:outline-none focus:border-purple-700" placeholder="700 123 456" style="padding-left: 3.5rem" name="phone_number" value="{{ Auth::user()->phone_number }}" required minlength="9">
                        </label>

                        <button type="submit" class="mt-10 py-3 bg-gray-500 shadow-2xl text-white gte500 transition ease-in-out duration-200 focus:outline-none focus:bg-purple-900">Save</button>
                    </form>

                    <form action="" method="post" class="relative flex flex-col">
                        @csrf
                        @method('PUT')
            
                        @isset($password_response)
                            @if ($password_response = 'Your changes have been saved successfully.')
                                <div class="w-full absolute -top-2 left-0 transform -translate-y-full py-1 px-2 bg-green-200 tt400 text-black text-sm border border-solid border-green-500 flex flex-row items-center">
                                    <div class="h-5 w-5 border border-solid border-black rounded-full flex">
                                        <i data-feather="check" class="h-3 m-auto"></i>
                                    </div>
                                    <span class="mt-1 ml-2">
                                        {{ $password_response }}
                                    </span>
                                </div>
                            @elseif ($password_response == 'No changes have been made in this section.')
                                <div class="w-full absolute -top-2 left-0 transform -translate-y-full py-1 px-2 bg-yellow-200 tt400 text-black text-sm border border-solid border-yellow-500 flex flex-row items-center">
                                    <i data-feather="alert-circle" class="h-5"></i>
                                    <span class="mt-1 ml-2">
                                        {{ $password_response }}
                                    </span>
                                </div>
                            @elseif ($general_response == 'Please fill out all the required fields before saving.')
                                <div class="w-full absolute -top-2 left-0 transform -translate-y-full py-1 px-2 bg-gray-600-200 tt400 text-white text-sm border border-solid border-gray-900 flex flex-row items-center">
                                    <i data-feather="help-circle" class="h-5"></i>
                                    <span class="mt-1 ml-2">
                                        {{ $password_response }}
                                    </span>
                                </div>
                            @elseif ($password_response == 'An error prevented saving your changes. Please try again.')
                                <div class="w-full absolute -top-2 left-0 transform -translate-y-full py-1 px-2 bg-red-200 tt400 text-black text-sm border border-solid border-red-500 flex flex-row items-center">
                                    <div class="h-5 w-5 border border-solid border-black rounded-full flex">
                                        <i data-feather="x" class="h-3 m-auto"></i>
                                    </div>
                                    <span class="mt-1 ml-2">
                                        {{ $password_response }}
                                    </span>
                                </div>
                            @endif
                        @endisset
                        <h2 class="gte700 text-xl mb-3 text-purple-500">Change Your Password</h2>

                        <label for="current-password" class="mt-3 tt500 flex flex-col">
                            <span class="mb-1 text-gray-900">Current Password <small class="text-red-500">*</small></span>
                            <input type="password" id="current-password" autocomplete="off" class="text-gray-900 w-full p-3 border border-solid border-gray-300 transition ease-in-out duration-200 focus:outline-none focus:border-purple-700" name="current_password">
                        </label>

                        <label for="new-password" class="mt-6 tt500 flex flex-col">
                            <span class="mb-1 text-gray-900">New Password <small class="text-red-500">*</small></span>
                            <input type="password" id="new-password" autocomplete="off" class="text-gray-900 w-full p-3 border border-solid border-gray-300 transition ease-in-out duration-200 focus:outline-none focus:border-purple-700" name="new_password">
                        </label>

                        <label for="confirm-password" class="mt-6 tt500 flex flex-col">
                            <span class="mb-1 text-gray-900">Confirm New Password <small class="text-red-500">*</small></span>
                            <input type="password" id="confirm-password" autocomplete="off" class="text-gray-900 w-full p-3 border border-solid border-gray-300 transition ease-in-out duration-200 focus:outline-none focus:border-purple-700" name="confirm_password">
                        </label>

                        <button type="submit" class="mt-10 py-3 bg-gray-500 shadow-2xl text-white gte500 transition ease-in-out duration-200 focus:outline-none focus:bg-purple-900">Change</button>
                    </form>
                </div>

                <form action="{{ route('shushop.settings.update', Auth::user()->id) }}" method="post" class="mt-16 mb-12 relative flex flex-col">
                    @csrf
                    @method('PUT')

                    {{-- Response --}}
                    @isset($address_response)
                        @if ($address_response = 'Your changes have been saved successfully.')
                            <div class="w-full absolute -top-2 left-0 transform -translate-y-full py-1 px-2 bg-green-200 tt400 text-black text-sm border border-solid border-green-500 flex flex-row items-center">
                                <div class="h-5 w-5 border border-solid border-black rounded-full flex">
                                    <i data-feather="check" class="h-3 m-auto"></i>
                                </div>
                                <span class="mt-1 ml-2">
                                    {{ $address_response }}
                                </span>
                            </div>
                        @elseif ($address_response == 'No changes have been made in this section.')
                            <div class="w-full absolute -top-2 left-0 transform -translate-y-full py-1 px-2 bg-yellow-200 tt400 text-black text-sm border border-solid border-yellow-500 flex flex-row items-center">
                                <i data-feather="alert-circle" class="h-5"></i>
                                <span class="mt-1 ml-2">
                                    {{ $address_response }}
                                </span>
                            </div>
                        @elseif ($address_response == 'Please fill out all the required fields before saving.')
                            <div class="w-full absolute -top-2 left-0 transform -translate-y-full py-1 px-2 bg-gray-600-200 tt400 text-white text-sm border border-solid border-gray-900 flex flex-row items-center">
                                <i data-feather="help-circle" class="h-5"></i>
                                <span class="mt-1 ml-2">
                                    {{ $address_response }}
                                </span>
                            </div>
                        @elseif ($address_response == 'An error prevented saving your changes. Please try again.')
                            <div class="w-full absolute -top-2 left-0 transform -translate-y-full py-1 px-2 bg-red-200 tt400 text-black text-sm border border-solid border-red-500 flex flex-row items-center">
                                <div class="h-5 w-5 border border-solid border-black rounded-full flex">
                                    <i data-feather="x" class="h-3 m-auto"></i>
                                </div>
                                <span class="mt-1 ml-2">
                                    {{ $address_response }}
                                </span>
                            </div>
                        @endif
                    @endisset
        
                    <h2 class="gte700 text-xl mb-3 text-purple-500">Address & Delivery</h2>

                    <div class="mt-3 w-full grid grid-cols-1 md:grid-cols-2 gap-12">
                        <label for="zip-code" class="tt500 flex flex-col">
                            <span class="mb-1 text-gray-900">Zip Code <small class="text-red-500">*</small></span>
                            <input type="text" id="zip-code" autocomplete="off" class="text-gray-900 w-full p-3 border border-solid border-gray-300 transition ease-in-out duration-200 focus:outline-none focus:border-purple-700" name="zip_code" value="{{ Auth::user()->zip_code }}">
                        </label>
        
                        <label for="region" class="tt500 flex flex-col">
                            <span class="mb-1 text-gray-900">Region <small class="text-red-500">*</small></span>
                            <input type="text" id="region" autocomplete="off" class="text-gray-900 w-full p-3 border border-solid border-gray-300 transition ease-in-out duration-200 focus:outline-none focus:border-purple-700" name="region" value="{{ Auth::user()->region }}">
                        </label>
                    </div>

                    <label for="address" class="mt-6 tt500 flex flex-col">
                        <span class="mb-1 text-gray-900">Your Address <small class="text-red-500">*</small></span>
                        <input type="text" id="address" autocomplete="off" class="text-gray-900 w-full p-3 border border-solid border-gray-300 transition ease-in-out duration-200 focus:outline-none focus:border-purple-700" name="address" value="{{ Auth::user()->address }}">
                    </label>

                    <div class="mt-6 w-full grid grid-cols-1 md:grid-cols-2 gap-12">
                        <label for="city" class="tt500 flex flex-col">
                            <span class="mb-1 text-gray-900">City <small class="text-red-500">*</small></span>
                            <input type="text" id="city" autocomplete="off" class="text-gray-900 w-full p-3 border border-solid border-gray-300 transition ease-in-out duration-200 focus:outline-none focus:border-purple-700" name="city" value="{{ Auth::user()->city }}">
                        </label>
        
                        <label for="organization" class="tt500 flex flex-col">
                            <span class="mb-1 text-gray-900">Organization</span>
                            <input type="text" id="organization" autocomplete="off" class="text-gray-900 w-full p-3 border border-solid border-gray-300 transition ease-in-out duration-200 focus:outline-none focus:border-purple-700" name="organization" value="{{ Auth::user()->organization }}">
                        </label>
                    </div>

                    <button type="submit" class="mt-10 py-3 bg-gray-500 shadow-2xl text-white gte500 transition ease-in-out duration-200 focus:outline-none focus:bg-purple-900">Save</button>
                </form>
            </section>
        </main>
    </section>
@endsection