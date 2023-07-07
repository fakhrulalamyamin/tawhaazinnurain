
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

        <!-- Page Header -->
        <header class="header">
            <!-- Hero Image -->
            @include('components.hero-image')

            <!-- Navigation -->
            @include('components.default-navigation')


            <div class="default-container">
                @if (isset($PrimaryHeader))
                    {{ $PrimaryHeader }}
                @endif

                @if (isset($SecondaryHeader))
                    {{ $SecondaryHeader }}
                @endif
            </div>
        </header>

        <!-- Page Content -->
        <main class="min-content">
            {{ $slot }}
        </main>

        @if (isset($footer))

            {{ $footer }}

        @endif

        <!-- Swiper Js -->
        <script src="/js/swiper-bundle.min.js"></script>
        <script src="/js/script.js"></script>
    </body>
</html>

