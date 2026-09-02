<section id="offer" class="scroll-mt-28 px-5 md:px-8 py-16 max-w-6xl mx-auto">
    <div x-data="{ visible: false }" x-intersect.threshold.15.once="visible = true"
        :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
        class="transition-all duration-700 ease-out text-center mb-14">
        <span
            class="inline-flex items-center gap-2 pl-3 pr-4 py-1.5 rounded-full bg-(--laterite)/10 text-xs tracking-[0.15em] uppercase font-semibold text-(--laterite) mb-4">
            <x-lucide-hand-heart class="size-3.5" />
            What we offer
        </span>
        <h2 class="font-display text-3xl md:text-4xl mb-3">Everything is arranged for you</h2>
        <p class="max-w-xl mx-auto text-(--ink)/65">
            Stay, food, dress, and daily oils — students only need to bring
            themselves and show up for the pit.
        </p>
    </div>

    <div
        class="grid sm:grid-cols-2 md:grid-cols-3 sm:gap-6 bg-white rounded-2xl overflow-hidden shadow-sm divide-y divide-(--sand) divide-dashed sm:divide-y-0 sm:overflow-visible sm:rounded-none sm:shadow-none sm:bg-transparent">
        <x-ui.feature-card icon="bed-double" title="Stay"
            desc="A 100 sq ft air-conditioned room with an attached bathroom for the full length of your course." />
        <x-ui.feature-card icon="shirt" title="Dress"
            desc="Langot and towel provided — no need to arrange training wear yourself." />
        <x-ui.feature-card icon="utensils-crossed" title="Food"
            desc="Morning tea & snacks, lunch, and dinner. Vegetarian and non-vegetarian options, every day." />
        <x-ui.feature-card icon="droplet" title="Kalari Head Oil"
            desc="25ml a day, prepared in-house for the traditional head massage." />
        <x-ui.feature-card icon="droplets" title="Kalari Body Oil"
            desc="100ml a day, used before training to condition and protect the body." />
        <x-ui.feature-card icon="glass-water" title="Rasayanam"
            desc="100ml a day — a herbal tonic to support recovery and build strength." />
    </div>
</section>
