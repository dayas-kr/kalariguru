<x-base-layout>
    <div x-data="{ menuOpen: false, scrolled: false }" @scroll.window="scrolled = window.scrollY > 16" @keydown.escape.window="menuOpen = false"
        class="flex flex-col min-h-screen">
        <x-ui.header />

        <main class="flex-1 relative px-5 md:px-8 pt-24 md:pt-28 pb-20 overflow-hidden">
            <div class="max-w-5xl mx-auto">
                <h1 class="text-3xl md:text-4xl font-display text-(--ink) mb-10">Cancellation and Refund Policy</h1>
                <article class="prose max-w-full">
                    <p><strong>Last updated on 02-09-2026</strong></p>

                    <p>
                        SRI GURUKULAM KALARI believes in helping our students/customers as far as
                        possible, and has therefore a liberal cancellation policy. Under this
                        policy:
                    </p>

                    <ul>
                        <li>
                            Cancellations will be considered only if the request is made before
                            starting the training sessions that the student/customer has enrolled
                            in. However, the cancellation request may not be entertained if the
                            sessions have already started.
                        </li>

                        <li>
                            Processing charges equal to 30% of the fee are non-refundable. The
                            balance of 70% will be credited to the bank account of the student or
                            customer.
                        </li>

                        <li>
                            In case of any refunds approved by SRI GURUKULAM KALARI, it will take
                            <strong>6–8 days</strong> for the refund to be processed.
                        </li>
                    </ul>
                </article>

            </div>
        </main>

        <!-- Footer -->
        <x-footer />
    </div>
</x-base-layout>
