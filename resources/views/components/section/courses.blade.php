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
                From a 21-day introduction to a 16-year certificate path —
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

                            <p class="text-(--ink)/70 leading-relaxed max-w-xl line-clamp-3">
                                {{ $course->description_en }}
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

                    <div class="grid mb-6 px-6">
                        <a href="{{ route('courses.show', $course->slug) }}" class="contents">
                            <x-ui.button>
                                Learn more <x-lucide-square-arrow-out-up-right />
                            </x-ui.button>
                        </a>
                    </div>

                    <div class="px-6 pb-6">
                        <div class="rounded-xl border border-(--sand) bg-(--paper-soft)/60 overflow-hidden">

                            <div class="flex items-center justify-between px-5 py-4 border-b border-(--sand)">
                                <div>
                                    <div
                                        class="flex items-center gap-2 text-xs font-semibold uppercase tracking-[0.14em] text-(--laterite)">
                                        <x-lucide-sparkles class="size-3.5" />
                                        Curriculum
                                    </div>

                                    <h4 class="font-display text-xl mt-1">
                                        Skills you'll learn
                                    </h4>
                                </div>

                                <div class="text-right">
                                    <div class="font-display text-2xl leading-none">
                                        {{ $course->skills->count() }}
                                    </div>
                                    <div class="text-xs text-(--ink)/45 mt-1">
                                        skills
                                    </div>
                                </div>
                            </div>

                            <div class="grid sm:grid-cols-2">
                                @foreach ($course->skills->take(6) as $skill)
                                    <div
                                        class="group flex items-center gap-3 px-5 py-3.5 border-b border-(--sand)
                           even:sm:border-l last:border-b-0 sm:nth-last-2:border-b-0">

                                        <span
                                            class="flex items-center justify-center size-7 rounded-full
                               bg-(--laterite)/8 text-(--laterite)
                               text-xs font-semibold shrink-0
                               group-hover:bg-(--laterite) group-hover:text-(--paper)
                               transition-colors duration-200">
                                            {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                                        </span>

                                        <span
                                            class="text-sm font-medium text-(--ink)/80 group-hover:text-(--ink) transition-colors">
                                            {{ $skill->name }}
                                        </span>

                                        <div class="font-sans text-(--ink)/50 text-sm ml-auto">
                                            (<span class="font-medium text-(--ink)/75">{{ $skill->pivot->type }}</span>
                                            types)
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            @if ($course->skills->count() > 6)
                                <div class="px-5 py-3 border-t border-(--sand) bg-white/40">
                                    <span
                                        class="inline-flex items-center gap-1.5 text-xs font-semibold text-(--ink)/55">
                                        <x-lucide-plus class="size-3.5" />
                                        {{ $course->skills->count() - 6 }} more skills included
                                    </span>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
