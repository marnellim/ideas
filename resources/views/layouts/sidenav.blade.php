<div class="container">
    <div class="hidden sm:block">
        <div class="sidebar fixed bg-green-500 rounded-lg" style="width: 200px; height: 100%; background: #000E2B; display: flex; flex-direction: column;">
            <header class="rounded-lg" style="font-size: 18px; color: white; text-align: center; line-height: 70px; background: #000E2B;">I D E A S</header>
            <ul>
                <li><a href="{{ route('dashboard') }}" class="custom-hover-bg">
                    <i class="fa-solid fa-house"></i>{{ __('Dashboard') }}</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle"><i class="fa-solid fa-signs-post"></i> Post</a>
                    <ul class="dropdown-content">
                        <li><a href=""><i class="fas fa-plane"></i>Travel</a></li>
                        <li><a href="#"><i class="fas fa-laptop"></i>Technology</a></li>
                        <li><a href="#"><i class="fab fa-bitcoin"></i>Crypto</a></li>
                    </ul>
                </li>
            </ul>
            <ul style="flex: 1;">
                <li><a href="#" class="custom-hover-bg"><i class="fas fa-comment"></i>{{ __('Comments') }}</a></li>
                <li><a href="{{ route('user') }}" class="custom-hover-bg"><i class="fas fa-user"></i>{{ __('Users') }}</a></li>
            </ul>
            <ul>
                <li>
                    <form method="POST" action="{{ route('logout') }}" >
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();" class="text-white custom-hover-bg"> <i class="fas fa-sign-out"></i>
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </li>
            </ul>
        </div>
    </div>

    <div class="hamburger-container sm:hidden">
        <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path :class="{'hidden': open, 'inline-flex': !open}" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                <path :class="{'hidden': !open, 'inline-flex': open}" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <div v-show="open" class="sm:hidden">
        <div class="sidebar fixed bg-gray-500 rounded-lg" style="width: 200px; height: 100%; background: #042331; display: flex; flex-direction: column;">
            <div class="sidebar fixed bg-gray-500 rounded-lg" style="width: 200px; height: 100%; background: #042331; display: flex; flex-direction: column;">
                <header class="rounded-lg" style="font-size: 18px; color: white; text-align: center; line-height: 70px; background: #063146; user-select: none;">I D E A S</header>
                <ul>
                    <li><a href="{{ route('dashboard') }}"><i class="fa-solid fa-house"></i>{{ __('Dashboard') }}</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle"><i class="fa-solid fa-signs-post"></i> Post</a>
                        <ul class="dropdown-content">
                            <li><a href=""><i class="fas fa-plane"></i>Travel</a></li>
                            <li><a href="#"><i class="fas fa-laptop"></i>Technology</a></li>
                            <li><a href="#"><i class="fab fa-bitcoin"></i>Crypto</a></li>
                        </ul>
                    </li>
                </ul>
                <ul style="flex: 1;">
                    <li><a href="#"><i class="fas fa-comment"></i>Comments</a></li>
                    <li><a href="#"><i class="fas fa-user"></i>Users</a></li>
                </ul>
                <ul>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
    
                            <x-responsive-nav-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();" class="text-white"> <i class="fas fa-sign-out"></i>
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>


</div>
