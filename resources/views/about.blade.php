<x-base-layout>
    <div x-data="{ menuOpen: false, scrolled: false }" @scroll.window="scrolled = window.scrollY > 16" @keydown.escape.window="menuOpen = false"
        class="flex flex-col min-h-screen">
        <x-ui.header />

        <main class="flex-1 relative px-5 md:px-8 pt-24 md:pt-28 pb-20 overflow-hidden">
            <div class="max-w-5xl mx-auto">
                <h1 class="text-3xl md:text-4xl font-display text-(--ink) mb-10">About Sri Gurukulam Kalari</h1>
                <article class="prose max-w-full">
                    <p> Sri Gurukulam Kalari (Reg. No. 458/10) is located in Elavally village, Thrissur district,
                        Kerala. The Sri Gurukulam Kalari Sangham was founded in 2009 by Shri Vijayan M. Iyyer Gurukkal
                        (M.Com, LL.M, Senior Fellowship holder from the Ministry of Culture). He was the chief master of
                        Shri Antony Gurukkal in the field of Kalaripayattu. The institution completed its central
                        society registration process in 2010. Through continuous societal awareness initiatives and
                        long-term training programs for dedicated students, the institution has nurtured numerous
                        talented instructors in Kalaripayattu. </p>
                    <p> Following the passing of Shri Vijayan Iyyer Gurukkal in 2011, Shri Antony Gurukkal assumed the
                        leadership of Sri Gurukulam Kalari. Shri Antony Gurukkal brings over 35 years of experience in
                        Kalaripayattu, Kalari Marma therapy, and Kalari Yoga. The leadership team was further
                        strengthened with the appointment of George K. Jose as Secretary and Vijesh M. V. as Treasurer,
                        alongside other dedicated committee members. </p>
                    <p> From 2009, Sri Gurukulam Kalari trained thousands of children and young adults in Kalaripayattu,
                        Kalari Marma therapy, and Kalari Yoga. Students who achieve teaching proficiency are awarded
                        official certificates by the Sangham. Additionally, Shri Antony Gurukkal’s mastery of Kalari
                        Marma therapeutic techniques has helped treat and heal numerous patients over the years. In
                        2011, the institution published the first-ever instructional DVD on Kalari Marma therapy, filmed
                        entirely inside Sri Gurukulam Kalari under the guidance of Shri Antony Gurukkal. The institute
                        later launched a YouTube channel, Gurukulam Communication, which features the extensive video
                        library on Kalari Marma therapy and attracts viewers worldwide. </p>
                    <p> Sri Gurukulam Kalari has also conducted free Kalaripayattu training sessions focused on fitness
                        and health consciousness for over 3,000 students across government and aided schools in Thrissur
                        district. In 2016, the Sangham organized the State Kalaripayattu Championship at the Indoor
                        Stadium in Thrissur, featuring over 600 practitioners from across Kerala. To fund facility
                        renovations and local charitable initiatives, the institution launched a community contribution
                        program using gift coupons. These efforts enabled financial and essential support for local
                        charitable foundations and an orphanage in Elavally village. </p>
                    <p> In 2021, a group of 12 soldiers from the MEG Regiment of the Indian Army underwent a 6-month
                        traditional Gurukul-style training program at Sri Gurukulam Kalari, covering Kalaripayattu,
                        Kalari Marma therapy, and Kalari Yoga. The team later performed Kalaripayattu sequences at an
                        Indian Defence event celebrating 75 Azadi Ka Amrit Mahotsav at the MEG Centre in Chennai. Their
                        impressive performance earned high praise from senior military leadership. Lieutenant General A.
                        Arun (PVSM, YSM, SM, VSM), General Officer Commanding-in-Chief of the Army's Southern Command,
                        awarded a Gold Medal to Shri Antony Gurukkal to honor his exceptional contribution to training
                        the Army performance team. </p>
                    <p> Recently, Kalari Marma Vaidyashreshtha Antony Gurukkal and the members of Sri Gurukulam Kalari
                        were honored at Sahyadri College of Engineering &amp; Management, Mangaluru, by Shri U. T.
                        Khader (Honourable Speaker of the Karnataka Legislative Assembly), along with Shri Manjunath
                        Bhandary (MLC) and Shri Harish Kumar (MLC), in recognition of his significant contributions to
                        Kalari Marma therapy services. Following the successful completion of Kalari Marma treatment
                        courses conducted in Karnataka, the team was also felicitated at the Vidhana Sabha in the
                        Karnataka Assembly Speaker's office by Speaker U. T. Khader, Home Minister Dr. G. Parameshwara,
                        MLA Manjunath Bhandary, Harish Kumar, and Arvind Kumar Arali. </p>
                    <p> Guided by the ancient masters who passed down this invaluable wisdom for the benefit of humanity
                        regardless of caste or creed, the committee members of Sri Gurukulam Kalari remain committed to
                        preserving and sharing this heritage with present and future generations. To fulfill this
                        vision, the foundation has initiated the development of India's largest Kalari complex in
                        Elavally village, Thrissur district, Kerala. </p>
                </article>
            </div>
        </main>

        <!-- Footer -->
        <x-footer />
    </div>
</x-base-layout>
