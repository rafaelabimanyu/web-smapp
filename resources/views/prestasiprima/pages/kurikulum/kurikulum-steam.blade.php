<section class="relative bg-white py-36 overflow-hidden">
    {{-- Decorative Blur --}}
    <div class="absolute -top-28 -left-28 w-[28rem] h-[28rem] bg-purple-200/40 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-28 -right-28 w-[28rem] h-[28rem] bg-indigo-200/40 rounded-full blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-24 items-center">

        {{-- Content --}}
        <div class="space-y-8">
            <span class="inline-flex items-center gap-2 bg-purple-100 text-purple-700 text-base font-semibold px-5 py-2.5 rounded-full">
                📘 Kurikulum Unggulan
            </span>

            <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight">
                Kurikulum Merdeka<br>
                <span class="text-purple-600">Berbasis STEAM</span>
            </h2>

            <p class="text-gray-600 text-xl leading-relaxed max-w-xl">
                SMA Prestasi Prima mengintegrasikan pendekatan
                <strong>STEAM (Science, Technology, Engineering, Art, Mathematics)</strong>
                dengan penguatan <strong>Profil Pelajar Pancasila</strong>,
                kewirausahaan, dan literasi digital untuk menghadapi tantangan abad ke-21.
            </p>

            <ul class="space-y-4 text-lg text-gray-700">
                <li class="flex items-center gap-4">
                    <span class="w-7 h-7 bg-purple-600 text-white rounded-full flex items-center justify-center text-base">✓</span>
                    Pembelajaran adaptif & kontekstual
                </li>
                <li class="flex items-center gap-4">
                    <span class="w-7 h-7 bg-purple-600 text-white rounded-full flex items-center justify-center text-base">✓</span>
                    Penguatan karakter & kreativitas
                </li>
                <li class="flex items-center gap-4">
                    <span class="w-7 h-7 bg-purple-600 text-white rounded-full flex items-center justify-center text-base">✓</span>
                    Berorientasi masa depan & global
                </li>
            </ul>
        </div>

        {{-- Image --}}
        <div class="relative group">
            {{-- soft glow --}}
            <div class="absolute inset-0 bg-purple-500/20 rounded-[2.5rem]
                        blur-2xl opacity-0 group-hover:opacity-100
                        transition duration-500"></div>

            <img src="{{ asset('assets/images/kurikulum/image1.png') }}"
                class="relative rounded-[2.5rem] shadow-2xl w-full object-cover
                        group-hover:scale-[1.04]
                        transition duration-500 ease-out"
                alt="STEAM Learning SMA Prestasi Prima">
        </div>
    </div>
</section>
