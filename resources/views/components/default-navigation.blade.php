<nav class="fixed w-full bg-white border-b border-gray-100 z-20">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto pr-4">
        <a href="#" class="flex items-center">
            <img class="nav-logo" src="/images/THZN-logo.png" class="h-8 mr-3" alt="Taw Haa Zin Nurain Islamic School Logo" />
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        </button>

        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="nav-list">
                @if (Route::has('login'))
                    <div class="mr-4 gap-4 block md:hidden mb-4">
                        @auth
                            <li>
                                <a href="{{route('dashboard')}}" class="nav-link">Dashboard</a>
                            </li>
                        @else
                            <li>
                                <a href="{{route('login')}}" class="nav-link">Login</a>
                            </li>
                            <li>
                                <a href="{{route('register')}}" class="nav-link">Register</a>
                            </li>
                        @endauth
                    </div>
                @endif


                <li>
                    <a href="{{route('courses')}}" class="nav-link">All Courses</a>
                </li>
                <li>
                    <a href="#" class="nav-link">Resources</a>
                </li>
            </ul>
        </div>

        <div class="hidden md:block" id="navbar-default">
            @if (Route::has('login'))
                <div class="ml-[3px]">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="nav-auth-link">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="nav-auth-link">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-auth-link">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</nav>
