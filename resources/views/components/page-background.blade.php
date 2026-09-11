@props([
    'background' => 'bg-white',
])

<div {{ $attributes->merge(['class' => $background]) }}>
    {{ $slot }}
</div>