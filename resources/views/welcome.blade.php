<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Laravel</title>

    </head>
    <body class="antialiased">
        <div class="relative max-w-7xl mx-auto min-h-[786px] bg-center bg-red-500">
            <div class="container mx-auto">
                <div class="flex items-center justify-between bg-gray-400 md:px-6 py-6">
                    <a href="" class="">
                        Logo
                    </a>
                    @if (Route::has('login'))
                        <div class="">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>

            <div class="max-w-7xl mx-auto p-6 lg:p-6">


                <div class="mt-24 container mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-8">
                        <!-- Content -->
                        <div class="bg-red-400 px-4">
                            <h1 class="text-[70px] font-bold text-white">
                                কুরআন শিখুন
                                <br>
                                <span class="primary-color"> সহজ </span> পদ্ধতিতে
                            </h1>
                            <span class="text-[16px] font-normal">
                                কুরআনের জ্ঞানের খোজে,
                                <br>
                                ত্ব-হা যিন নূরাঈনের আঙিনায় স্বাগতম
                            </span>
                            <br>
                            <a href=""
                                class="primary-button">
                                কোর্স সমূহ
                            </a>
                        </div>

                        <!-- Login Form -->
                        <div class="flex justify-end">
                            <div class="max-w-[427px] h-[387px] bg-[#328AF2] px-16 py-4">
                                <div class="">
                                    <a href="" class="primary-form-button">Login</a>
                                    <a href="" class="secondary-form-button">SignUp</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
