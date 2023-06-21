<x-app-layout>
{{-- @include('layouts.navigation') --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           @include('layouts.navigation')
        </h2>
    </x-slot>

    <x-slot name="sidebar">
        @include('layouts.sidebar')
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}



    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            <div class="grid grid-cols-2 gap-4  font-poppins">
                <a href="" class="min-h-content">
                <div class="px-6 py-6 flex items-center justify-between rounded bg-gray-50 min-h-content">
                        <div class="w-1/2 text-4xl">
                            <span>Course</span>
                            <span>Enrolled</span>
                        </div>
                        <div class="w-1/2 text-right">
                            <span class="text-8xl">12</span>
                        </div>
                    </div>
                </a>
                <a href="" class="min-h-content">
                    <div class="px-6 py-6 flex items-center justify-between rounded bg-gray-50 min-h-content">
                        <div class="w-1/2 text-4xl">
                            <span>Course</span>
                            <span>Active</span>
                        </div>
                        <div class="w-1/2 text-right">
                            <span class="text-8xl">5</span>
                        </div>
                    </div>
                </a>

                <a href="" class="min-h-content">
                    <div class="px-6 py-6 flex items-center justify-between rounded bg-gray-50 min-h-content">
                        <div class="w-1/2 text-4xl">
                            <span>Course</span>
                            <span>Completed</span>
                        </div>
                        <div class="w-1/2 text-right">
                            <span class="text-8xl">7</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
