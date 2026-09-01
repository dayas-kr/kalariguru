@props(['variant' => 'default'])

@php
    $variantClasses = match ($variant) {
        'secondary' => 'border border-(--ink)/20 text-(--ink) hover:border-(--ink)/50',
        default => 'bg-(--laterite) text-(--paper) hover:bg-(--laterite-deep)',
    };

    $classes = implode(' ', [
        'px-7 py-3 rounded-full text-sm font-semibold transition-colors active:not-aria-[haspopup]:translate-y-px',
        "[&_svg:not([class*='size-'])]:size-4",
        'inline-flex',
        'shrink-0',
        'items-center',
        'justify-center',
        'gap-1.5',
        $variantClasses,
    ]);
@endphp

<button {{ $attributes->merge(['type' => 'button', 'class' => $classes]) }}>
    {{ $slot }}
</button>
