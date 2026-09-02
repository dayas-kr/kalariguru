<x-base-layout>
    <div x-data="{ menuOpen: false, scrolled: false }" @scroll.window="scrolled = window.scrollY > 16" @keydown.escape.window="menuOpen = false">
        <x-ui.header />

        <!-- Hero -->
        <x-section.hero />

        <!-- About -->
        <x-section.about />

        <!-- Courses -->
        <x-section.courses :courses="$courses" />

        <!-- What We Offer -->
        <x-section.what-we-offer />

        <!-- Stay on. Teach. -->
        <x-section.stay-on-teach />

        <!-- The Gurukkal -->
        <x-section.gurukkal />

        <!-- The three pillars -->
        <x-section.pillars />

        <!-- Footer -->
        <x-footer />
    </div>
</x-base-layout>
