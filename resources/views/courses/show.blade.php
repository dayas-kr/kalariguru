<x-base-layout>
    <div x-data="{ menuOpen: false, scrolled: false, heroIn: false }" x-init="setTimeout(() => heroIn = true, 50)" @scroll.window="scrolled = window.scrollY > 16"
        @keydown.escape.window="menuOpen = false" class="flex flex-col min-h-screen">
        <x-ui.header />

        <main class="flex-1 bg-(--paper)">
            <!-- Hero: full-bleed, title painted over the image -->
            <div class="relative h-[52vh] md:h-[64vh] min-h-90 overflow-hidden">
                <div class="absolute inset-0 transition-all duration-1000 ease-out"
                    :class="heroIn ? 'opacity-100 scale-100' : 'opacity-0 scale-105'">
                    @if ($course->image)
                        <img src="https://srigurukulamkalari.com/storage/{{ $course->image }}" alt="{{ $course->name }}"
                            class="w-full h-full object-cover">
                    @else
                        <div class="w-full h-full bg-(--ink)/90"></div>
                    @endif
                </div>

                <div class="absolute inset-0 bg-gradient-to-t from-(--ink) via-(--ink)/25 to-transparent"></div>

                <div class="absolute inset-x-0 bottom-0 px-5 md:px-8 pb-8 md:pb-10">
                    <div class="max-w-5xl mx-auto">
                        <h1 class="font-display text-4xl md:text-6xl text-white leading-[1.05] mb-2 max-w-2xl">
                            {{ $course->name }}
                        </h1>
                        @if ($course->name_ml)
                            <p class="text-lg md:text-xl text-(--brass) max-w-2xl">{{ $course->name_ml }}</p>
                        @endif
                    </div>
                </div>
            </div>

            <div class="max-w-5xl mx-auto px-5 md:px-8">

                <!-- Intro + fact ledger -->
                <div class="grid md:grid-cols-[1fr_18rem] gap-10 md:gap-16 py-12 md:py-16 border-b border-(--sand)">

                    <div>
                        <!-- Breadcrumb -->
                        <div class="max-w-5xl mx-auto mb-4">
                            <nav class="text-sm text-(--ink)/50 flex items-center gap-2">
                                <a href="#" class="hover:text-(--laterite) transition-colors">Courses</a>
                                <span class="text-(--ink)/25">/</span>
                                <span class="text-(--ink)/70">{{ $course->name }}</span>
                            </nav>
                        </div>

                        @if ($course->description_en)
                            <p class="text-(--ink)/75 leading-relaxed text-lg max-w-[62ch]">
                                {{ $course->description_en }}
                            </p>
                        @endif

                        <a href="#"
                            class="mt-8 inline-flex items-center gap-2 bg-(--laterite) hover:opacity-90 text-white font-medium rounded px-6 py-3 transition-opacity w-fit">
                            Enquire about this course
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14M13 6l6 6-6 6" />
                            </svg>
                        </a>
                    </div>

                    <dl class="flex flex-col bg-white h-fit rounded-xl shadow-xs">
                        @if ($course->duration)
                            <div class="flex items-baseline justify-between py-4 px-6 border-b border-(--sand)">
                                <dt class="text-sm text-(--ink)/50">Duration</dt>
                                <dd class="font-display text-lg text-(--ink)">{{ $course->duration }}</dd>
                            </div>
                        @endif
                        @if ($course->semester_count)
                            <div class="flex items-baseline justify-between py-4 px-6 border-b border-(--sand)">
                                <dt class="text-sm text-(--ink)/50">Semesters</dt>
                                <dd class="font-display text-lg text-(--ink)">{{ $course->semester_count }}</dd>
                            </div>
                        @endif
                        @if (!is_null($course->price))
                            <div class="flex items-baseline justify-between py-4 px-6">
                                <dt class="text-sm text-(--ink)/50">Fee</dt>
                                <dd class="font-display font-semibold tracking-wider text-xl text-(--ink)">
                                    ₹{{ number_format($course->price, 2) }}</dd>
                            </div>
                        @endif
                    </dl>
                </div>

                <!-- How a semester is structured -->
                @php
                    $classesPerSemester = 42; // 21 days × 2 classes/day
                    $semesterCount = $course->semester_count ?? 1;
                    $totalClasses = $classesPerSemester * $semesterCount;
                @endphp
                <div class="py-12 md:py-16 border-b border-(--sand)">
                    <h2 class="font-display text-2xl md:text-3xl text-(--ink) mb-2">How a semester works</h2>
                    <p class="text-(--ink)/60 mb-10 max-w-[55ch]">
                        Every semester runs 21 days, with a morning and evening class each day.
                    </p>

                    @if ($semesterCount > 1)
                        <div class="grid grid-cols-2 md:grid-cols-4 divide-x divide-y md:divide-y-0 divide-(--sand)">
                            <div class="px-4 py-4 md:py-0 text-center">
                                <p class="font-display text-4xl md:text-5xl text-(--ink) mb-1">21</p>
                                <p class="text-sm text-(--ink)/55">days per semester</p>
                            </div>
                            <div class="px-4 py-4 md:py-0 text-center">
                                <p class="font-display text-4xl md:text-5xl text-(--ink) mb-1">1.5<span
                                        class="text-lg">hrs</span></p>
                                <p class="text-sm text-(--ink)/55">per class, morning & evening</p>
                            </div>
                            <div class="px-4 py-4 md:py-0 text-center">
                                <p class="font-display text-4xl md:text-5xl text-(--ink) mb-1">42</p>
                                <p class="text-sm text-(--ink)/55">classes per semester</p>
                            </div>
                            <div class="px-4 py-4 md:py-0 text-center">
                                <p class="font-display text-4xl md:text-5xl text-(--laterite) mb-1">{{ $totalClasses }}
                                </p>
                                <p class="text-sm text-(--ink)/55">classes across {{ $semesterCount }} semesters</p>
                            </div>
                        </div>
                    @else
                        <div class="grid grid-cols-3 divide-x divide-(--sand)">
                            <div class="px-4 first:pl-0 text-center">
                                <p class="font-display text-4xl md:text-5xl text-(--ink) mb-1">21</p>
                                <p class="text-sm text-(--ink)/55">days in this semester</p>
                            </div>
                            <div class="px-4 text-center">
                                <p class="font-display text-4xl md:text-5xl text-(--ink) mb-1">1.5<span
                                        class="text-lg">hrs</span></p>
                                <p class="text-sm text-(--ink)/55">per class, morning & evening</p>
                            </div>
                            <div class="px-4 last:pr-0 text-center">
                                <p class="font-display text-4xl md:text-5xl text-(--laterite) mb-1">{{ $totalClasses }}
                                </p>
                                <p class="text-sm text-(--ink)/55">classes total (21 × 2)</p>
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Semester gap info -->

                <div class="py-8 border-b border-(--sand)">
                    <div class="max-w-2xl mx-auto flex items-center gap-5">

                        <div
                            class="shrink-0 flex items-center justify-center w-12 h-12 rounded-full bg-(--brass)/10 text-(--laterite)">
                            <x-lucide-calendar-clock class="size-5" />
                        </div>

                        <div class="flex-1">
                            <div class="flex flex-wrap items-baseline gap-x-3 gap-y-1">
                                <span class="font-display text-xl text-(--laterite)">
                                    3 months
                                </span>

                                <span class="text-(--ink)/70 text-sm">
                                    between semesters
                                </span>
                            </div>

                            <p class="text-sm text-(--ink)/50 leading-relaxed mt-1">
                                After each semester, the next semester begins after a
                                3-month gap for recovery and practice.
                            </p>
                        </div>

                    </div>
                </div>

                <!-- Malayalam description, as a margin note -->
                @if ($course->description_ml)
                    <div class="py-10 md:py-12 border-b border-(--sand)">
                        <p
                            class="border-l-4 border-(--brass) pl-6 text-(--ink)/70 leading-relaxed max-w-[62ch] text-lg">
                            {{ $course->description_ml }}
                        </p>
                    </div>
                @endif

                <!-- Skills, as a numbered curriculum, with a show-more toggle -->
                @if ($course->skills->isNotEmpty())
                    <div class="py-12 md:py-16" x-data="{ showAllSkills: false }">
                        <h2 class="font-display text-2xl md:text-3xl text-(--ink) mb-2">
                            Skills you'll learn
                        </h2>
                        <p class="text-(--ink)/60 mb-10 max-w-[55ch]">
                            {{ $course->skills->count() }}
                            {{ Str::plural('skill', $course->skills->count()) }}, taught in the order
                            you'll train them.
                        </p>

                        <div class="columns-1 lg:columns-2 gap-x-12">
                            @foreach ($course->skills as $index => $skill)
                                <div @if ($index >= 6) x-show="showAllSkills" x-cloak @endif
                                    class="break-inside-avoid flex gap-5 py-5 border-b border-(--sand)
                                hover:bg-(--sand)/30 transition-colors -mx-3 px-3">
                                    <span class="font-display text-2xl text-(--brass) leading-none pt-0.5 w-8 shrink-0">
                                        {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                    </span>
                                    <div>
                                        <h3 class="text-(--ink) font-medium mb-0.5">{{ $skill->name }}</h3>
                                        @if ($skill->name_ml)
                                            <p class="text-sm text-(--ink)/50 mb-2">{{ $skill->name_ml }}</p>
                                        @endif
                                        @if ($skill->description_en)
                                            <p class="text-sm text-(--ink)/65 leading-relaxed">
                                                {{ $skill->description_en }}
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        @if ($course->skills->count() > 6)
                            <button @click="showAllSkills = !showAllSkills"
                                class="mt-8 inline-flex items-center gap-2 text-(--laterite) font-medium group">
                                <span
                                    x-text="showAllSkills ? 'Show fewer skills' : 'Show all {{ $course->skills->count() }} skills'"></span>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-4 h-4 transition-transform duration-200"
                                    :class="showAllSkills ? 'rotate-180' : ''" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M6 9l6 6 6-6" />
                                </svg>
                            </button>
                        @endif
                    </div>
                @endif

                <!-- What we offer -->
                <x-section.what-we-offer class="px-0!" />

                <!-- Three-day recovery, as a sequence -->
                <div class="py-12 md:py-16">
                    <h2 class="font-display text-2xl md:text-3xl text-(--ink) mb-2">
                        Three days of recovery, built in
                    </h2>
                    <p class="text-(--ink)/60 mb-10 max-w-[55ch]">
                        Every course opens with a short recovery routine, repeated morning and
                        evening for the first three days.
                    </p>

                    <div class="relative">
                        <div class="hidden md:block absolute top-5 left-[16.5%] right-[16.5%] h-px bg-(--sand)"></div>

                        <div class="grid md:grid-cols-3 gap-8 md:gap-0">
                            <div class="text-center">
                                <div
                                    class="relative z-10 w-10 h-10 rounded-full text-(--laterite) bg-white border border-(--sand) flex items-center justify-center mx-auto mb-4">
                                    <x-lucide-sun class="size-4" />
                                </div>
                                <p class="text-sm text-(--ink)/50 mb-1">Morning</p>
                                <h3 class="font-display text-xl text-(--ink) mb-2">Full-body dhara</h3>
                                <p class="text-(--ink)/65 leading-relaxed max-w-[34ch] mx-auto text-sm">
                                    A steady stream of warm oil is poured over the body to ease pain
                                    and restore balance after training.
                                </p>
                            </div>

                            <div class="text-center">
                                <div
                                    class="relative z-10 w-10 h-10 rounded-full text-(--laterite) bg-white border border-(--sand) flex items-center justify-center mx-auto mb-4">
                                    <x-lucide-moon class="size-4" />
                                </div>
                                <p class="text-sm text-(--ink)/50 mb-1">Evening</p>
                                <h3 class="font-display text-xl text-(--ink) mb-2">Full-body steam</h3>
                                <p class="text-(--ink)/65 leading-relaxed max-w-[34ch] mx-auto text-sm">
                                    Time inside a herbal steam chamber to relax the muscles and
                                    support recovery.
                                </p>
                            </div>

                            <div class="text-center">
                                <div
                                    class="relative z-10 w-10 h-10 rounded-full text-(--laterite) bg-white border border-(--sand) flex items-center justify-center mx-auto mb-4">
                                    <x-lucide-repeat class="size-4" />
                                </div>
                                <p class="text-sm text-(--ink)/50 mb-1">Repeated for</p>
                                <h3 class="font-display text-xl text-(--ink)">3 days</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <x-footer />
    </div>
</x-base-layout>
