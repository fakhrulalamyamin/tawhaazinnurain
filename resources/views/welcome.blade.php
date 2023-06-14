<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <!-- Swiper CSS -->
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/swiper-bundle.min.css">

        <title>Laravel</title>

    </head>
    <body class="antialiased">

        <!-- Hero Start -->
        <div class="relative max-w-full mx-auto min-h-[786px] bg-center overflow-hidden">
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
        <!-- Hero Start -->

        <!-- All Course Start -->
        <div class="default-container">
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

        <!-- All Course Semester Start -->
        <div class="default-container">
            <div class="course-semester">
                <a href="#" class="space-y-8">
                    <div class="course-semester-card">
                        <div class="course-semester-card-box">
                            <img src="" alt="" class="course-semester-card-box-image">
                            <div class="course-semester-card-box-span">
                                Semester One
                                <br>
                                The Essentials
                            </div>
                        </div>

                        <div class="course-semester-card-counter">
                            <div class="course-semester-card-counter-courses">
                                <span>100</span>
                                <span>Courses</span>
                            </div>
                            <div class="course-semester-card-counter-videos">
                                <span>700+</span>
                                <span>Videos</span>
                            </div>
                        </div>
                    </div>

                    <div class="course-semester-card">
                        <div class="course-semester-card-box">
                            <img src="" alt="" class="course-semester-card-box-image">
                            <div class="course-semester-card-box-span">
                                Semester Two
                                <br>
                                Foundations
                            </div>
                        </div>

                        <div class="course-semester-card-counter">
                            <div class="course-semester-card-counter-courses">
                                <span>100</span>
                                <span>Courses</span>
                            </div>
                            <div class="course-semester-card-counter-videos">
                                <span>700+</span>
                                <span>Videos</span>
                            </div>
                        </div>
                    </div>

                    <div class="course-semester-card">
                        <div class="course-semester-card-box">
                            <img src="" alt="" class="course-semester-card-box-image">
                            <div class="course-semester-card-box-span">
                                Semester Three
                                <br>
                                Intermediate
                            </div>
                        </div>

                        <div class="course-semester-card-counter">
                            <div class="course-semester-card-counter-courses">
                                <span>100</span>
                                <span>Courses</span>
                            </div>
                            <div class="course-semester-card-counter-videos">
                                <span>700+</span>
                                <span>Videos</span>
                            </div>
                        </div>
                    </div>

                    <div class="course-semester-card">
                        <div class="course-semester-card-box">
                            <img src="" alt="" class="course-semester-card-box-image">
                            <div class="course-semester-card-box-span">
                                Semester Four
                                <br>
                                Advanced
                            </div>
                        </div>

                        <div class="course-semester-card-counter">
                            <div class="course-semester-card-counter-courses">
                                <span>100</span>
                                <span>Courses</span>
                            </div>
                            <div class="course-semester-card-counter-videos">
                                <span>700+</span>
                                <span>Videos</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- All Course Semester End -->

        <!-- All Course Start -->
        <div class="default-container">
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

        <!-- Akida Coruse Start Start -->
        <div class="default-container">
            <div class="course-akida-responsive">

                <a href="#">
                    <div class="course-akida-card">
                        <div class="course-akida-card-image">
                            <span>আকীদা</span>
                        </div>
                        <div class="course-akida-card-details">
                            <div class="course-akida-card-title">
                                বেসিক ইসলামি আকীদা
                            </div>
                            <div class="course-akida-card-span">
                                <span class="course-akida-card-span-class">
                                    @include('components.icons.folder')
                                    ২২ ক্লাস
                                </span>

                                <span class="course-akida-card-span-class">
                                    @include('components.icons.clock')
                                    ৬+ ঘন্টা
                                </span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="course-akida-card">
                        <div class="course-akida-card-image">
                            <span>আকীদা</span>
                        </div>
                        <div class="course-akida-card-details">
                            <div class="course-akida-card-title">
                                বেসিক ইসলামি আকীদা
                            </div>
                            <div class="course-akida-card-span">
                                <span class="course-akida-card-span-class">
                                    @include('components.icons.folder')
                                    ২২ ক্লাস
                                </span>

                                <span class="course-akida-card-span-class">
                                    @include('components.icons.clock')
                                    ৬+ ঘন্টা
                                </span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="course-akida-card">
                        <div class="course-akida-card-image">
                            <span>আকীদা</span>
                        </div>
                        <div class="course-akida-card-details">
                            <div class="course-akida-card-title">
                                বেসিক ইসলামি আকীদা
                            </div>
                            <div class="course-akida-card-span">
                                <span class="course-akida-card-span-class">
                                    @include('components.icons.folder')
                                    ২২ ক্লাস
                                </span>

                                <span class="course-akida-card-span-class">
                                    @include('components.icons.clock')
                                    ৬+ ঘন্টা
                                </span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="course-akida-card">
                        <div class="course-akida-card-image">
                            <span>আকীদা</span>
                        </div>
                        <div class="course-akida-card-details">
                            <div class="course-akida-card-title">
                                বেসিক ইসলামি আকীদা
                            </div>
                            <div class="course-akida-card-span">
                                <span class="course-akida-card-span-class">
                                    @include('components.icons.folder')
                                    ২২ ক্লাস
                                </span>

                                <span class="course-akida-card-span-class">
                                    @include('components.icons.clock')
                                    ৬+ ঘন্টা
                                </span>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
        </div>
        <!-- Akida Coruse Start End -->

        <!-- About Islam Start -->
        <div class="default-container">
           <div class="about-responsive">

                <div class="about-box">
                    <img
                        class="about-icon"
                        src="/icons/about-icon.png"
                        alt="Taw Haa Zin Nurain Islamic School About Icon">
                    <span
                        class="about-span">
                        শেষ জামানায় টিকে থাকতে হলে ইসলামিক জ্ঞান অর্জন খুবই জরুরী
                    </span>
                    <h3 class="about-title">
                        কেন ইসলামিক জ্ঞান অর্জন করব?
                    </h3>
                    <p class="about-description">
                        ইসলামে জ্ঞান চর্চার গুরুত্ব অপরিসীম। এ গুরুত্বের কারণেই আল্লাহ তা‘আলা প্রথম মানুষ আদি পিতা আদম (আঃ)-কে সর্বপ্রথম শিক্ষাদান করেন। পবিত্র কুরআনে বলা হয়েছে,وَعَلَّمَ آدَمَ الْأَسْمَاءَ كُلَّهَا ثُمَّ عَرَضَهُمْ عَلَى الْمَلاَئِكَةِ فَقَالَ أَنْبِئُوْنِيْ بِأَسْمَاءِ هَـؤُلاَءِ إِنْ كُنْتُمْ صَادِقِيْنَ- ‘আর আল্লাহ আদমকে সকল বস্ত্তর নাম শিক্ষা দোন। তারপর সেসমস্ত বস্ত্ত ফেরেশতাদের সামনে উপস্থাপন করা হয়। অতঃপর আল্লাহ বলেন, আমাকে তোমরা এগুলোর নাম বলে দাও, যদি তোমরা সত্যবাদী হয়ে থাক’ (বাক্বারাহ ৩১ )। ........
                    </p>
                    <a href="#"
                        class="about-btn">
                        সম্পূর্ণ পড়ুন
                    </a>
                </div>

                <div class="about-image">
                    <img src="/images/about-image.png" alt="Taw Haa Zin Nurain Islamic School About Image">
                </div>

           </div>
        </div>
        <!-- About Islam End -->

        <!-- Swiper Slider Start -->
        <div class="h-[285px] my-16">
            <div class="swiper mySwiper rotate-default">
                <div class="swiper-wrapper">
                    <div class="swiper-slide rounded-md">
                        <a href="#">
                            <div class="w-full h-full">
                                <div class="slide-card-image">
                                    <h2> ইসলামি আকীদা </h2>
                                </div>

                                <div class="slide-card-content">
                                    <span class="text-base font-normal"> ৬+ ঘন্টার কোর্স </span>
                                    <h2 class="text-[22px] font-semibold"> বেসিক ইসলামি আকীদা </h2>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="swiper-slide rounded-md">
                        <a href="#">
                            <div class="w-full h-full">
                                <div class="slide-card-image">
                                    <h2> ইসলামি আকীদা </h2>
                                </div>

                                <div class="slide-card-content">
                                    <span class="text-base font-normal"> ৬+ ঘন্টার কোর্স </span>
                                    <h2 class="text-[22px] font-semibold"> বেসিক ইসলামি আকীদা </h2>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="swiper-slide rounded-md">
                        <a href="#">
                            <div class="w-full h-full">
                                <div class="slide-card-image">
                                    <h2> ইসলামি আকীদা </h2>
                                </div>

                                <div class="slide-card-content">
                                    <span class="text-base font-normal"> ৬+ ঘন্টার কোর্স </span>
                                    <h2 class="text-[22px] font-semibold"> বেসিক ইসলামি আকীদা </h2>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="swiper-slide rounded-md">
                        <a href="#">
                            <div class="w-full h-full">
                                <div class="slide-card-image">
                                    <h2> ইসলামি আকীদা </h2>
                                </div>

                                <div class="slide-card-content">
                                    <span class="text-base font-normal"> ৬+ ঘন্টার কোর্স </span>
                                    <h2 class="text-[22px] font-semibold"> বেসিক ইসলামি আকীদা </h2>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="swiper-slide rounded-md">
                        <a href="#">
                            <div class="w-full h-full">
                                <div class="slide-card-image">
                                    <h2> ইসলামি আকীদা </h2>
                                </div>

                                <div class="slide-card-content">
                                    <span class="text-base font-normal"> ৬+ ঘন্টার কোর্স </span>
                                    <h2 class="text-[22px] font-semibold"> বেসিক ইসলামি আকীদা </h2>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="swiper-slide rounded-md">
                        <a href="#">
                            <div class="w-full h-full">
                                <div class="slide-card-image">
                                    <h2> ইসলামি আকীদা </h2>
                                </div>

                                <div class="slide-card-content">
                                    <span class="text-base font-normal"> ৬+ ঘন্টার কোর্স </span>
                                    <h2 class="text-[22px] font-semibold"> বেসিক ইসলামি আকীদা </h2>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="swiper-slide rounded-md">
                        <a href="#">
                            <div class="w-full h-full">
                                <div class="slide-card-image">
                                    <h2> ইসলামি আকীদা </h2>
                                </div>

                                <div class="slide-card-content">
                                    <span class="text-base font-normal"> ৬+ ঘন্টার কোর্স </span>
                                    <h2 class="text-[22px] font-semibold"> বেসিক ইসলামি আকীদা </h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Swiper Slider End -->

        <!-- Testimonial End -->
        <div class="default-container">
            <div class="testimonial relative">
                <div class="card-left relative">
                    <h2 class="card-left-text">আলহামদুলিল্লাহ! ইতিমধ্যে ৯০০০+ মানুষ প্রতিদিন ইকরা এরাবিক স্কুলের সাথে কুরআন শিখছে</h2>
                </div>

                <div class="card-right">
                    <div class="card">
                        <div class="flex flex-col">
                            <span class="text-sm">৩০+ জন</span>
                            <span class="text-xl">শিক্ষক</span>
                        </div>

                        <div class="flex flex-col">
                            <span class="text-sm">৪ টি গঠনমূলক</span>
                            <span class="text-xl">লার্নিং পথ</span>
                        </div>
                    </div>

                    <div class="card">
                        <div class="flex flex-col">
                            <span class="text-sm">৩০+ জন</span>
                            <span class="text-xl">শিক্ষক</span>
                        </div>

                        <div class="flex flex-col">
                            <span class="text-sm">৪ টি গঠনমূলক</span>
                            <span class="text-xl">লার্নিং পথ</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Register Start -->
        <div class="default-container">
            <div class="register">
                <div class="register-content">
                    <h2 class="register-heading">আজই জয়েন করুন বাংলাদেশের সবচেয়ে <br> ব্যতিক্রমধর্মী
                        <span class="register-heading-sub">
                            অনলাইন মাদ্রাসায়
                        </span>
                    </h2>
                    <p class="register-span">ফ্রি রেজিস্ট্রেশন করে শেখা শুরু করে দিন</p>
                    <button href="#" class="register-button">রেজিষ্ট্রেশন করুন</button>
                </div>

                <div class="register-image">Image</div>
            </div>
        </div>
        <!-- Register End -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="default-container">
                <div class="footer-content">
                    <a href="#" class="footer-logo">
                        <img src="/images/Taw Haa Zin Nurain Logo.png" alt="">
                    </a>

                    <p class="footer-title">কুরআনের জ্ঞানের খোজে, <br>ত্ব-হা যিন নূরাঈনের আঙিনায় স্বাগতম</p>

                    <div class="footer-contact">
                        <p>Email: info@tawhaazinnurain.com</p>
                        <p>Phone: 017 404 33 580</p>
                    </div>
                </div>

                <div class="footer-link">
                    <ul class="footer-list">
                        <li class="footer-item-heading">কোম্পানী</li>
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">আমাদের সম্পর্কে</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">ক্যারিয়ার</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">প্রাইভেসি পলিসি</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">রিফান্ড পলিসি</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">যোগাযোগ</a>
                        </li>
                    </ul>

                    <ul class="footer-list">
                        <li class="footer-item-heading">কোর্সসমূহ</li>
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">লার্নিং পথ</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">সকল কোর্স</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">রিসোর্স</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">প্রাসিং</a>
                        </li>
                    </ul>
                </div>

                <hr>

                <p class="footer-copyright">&copy; IQRA Arabic School 2022 | All rights reserved.</p>
            </div>
        </footer>
        <!-- Footer End -->

    <!-- Swiper Js -->
    <script src="/js/swiper-bundle.min.js"></script>
    <script src="/js/script.js"></script>

    </body>
</html>
