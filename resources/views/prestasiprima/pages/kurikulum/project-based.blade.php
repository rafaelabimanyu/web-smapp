<section class="relative bg-white py-28 overflow-hidden">
    {{-- Decorative Accent --}}
    <div class="absolute -top-32 -right-32 w-96 h-96 bg-purple-200/40 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-32 -left-32 w-96 h-96 bg-indigo-200/40 rounded-full blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-6
                grid grid-cols-1 lg:grid-cols-2
                gap-20 items-center">

        {{-- Content (LEFT) --}}
        <div class="space-y-6 order-2 lg:order-1">
            <span class="inline-flex items-center gap-2
                         bg-purple-100 text-purple-700
                         text-sm font-semibold px-4 py-2 rounded-full">
                🌍 Pendidikan Berwawasan Global
            </span>

            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight">
                Global Mindset<br>
                <span class="text-purple-600">& Literasi Dunia</span>
            </h2>

            <p class="text-gray-600 text-lg leading-relaxed">
                SMA Prestasi Prima menanamkan <strong>wawasan global</strong>,
                budaya literasi, dan pola pikir terbuka agar siswa siap
                menghadapi tantangan dunia internasional tanpa kehilangan
                jati diri dan karakter bangsa.
            </p>

            <ul class="space-y-4 text-gray-700">
                <li class="flex items-start gap-4">
                    <span class="w-8 h-8 bg-purple-600 text-white rounded-full
                                 flex items-center justify-center text-sm mt-1">✓</span>
                    <span>Literasi global & budaya akademik kuat</span>
                </li>
                <li class="flex items-start gap-4">
                    <span class="w-8 h-8 bg-purple-600 text-white rounded-full
                                 flex items-center justify-center text-sm mt-1">✓</span>
                    <span>Perspektif internasional & kesiapan studi lanjut</span>
                </li>
                <li class="flex items-start gap-4">
                    <span class="w-8 h-8 bg-purple-600 text-white rounded-full
                                 flex items-center justify-center text-sm mt-1">✓</span>
                    <span>Pembentukan karakter pemimpin masa depan</span>
                </li>
            </ul>
        </div>

        {{-- Image (RIGHT) --}}
        <div class="relative group flex justify-center order-1 lg:order-2">
            <div class="absolute inset-0 bg-purple-500/10 rounded-[2.5rem]
                        blur-xl opacity-0 group-hover:opacity-100
                        transition duration-500"></div>

            <img src="{{ asset('assets/images/DSC00163.JPG') }}"
                 class="relative rounded-[2.5rem] shadow-2xl
                        w-full max-w-md object-cover
                        group-hover:scale-[1.02]
                        transition duration-500 ease-out"
                 alt="Global Mindset SMA Prestasi Prima">
        </div>

    </div>
</section>
