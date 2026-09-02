<section class="relative px-5 md:px-8 pt-24 md:pt-28 pb-20 overflow-hidden">
    <div class="relative max-w-3xl mx-auto text-center">
        <p
            class="text-xs tracking-[0.25em] uppercase text-(--laterite) font-semibold mb-4 flex items-center justify-center gap-2">
            <span class="ring-mark size-3.5 text-(--laterite) shrink-0"></span>
            Traditional Kalaripayattu · Kerala
        </p>
        <h1 class="font-display text-5xl md:text-7xl leading-[1.05] mb-6 text-(--ink)">
            Trained in the earth, <br class="hidden md:block"> passed down whole.
        </h1>
        <p class="max-w-xl mx-auto text-(--ink)/70 text-lg mb-10 leading-relaxed">
            At Sri Gurukulam Kalari, the pit, marma healing, and yoga are one
            discipline — taught the same way in Puvathur for generations.
        </p>
        <div class="flex flex-wrap items-center justify-center gap-4">
            <a href="#courses" class="contents"><x-ui.button>Visit courses</x-ui.button></a>
            <a href="#contact" class="contents"><x-ui.button variant="secondary">Visit kalari</x-ui.button></a>
        </div>
    </div>

    <div x-data="{ visible: false }" x-intersect.threshold.15.once="visible = true" class="max-w-4xl mx-auto mt-16">
        <div x-show="visible" x-transition:enter="transition ease-out duration-700"
            x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0"
            class="rounded-3xl bg-(--sand) aspect-video grid place-items-center relative overflow-hidden">
            <img src="{{ asset('images/hero.jpeg') }}" alt="The kalari pit, Puvathur"
                class="w-full h-full object-cover">
        </div>
    </div>
</section>
