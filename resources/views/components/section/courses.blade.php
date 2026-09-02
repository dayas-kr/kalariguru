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
                    class="rounded-2xl bg-white/60 border border-(--sand) overflow-hidden shadow-xs">
                    <div class="p-6 grid md:grid-cols-[auto_1fr] gap-6">

                        <div class="aspect-video md:h-44 bg-amber-950/50">
                            <img src="https://srigurukulamkalari.com/storage/{{ $course->image }}"
                                alt="{{ $course->name }}" class="w-full h-full object-cover">
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

                                    <span class="text-xs tracking-[0.1em] uppercase font-semibold text-(--ink)/50">
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

                                    <span class="text-xs tracking-[0.1em] uppercase font-semibold text-(--ink)/50">
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
                            <a href="{{ route('courses.show', $course->slug) }}" class="contents">
                                <x-ui.button variant="secondary">
                                    Learn more <x-lucide-square-arrow-out-up-right />
                                </x-ui.button>
                            </a>
                            <a href="{{ route('courses.show', $course->slug) }}" class="contents">
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
