<section x-data="{ visible: false }" x-intersect.threshold.15.once="visible = true"
    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
    class="transition-all duration-700 ease-out px-5 md:px-8 py-16 max-w-5xl mx-auto">
    <div
        class="rounded-3xl bg-(--ink) text-(--paper) p-8 md:p-12 flex flex-col md:flex-row items-start md:items-center gap-8">
        <span class="size-14 rounded-2xl bg-(--paper)/10 grid place-items-center shrink-0">
            <x-lucide-graduation-cap class="size-7 text-(--brass)" />
        </span>
        <div class="flex-1">
            <h3 class="font-display text-2xl md:text-3xl mb-2">Stay on. Teach.</h3>
            <p class="text-(--paper)/70 leading-relaxed max-w-xl">
                After completing a course, you can continue with us as a paid
                teacher or senior student — placed in India or abroad.
            </p>
        </div>
        <a href="#contact"
            class="shrink-0 px-6 py-3 rounded-full bg-(--paper) text-(--ink) text-sm font-semibold hover:bg-(--paper)/90 transition-colors">
            Ask about teaching
        </a>
    </div>
</section>
