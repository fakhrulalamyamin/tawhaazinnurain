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
        <header class="header">
            <img src="/images/Taw Haa Zin Nurain Hero Image.jpg" alt="" class="header-img">

            <!-- Navigation -->
            @include('components.default-navigation')

            <div class="default-container">
                <div class="hero">
                    <h1 class="hero-heading">
                        কুরআন শিখুন
                        <br>
                        <span class="text-primary-0"> সহজ </span>
                        পদ্ধতিতে
                    </h1>

                    <span class="hero-heading-span">
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
        </header>

        <!-- Courses Start -->
        <div class="default-container">
            <div class="courses-responsive">

                <div class="courses-content">
                    <div class="courses-devider"></div>

                    <h2 class="courses-heading-top">অভিজ্ঞ উস্তাদদের সান্যিদ্ধে <br> <span class="courses-span"> কুরআন, হাসিদের </span> আলোকে ইসলামিক <br> বেসিক বিষয়গুলো শিখুন
                    </h2>
                </div>

                <div class="courses-button">
                    <button class="courses-btn">সকল কোর্স</button>
                </div>

            </div>
        </div>
        <!-- Courses End -->

        <!-- All Course Semester Start -->
        <div class="default-container">
            <div class="semester-responsive">
                <a href="#">
                    <div class="semester-card">
                        <div class="semester-card-box">
                            <img src="" alt="" class="semester-card-box-image">
                            <div class="semester-card-box-span">
                                Semester One
                                <br>
                                The Essentials
                            </div>
                        </div>

                        <div class="semester-card-counter">
                            <div class="semester-card-counter-courses">
                                <span>100</span>
                                <span>Courses</span>
                            </div>
                            <div class="semester-card-counter-videos">
                                <span>700+</span>
                                <span>Videos</span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="semester-card">
                        <div class="semester-card-box">
                            <img src="" alt="" class="semester-card-box-image">
                            <div class="semester-card-box-span">
                                Semester Two
                                <br>
                                Foundations
                            </div>
                        </div>

                        <div class="semester-card-counter">
                            <div class="semester-card-counter-courses">
                                <span>100</span>
                                <span>Courses</span>
                            </div>
                            <div class="semester-card-counter-videos">
                                <span>700+</span>
                                <span>Videos</span>
                            </div>
                        </div>
                    </div>
                </a>

                <a  href="#">
                    <div class="semester-card">
                        <div class="semester-card-box">
                            <img src="" alt="" class="semester-card-box-image">
                            <div class="semester-card-box-span">
                                Semester Three
                                <br>
                                Intermediate
                            </div>
                        </div>

                        <div class="semester-card-counter">
                            <div class="semester-card-counter-courses">
                                <span>100</span>
                                <span>Courses</span>
                            </div>
                            <div class="semester-card-counter-videos">
                                <span>700+</span>
                                <span>Videos</span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="semester-card">
                        <div class="semester-card-box">
                            <img src="" alt="" class="semester-card-box-image">
                            <div class="semester-card-box-span">
                                Semester Four
                                <br>
                                Advanced
                            </div>
                        </div>

                        <div class="semester-card-counter">
                            <div class="semester-card-counter-courses">
                                <span>100</span>
                                <span>Courses</span>
                            </div>
                            <div class="semester-card-counter-videos">
                                <span>700+</span>
                                <span>Videos</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- All Course Semester End -->

        <!-- Courses Start -->
        <div class="default-container">
            <div class="courses-responsive">

                <div class="courses-content">
                    <div class="courses-devider"></div>

                    <h2 class="courses-heading-bottom">গঠনমূলক সিলেবাসের মাধ্যমে ধাপে ধাপে <br>
                        <span class="courses-span">
                            ইসলামের খুটিনাটি
                        </span> বিষয়ে
                        <br>
                        জ্ঞান অর্জন করুন
                    </h2>
                </div>

                <div class="courses-button">
                    <button class="courses-btn">সকল কোর্স</button>
                </div>

            </div>
        </div>
        <!-- Courses End -->

        <!-- Akida Coruse Start Start -->
        <div class="default-container">
            <div class="akida-responsive">
                <div class="akida-due-card">
                    <div class="akida-single-card">
                        <a href="#" >
                            <div class="course-akida-card md:mb-4">
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
                    <div class="akida-single-card">
                        <a href="#" >
                            <div class="course-akida-card md:mb-4">
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

                <div class="akida-due-card">
                    <div class="akida-single-card">
                        <a href="#" >
                            <div class="course-akida-card md:mb-4">
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
                    <div class="akida-single-card">
                        <a href="#" >
                            <div class="course-akida-card md:mb-4">
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
            </div>
        </div>
        <!-- Akida Coruse End -->

        <!-- About Islam Start -->
        <div class="default-container lg:pt-16">
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
                    <img
                        class="about-img"
                        src="/images/about-image.png" alt="Taw Haa Zin Nurain Islamic School About Image">
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
            <div class="testimonial">
                <img src="/images/testimonial.jpeg" alt="" class="testimonial-img">
                <div class="card-left relative">
                    <h2 class="card-left-text">
                        <span class="text-span-1"> আলহামদুলিল্লাহ! ইতিমধ্যে </span> <span class="text-span-2"> <span class="text-span-3"> ৯০০০+ মানুষ প্রতিদিন ইকরা </span> <span class="text-span-4"> এরাবিক স্কুলের সাথে </span> কুরআন শিখছে</h2>
                </div>

                <div class="card-right">
                    <div class="card">
                        <div class="flex flex-col">
                            <span class="text-sm">৩০+ জন</span>
                            <span class="text-xl text-white">শিক্ষক</span>
                        </div>

                        <div class="flex flex-col">
                            <span class="text-sm">৪ টি গঠনমূলক</span>
                            <span class="text-xl text-white">লার্নিং পথ</span>
                        </div>
                    </div>

                    <div class="card">
                        <div class="flex flex-col">
                            <span class="text-sm">৩০+ জন</span>
                            <span class="text-xl text-white">শিক্ষক</span>
                        </div>

                        <div class="flex flex-col">
                            <span class="text-sm">৪ টি গঠনমূলক</span>
                            <span class="text-xl text-white">লার্নিং পথ</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Footer Start -->
        @include('components.footer')
        <!-- Footer End -->

    <!-- Swiper Js -->
    <script src="/js/swiper-bundle.min.js"></script>
    <script src="/js/script.js"></script>

    </body>
</html>
