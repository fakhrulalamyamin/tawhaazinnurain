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

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-900 text-white">

            {{-- @include('layouts.sidebar') --}}
            <div >
                @include('layouts.condact-sidebar')
            </div>

            <!-- Page Coruse Condact -->
            @if (isset($courseCondact))
                <courseCondact>
                    {{ $courseCondact }}
                </courseCondact>
            @endif

            <!-- Page My Courses -->
            @if (isset($myCourses))
                <myCourses>
                    {{ $myCourses }}
                </myCourses>
            @endif

            <!-- Page Forum -->
            @if (isset($forum))
                <forum>
                    {{ $forum }}
                </forum>
            @endif

            <!-- Page Payment -->
            @if (isset($payment))
                <payment>
                    {{ $payment }}
                </payment>
            @endif

            <!-- Page Setting -->
            @if (isset($setting))
                <setting>
                    {{ $setting }}
                </setting>
            @endif

            <!-- Page Content -->
            <main class="min-content">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
