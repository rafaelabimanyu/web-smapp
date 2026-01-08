<section class="relative bg-white py-28 overflow-hidden">
    {{-- Decorative Blur --}}
    <div class="absolute -top-24 -left-24 w-96 h-96 bg-purple-200/40 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-indigo-200/40 rounded-full blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-20 items-center">

        {{-- Content --}}
        <div class="space-y-6">
            <span class="inline-flex items-center gap-2 bg-purple-100 text-purple-700 text-sm font-semibold px-4 py-2 rounded-full">
                📘 Kurikulum Unggulan
            </span>

            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight">
                Kurikulum Merdeka<br>
                <span class="text-purple-600">Berbasis STEAM</span>
            </h2>

            <p class="text-gray-600 text-lg leading-relaxed">
                SMA Prestasi Prima mengintegrasikan pendekatan
                <strong>STEAM (Science, Technology, Engineering, Art, Mathematics)</strong>
                dengan penguatan <strong>Profil Pelajar Pancasila</strong>,
                kewirausahaan, dan literasi digital untuk menghadapi tantangan abad ke-21.
            </p>

            <ul class="space-y-3 text-gray-700">
                <li class="flex items-center gap-3">
                    <span class="w-6 h-6 bg-purple-600 text-white rounded-full flex items-center justify-center text-sm">✓</span>
                    Pembelajaran adaptif & kontekstual
                </li>
                <li class="flex items-center gap-3">
                    <span class="w-6 h-6 bg-purple-600 text-white rounded-full flex items-center justify-center text-sm">✓</span>
                    Penguatan karakter & kreativitas
                </li>
                <li class="flex items-center gap-3">
                    <span class="w-6 h-6 bg-purple-600 text-white rounded-full flex items-center justify-center text-sm">✓</span>
                    Berorientasi masa depan & global
                </li>
            </ul>
        </div>

        {{-- Image --}}
        <div class="relative group">
            {{-- soft glow --}}
            <div class="absolute inset-0 bg-purple-500/15 rounded-3xl
                        blur-xl opacity-0 group-hover:opacity-100
                        transition duration-500"></div>

            <img src="{{ asset('assets/images/kurikulum/image1.png') }}"
                class="relative rounded-3xl shadow-xl w-full object-cover
                        group-hover:scale-[1.02]
                        transition duration-500 ease-out"
                alt="STEAM Learning SMA Prestasi Prima">
        </div>
    </div>
</section>
