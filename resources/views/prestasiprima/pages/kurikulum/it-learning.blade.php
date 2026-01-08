<section class="relative bg-gray-50 py-24 overflow-hidden">

    {{-- decorative blur --}}
    <div class="absolute -top-32 -left-32 w-96 h-96 bg-purple-200/40 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-indigo-200/40 rounded-full blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-5 sm:px-6 grid lg:grid-cols-2 gap-20 items-center">

        {{-- image --}}
        <div class="relative group">
            <div class="absolute inset-0 rounded-3xl bg-purple-500/15 blur-xl
                        opacity-0 group-hover:opacity-100 transition duration-500"></div>

            <img src="{{ asset('assets/images/kurikulum/DSC00002.JPG') }}"
                 class="relative w-full h-full object-cover rounded-3xl shadow-xl
                        group-hover:scale-[1.02] transition duration-500 ease-out"
                 alt="Pembelajaran Berbasis IT SMA Prestasi Prima">
        </div>

        {{-- content --}}
        <div class="space-y-6">

            <span class="inline-flex items-center gap-2
                         bg-purple-100 text-purple-700
                         text-sm font-semibold px-4 py-2 rounded-full">
                💻 Metode Pembelajaran
            </span>

            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight">
                Pembelajaran Berbasis<br>
                <span class="text-purple-600">IT & Digital</span>
            </h2>

            <p class="text-gray-600 text-lg leading-relaxed max-w-xl">
                Proses belajar mengajar didukung teknologi digital
                untuk menciptakan pengalaman pembelajaran yang
                interaktif, efektif, dan relevan dengan kebutuhan
                generasi masa kini.
            </p>

            <ul class="space-y-4 pt-2">
                <li class="flex items-center gap-4">
                    <span class="w-9 h-9 flex items-center justify-center
                                 bg-purple-600 text-white rounded-full text-sm">
                        ✓
                    </span>
                    <span class="text-gray-700 font-medium">
                        Laptop & proyektor di setiap kelas
                    </span>
                </li>

                <li class="flex items-center gap-4">
                    <span class="w-9 h-9 flex items-center justify-center
                                 bg-purple-600 text-white rounded-full text-sm">
                        ✓
                    </span>
                    <span class="text-gray-700 font-medium">
                        Media pembelajaran interaktif & visual
                    </span>
                </li>

                <li class="flex items-center gap-4">
                    <span class="w-9 h-9 flex items-center justify-center
                                 bg-purple-600 text-white rounded-full text-sm">
                        ✓
                    </span>
                    <span class="text-gray-700 font-medium">
                        Administrasi & evaluasi berbasis digital
                    </span>
                </li>
            </ul>

        </div>

    </div>
</section>
