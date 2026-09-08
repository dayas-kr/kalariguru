<x-base-layout title="About Gurukal Antony CC">
    <div x-data="{ menuOpen: false, scrolled: false }" @scroll.window="scrolled = window.scrollY > 16" @keydown.escape.window="menuOpen = false"
        class="flex flex-col min-h-screen">
        <x-ui.header />

        <main class="flex-1 relative px-5 md:px-8 pt-24 md:pt-28 pb-20 overflow-hidden">
            <div class="max-w-5xl mx-auto">

                <!-- Introduction -->
                <section x-data="{ visible: false }" x-intersect.threshold.15.once="visible = true"
                    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                    class="grid md:grid-cols-[18rem_1fr] lg:grid-cols-[20rem_1fr] gap-10 md:gap-14 lg:gap-20 items-center mb-20 transition-all duration-700 ease-out">
                    <!-- Image -->
                    <div class="flex justify-center md:justify-start">
                        <div
                            class="size-56 md:size-64 lg:size-72 rounded-full overflow-hidden bg-(--sand) ring-8 ring-(--sand)/40">
                            <img src="{{ asset('images/gurukkal/antony.jpg') }}" alt="Gurukkal Antony C.C."
                                class="w-full h-full object-cover">
                        </div>
                    </div>

                    <!-- Introduction text -->
                    <div class="text-center md:text-left">
                        <p
                            class="text-xs tracking-[0.25em] uppercase text-(--laterite) font-semibold mb-4 flex items-center justify-center md:justify-start gap-2">
                            <span class="ring-mark size-3.5 text-(--laterite) shrink-0"></span>
                            The Gurukkal
                        </p>

                        <h1 class="font-display text-4xl md:text-5xl lg:text-6xl text-(--ink) leading-[1.05] mb-5">
                            Antony C.C.
                        </h1>

                        <p class="text-lg md:text-xl text-(--ink)/60 leading-relaxed max-w-2xl">
                            A teacher and practitioner dedicated to preserving and
                            passing on the traditional arts of Kalaripayattu, Kalari Marma Treatment and
                            Kalari Yoga.
                        </p>
                    </div>
                </section>

                <!-- Biography -->
                <article class="prose max-w-full">
                    <p>
                        A teacher and practitioner dedicated to preserving and passing on the
                        traditional arts of <strong>Kalaripayattu</strong>,
                        <strong>Kalari Marma Treatment</strong>, and <strong>Kalari Yoga</strong>.
                    </p>

                    <p>
                        <strong>Shri. Antony Gurukkal</strong> has been providing Kalaripayattu and
                        Kalari Yoga training at <strong>Sri Gurukulam Kalari Sangham</strong> since
                        2010.
                    </p>

                    <p>
                        During this period, he has trained more than <strong>6,000 students</strong>
                        across various schools and colleges in the Thrissur district. Notably,
                        students from Government schools and the National Service Scheme (NSS)
                        received training entirely free of cost.
                    </p>

                    <p>
                        Additionally, over <strong>3,000 students</strong> of various age groups have
                        been trained under his guidance in Kalaripayattu, Kalari Marma Therapy, and
                        Kalari Yoga at the main
                        <strong>Sri Gurukulam Kalari Sangham</strong> institute located in Elavally
                        Panchayat.
                    </p>

                    <p>
                        Furthermore, <strong>thousands of people</strong> have successfully recovered
                        from various health issues with the support and principles of Kalari Marma
                        Therapy.
                    </p>
                </article>
            </div>
        </main>

        <x-footer />
    </div>
</x-base-layout>
