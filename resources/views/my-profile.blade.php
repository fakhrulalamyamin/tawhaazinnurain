<x-app-layout>
    {{-- @include('layouts.navigation') --}}
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
               @include('layouts.navigation')
            </h2>
        </x-slot>

        <x-slot name="sidebar">
            <div class="mt-[72px]">
                @include('layouts.sidebar')
            </div>
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
            <div class="p-4 border-2 border-gray-200 bg-green-200 border-dashed rounded-lg shadow">
                <div class="profile">
                    <div class="profile-header">
                        <div class="profile-image">
                            <img src="/images/fakhrulAlamYamin.png" alt="Your profile photo" class="profile-img">
                        </div>
                        <div class="profile-heading ">
                            <h2 class="profile-tittle">Md Fakhrul Alam Yamin</h2>
                            <p class="profile-description">Web Developer</p>
                        </div>
                    </div>
                    <div class="profile-details">
                        <div class="font-poppins font-semibold text-right">
                            <p>Father’s Name</p>
                            <p>Mother’s Name</p>
                            <p>Place Live</p>
                            <p>Education Qualification</p>
                            <p>Educational Institution</p>
                            <p>Date of Birth</p>
                        </div>

                        <div class="font-poppins font-semibold">
                            <ul>
                                <li class="mx-2">:</li>
                                <li class="mx-2">:</li>
                                <li class="mx-2">:</li>
                                <li class="mx-2">:</li>
                                <li class="mx-2">:</li>
                                <li class="mx-2">:</li>
                            </ul>
                        </div>

                        <div class=" font-poppins font-normol">
                            <p>Md. Shahidar Rahman</p>
                            <p>Mst. Laila Begum</p>
                            <p>Rangpur, Rangpur</p>
                            <p>HSC</p>
                            <p>BRUR</p>
                            <p>27/03/2000</p>
                        </div>
                    </div>

                    <div class="profile-btn">
                        <a href="{{route('profile.edit')}}" class="primary-button">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
