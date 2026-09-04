<footer id="contact" class="bg-(--ink) text-(--paper)">
    @push('head')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css"
            integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg=="
            crossorigin="anonymous" referrerpolicy="no-referrer">
    @endpush

    <div class="max-w-6xl mx-auto px-5 sm:px-8 lg:px-12 py-10 md:py-14">

        {{-- Top: brand + address + contact --}}
        <div class="grid md:grid-cols-2 gap-8 md:gap-12 pb-8 md:pb-10 border-b border-(--paper)/10">

            <div>
                <p
                    class="text-[11px] tracking-[0.2em] uppercase text-(--paper)/50 font-semibold mb-2 flex items-center gap-2">
                    <span class="ring-mark size-3 text-(--paper)/50 shrink-0"></span>
                    Visit us
                </p>
                <h2 class="font-display text-2xl md:text-3xl leading-tight mb-3">
                    Sri Gurukulam Kalari
                </h2>
                <address class="not-italic text-sm text-(--paper)/60 leading-relaxed max-w-xs mb-2">
                    Sri Gurukulam Kalari Sangam · Reg. No. 458/10<br>
                    Near Ullas Nagar, Elavally PIN. 680511<br>
                    Thrissur, Kerala, India
                </address>
                <a href="https://maps.google.com/?q=Sri+Gurukulam+Kalari+Sangam+Elavally+Thrissur" target="_blank"
                    rel="noopener"
                    class="inline-flex items-center gap-2 text-xs text-(--paper)/60 hover:text-(--paper) transition-colors group">
                    <x-lucide-map-pin class="size-3.5" />
                    <span class="border-b border-transparent group-hover:border-current transition-colors">
                        Get directions
                    </span>
                </a>
            </div>

            <div class="flex flex-col divide-y divide-(--paper)/10 md:divide-none md:gap-0.5 md:self-center">
                @php
                    $links = [
                        [
                            'icon' => 'fa-solid fa-phone text-base',
                            'href' => 'tel:+919020590555',
                            'label' => '+91 90205 90555',
                        ],
                        [
                            'icon' => 'fa-brands fa-whatsapp text-xl',
                            'href' => 'tel:+919020590555',
                            'label' => '+91 90205 90555',
                        ],
                        [
                            'icon' => 'fa-regular fa-envelope text-base',
                            'href' => 'mailto:srigurukulamkalari@gmail.com',
                            'label' => 'srigurukulamkalari@gmail.com',
                        ],
                    ];
                @endphp
                @foreach ($links as $link)
                    <a href="{{ $link['href'] }}"
                        target="{{ str_starts_with($link['href'], 'http') ? '_blank' : '_self' }}"
                        rel="{{ str_starts_with($link['href'], 'http') ? 'noopener' : '' }}"
                        class="group flex items-center gap-3 py-2.5 md:px-2.5 md:rounded-lg text-sm text-(--paper)/75 hover:text-(--paper) md:hover:bg-(--paper)/5 transition-colors">
                        <i class="{{ $link['icon'] }}"></i>
                        <span class="truncate">{{ $link['label'] }}</span>
                    </a>
                @endforeach
            </div>
        </div>

        {{-- Bottom: quick links / legal / follow --}}
        <div class="grid grid-cols-2 md:grid-cols-3 gap-6 pt-8">
            <div>
                <p class="text-[11px] tracking-[0.2em] uppercase text-(--paper)/50 font-semibold mb-3">Quick links</p>
                <ul class="space-y-2 text-sm text-(--paper)/65">
                    <li><a href="{{ route('home') }}" class="hover:text-(--paper) transition-colors">Home</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-(--paper) transition-colors">About</a></li>
                    <li><a href="/#courses" class="hover:text-(--paper) transition-colors">Courses</a></li>
                </ul>
            </div>
            <div>
                <p class="text-[11px] tracking-[0.2em] uppercase text-(--paper)/50 font-semibold mb-3">Legal</p>
                <ul class="space-y-2 text-sm text-(--paper)/65">
                    <li><a href="#" class="hover:text-(--paper) transition-colors">Terms & Conditions</a></li>
                    <li><a href="#" class="hover:text-(--paper) transition-colors">Privacy Policy</a></li>
                    <li><a href="#" class="hover:text-(--paper) transition-colors">Refund Policy</a></li>
                </ul>
            </div>
            <div class="col-span-2 md:col-span-1">
                <p class="text-[11px] tracking-[0.2em] uppercase text-(--paper)/50 font-semibold mb-3">Follow</p>
                <div class="flex gap-2.5">
                    <a href="https://www.instagram.com/gurukulamcommunication" target="_blank" rel="noopener"
                        class="size-7 rounded-full bg-(--paper)/10 grid place-items-center hover:bg-(--paper)/15 transition-colors">
                        <x-lucide-instagram class="size-3.5" />
                    </a>
                    <a href="https://youtube.com/@gurukulamcommunication" target="_blank" rel="noopener"
                        class="size-7 rounded-full bg-(--paper)/10 grid place-items-center hover:bg-(--paper)/15 transition-colors">
                        <x-lucide-youtube class="size-3.5" />
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="border-t border-(--paper)/10 px-5 sm:px-8 lg:px-12 py-4">
        <p class="text-center text-[11px] tracking-[0.1em] uppercase text-(--paper)/45">
            © {{ date('Y') }} Sri Gurukulam Kalari
        </p>
    </div>
</footer>
