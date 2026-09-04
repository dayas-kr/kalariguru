<x-base-layout title="About Kalari Marma Therapy">
    <div x-data="{ menuOpen: false, scrolled: false }" @scroll.window="scrolled = window.scrollY > 16" @keydown.escape.window="menuOpen = false"
        class="flex flex-col min-h-screen">
        <x-ui.header />

        <main class="flex-1 relative px-5 md:px-8 pt-24 md:pt-28 pb-20 overflow-hidden">
            <div class="max-w-5xl mx-auto">
                <h1 class="text-3xl md:text-4xl font-display text-(--ink) mb-10">About Kalari Marma Therapy</h1>

                <article class="prose max-w-full">
                    <p>
                        Kalarimarma is a wonderful way to find relief from the imbalances caused by modern lifestyles
                        and to rejuvenate both body and mind. It offers specialized treatment techniques to treat joint
                        pain, nervous disorders, and muscle or bone issues, alongside cleansing processes for body
                        fluids and the skin. These treatments strengthen the body’s defense mechanisms against disease,
                        promote youthfulness, and enhance longevity.
                    </p>

                    <p>
                        In ancient times, Kalari Marma Chikitsa (Marma Healing) was considered the backbone of Kalaris.
                        Masters transferred the secrets of Kalari Marma only after a student completed their
                        Kalaripayattu training. Acquiring this knowledge required immense physical strength, mental
                        discipline, and years of dedicated effort—which is why genuine Kalari Marma masters are rare
                        today. A Kalari master possesses deep psycho-physiological insight and practical knowledge of
                        the body's vital energy points, known as 'Marmas.' This grants them extraordinary control over
                        physical body mechanics and vital energy.
                    </p>

                    <p>
                        Before treatment, the master evaluates the patient thoroughly, checking their pulse and nerve
                        conditions. Because treatments adapt strictly to the individual's unique constitution,
                        prescriptions vary from person to person. This personalized approach restores balance, improves
                        health, and ultimately supports a longer life. Traditional practitioners study Kalaripayattu for
                        12 years before treating patients independently. Without foundational Kalaripayattu training,
                        one cannot master or effectively apply Kalari Marma healing—and conversely, training in
                        Kalaripayattu remains incomplete without mastering Marma Chikitsa.
                    </p>

                    <h3>24 Main Branches :-</h3>

                    <ul>
                        <li>Kai-Uzhichil Therapy</li>
                        <li>Deharaksha Kai-Uzhichil Therapy</li>
                        <li>Marma Therapy</li>
                        <li>Kizhi Therapy</li>
                        <li>Chavitti-Uzhichil Therapy</li>
                        <li>Pothichil Therapy</li>
                        <li>Lepanadi Therapy</li>
                        <li>Choornanadi Therapy</li>
                        <li>Kettu-Vally Therapy</li>
                        <li>Kashayadi Therapy</li>
                        <li>Rasadi Therapy</li>
                        <li>Ashtanga Therapy</li>
                        <li>Navanga Therapy</li>
                        <li>Sandhi Therapy</li>
                        <li>Moolaka Therapy</li>
                        <li>Thattu Therapy</li>
                        <li>Vadivu Therapy</li>
                        <li>Kettu Therapy</li>
                        <li>Oushadha Therapy</li>
                        <li>Thalam Therapy</li>
                        <li>Dhara Therapy</li>
                        <li>Kooluzhichil Therapy</li>
                        <li>Water Therapy</li>
                        <li>Kayavridhi Therapy</li>
                    </ul>

                    <h3>12 Sub-Branches :-</h3>

                    <ul>
                        <li>Viyarpikkal Therapy</li>
                        <li>Bhageeka-Uzhichil Therapy</li>
                        <li>Bhageeka-Lepana Therapy</li>
                        <li>Pottikkal Therapy</li>
                        <li>Uruttu Therapy</li>
                        <li>Kanal Therapy</li>
                        <li>Thailam-Muruk Therapy</li>
                        <li>Kettu-Dhara Therapy</li>
                        <li>Pizhichil Therapy</li>
                        <li>Amarthal (Amazhthi) Therapy</li>
                        <li>Thottu Therapy</li>
                        <li>Pathya Therapy</li>
                    </ul>
                </article>
            </div>
        </main>

        <!-- Footer -->
        <x-footer />
    </div>
</x-base-layout>
