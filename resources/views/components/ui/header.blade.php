<div x-data="{
    links: [
        { l: 'Home', h: '/' },
        { l: 'About', h: '{{ route('about') }}' },
        { l: 'Courses', h: '/#courses' },
        { l: 'Contact', h: '{{ route('contact') }}' },
    ]
}" style="display: contents">
    <!-- Header -->
    <header class="fixed top-0 inset-x-0 z-50 flex justify-center px-4 pt-4">
        <div
            class="w-full max-w-5xl h-16 px-4 md:px-5 rounded-full flex items-center bg-white/55 backdrop-blur-[20px] backdrop-saturate-160 border border-white/60 transition-shadow duration-300 shadow-sm">

            <a href="{{ route('home') }}" aria-label="Sri Gurukulam Kalari home" class="mr-auto flex items-center gap-2.5">
                <span class="size-9 rounded-full overflow-hidden shrink-0 block bg-(--moss) ring-1 ring-white/60">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlrFlgymVxdH5o9c29ak36tGzNRAVsL6EezT-SP2189uGKywCS9_Q6dLAF&s=10"
                        alt="Sri Gurukulam Kalari logo" class="w-full h-full object-cover">
                </span>
                <span class="text-base leading-none font-display">
                    Sri Gurukulam <span class="text-(--laterite)">Kalari</span>
                </span>
            </a>

            <nav aria-label="Primary navigation" class="hidden md:flex items-center gap-1">
                <template x-for="link in links" :key="link.l">
                    <a :href="link.h" x-text="link.l"
                        class="px-3.5 py-2 rounded-full text-sm font-medium text-(--ink)/70 hover:text-(--ink) hover:bg-white/50 transition-colors"></a>
                </template>
            </nav>

            <a href="#contact"
                class="hidden md:inline-flex ml-2 px-5 py-2.5 rounded-full bg-(--laterite) text-(--paper) text-sm font-semibold hover:bg-(--laterite-deep) transition-colors">
                Visit us
            </a>

            <button type="button" @click="menuOpen = true" aria-label="Open navigation menu" :aria-expanded="menuOpen"
                aria-controls="mobile-navigation"
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

            <nav class="flex flex-col px-5 py-6 gap-1">
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
