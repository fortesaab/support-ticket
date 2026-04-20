@props([
    'label' => null,
    'title',
    'description' => null,
])

<section class="admin-hero">
    @if ($label)
        <span class="admin-kicker">{{ $label }}</span>
    @endif

    <h2 class="admin-title">{{ $title }}</h2>

    @if ($description)
        <p class="admin-copy">{{ $description }}</p>
    @endif

    {{ $slot }}
</section>
