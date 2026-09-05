<x-base-layout>
    @push('seo')
        <meta name="title" content="Sri Gurukulam Kalari | Kalaripayattu course | Kalaripayattu ">
        <meta name="description"
            content="A living tradition of Kalaripayattu, Kalari Marma therapy, and Kalari Yoga, carried forward through the Gurukulam way of learning, practice, discipline, and service.">
        <meta name="keywords"
            content="Kalaripayattu trainingKalaripayattu certificate courseSri Gurukulam Kalari Traditional Martial arts trainingMother of all Martial arts">
        <meta name="robots" content="index, follow">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="English">
    @endpush

    <div x-data="{ menuOpen: false, scrolled: false }" @scroll.window="scrolled = window.scrollY > 16"
        @keydown.escape.window="menuOpen = false">
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
