<x-base-layout title="About Kalari Yoga">
    <div x-data="{ menuOpen: false, scrolled: false }" @scroll.window="scrolled = window.scrollY > 16" @keydown.escape.window="menuOpen = false"
        class="flex flex-col min-h-screen">
        <x-ui.header />

        <main class="flex-1 relative px-5 md:px-8 pt-24 md:pt-28 pb-20 overflow-hidden">
            <div class="max-w-5xl mx-auto">
                <h1 class="text-3xl md:text-4xl font-display text-(--ink) mb-10">About Kalari Yoga</h1>

                <article class="prose max-w-full">
                    <p>
                        Yoga has served as an invaluable medical science in India for centuries. An old Malayalam saying
                        suggests that a human lifespan can be quadrupled if one consumes a natural diet—consisting
                        strictly of edible leaves, fresh fruits, and raw juices—alongside practicing Yoga between 3:30
                        AM and 5:30 AM (Brahma Muhurta). This diet supports optimal kidney function, which directly
                        correlates with human longevity. Conversely, modern diets filled with artificial, processed
                        foods are a primary driver of chronic disease. Combining systematic Yoga with a natural,
                        plant-based diet optimizes nutrient assimilation, expands blood vessels, and helps neutralize
                        chronic conditions in their preliminary stages.
                    </p>

                    <p>
                        To maintain vitality and long-term health through Yoga, practitioners should adhere to specific
                        dietary rules:
                    </p>

                    <ul>
                        <li>
                            <strong>Hydration Timing:</strong> Consume natural fruit juices or pure spring water 1 hour
                            before and 30 minutes after a Yoga session to maximize longevity benefits.
                        </li>
                        <li>
                            <strong>Tubers:</strong> Limit the intake of root vegetables and tubers to minimal
                            quantities.
                        </li>
                        <li>
                            <strong>Pure Produce:</strong> Eat unadulterated fruits grown under direct sunlight. Avoid
                            chemically farmed produce, as synthetic pesticides act as systemic toxins that damage organs
                            over time.
                        </li>
                        <li>
                            <strong>Medical Intervention:</strong> Practitioners should minimize reliance on
                            chemical-based pharmaceuticals, using them only when strictly necessary (such as severe
                            trauma or accidents). Synthetic chemical compounds are largely processed and eliminated
                            through the kidneys; chronic overload can degrade kidney health, disrupt daily practice, and
                            shorten lifespan. Natural, nature-aligned therapies are preferred wherever possible.
                        </li>
                    </ul>

                    <p>
                        Additionally, systematic Yoga practice builds vitality and control, fostering deeper intimacy
                        and mutual fulfillment between partners. Intimate relations are best approached when there is a
                        complete harmony of mind and body, ideally oriented toward bringing new life into the world.
                        Maintaining self-control and discipline over one's sexual energy preserves personal dignity and
                        core vitality.
                    </p>

                    <p>
                        Modern society treats Yoga as a master discipline to prevent illness and maintain mental
                        balance. Modern Yoga traces its roots to Anuthamam, the 18th segment of Kalaripayattu
                        characterized by slow, deliberate physical movements and postures. These were practiced in the
                        Upasana Kalari—the 8th section of the Ashttakon Kalari. Chief Kalari masters imparted these
                        practices to advanced students seated around round wooden tables; over time, these techniques
                        evolved into modern Yoga. Those who trained in these Upasana Kalaris became the Munisreshttas
                        (sages), Rishis (ancient scientists), and Yogacharyas who developed and shared the discipline
                        for the welfare of all.
                    </p>

                    <p>
                        Yoga remains free of caste, creed, religious bias, and rigid ritualism. During practice, the
                        practitioner connects directly with Ishwara (the Supreme Consciousness).
                    </p>

                    <p>
                        Through regular practice, individuals develop a deep intuitive understanding of body anatomy and
                        self-awareness. When people truly understand their own bodies and states of mind, interpersonal
                        conflict declines, fostering personal and collective peace. Postural practice traditionally
                        begins with Vajrasana, with additional asanas taught adaptively by an Acharya based on seasonal
                        and climatic conditions. Guidance from a knowledgeable master is essential to prevent injury.
                        Ultimately, a practitioner cultivates devotion, honesty, and unconditional love toward the
                        Supreme Consciousness, allowing that awareness to guide every movement and action in daily life.
                    </p>
                </article>
            </div>
        </main>

        <!-- Footer -->
        <x-footer />
    </div>
</x-base-layout>
