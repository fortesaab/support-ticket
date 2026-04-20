@props([
    'variant' => 'primary',
    'type' => 'button',
    'size' => null,
])

@php
    $classes = 'btn';

    $classes .= match ($variant) {
        'secondary' => ' btn-secondary',
        default => ' btn-primary',
    };

    if ($size === 'sm') {
        $classes .= ' btn-sm';
    }
@endphp

<button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>
