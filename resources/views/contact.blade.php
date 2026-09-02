<x-base-layout>
    <div x-data="{ menuOpen: false, scrolled: false }" @scroll.window="scrolled = window.scrollY > 16" @keydown.escape.window="menuOpen = false"
        class="flex flex-col min-h-screen">
        <x-ui.header />

        <main class="flex-1 relative px-5 md:px-8 pt-24 md:pt-28 pb-20 overflow-hidden">
            <div class="max-w-5xl mx-auto">
                <h1 class="text-3xl md:text-4xl font-display text-(--ink) mb-10">Contact Us</h1>

                <div class="mb-8 flex items-center gap-4">
                    <h2 class="text-lg font-display text-(--ink)">Send an Enquiry</h2>
                    <a href="tel:+918547308180"
                        class="inline-flex items-center gap-2 text-amber-800 font-medium hover:text-amber-900 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.36 11.36 0 003.57.57 1 1 0 011 1V20a1 1 0 01-1 1C10.61 21 3 13.39 3 4a1 1 0 011-1h3.5a1 1 0 011 1 11.36 11.36 0 00.57 3.57 1 1 0 01-.25 1.02l-2.2 2.2z" />
                        </svg>
                        +91 9020590555
                    </a>
                </div>

                <form action="#" method="POST" class="space-y-6 flex flex-col">
                    @csrf

                    <div>
                        <label for="name" class="block text-sm text-(--ink) font-medium mb-2">Your name</label>
                        <input type="text" name="name" id="name" required
                            class="w-full px-3.5 py-1.5 bg-stone-50 border border-stone-200 rounded-lg text-(--ink) tracking-wide focus:outline-none focus:ring-2 focus:ring-amber-700/40 focus:border-amber-700/60 transition">
                        @error('name')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="block text-sm text-(--ink) font-medium mb-2">Your email</label>
                        <input type="email" name="email" id="email" required
                            class="w-full px-3.5 py-1.5 bg-stone-50 border border-stone-200 rounded-lg text-(--ink) tracking-wide focus:outline-none focus:ring-2 focus:ring-amber-700/40 focus:border-amber-700/60 transition">
                        @error('email')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="subject" class="block text-sm text-(--ink) font-medium mb-2">Subject</label>
                        <input type="text" name="subject" id="subject" required
                            class="w-full px-3.5 py-1.5 bg-stone-50 border border-stone-200 rounded-lg text-(--ink) tracking-wide focus:outline-none focus:ring-2 focus:ring-amber-700/40 focus:border-amber-700/60 transition">
                        @error('subject')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="phone" class="block text-sm text-(--ink) font-medium mb-2">Phone</label>
                        <input type="tel" name="phone" id="phone" required
                            class="w-full px-3.5 py-1.5 bg-stone-50 border border-stone-200 rounded-lg text-(--ink) tracking-wide focus:outline-none focus:ring-2 focus:ring-amber-700/40 focus:border-amber-700/60 transition">
                        @error('phone')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="message" class="block text-sm text-(--ink) font-medium mb-2">Your message
                            (optional)</label>
                        <textarea name="message" id="message" rows="6"
                            class="w-full px-3.5 py-1.5 bg-stone-50 border border-stone-200 rounded-lg text-(--ink) tracking-wide focus:outline-none focus:ring-2 focus:ring-amber-700/40 focus:border-amber-700/60 transition resize-y"></textarea>
                        @error('message')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <x-ui.button type="submit" class="ml-auto">Submit</x-ui.button>
                </form>
            </div>
        </main>

        <!-- Footer -->
        <x-footer />
    </div>
</x-base-layout>
