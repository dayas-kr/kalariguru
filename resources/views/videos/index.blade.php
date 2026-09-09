<x-base-layout title="Sri Gurukulam Kalari Videos">
    <div x-data="{ menuOpen: false, scrolled: false }" @scroll.window="scrolled = window.scrollY > 16" @keydown.escape.window="menuOpen = false"
        class="flex flex-col min-h-screen">
        <x-ui.header />

        <main class="flex-1 relative px-5 md:px-8 pt-24 md:pt-28 pb-20 overflow-hidden">
            <div class="max-w-5xl mx-auto">
                <h1 class="text-3xl md:text-4xl font-display text-(--ink) mb-10">Sri Gurukulam Kalari Videos</h1>
                <div class="aspect-video w-full overflow-hidden rounded-2xl mt-12">
                    <iframe title="vimeo-player" src="https://player.vimeo.com/video/1224646502?h=6663c7816e"
                        frameborder="0" referrerpolicy="strict-origin-when-cross-origin"
                        allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                        allowfullscreen class="w-full h-full"></iframe>
                </div>
            </div>
        </main>
        <x-footer />
    </div>
</x-base-layout>
