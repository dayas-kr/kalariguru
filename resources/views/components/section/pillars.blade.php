<section x-data="{ visible: false }" x-intersect.threshold.15.once="visible = true"
    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
    class="transition-all duration-700 ease-out px-5 md:px-8 py-20 max-w-6xl mx-auto">
    <div class="grid md:grid-cols-3 gap-10">
        <div>
            <div class="size-12 rounded-full bg-(--laterite)/10 grid place-items-center mb-4">
                <x-lucide-swords class="size-5 text-(--laterite)" />
            </div>
            <h4 class="font-display text-xl mb-2">Kalaripayattu</h4>
            <p class="text-(--ink)/65 text-sm leading-relaxed line-clamp-3">
                The practice of Kalaripayattu, along with its invaluable lifestyle, is uniquely designed to
                enhance
                human potential and maintain the equilibrium of a person's physical, mental, and spiritual
                layers of
                life.
            </p>
            <a href="#" class="flex items-center text-sm font-medium">Learn more
                <x-lucide-arrow-right class="size-4 ms-1.5" /></a>
        </div>
        <div>
            <div class="size-12 rounded-full bg-(--moss)/10 grid place-items-center mb-4">
                <x-lucide-hand class="size-5 text-(--moss)" />
            </div>
            <h4 class="font-display text-xl mb-2">Kalari Marma Therapy</h4>
            <p class="text-(--ink)/65 text-sm leading-relaxed line-clamp-3">
                Kalarimarma is a wonderful way to find relief from the imbalances caused by modern lifestyles
                and to rejuvenate both body and mind. It offers specialized treatment techniques to treat joint
                pain, nervous disorders, and muscle or bone issues, alongside cleansing processes for body
                fluids and the skin.
            </p>
            <a href="" class="flex items-center text-sm font-medium">Learn more <x-lucide-arrow-right
                    class="size-4 ms-1.5" /></a>
        </div>
        <div>
            <div class="size-12 rounded-full bg-(--brass)/15 grid place-items-center mb-4">
                <x-lucide-flower-2 class="size-5 text-(--brass)" />
            </div>
            <h4 class="font-display text-xl mb-2">Kalari Yoga</h4>
            <p class="text-(--ink)/65 text-sm leading-relaxed line-clamp-3">
                Yoga has served as an invaluable medical science in India for centuries. An old Malayalam saying
                suggests that a human lifespan can be quadrupled if one consumes a natural diet—consisting
                strictly of edible leaves, fresh fruits, and raw juices—alongside practicing Yoga between 3:30
                AM and 5:30 AM (Brahma Muhurta). This diet supports optimal kidney function, which directly
                correlates with human longevity.
            </p>
            <a href="" class="flex items-center text-sm font-medium">Learn more <x-lucide-arrow-right
                    class="size-4 ms-1.5" /></a>
        </div>
    </div>
</section>
