@props(['active'])

@php
    $classes = $active ?? false ? 'w-full bg-gray-100 divide-y-2 p-3 font-medium' : 'w-full hover:bg-gray-100 divide-y-2 p-3 font-medium';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
