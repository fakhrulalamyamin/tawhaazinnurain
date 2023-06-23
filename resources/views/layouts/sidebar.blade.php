<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
</button>

<aside id="default-sidebar" class="fixed top-[72px] left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
        <div class="w-full h-[88vh] flex flex-col justify-between">
            <ul class="space-y-2 font-medium">
                <li>
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        @include('components.icons.dashboard')
                        <span class="flex-1 ml-3 whitespace-nowrap">Dashboard</span>
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('my-profile')" :active="request()->routeIs('my-profile')">
                        @include('components.icons.profile')
                        <span class="flex-1 ml-3 whitespace-nowrap">My Profile</span>
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('my-courses')" :active="request()->routeIs('my-courses')">
                        @include('components.icons.courses')
                        <span class="flex-1 ml-3 whitespace-nowrap">My Courses</span>
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('forum')" :active="request()->routeIs('forum')">
                        @include('components.icons.forum')
                        <span class="flex-1 ml-3 whitespace-nowrap">Forum</span>
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('payment')" :active="request()->routeIs('payment')">
                        @include('components.icons.dolor')
                        <span class="flex-1 ml-3 whitespace-nowrap">Payments</span>
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('settings')" :active="request()->routeIs('settings')">
                        @include('components.icons.setting')
                        <span class="flex-1 ml-3 whitespace-nowrap">Settings</span>
                    </x-nav-link>
                </li>
            </ul>
            <ul>
                <li class="mt-[50px]">
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        @include('components.icons.log-out')
                        <span class="flex-1 ml-3 whitespace-nowrap">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>
