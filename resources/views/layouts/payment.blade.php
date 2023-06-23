<div class="-mt-16 p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg shadow">
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
        </div>

        <div class="forum">
            <div class="forum-content">
                <h2 class="content-title">INVOICE ID: THZ12345</h2>
                <p class="title-sub">Last Date of Payment: 10-Dec-2022</p>
            </div>
            <div class="forum-btn">
                <a href="#" class="danger-button">Pay Now</a>
            </div>
        </div>

        <div class="forum">
            <div class="forum-content">
                <h2 class="content-title">INVOICE ID: THZ12345</h2>
                <p class="title-sub">Thanks For Your Payment</p>
            </div>
            <div class="forum-btn">
                <a href="#" class="success-button">Paid</a>
                <p>Paid On: 10-Dec-2022</p>
            </div>
        </div>

        <div class="forum">
            <div class="forum-content">
                <h2 class="content-title">INVOICE ID: THZ12345</h2>
                <p class="title-sub">Last Date of Payment: 10-Dec-2022</p>
            </div>
            <div class="forum-btn">
                <a href="#" class="danger-button">Pay Now</a>
            </div>
        </div>

        <div class="forum">
            <div class="forum-content">
                <h2 class="content-title">INVOICE ID: THZ12345</h2>
                <p class="title-sub">Thanks For Your Payment</p>
            </div>
            <div class="forum-btn">
                <a href="#" class="success-button">Paid</a>
                <p>Paid On: 10-Dec-2022</p>
            </div>
        </div>
    </div>
</div>
