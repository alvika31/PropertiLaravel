@props(['active'])

@php
    $classes = $active ?? false ? 'rounded-md drop-shadow-md bg-black text-white' : 'rounded-md hover:drop-shadow-md bg-white hover:bg-black hover:text-white';
@endphp


<div {{ $attributes->merge(['class' => $classes]) }}>
    <div class="w-full flex items-center p-3 space-x-3 justify-start">
        {{ $icon }}
        <h1 class="text-base font-medium">{{ $name }}</h1>
    </div>
</div>
