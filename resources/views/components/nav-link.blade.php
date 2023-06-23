@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex items-center p-2 text-gray-900 bg-primary-0 hover:bg-primary-0/70 text-white rounded-lg hover:bg-gray-100 hover:text-black focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
