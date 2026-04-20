@props([
    'variant' => 'neutral',
])

@php
    $badgeClasses = 'role-badge';

    $badgeClasses .= match ($variant) {
        'admin' => ' badge-admin',
        'agent' => ' badge-agent',
        'customer' => ' badge-customer',
        'neutral' => ' badge-none',
        default => ' badge-none',
    };
@endphp

<span {{ $attributes->merge(['class' => $badgeClasses]) }}>
    {{ $slot }}
</span>
