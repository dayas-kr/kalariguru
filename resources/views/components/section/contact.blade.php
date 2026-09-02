<section id="contact" x-data="{ visible: false }" x-intersect.threshold.15.once="visible = true"
    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
    class="transition-all duration-700 ease-out px-5 md:px-8 py-20 bg-(--ink) text-(--paper)">
    <div class="max-w-4xl mx-auto grid md:grid-cols-2 gap-10">
        <div>
            <p class="text-xs tracking-[0.25em] uppercase text-(--paper)/60 font-semibold mb-3 flex items-center gap-2">
                <span class="ring-mark size-3.5 text-(--paper)/60 shrink-0"></span>
                Visit us
            </p>
            <h2 class="font-display text-3xl md:text-4xl mb-5">Contact the kalari</h2>
            <div class="space-y-1 text-(--paper)/75">
                <p>Gurukulam Communication</p>
                <p>First Floor, Ambadi Building,</p>
                <p>Puvathur P.O, Thrissur District,</p>
                <p>Kerala, India. Pin 680508</p>
            </div>
        </div>
        <div class="space-y-4 md:pt-16">
            <a href="tel:+919020590555"
                class="flex items-center gap-3 text-(--paper)/90 hover:text-(--paper) transition-colors">
                <span class="size-9 rounded-full bg-(--paper)/10 grid place-items-center shrink-0">
                    <x-lucide-phone class="size-4" />
                </span>
                <span>+91 90205 90555</span>
            </a>
            <a href="mailto:info@gurukulamcommunication.in"
                class="flex items-center gap-3 text-(--paper)/90 hover:text-(--paper) transition-colors">
                <span class="size-9 rounded-full bg-(--paper)/10 grid place-items-center shrink-0">
                    <x-lucide-mail class="size-4" />
                </span>
                <span>info@gurukulamcommunication.in</span>
            </a>
        </div>
    </div>
</section>
