<x-base-layout>
    @php
        $offerings = [
            [
                'icon' => 'bed-double',
                'title' => 'Stay',
                'desc' =>
                    'A 100 sq ft air-conditioned room with an attached bathroom for the full length of your course.',
            ],
            [
                'icon' => 'shirt',
                'title' => 'Dress',
                'desc' => 'Langot and towel provided — no need to arrange training wear yourself.',
            ],
            [
                'icon' => 'utensils-crossed',
                'title' => 'Food',
                'desc' => 'Morning tea & snacks, lunch, and dinner. Vegetarian and non-vegetarian options, every day.',
            ],
            [
                'icon' => 'droplet',
                'title' => 'Kalari Head Oil',
                'desc' => '25ml a day, prepared in-house for the traditional head massage.',
            ],
            [
                'icon' => 'droplets',
                'title' => 'Kalari Body Oil',
                'desc' => '100ml a day, used before training to condition and protect the body.',
            ],
            [
                'icon' => 'flask-conical',
                'title' => 'Rasayanam',
                'desc' => '100ml a day — a herbal tonic to support recovery and build strength.',
            ],
        ];
    @endphp

    <div x-data="{ menuOpen: false, scrolled: false }" @scroll.window="scrolled = window.scrollY > 16" @keydown.escape.window="menuOpen = false">
        <div style="display: contents">
            <!-- Header -->
            <header class="fixed top-0 inset-x-0 z-50 flex justify-center px-4 pt-4">
                <div class="w-full max-w-5xl h-16 px-4 md:px-5 rounded-full flex items-center bg-white/55 backdrop-blur-[20px] backdrop-saturate-160 border border-white/60 transition-shadow duration-300"
                    :class="scrolled ? 'shadow-[0_8px_30px_rgba(33,26,20,0.12)]' : 'shadow-[0_2px_10px_rgba(33,26,20,0.06)]'">

                    <a href="{{ route('home') }}" aria-label="Sri Gurukulam Kalari home"
                        class="mr-auto flex items-center gap-2.5">
                        <span
                            class="size-9 rounded-full overflow-hidden shrink-0 block bg-(--moss) ring-1 ring-white/60">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlrFlgymVxdH5o9c29ak36tGzNRAVsL6EezT-SP2189uGKywCS9_Q6dLAF&s=10"
                                alt="Sri Gurukulam Kalari logo" class="w-full h-full object-cover">
                        </span>
                        <span class="text-base leading-none font-display">
                            Sri Gurukulam <span class="text-(--laterite)">Kalari</span>
                        </span>
                    </a>

                    <nav x-data="{
                        links: [
                            { l: 'Home', h: '/' },
                            { l: 'About', h: '#about' },
                            { l: 'Courses', h: '#courses' },
                            { l: 'Contact', h: '#contact' },
                        ]
                    }" aria-label="Primary navigation"
                        class="hidden md:flex items-center gap-1">
                        <template x-for="link in links" :key="link.l">
                            <a :href="link.h" x-text="link.l"
                                class="px-3.5 py-2 rounded-full text-sm font-medium text-(--ink)/70 hover:text-(--ink) hover:bg-white/50 transition-colors"></a>
                        </template>
                    </nav>

                    <a href="#contact"
                        class="hidden md:inline-flex ml-2 px-5 py-2.5 rounded-full bg-(--laterite) text-(--paper) text-sm font-semibold hover:bg-(--laterite-deep) transition-colors">
                        Visit us
                    </a>

                    <button type="button" @click="menuOpen = true" aria-label="Open navigation menu"
                        :aria-expanded="menuOpen" aria-controls="mobile-navigation"
                        class="md:hidden ml-auto size-10 grid place-items-center rounded-full hover:bg-white/50 transition-colors">
                        <x-lucide-menu class="size-6 text-(--ink)" />
                    </button>
                </div>
            </header>

            <!-- Mobile navigation -->
            <div x-show="menuOpen" x-cloak class="md:hidden fixed inset-0 z-50">
                <div x-show="menuOpen" x-transition:enter="transition-opacity ease-out duration-300"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                    x-transition:leave="transition-opacity ease-in duration-200" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0" @click="menuOpen = false" class="absolute inset-0 bg-(--ink)/50">
                </div>

                <div x-show="menuOpen" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                    x-transition:leave="transition ease-in duration-250" x-transition:leave-start="translate-x-0"
                    x-transition:leave-end="translate-x-full"
                    class="absolute right-0 top-0 h-full w-[78%] max-w-xs bg-(--paper) shadow-2xl flex flex-col">

                    <div class="h-18 flex items-center justify-between px-5 border-b border-(--sand)">
                        <span class="text-base font-display">Menu</span>
                        <button @click="menuOpen = false" aria-label="Close menu"
                            class="size-10 grid place-items-center rounded-full hover:bg-(--sand)/60 transition-colors">
                            <x-lucide-x class="size-5 text-(--ink)" />
                        </button>
                    </div>

                    <nav x-data="{
                        links: [
                            { l: 'Home', h: '#' },
                            { l: 'About', h: '#about' },
                            { l: 'Courses', h: '#courses' },
                            { l: 'Contact', h: '#contact' },
                        ]
                    }" class="flex flex-col px-5 py-6 gap-1">
                        <template x-for="(link, i) in links" :key="link.l">
                            <a :href="link.h" x-text="link.l" @click="menuOpen = false"
                                class="py-3.5 text-lg font-display border-b border-(--sand)/70 text-(--ink) hover:text-(--laterite) transition-colors"></a>
                        </template>
                    </nav>

                    <a href="#contact" @click="menuOpen = false"
                        class="m-5 mt-auto px-5 py-3 rounded-full bg-(--laterite) text-(--paper) text-sm font-semibold text-center hover:bg-(--laterite-deep) transition-colors">
                        Visit the kalari
                    </a>
                </div>
            </div>
        </div>

        <!-- Hero -->
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
                    <a href="#contact" class="contents"><x-ui.button variant="secondary">Visit
                            thekalari</x-ui.button></a>
                </div>
            </div>

            <div x-data="{ visible: false }" x-intersect.threshold.15.once="visible = true" class="max-w-4xl mx-auto mt-16">
                <div x-show="visible" x-transition:enter="transition ease-out duration-700"
                    x-transition:enter-start="opacity-0 translate-y-8"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="rounded-3xl bg-(--sand) aspect-video grid place-items-center relative overflow-hidden">
                    <img src="{{ asset('images/hero.jpeg') }}" alt="The kalari pit, Puvathur"
                        class="w-full h-full object-cover">
                </div>
            </div>
        </section>

        <!-- About -->
        <section x-data="{ visible: false }" x-intersect.threshold.15.once="visible = true"
            :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'" id="about"
            class="px-5 md:px-8 py-20 bg-(--moss-deep) text-(--paper) transition-all duration-700 ease-out">
            <div class="max-w-4xl mx-auto grid md:grid-cols-[1fr_1.4fr] gap-10 items-start">
                <div>
                    <p
                        class="text-xs tracking-[0.25em] uppercase text-(--sand) font-semibold mb-3 flex items-center gap-2">
                        <span class="ring-mark size-3.5 text-(--sand) shrink-0"></span>
                        About the kalari
                    </p>
                    <h2 class="font-display text-3xl md:text-4xl leading-tight">
                        A red-earth pit before it's a practice
                    </h2>
                </div>
                <div>
                    <p class="text-(--paper)/80 leading-relaxed text-lg mb-4">
                        Every morning, students step down into the sunken pit of packed
                        red earth — the same descent practised for centuries before the
                        first strike is thrown. Training moves through footwork, weapons,
                        and marma, the body's vital points, under gurus trained in the
                        Vadakkan tradition of northern Kerala.
                    </p>
                    <a href="#"
                        class="inline-flex items-center gap-2 text-sm font-semibold text-(--sand) hover:text-(--paper) transition-colors">
                        Read more about our tradition
                        <x-lucide-arrow-right class="size-4" />
                    </a>
                </div>
            </div>
        </section>

        <!-- Courses -->
        <section x-data="{ activeTab: '{{ $courses->first()->id }}' }" id="courses" class="scroll-mt-28 px-5 md:px-8 py-20 bg-(--paper-soft)">
            <div class="max-w-4xl mx-auto">

                <div x-data="{ visible: false }" x-intersect.threshold.15.once="visible = true"
                    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                    class="transition-all duration-700 ease-out text-center mb-10">
                    <span
                        class="inline-flex items-center gap-2 pl-3 pr-4 py-1.5 rounded-full bg-(--laterite)/10 text-xs tracking-[0.15em] uppercase font-semibold text-(--laterite) mb-4">
                        <x-lucide-graduation-cap class="size-3.5" />
                        Courses
                    </span>

                    <h2 class="font-display text-3xl md:text-4xl mb-3">
                        Four paths, one tradition
                    </h2>

                    <p class="max-w-xl mx-auto text-(--ink)/65">
                        From a 21-day introduction to a 12-year certificate path —
                        every course is built from the same 21-day semester.
                    </p>
                </div>

                {{-- Tabs --}}
                <div x-data="{ visible: false }" x-intersect.threshold.15.once="visible = true"
                    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                    class="transition-all duration-700 ease-out flex justify-center mb-10">
                    <div
                        class="rounded-full p-1.5 flex flex-wrap justify-center gap-1
               bg-white/55 backdrop-blur-[20px] backdrop-saturate-160
               border border-white/60">
                        @foreach ($courses as $course)
                            <button type="button" @click="activeTab = '{{ $course->id }}'"
                                :aria-selected="activeTab === '{{ $course->id }}'" role="tab"
                                class="px-4 md:px-5 py-2 rounded-full text-sm font-semibold transition-all duration-300 text-(--ink)/60 hover:text-(--ink) aria-selected:bg-(--laterite) aria-selected:text-(--paper) aria-selected:shadow-sm">
                                {{ $course->duration === '21 days' ? 'Basic' : $course->duration }}
                            </button>
                        @endforeach
                    </div>
                </div>

                {{-- Tab Panels --}}
                <div>
                    @foreach ($courses as $course)
                        <div role="tabpanel" x-show="activeTab === '{{ $course->id }}'"
                            x-transition:enter="transition-all duration-500 ease-out"
                            x-transition:enter-start="opacity-0 translate-y-4"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            class="rounded-2xl bg-white/60 border border-(--sand) overflow-hidden">
                            <div class="p-6 grid md:grid-cols-[auto_1fr] gap-6">

                                <div class="aspect-video md:h-44 bg-amber-950/50">
                                    <img src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->name }}"
                                        class="w-full h-full object-cover">
                                </div>

                                <div class="flex flex-col space-y-2">
                                    <h3 class="font-display text-2xl">
                                        {{ $course->name }}
                                    </h3>

                                    <p class="text-(--ink)/70 leading-relaxed max-w-xl">
                                        Lorem ipsum dolor, sit amet consectetur
                                        adipisicing elit. Saepe quaerat est a porro
                                        eius odio vel.
                                    </p>

                                    <div class="font-medium text-[15px] text-(--ink)/60">
                                        Duration:
                                        <span class="font-semibold text-(--ink)/75">
                                            {{ $course->duration }}
                                        </span>
                                    </div>

                                    <div class="font-medium text-[15px] text-(--ink)/60">
                                        Class:
                                        <span class="font-semibold text-(--ink)/75">
                                            morning & evening, 1.5 hours each
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="pt-8 border-t border-(--sand) p-6 flex flex-col">

                                <p class="text-xs tracking-[0.15em] uppercase font-semibold text-(--laterite) mb-4">
                                    Included · 3-day pain relief
                                </p>

                                <div class="grid sm:grid-cols-2 gap-5">

                                    <div class="rounded-2xl bg-(--paper) border border-(--sand) p-5">
                                        <div class="flex items-center gap-2 mb-2">
                                            <x-lucide-sun class="size-4 text-(--brass)" />

                                            <span
                                                class="text-xs tracking-[0.1em] uppercase font-semibold text-(--ink)/50">
                                                Morning
                                            </span>
                                        </div>

                                        <h5 class="font-display text-lg mb-1">
                                            Full-Body Dhara
                                        </h5>

                                        <p class="text-sm text-(--ink)/65 leading-relaxed">
                                            A steady stream of warm oil is poured over
                                            the body to ease pain and restore balance
                                            after training.
                                        </p>
                                    </div>

                                    <div class="rounded-2xl bg-(--paper) border border-(--sand) p-5">
                                        <div class="flex items-center gap-2 mb-2">
                                            <x-lucide-moon class="size-4 text-(--moss)" />

                                            <span
                                                class="text-xs tracking-[0.1em] uppercase font-semibold text-(--ink)/50">
                                                Evening
                                            </span>
                                        </div>

                                        <h5 class="font-display text-lg mb-1">
                                            Full-Body Steam
                                        </h5>

                                        <p class="text-sm text-(--ink)/65 leading-relaxed">
                                            Time inside a herbal steam chamber to relax
                                            the muscles and support recovery.
                                        </p>
                                    </div>

                                </div>

                                <div class="grid sm:grid-cols-2 gap-4 sm:gap-5 mt-6">
                                    <a href="#" class="contents">
                                        <x-ui.button variant="secondary">
                                            Learn more <x-lucide-square-arrow-out-up-right />
                                        </x-ui.button>
                                    </a>
                                    <a href="#" class="contents">
                                        <x-ui.button>
                                            Pricing <x-lucide-arrow-right />
                                        </x-ui.button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- What We Offer -->
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

            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach ($offerings as $item)
                    <div x-data="{ visible: false }" x-intersect.threshold.15.once="visible = true"
                        :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                        class="rounded-2xl shadow-sm bg-white/50 px-6 py-4 transition-all">
                        <div class="flex items-center gap-3">
                            <span class="size-11 rounded-full bg-(--laterite)/10 grid place-items-center mb-4">
                                <x-dynamic-component :component="'lucide-' . $item['icon']" class="size-5 text-(--laterite)" />
                            </span>
                            <h4 class="font-display text-lg mb-1.5">{{ $item['title'] }}</h4>
                        </div>
                        <p class="text-sm text-(--ink)/65 leading-relaxed">{{ $item['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Stay on. Teach. -->
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

        <!-- The Gurukkal -->
        <section x-data="{ visible: false }" x-intersect.threshold.15.once="visible = true"
            :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
            class="px-5 md:px-8 py-20 bg-(--paper-soft) transition-all duration-700 ease-out">
            <div class="max-w-4xl mx-auto">

                <div class="text-center mb-14">
                    <p
                        class="text-xs tracking-[0.25em] uppercase text-(--laterite) font-semibold mb-3 flex items-center justify-center gap-2">
                        <span class="ring-mark size-3.5 text-(--laterite) shrink-0"></span>
                        The Gurukkal
                    </p>

                    <h2 class="font-display text-3xl md:text-4xl">
                        Taught by a master
                    </h2>
                </div>

                <div class="max-w-3xl mx-auto rounded-3xl bg-(--sand) p-6 md:p-8">
                    <div class="flex flex-col sm:flex-row items-center sm:items-start gap-7">

                        <div class="size-32 md:size-36 rounded-full shrink-0 overflow-hidden bg-(--paper)">
                            <img src="{{ asset('images/gurukkal/antony.jpg') }}" alt="Gurukkal Antony"
                                class="w-full h-full object-cover">
                        </div>

                        <div class="text-center sm:text-left">
                            <p class="text-xs tracking-[0.2em] uppercase text-(--laterite) font-semibold mb-2">
                                Master Instructor
                            </p>

                            <h3 class="font-display text-2xl md:text-3xl mb-3">
                                Gurukkal
                                <span class="text-(--laterite)">Antony</span>
                            </h3>

                            <p class="text-(--ink)/65 leading-relaxed">
                                Trained from childhood in the Vadakkan style, Antony has
                                taught here for over two decades, guiding students through
                                Meythari to Ankathari while overseeing marma treatments
                                for the community.
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <!-- The three pillars -->
        <section x-data="{ visible: false }" x-intersect.threshold.15.once="visible = true"
            :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
            class="transition-all duration-700 ease-out px-5 md:px-8 py-20 max-w-6xl mx-auto">
            <div class="grid md:grid-cols-3 gap-10">
                <div>
                    <div class="size-12 rounded-full bg-(--laterite)/10 grid place-items-center mb-4">
                        <x-lucide-swords class="size-5 text-(--laterite)" />
                    </div>
                    <h4 class="font-display text-xl mb-2">Kalaripayattu</h4>
                    <p class="text-(--ink)/65 text-sm leading-relaxed line-clamp-4">
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
                    <p class="text-(--ink)/65 text-sm leading-relaxed line-clamp-4">
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
                    <p class="text-(--ink)/65 text-sm leading-relaxed line-clamp-4">
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

        <!-- Contact -->
        <section id="contact" x-data="{ visible: false }" x-intersect.threshold.15.once="visible = true"
            :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
            class="transition-all duration-700 ease-out px-5 md:px-8 py-20 bg-(--ink) text-(--paper)">
            <div class="max-w-4xl mx-auto grid md:grid-cols-2 gap-10">
                <div>
                    <p
                        class="text-xs tracking-[0.25em] uppercase text-(--paper)/60 font-semibold mb-3 flex items-center gap-2">
                        <span class="ring-mark size-3.5 text-(--paper)/60 shrink-0"></span>
                        Visit us
                    </p>
                    <h2 class="font-display text-3xl md:text-4xl mb-5">Contact the kalari</h2>
                    <div class="space-y-1 text-(--paper)/75">
                        <p>Gurukulam Communication</p>
                        <p>First Floor, Ambadi Building,</p>
                        <p>Puvathur P.O, Thrissur District,</p>
                        <p>Kerala, India. Pin 680508</p>
                    </div>
                </div>
                <div class="space-y-4 md:pt-16">
                    <a href="tel:+919020590555"
                        class="flex items-center gap-3 text-(--paper)/90 hover:text-(--paper) transition-colors">
                        <span class="size-9 rounded-full bg-(--paper)/10 grid place-items-center shrink-0">
                            <x-lucide-phone class="size-4" />
                        </span>
                        <span>+91 90205 90555</span>
                    </a>
                    <a href="mailto:info@gurukulamcommunication.in"
                        class="flex items-center gap-3 text-(--paper)/90 hover:text-(--paper) transition-colors">
                        <span class="size-9 rounded-full bg-(--paper)/10 grid place-items-center shrink-0">
                            <x-lucide-mail class="size-4" />
                        </span>
                        <span>info@gurukulamcommunication.in</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer
            class="h-16 grid place-items-center bg-(--ink) text-(--paper)/50 text-xs tracking-[0.15em] uppercase border-t border-(--paper)/10">
            © Sri Gurukulam Kalari
        </footer>
    </div>
</x-base-layout>
