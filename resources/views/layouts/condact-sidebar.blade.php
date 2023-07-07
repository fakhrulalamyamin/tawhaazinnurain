<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
</button>

<aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-86 border h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full w-full px-6 py-4 overflow-y-auto text-white bg-gray-600">
        <div class="w-full h-full py-4 flex flex-col gap-2">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                    @include('components.left-arrow')
                    <h3 class="font-poppins text-xl font-semibold">Course Overview</h3>
                </div>
                <img src="/icons/course-condact-logo.png" alt="Couser Condact page logo">
            </div>

            <div class="flex items-center justify-between">
                <div class="w-[100px] h-[100px] rounded-full bg-red-300 mr-2"></div>
                <div>
                    <h2 class="font-poppins font-semibold text-xl">Diploma in Islamic <br> Studies - Batch 3</h2>
                    <div class="flex items-center justify-between mt-2">
                        <div class="flex items-center gap-1">
                            @include('components.icons.folder')
                            <p class="text-xs">60 Classes</p>
                        </div>
                        <div class="flex items-center gap-1">
                            @include('components.icons.clock')
                            <p class="text-xs">120 Hours</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-[300px] mt-8" id="accordion-collapse" data-accordion="collapse">
                <h2 id="accordion-collapse-heading-1">
                    <button type="button" class="w-full flex items-center justify-between px-4 py-4 font-poppins font-medium text-left text-sm text-gray-100 rounded-xl bg-[#5884B0] hover:bg-[#5884B0]/90 duration-300 transition" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                        <span>Module 01 | Quran, Dua, Sirah</span>
                        <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>

                <a href="#">
                    <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                        <div class="mt-6 w-full flex items-center justify-between px-4 py-4 font-medium text-left text-white text-base bg-[#5884B0]/10 rounded-xl hover:bg-[#5884B0] font-siliguri duration-500 transition-all">
                            <div class="flex items-center gap-2">
                                @include('components.icons.play')
                                <p class="font-siliguri">কুরআন তিলাওয়াত - ০১</p>
                            </div>

                            <div class="flex items-center gap-1">
                                @include('components.icons.clock')
                                <p class="text-xs font-poppins">56 min</p>
                            </div>
                        </div>

                        <div class="mt-6 w-full flex items-center justify-between px-4 py-4 font-medium text-left text-white text-base bg-[#5884B0]/10 rounded-xl hover:bg-[#5884B0] font-siliguri duration-500 transition-all">
                            <div class="flex items-center gap-2">
                                @include('components.icons.play')
                                <p class="font-siliguri">সীরাহ - ০১</p>
                            </div>

                            <div class="flex items-center gap-1">
                                @include('components.icons.clock')
                                <p class="text-xs font-poppins">56 min</p>
                            </div>
                        </div>

                        <div class="mt-6 w-full flex items-center justify-between px-4 py-4 font-medium text-left text-white text-base bg-[#5884B0]/10 rounded-xl hover:bg-[#5884B0] font-siliguri duration-500 transition-all">
                            <div class="flex items-center gap-2">
                                @include('components.icons.play')
                                <p class="font-siliguri">দুয়া - ০১</p>
                            </div>

                            <div class="flex items-center gap-1">
                                @include('components.icons.clock')
                                <p class="text-xs font-poppins">56 min</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</aside>
