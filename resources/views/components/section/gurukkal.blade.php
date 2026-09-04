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
                        <strong class="font-semibold">Antony C.C.</strong> is an experienced Kalaripayattu and Kalari
                        Yoga
                        instructor with
                        over 14 years of
                        teaching experience. He has trained thousands of students through Sri Gurukulam Kalari Sangam,
                        helping preserve and pass on the traditional arts of Kalaripayattu and Kalari Yoga.
                        <a href="{{ route('gurukkal.show') }}"
                            class="text-(--laterite) underline font-medium hover:no-underline">Read
                            more</a>
                    </p>
                </div>

            </div>
        </div>

    </div>
</section>
