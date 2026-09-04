<x-base-layout>
    @push('styles')
        <style>
            #header-container {
                max-width: 1280px;
            }
        </style>
    @endpush
    <div x-data="{ menuOpen: false, scrolled: false }" @scroll.window="scrolled = window.scrollY > 16" @keydown.escape.window="menuOpen = false"
        class="flex flex-col min-h-screen">
        <x-ui.header />


        <main class="flex-1 relative px-5 md:px-8 pt-24 md:pt-28 pb-20 overflow-hidden">
            <div class="max-w-7xl mx-auto">
                @if (session('success'))
                    <div class="mb-6 rounded-lg bg-green-50 border border-green-200 px-4 py-3 text-sm text-green-800">
                        {{ session('success') }}
                    </div>
                @endif

                <h1 class="text-3xl md:text-4xl font-display text-(--ink) mb-3">Contact Us</h1>

                <p class="text-(--ink)/70">
                    Reach out to us to discover more about Kalaripayattu, explore our programs, and find out how we can
                    help you on your path to personal growth and well-being.
                </p>

                <div class="grid md:grid-cols-2 gap-8 mt-8 mb-10">
                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-3 flex flex-col">
                        @csrf
                        <input type="hidden" name="course" value="{{ request('course') }}">

                        <h2 class="text-2xl md:text-3xl font-display text-(--ink) mb-6">
                            Book an Appointment
                        </h2>

                        <div>
                            <input type="text" name="name" id="name" value="{{ old('name') }}" required
                                placeholder="Name"
                                class="w-full px-3.5 py-1.5 bg-stone-50 border border-stone-200 rounded-lg text-(--ink) tracking-wide focus:outline-none focus:ring-3 focus:ring-amber-700/40 focus:border-amber-700/60 transition">
                            @error('name')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" required
                                placeholder="Email"
                                class="w-full px-3.5 py-1.5 bg-stone-50 border border-stone-200 rounded-lg text-(--ink) tracking-wide focus:outline-none focus:ring-3 focus:ring-amber-700/40 focus:border-amber-700/60 transition">
                            @error('email')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <input type="text" name="subject" id="subject" value="{{ old('subject') }}" required
                                placeholder="Subject"
                                class="w-full px-3.5 py-1.5 bg-stone-50 border border-stone-200 rounded-lg text-(--ink) tracking-wide focus:outline-none focus:ring-3 focus:ring-amber-700/40 focus:border-amber-700/60 transition">
                            @error('subject')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <input type="tel" name="phone" id="phone" value="{{ old('phone') }}" required
                                placeholder="Phone Number"
                                class="w-full px-3.5 py-1.5 bg-stone-50 border border-stone-200 rounded-lg text-(--ink) tracking-wide focus:outline-none focus:ring-3 focus:ring-amber-700/40 focus:border-amber-700/60 transition">
                            @error('phone')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <textarea name="message" id="message" rows="6" placeholder="Message (optional)"
                                class="w-full px-3.5 py-1.5 bg-stone-50 border border-stone-200 rounded-lg text-(--ink) tracking-wide focus:outline-none focus:ring-3 focus:ring-amber-700/40 focus:border-amber-700/60 transition resize-y">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <x-ui.button type="submit" class="w-full">
                            Submit
                        </x-ui.button>
                    </form>
                    <div class="">
                        <h2 class="text-2xl md:text-3xl font-display text-(--ink) mb-6">
                            Get in Touch With Our Team
                        </h2>

                        <div class="grid xl:grid-cols-2 gap-6">
                            <div class="bg-white border border-(--sand) rounded-xl shadow-xs xl:col-span-2">
                                <div
                                    class="py-2 px-6 border-b border-(--sand) flex items-center gap-3 text-(--laterite-deep)">
                                    <x-lucide-phone class="size-4.5" />
                                    <div class="text-lg font-semibold">Call us</div>
                                </div>
                                <div class="py-3 px-6 flex flex-wrap gap-x-3 gap-y-1 space-y-1.5">
                                    <div class="">+91&nbsp;&nbsp;90205 90555</div>
                                    <div class="">+91&nbsp;&nbsp;8921900143</div>
                                    <div class="">+91&nbsp;&nbsp;94955 44869</div>
                                </div>
                            </div>
                            <div class="bg-white border border-(--sand) rounded-xl shadow-xs xl:col-span-2">
                                <div
                                    class="py-2 px-6 border-b border-(--sand) flex items-center gap-3 text-(--laterite-deep)">
                                    <x-lucide-map-pin class="size-4.5" />
                                    <div class="text-lg font-semibold">Our Location</div>
                                </div>
                                <div class="py-3 px-6 flex flex-col space-y-1.5">
                                    <p class="">Sri Gurukulam Kalari, Ullas nagar, Thrissur, Kerala 680511</p>
                                </div>
                            </div>
                            <div class="bg-white border border-(--sand) rounded-xl shadow-xs">
                                <div
                                    class="py-2 px-6 border-b border-(--sand) flex items-center gap-3 text-(--laterite-deep)">
                                    <x-lucide-mail class="size-4.5" />
                                    <div class="text-lg font-semibold">Mail us</div>
                                </div>
                                <div class="py-3 px-6 flex flex-col space-y-1.5">
                                    <div class="">srigurukulamkalari@gmail.com</div>
                                </div>
                            </div>
                            <div class="bg-white border border-(--sand) rounded-xl shadow-xs">
                                <div
                                    class="py-2 px-6 border-b border-(--sand) flex items-center gap-3 text-(--laterite-deep)">
                                    <x-lucide-clock class="size-4.5" />
                                    <div class="text-lg font-semibold">Office Hours</div>
                                </div>
                                <div class="py-3 px-6 flex flex-col space-y-1.5">
                                    <p class="">
                                        Mon-Sat 7.30 am to 8.00 pm Sun 7.00 am to 1.00 pm
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <iframe class="w-full h-96"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125504.3967079976!2d75.93098959726561!3d10.578202399999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba7931ecc662bf7%3A0x8952c896dc5dfa8b!2sGurukulam%20Communication!5e0!3m2!1sen!2sin!4v1788537707629!5m2!1sen!2sin"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="strict-origin-when-cross-origin"></iframe>
            </div>
        </main>

        <!-- Footer -->
        <x-footer />
    </div>
</x-base-layout>
