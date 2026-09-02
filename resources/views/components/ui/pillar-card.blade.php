@props(['icon', 'title', 'desc', 'link' => '#'])

<div class="flex flex-col h-full">
    <div class="size-12 rounded-full bg-(--laterite)/10 grid place-items-center mb-5">
        <x-dynamic-component :component="'lucide-' . $icon" class="size-5 text-(--laterite)" />
    </div>

    <h4 class="font-display text-xl mb-2 text-(--ink)">{{ $title }}</h4>

    <p class="text-(--ink)/65 text-sm leading-relaxed line-clamp-3 flex-1">
        {{ $desc }}
    </p>

    <a href="{{ $link }}" class="group flex items-center w-fit text-sm font-medium text-(--laterite) mt-4">
        Learn more
        <x-lucide-arrow-right class="size-4 ms-1.5 transition-transform duration-300 group-hover:translate-x-1" />
    </a>
</div>
