<section x-data="{ visible: false }" x-intersect.threshold.15.once="visible = true"
    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
    class="transition-all duration-700 ease-out px-5 md:px-8 py-20 max-w-6xl mx-auto">
    <div class="grid md:grid-cols-3 gap-10">
        <x-ui.pillar-card icon="swords" title="Kalaripayattu"
            desc="The practice of Kalaripayattu, along with its invaluable lifestyle, is uniquely designed to enhance human potential and maintain the equilibrium of a person's physical, mental, and spiritual layers of life."
            link="{{ route('kalaripayattu') }}" />

        <x-ui.pillar-card icon="hand" title="Kalari Marma Therapy"
            desc="Kalarimarma is a wonderful way to find relief from the imbalances caused by modern lifestyles and to rejuvenate both body and mind. It offers specialized treatment techniques to treat joint pain, nervous disorders, and muscle or bone issues, alongside cleansing processes for body fluids and the skin."
            link="{{ route('kalari-marma-therapy') }}" />

        <x-ui.pillar-card icon="flower-2" title="Kalari Yoga"
            desc="Yoga has served as an invaluable medical science in India for centuries. An old Malayalam saying suggests that a human lifespan can be quadrupled if one consumes a natural diet—consisting strictly of edible leaves, fresh fruits, and raw juices—alongside practicing Yoga between 3:30 AM and 5:30 AM (Brahma Muhurta). This diet supports optimal kidney function, which directly correlates with human longevity."
            link="{{ route('kalari-yoga') }}" />
    </div>
</section>
