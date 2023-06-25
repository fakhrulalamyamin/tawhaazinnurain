<div class="p-4 sm:ml-64">
    <div class="p-4 pb-16 border-2 border-gray-200 border-dashed rounded-lg shadow">
        <div class="flex-col items-center justify-center">
            <form wire:submit.prevent="search" class="mt-10">

                <div class="flex items-center justify-center mx-auto mb-10">
                    <div class="max-w-lg flex-1 flex items-center relative">
                        <i class="absolute z-10 left-4"> @include('components.icons.search') </i>
                        <input type="text"
                            wire:model.lazy="search"
                            class="w-full pl-11 bg-gray-200 border border-gray-100 rounded-full relative -z-0"
                            placeholder="Search"
                        >
                        <button class="
                            px-4 py-2 rounded-r-full
                            text-white bg-green-400
                            capitalize absolute right-0 border border-green-400
                            hover:text-gray-600 hover:bg-gray-200 hover:border hover:border-gray-600 transition-all duration-300">
                            search
                        </button>
                    </div>
                </div>
            </form>
            <div class="flex items-center justify-center">
                <a href="" class="tertiary-button">+ Ask Your Question</a>
            </div>
        </div>

        <div class="forum">
            <div class="forum-content">
                <h2 class="content-title">প্রশ্নঃ তাওহীদে রুবুবিয়ার হকগুলো কি কি?</h2>
                <p class="title-sub">উত্তর করেছেন ৫ জন।</p>
            </div>
            <div class="forum-btn">
                <a href="#" class="success-button">Write Answer</a>
                <a href="#" class="danger-button">View Answers</a>
            </div>
        </div>

        <div class="forum">
            <div class="forum-content">
                <h2 class="content-title">প্রশ্নঃ তাওহীদে রুবুবিয়ার হকগুলো কি কি?</h2>
                <p class="title-sub">উত্তর করেছেন ৫ জন।</p>
            </div>
            <div class="forum-btn">
                <a href="#" class="success-button">Write Answer</a>
                <a href="#" class="danger-button">View Answers</a>
            </div>
        </div>

        <div class="forum">
            <div class="forum-content">
                <h2 class="content-title">প্রশ্নঃ তাওহীদে রুবুবিয়ার হকগুলো কি কি?</h2>
                <p class="title-sub">উত্তর করেছেন ৫ জন।</p>
            </div>
            <div class="forum-btn">
                <a href="#" class="success-button">Write Answer</a>
                <a href="#" class="danger-button">View Answers</a>
            </div>
        </div>

        <div class="forum">
            <div class="forum-content">
                <h2 class="content-title">প্রশ্নঃ তাওহীদে রুবুবিয়ার হকগুলো কি কি?</h2>
                <p class="title-sub">উত্তর করেছেন ৫ জন।</p>
            </div>
            <div class="forum-btn">
                <a href="#" class="success-button">Write Answer</a>
                <a href="#" class="danger-button">View Answers</a>
            </div>
        </div>
    </div>
</div>
