@props(['icon', 'title', 'desc'])

<div x-data="{ visible: false }" x-intersect.threshold.15.once="visible = true"
    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
    class="sm:rounded-2xl sm:shadow-sm sm:bg-white/50 px-6 py-4 transition-all">
    <div class="flex items-center gap-3">
        <span class="size-11 rounded-full bg-(--laterite)/10 grid place-items-center mb-4">
            <x-dynamic-component :component="'lucide-' . $icon" class="size-5 text-(--laterite)" />
        </span>

        <h4 class="font-display text-lg mb-1.5">{{ $title }}</h4>
    </div>

    <p class="text-sm text-(--ink)/65 leading-relaxed">{{ $desc }}</p>
</div>
