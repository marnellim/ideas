<nav x-data="{ open: false }" id="navbar" class="bg-transparent fixed top-10 right-0 w-full z-50" >
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>
            </div>

            <div class="flex items-center justify-between">
                <!-- Navigation Links -->                
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex mr-10">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="inline-block px-4 py-2 bg-teal-500 bg-opacity-20 text-white rounded-lg text-lg uppercase font-bold">
                         {{ __('Dashboard') }}
                    </x-nav-link>

                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="inline-block px-4 py-2 bg-teal-500 bg-opacity-20 text-white rounded-lg text-lg uppercase font-bold">
                        {{ __('Category') }}
                   </x-nav-link>
                                    
                    <div class="relative inline-block text-left">
                        <x-responsive-nav-link class="inline-block px-4 py-2 bg-teal-500 bg-opacity-50 text-white rounded-lg text-sm uppercase font-bold" id="post-link">
                            {{ __('Post') }}
                        </x-responsive-nav-link>
                        <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="options-menu" id="dropdown-menu">
                            <div class="py-1" role="none">
                                <x-dropdown-link :href="route('dashboard')">
                                    {{ __('All Post') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('dashboard')">
                                    {{ __('My Post') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('dashboard')">
                                    {{ __('Create Post') }}
                                </x-dropdown-link>
                            </div>
                        </div>
                    </div>
                    
                
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="inline-block px-4 py-2 bg-teal-500 bg-opacity-20 text-white rounded-lg text-sm uppercase font-bold">
                        {{ __('Comments') }}
                    </x-nav-link>
                </div>

                <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>
            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': !open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="inline-block px-4 py-2 bg-teal-500 bg-opacity-50 text-white rounded-lg text-sm uppercase font-bold">
                {{ __('Home') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="inline-block px-4 py-2 bg-teal-500 bg-opacity-50 text-white rounded-lg text-sm uppercase font-bold">
                {{ __('Topics') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="inline-block px-4 py-2 bg-teal-500 bg-opacity-50 text-white rounded-lg text-sm uppercase font-bold">
                {{ __('Comments') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pl-2 border-gray-200 bg-gray-800 bg-opacity-70 text-white rounded-lg text-sm font-bold">
            <div class="px-4 ">
                <div class="font-medium text-base text-white ">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-white">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')" class="text-white">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();" class="text-white">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>