<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Laravel</title>

    </head>
    <body class="antialiased">
        <div class="relative max-w-7xl mx-auto min-h-[786px] bg-center overflow-hidden">
            <img src="/images/Taw Haa Zin Nurain Hero Image.jpg" alt="" class="hero-image">
            <div class="container mx-auto">
                <div class="flex items-center justify-between md:px-6 ">

                    <a href="">
                        <img src="/images/Taw Haa Zin Nurain Logo.png" alt="Taw Haa Zin Nurain Logo"  class="w-5xl" >
                    </a>

                    @if (Route::has('login'))
                        <div class="">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="navbar-link">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="navbar-link">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="navbar-link">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif

                </div>
            </div>
            <div class="max-w-7xl mx-auto p-6 lg:p-6">
                <div class="mt-24 container mx-auto">
                    <div class="hero">

                        <!-- Content -->
                        <h1 class="hero-heading-primary">
                            কুরআন শিখুন
                            <br>
                            <span class="text-primary-0"> সহজ </span> পদ্ধতিতে
                        </h1>
                        <span class="hero-heading-primary-span">
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
                </div>
            </div>
        </div>

        <!-- All Course Start -->
        <div class="container px-6">
            <div class="all-course">
                <div class="all-course-text">
                    <div class="all-course-text-border"></div>
                    <h2 class="all-course-text-heading">অভিজ্ঞ উস্তাদদের সান্যিদ্ধে <span class="all-course-text-span"> কুরআন, হাসিদের </span> আলোকে
                        ইসলামিক বেসিক বিষয়গুলো শিখুন</h2>
                </div>
                <div class="flex items-center justify-center">
                    <button class="all-course-btn">সকল কোর্স</button>
                </div>
            </div>
            <button></button>
        </div>
        <!-- All Course End -->

        <!-- All Course Details End -->
        <div class="container px-6">
            <div class="course-details">
                <a href="#" class="space-y-8">
                    <div class="course-details-card">
                        <div class="course-details-card-box">
                            <img src="" alt="" class="course-details-card-box-image">
                            <div class="course-details-card-box-span">
                                Semester One
                                <br>
                                The Essentials
                            </div>
                        </div>

                        <div class="course-details-card-counter">
                            <div class="course-details-card-counter-courses">
                                <span>100</span>
                                <span>Courses</span>
                            </div>
                            <div class="course-details-card-counter-videos">
                                <span>700+</span>
                                <span>Videos</span>
                            </div>
                        </div>
                    </div>

                    <div class="course-details-card">
                        <div class="course-details-card-box">
                            <img src="" alt="" class="course-details-card-box-image">
                            <div class="course-details-card-box-span">
                                Semester Two
                                <br>
                                Foundations
                            </div>
                        </div>

                        <div class="course-details-card-counter">
                            <div class="course-details-card-counter-courses">
                                <span>100</span>
                                <span>Courses</span>
                            </div>
                            <div class="course-details-card-counter-videos">
                                <span>700+</span>
                                <span>Videos</span>
                            </div>
                        </div>
                    </div>

                    <div class="course-details-card">
                        <div class="course-details-card-box">
                            <img src="" alt="" class="course-details-card-box-image">
                            <div class="course-details-card-box-span">
                                Semester Three
                                <br>
                                Intermediate
                            </div>
                        </div>

                        <div class="course-details-card-counter">
                            <div class="course-details-card-counter-courses">
                                <span>100</span>
                                <span>Courses</span>
                            </div>
                            <div class="course-details-card-counter-videos">
                                <span>700+</span>
                                <span>Videos</span>
                            </div>
                        </div>
                    </div>

                    <div class="course-details-card">
                        <div class="course-details-card-box">
                            <img src="" alt="" class="course-details-card-box-image">
                            <div class="course-details-card-box-span">
                                Semester Four
                                <br>
                                Advanced
                            </div>
                        </div>

                        <div class="course-details-card-counter">
                            <div class="course-details-card-counter-courses">
                                <span>100</span>
                                <span>Courses</span>
                            </div>
                            <div class="course-details-card-counter-videos">
                                <span>700+</span>
                                <span>Videos</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- All Course Details End -->

        <!-- All Course End -->
        <div class="container px-6">
            <div class="all-course">
                <div class="all-course-text">
                    <div class="all-course-text-border"></div>
                    <h2 class="all-course-text-heading">গঠনমূলক সিলেবাসের মাধ্যমে ধাপে ধাপে
                        <span class="all-course-text-span">
                            ইসলামের খুটিনাটি
                        </span> বিষয়ে
                        <br>
                        জ্ঞান অর্জন করুন
                    </h2>
                </div>
                <div class="flex items-center justify-center">
                    <button class="all-course-btn">সকল কোর্স</button>
                </div>
            </div>
            <button></button>
        </div>
        <!-- All Course End -->

        <!-- All Course End -->
        <div class="course-container">
            <div class="course-responsive">
                <div class="course-card">
                    <div class="course-card-image">
                        <span>আকীদা</span>
                    </div>
                    <div class="course-card-details">
                        <div class="course-card-title">
                            বেসিক ইসলামি আকীদা
                        </div>
                        <div class="course-card-span">
                            <span class="course-card-span-class">
                                @include('components.icons.folder')
                                ২২ ক্লাস
                            </span>

                            <span class="course-card-span-class">
                                @include('components.icons.clock')
                                ৬+ ঘন্টা
                            </span>
                        </div>
                    </div>
                </div>

                <div class="course-card">
                    <div class="course-card-image">
                        <span>আকীদা</span>
                    </div>
                    <div class="course-card-details">
                        <div class="course-card-title">
                            বেসিক ইসলামি আকীদা
                        </div>
                        <div class="course-card-span">
                            <span class="course-card-span-class">
                                @include('components.icons.folder')
                                ২২ ক্লাস
                            </span>

                            <span class="course-card-span-class">
                                @include('components.icons.clock')
                                ৬+ ঘন্টা
                            </span>
                        </div>
                    </div>
                </div>

                <div class="course-card">
                    <div class="course-card-image">
                        <span>আকীদা</span>
                    </div>
                    <div class="course-card-details">
                        <div class="course-card-title">
                            বেসিক ইসলামি আকীদা
                        </div>
                        <div class="course-card-span">
                            <span class="course-card-span-class">
                                @include('components.icons.folder')
                                ২২ ক্লাস
                            </span>

                            <span class="course-card-span-class">
                                @include('components.icons.clock')
                                ৬+ ঘন্টা
                            </span>
                        </div>
                    </div>
                </div>

                <div class="course-card">
                    <div class="course-card-image">
                        <span>আকীদা</span>
                    </div>
                    <div class="course-card-details">
                        <div class="course-card-title">
                            বেসিক ইসলামি আকীদা
                        </div>
                        <div class="course-card-span">
                            <span class="course-card-span-class">
                                @include('components.icons.folder')
                                ২২ ক্লাস
                            </span>

                            <span class="course-card-span-class">
                                @include('components.icons.clock')
                                ৬+ ঘন্টা
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- All Course End -->

        <!-- All Course End -->
        <!-- All Course End -->

        <!-- All Course End -->
        <!-- All Course End -->
    </body>
</html>
