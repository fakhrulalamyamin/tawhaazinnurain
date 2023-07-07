<div class="bg-gray-100">
    <div class="default-container">
        <div class="level-one">
            <div class="level-one-content">
                <h1 class="level-one-title">Level - 01 Contains</h1>
                <hr class="divider">

                <div class="module">
                    <div class="module-list">
                        <h3 class="molute-list-heading">Module 01</h3>
                        <p class="molute-list-details">(12 Classes/12 Exams/250 mins)</p>
                    </div>
                </div>

                <div class="w-full" id="accordion-collapse" data-accordion="collapse">
                    <h2 id="accordion-collapse-heading-1">
                        <button type="button" class="module-btn" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                            <div class="flex">
                                @include('components.icons.right-arrow')
                                <span class="module-title">আকীদা - আকীদাতুত ত্বহাবী</span>
                            </div>
                        </button>
                    </h2>

                    <div id="accordion-collapse-body-1" class="hidden ml-8" aria-labelledby="accordion-collapse-heading-1">
                        <p class="collapse-description">ইসলামি আকীদা সম্পর্কে এই প্লেলিষ্টে আমরা জানব। এখানে ১২ টি ক্লাসে আকীদা ও তাওহীদের বেসিক জ্ঞান অর্জন করতে পারবেন। আকীদা কোর্সটি করার জন্য আকীদাতুত ত্ব-হাবী বইটি প্রয়োজন হবে।</p>
                        <a href="#">
                            <div class="collapse-link">
                                <div class="flex items-center gap-2">
                                    @include('components.icons.play')
                                    <p class="collapse-title">আকীদার পরিচয়</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="level-one-subscribe">Subcribe0 Membership</div>
        </div>
    </div>
</div>
