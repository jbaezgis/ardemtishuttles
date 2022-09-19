@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block py-2 pr-4 pl-3 text-gray-600 text-gray-900 focus:outline-none transition rounded font-bold'
            : 'block py-2 pr-4 pl-3 text-gray-600 md:border-0 md:hover:text-gray-900';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
