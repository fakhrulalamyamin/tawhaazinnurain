<x-guest-layout>
    <x-slot name="SecondaryHeader">
        @include('components.secondary-header')
    </x-slot>

    @include('layouts.larning-path')

    <x-slot name="footer">
        @include('components.footer')
    </x-slot>
</x-guest-layout>
