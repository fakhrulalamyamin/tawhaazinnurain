@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex items-center p-2 text-gray-900 bg-primary-0 hover:bg-primary-0/70 text-white rounded-lg hover:bg-gray-100 hover:text-black focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5  focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
