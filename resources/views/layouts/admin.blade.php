<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="icon"
        href="{{ asset('media-cdn.getbento.com/accounts/3c10e657dc5f2aa01b55394e8376688a/media/images/60808fav-icon.png') }}">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />
    {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> --}}
    <style>
        .add-menu {
            .tab {
                overflow: hidden;
                border: 1px solid #ccc;
                /* background-color: #f1f1f1; */
            }

            /* Style the buttons inside the tab */
            .tab button {
                background-color: inherit;
                float: left;
                border: none;
                outline: none;
                cursor: pointer;
                padding: 14px;
                transition: 0.3s;
                font-size: 17px;
            }

            /* Change background color of buttons on hover */
            .tab button:hover {
                background-color: #ddd;
            }

            /* Create an active/current tablink class */
            .tab button.active {
                background-color: #ccc;
            }

            /* Style the tab content */
            .tabcontent {
                display: none;
                padding: 6px 12px;
                border: 1px solid #ccc;
                border-top: none;
            }

            /* Style the close button */
            .topright {
                float: right;
                cursor: pointer;
                font-size: 28px;
            }

            .topright:hover {
                color: red;
            }
        }


        /* details[role=list] summary:not([role]) {
            padding: 0 1rem 0;
            border: 0;
        }

        details[role=list] summary::after {
            display: none;
        }

        details[role=list] summary+ul {
            max-height: 260px;
            overflow-y: auto;
        }

        details[role=list] summary+ul li {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: stretch;
        }

        details[role=list] summary+ul li img {
            width: 60px;
            height: 60px;
            border-radius: var(--border-radius);
            box-shadow: var(--card-box-shadow);
        }

        details[role=list] summary+ul li a {
            width: 100%;
            height: 60px;
            padding: var(--spacing);
            margin: 0;
            border-radius: var(--border-radius);
            cursor: pointer;
            display: flex;
            flex-direction: row;
            align-items: center;
        } */
    </style>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="flex-col w-full md:flex md:flex-row md:min-h-screen">
        <div @click.away="open = false"
            class="flex flex-col flex-shrink-0 w-full text-gray-700 bg-white md:w-64 dark-mode:text-gray-200 dark-mode:bg-gray-800"
            x-data="{ open: false }">
            <div class="flex flex-row items-center justify-between flex-shrink-0 px-8 py-4">
                {{-- <a href="/admin"
                    class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">Flowtrail
                    UI</a> --}}
                <div class="site-logo">
                    <a class="site-logo__btn" href="/">
                        <img src="https://images.getbento.com/accounts/3c10e657dc5f2aa01b55394e8376688a/media/images/850Logo_primary.png"
                            alt="The Original Denver Home" />
                        {{-- <img src="../images.getbento.com/accounts/3c10e657dc5f2aa01b55394e8376688a/media/images/79279logosticky.png"
                            alt="icon" /> --}}
                    </a>
                </div>
                <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{ 'block': open, 'hidden': !open }"
                class="flex-grow px-4 pb-4 md:block md:pb-0 md:overflow-y-auto">
                <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900
    {{ request()->routeIs('/') ? 'bg-gray-200' : 'bg-transparent' }}
    rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600
    dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200
    hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200
    focus:outline-none focus:shadow-outline"
                    href="/">Home</a>
                @if (auth()->check() &&
                        auth()->user()->hasRole('admin'))
                    <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900
                           {{ request()->routeIs('admin.category.index') ? 'bg-gray-200' : 'bg-transparent' }}
                           rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600
                           dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200
                           hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200
                           focus:outline-none focus:shadow-outline"
                        href="/admin/user">User</a>
                    <div @click.away="open = false" class="relative" x-data="{ open: false }">
                        <button @click="open = !open"
                            class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:block hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                            <span>Statistic</span>
                            <svg fill="currentColor" viewBox="0 0 20 20"
                                :class="{ 'rotate-180': open, 'rotate-0': !open }"
                                class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95" class="">
                            <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-700">
                                <x-dropdown-link :href="route('admin.income-statement')"
                                    class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                    Income Statement
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('admin.total-revenue')"
                                    class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                    Total Revenue
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('admin.menu-revenue')"
                                    class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                    Menu Revenue
                                </x-dropdown-link>
                                {{-- <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                                    this.closest('form').submit();"
                                            class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form> --}}
                            </div>
                        </div>
                    </div>
                    <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900
                    {{ request()->routeIs('admin.category.index') ? 'bg-gray-200' : 'bg-transparent' }}
                    rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600
                    dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200
                    hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200
                    focus:outline-none focus:shadow-outline"
                        href="/admin/category">Category</a>
                    <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900
    {{ request()->routeIs('admin.product.index') ? 'bg-gray-200' : 'bg-transparent' }}
    rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600
    dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200
    hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200
    focus:outline-none focus:shadow-outline"
                        href="/admin/product">Product</a>
                    {{-- <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900
    {{ request()->routeIs('admin.menus.index') ? 'bg-gray-200' : 'bg-transparent' }}
    rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600
    dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200
    hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200
    focus:outline-none focus:shadow-outline"
                        href="/admin/combo">Combo</a> --}}
                    {{-- <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900
                        {{ request()->routeIs('admin.hour.index') ? 'bg-gray-200' : 'bg-transparent' }}
                        rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600
                        dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200
                        hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200
                        focus:outline-none focus:shadow-outline"
                        href="/admin/hour">Hour</a> --}}
                    <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900
                    {{ request()->routeIs('admin.table.index') ? 'bg-gray-200' : 'bg-transparent' }}
                    rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600
                    dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200
                    hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200
                    focus:outline-none focus:shadow-outline"
                        href="/admin/table">Table</a>
                @endif
                @if (auth()->check() &&
                        (auth()->user()->hasRole('admin') ||
                            auth()->user()->hasRole('waiter')))
                    <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900
                    {{ request()->routeIs('admin.reservations.index') ? 'bg-gray-200' : 'bg-transparent' }}
                    rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600
                    dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200
                    hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200
                    focus:outline-none focus:shadow-outline"
                        href="{{ route('admin.reservation.index') }}">Reservation</a>
                @endif
                @if (auth()->check() &&
                        (auth()->user()->hasRole('admin') ||
                            auth()->user()->hasRole('warehouse_staff')))
                    <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900
                    {{ request()->routeIs('admin.ingredient.index') ? 'bg-gray-200' : 'bg-transparent' }}
                    rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600
                    dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200
                    hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200
                    focus:outline-none focus:shadow-outline"
                        href="/admin/ingredient">Ingredient</a>
                    <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900
                    {{ request()->routeIs('admin.supplier.index') ? 'bg-gray-200' : 'bg-transparent' }}
                    rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600
                    dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200
                    hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200
                    focus:outline-none focus:shadow-outline"
                        href="/admin/supplier">Supplier</a>

                    <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-900
                    {{ request()->routeIs('admin.stock.index') ? 'bg-gray-200' : 'bg-transparent' }}
                    rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600
                    dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200
                    hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200
                    focus:outline-none focus:shadow-outline"
                        href="/admin/stock">Stock</a>
                @endif




                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open"
                        class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:block hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <span>{{ Auth::user()->name }}</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }"
                            class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                        <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-700">
                            <x-dropdown-link :href="route('profile.edit')"
                                class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                {{ __('Profile') }}
                            </x-dropdown-link>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                        this.closest('form').submit();"
                                    class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <main class=" w-full">
            <div>
                @if (session()->has('danger'))
                    <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                        role="alert">
                        <span class="font-medium">{{ session()->get('danger') }}!</span>
                    </div>
                @endif
                @if (session()->has('success'))
                    <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                        role="alert">
                        <span class="font-medium">{{ session()->get('success') }}!</span>
                    </div>
                @endif
                @if (session()->has('warning'))
                    <div class="p-4 mb-4 text-sm text-yellow-700 bg-yellow-100 rounded-lg dark:bg-yellow-200 dark:text-yellow-800"
                        role="alert">
                        <span class="font-medium">{{ session()->get('warning') }}!</span>
                    </div>
                @endif
            </div>
            {{ $slot }}
        </main>
    </div>
</body>

</html>
