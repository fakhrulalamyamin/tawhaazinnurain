<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <!-- Flowbit Js -->
        @vite(['resources/css/app.css','resources/js/app.js'])

        <!-- Swiper CSS -->
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/swiper-bundle.min.css">

        <title>Laravel</title>

    </head>
    <body class="antialiased">
        @include('components.default-navigation')

        <!-- Long Courses -->
        <div class="mt-16">
            <div class="default-container">
                <div class="courses-responsive">
                    <div class="courses-content">
                        <div class="long-courses-devider"></div>
                        <h2 class="courses-heading-top">Long Courses</h2>
                    </div>
                </div>
            </div>
        </div>
        @include('components.long-courses')
        <!-- Long Courses End -->

        <!-- Short Courses -->
        <div class="default-container">
            <div class="courses-responsive">
                <div class="courses-content">
                    <div class="long-courses-devider"></div>
                    <h2 class="courses-heading-top">Short Courses</h2>
                </div>
            </div>
        </div>
        @include('components.short-courses')
        <!-- short Courses End -->

        <!-- Short Courses -->
        <div class="default-container">
            <div class="courses-responsive">
                <div class="courses-content">
                    <div class="long-courses-devider"></div>
                    <h2 class="courses-heading-top">Speacial Courses</h2>
                </div>
            </div>
        </div>
        @include('components.speacial-courses')
        <!-- short Courses End -->

        <!-- Footer Start -->
        @include('components.footer')
        <!-- Footer End -->

    <!-- Swiper Js -->
    <script src="/js/swiper-bundle.min.js"></script>
    <script src="/js/script.js"></script>

    </body>
</html>
