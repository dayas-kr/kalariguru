<x-base-layout title="About Gurukal Antony CC">
    <div x-data="{ menuOpen: false, scrolled: false }" @scroll.window="scrolled = window.scrollY > 16" @keydown.escape.window="menuOpen = false"
        class="flex flex-col min-h-screen">
        <x-ui.header />

        <main class="flex-1 relative px-5 md:px-8 pt-24 md:pt-28 pb-20 overflow-hidden">
            <div class="max-w-5xl mx-auto">

                <!-- Introduction -->
                <section x-data="{ visible: false }" x-intersect.threshold.15.once="visible = true"
                    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                    class="grid md:grid-cols-[18rem_1fr] lg:grid-cols-[20rem_1fr] gap-10 md:gap-14 lg:gap-20 items-center mb-20 transition-all duration-700 ease-out">
                    <!-- Image -->
                    <div class="flex justify-center md:justify-start">
                        <div
                            class="size-56 md:size-64 lg:size-72 rounded-full overflow-hidden bg-(--sand) ring-8 ring-(--sand)/40">
                            <img src="{{ asset('images/gurukkal/antony.jpg') }}" alt="Gurukkal Antony C.C."
                                class="w-full h-full object-cover">
                        </div>
                    </div>

                    <!-- Introduction text -->
                    <div class="text-center md:text-left">
                        <p
                            class="text-xs tracking-[0.25em] uppercase text-(--laterite) font-semibold mb-4 flex items-center justify-center md:justify-start gap-2">
                            <span class="ring-mark size-3.5 text-(--laterite) shrink-0"></span>
                            The Gurukkal
                        </p>

                        <h1 class="font-display text-4xl md:text-5xl lg:text-6xl text-(--ink) leading-[1.05] mb-5">
                            Antony C.C.
                        </h1>

                        <p class="text-lg md:text-xl text-(--ink)/60 leading-relaxed max-w-2xl">
                            A teacher and practitioner dedicated to preserving and
                            passing on the traditional arts of Kalaripayattu, Kalari Marma Treatment and
                            Kalari Yoga.
                        </p>
                    </div>
                </section>

                <!-- Biography -->
                <article class="prose max-w-full">
                    <p>
                        Shri. Antony C.C., Aged 52 years, residing at Chittilappilly Kunnath House,
                        P O Elavally, Thrissur, Kerala has provided kalaripayattu and kalari yoga
                        training for Sri Gurukulam Kalari Sangham from the year 2010 to 2023
                        (14 years).
                    </p>

                    <p>
                        During this period he has provided kalaripayattu and kalari yoga training
                        for more than 6000 students of different schools and colleges of Thrissur
                        district among that students of Govt schools and National Service Scheme
                        were provided with completely free of fees training.
                    </p>

                    <p>
                        Also over 3000 number of students from different age categories were
                        trained under his guidance in kalaripayattu and kalari yoga in the kalari
                        institute of Sri Gurukulam Kalari Sangham which is situated at Elavally
                        Panchayat.
                    </p>

                    <p>
                        His code of conduct and training strategies were amazing and helpful for
                        students to develop themselves in these art forms.
                    </p>

                    <h2>List of Various Practices of Kalaripayattu</h2>

                    <ol>
                        <li>Dhakshinaveppu (Method of offerings to Kalari)</li>
                        <li>Ennathveppu (Oil applying method)</li>
                        <li>Kachakket­tal (Wearing Kacha)</li>
                        <li>Vanakkarethikal (Physical practises of respecting Kalari)</li>
                        <li>Kaaleluppurethikal - 64 Numbers (Various leg movement exercises)</li>
                        <li>Vadivukal - 8 Numbers (Various Poses)</li>
                        <li>Chuvadukal - 18 Numbers (Combination of various movements)</li>
                        <li>Meyyabhaysangal - More than 1800 Varieties (Complex basic exercises)</li>
                        <li>Meypayattu - 56 Numbers</li>
                        <li>Chummattadi - 18 Numbers</li>
                        <li>Vettuchuvadukal - 32 Numbers</li>
                        <li>Chattangal - 24 Numbers</li>
                        <li>Marachilukal - 18 Numbers</li>
                        <li>Kaithadakal - 64 Numbers</li>
                        <li>Ulakka­vali - 6 Varieties</li>
                        <li>Muchaanvali - 6 Numbers</li>
                        <li>Thallaveru - 12 Numbers</li>
                        <li>Kathiveru - To 64 Spots</li>
                        <li>Muchaneru - To 8 spots</li>
                        <li>Kunthameru - To 18 spots</li>
                        <li>Ambumvillum - 3 models</li>
                        <li>Vadiveesshal - 72 Numbers</li>
                        <li>Urumi veeshal - 24 Numbers</li>
                        <li>Vaazh­vet­tu - 4 Varieties</li>
                        <li>Vaazha­vili - 12 Adavu (Different versions)</li>
                        <li>Thallakettukal - 360 Numbers (Applications of long cloth)</li>
                        <li>Kaalenkuda Prayogangal - 36 Numbers (Applications using long Umbrella)</li>
                        <li>Vettupreyogangal - 96 Numbers (Applications of knife and hand strikes)</li>
                        <li>Viral prayogangal - 72 Numbers (Applications of Fingers)</li>
                        <li>Mushttiprayogangal - 46 Numbers (Applications of fists)</li>
                        <li>Adithada - 64 Numbers (A version of bare hand fighting techniques)</li>
                        <li>Verumkaikettukal - More than 3000 numbers</li>
                        <li>Aayudhakettukal - More than 800 numbers</li>
                        <li>Kaikuthipayattu - 6 Numbers</li>
                        <li>Vaaykuththamparanethikal - 24 Numbers</li>
                        <li>Shwasanareethikal - 18 Numbers</li>
                        <li>Kallamchavittukal - 3, 4...</li>
                        <li>Kettukaripayattu - 6 Numbers</li>
                        <li>Kettukkaridavukal - 12 Numbers</li>
                        <li>Muchaanpayattu - 6 Numbers</li>
                        <li>Muchaan Adavukal - 12 Numbers</li>
                        <li>Neettukadarapayattu - 6 Numbers</li>
                        <li>Ponthipayattu - 6 Numbers</li>
                        <li>Udavayalpayattu - 6 Numbers</li>
                        <li>Uda­vaalpayattu - 6 Numbers</li>
                        <li>Uda­vaal Adavukal - 12 Numbers</li>
                        <li>Otapayattu - 18 Numbers</li>
                        <li>Irattavadi (Valiyavadi) - 3 Payattukal</li>
                        <li>Irattavadi (Muchaan) - 3 Payattukal</li>
                        <li>Marappidicha Kunthapayattu - 6 Numbers</li>
                        <li>Marapidicha Kuntham Adavukal - 12 Numbers</li>
                        <li>Perumthallu - 6 Payattu</li>
                        <li>Kathipayattu - 6 Payattu</li>
                        <li>Vettukathipayattu - 9 Numbers</li>
                        <li>Ulkakkay­payattu - 6 Numbers</li>
                        <li>Irattavaalpayattu - 6 Numbers</li>
                        <li>Kathiyumthalayum - 6 Payattu</li>
                        <li>Puliyankam (Vaalum Parichayum) - 6 Payattu</li>
                        <li>Puliyankam (Vaalum Parichayum) - 12 Adavukal</li>
                        <li>Churuttu­vaal (Urumipayattu) - 6 Numbers</li>
                        <li>Thrishoolapayattu - 4 Numbers</li>
                        <li>Chottichaanpayattu - 18 Numbers</li>
                        <li>Churikapayattu - 6 Numbers</li>
                        <li>Churika Adavukal - 12 Numbers</li>
                        <li>Verumkaipayattu - 1,2,3...</li>
                        <li>Kayurukkayattam - 18 Numbers</li>
                        <li>Thalakka­yattam - 18 Numbers</li>
                        <li>Panthamweeshal - 32 Numbers</li>
                        <li>Vaalveeshal - 24 Numbers</li>
                        <li>Neettuveeshal - 6 Numbers</li>
                        <li>Kunthapayattu - 6 Numbers</li>
                        <li>Kunthapayattu - 6 Numbers</li>
                        <li>Kunthamadavukal - 12 Numbers</li>
                        <li>Pootharasankalpam</li>
                        <li>Kalariuzhichil, Kalarichikitsa</li>
                        <li>Kalaripayattu Jeevithashaily</li>
                    </ol>

                    <h2>List of Various Practices of Kalari Yoga</h2>

                    <ol>
                        <li>The practice of physical postures - more than 3500</li>
                        <li>The practice of Mudras - 32</li>
                        <li>The practices for the cleansing of mind &amp; body - 18</li>
                        <li>The practices of laws of sadhakas - 84</li>
                        <li>The practice of laws of nature - 42</li>
                        <li>Diet - 24</li>
                        <li>Routines while having Disease - 18</li>
                        <li>Practices of serving Medicines - 16</li>
                        <li>Practices to enhance body chakras - 72</li>
                        <li>Laws of practices for a balanced physical body - 18</li>
                        <li>Practices to develop internal strength - 24</li>
                        <li>Practice of Spiritual meditation - 12</li>
                    </ol>
                </article>
            </div>
        </main>

        <x-footer />
    </div>
</x-base-layout>
