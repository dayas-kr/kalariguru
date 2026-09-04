<section x-data="{ visible: false }" x-intersect.threshold.15.once="visible = true"
    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'" id="about"
    class="px-5 md:px-8 py-20 bg-(--moss-deep) text-(--paper) transition-all duration-700 ease-out">
    <div class="max-w-4xl mx-auto grid md:grid-cols-[1fr_1.4fr] gap-10 items-start">
        <div>
            <p class="text-xs tracking-[0.25em] uppercase text-(--sand) font-semibold mb-3 flex items-center gap-2">
                <span class="ring-mark size-3.5 text-(--sand) shrink-0"></span>
                About our kalari
            </p>
            <h2 class="font-display text-3xl md:text-4xl leading-tight">
                Break your bounds, explore your true potential.
            </h2>
        </div>
        <div>
            <p class="text-(--paper)/80 leading-relaxed text-lg mb-4">
                Sri Gurukulam Kalari (Reg. No. 458/10) is located in Elavally village, Thrissur district,
                Kerala. The Sri Gurukulam Kalari Sangham was founded in 2009 by Shri Vijayan M. Iyyer Gurukkal
                (M.Com, LL.M, Senior Fellowship holder from the Ministry of Culture).
            </p>
            <a href="{{ route('about') }}"
                class="inline-flex items-center gap-2 text-sm font-semibold text-(--sand) hover:text-(--paper) transition-colors">
                Read more about our tradition
                <x-lucide-arrow-right class="size-4" />
            </a>
        </div>
    </div>
</section>
