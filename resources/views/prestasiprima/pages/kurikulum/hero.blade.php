<section class="relative min-h-[75vh] md:min-h-[85vh] flex items-center overflow-hidden">

    <!-- Background -->
    <div class="absolute inset-0">
        <img src="{{ asset('assets/images/kurikulum/hero.png') }}"
             alt="Kurikulum SMA Prestasi Prima"
             class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r
             from-purple-900/90 via-purple-800/70 to-purple-700/40">
        </div>
    </div>

    <!-- Content Wrapper -->
    <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 py-28">
        <div class="max-w-3xl space-y-6" data-aos="fade-up">

            <!-- Badge -->
            <span class="inline-block bg-white/10 text-purple-100
                 text-sm font-semibold px-4 py-2 rounded-full backdrop-blur">
                Akademik Unggulan
            </span>

            <!-- Title -->
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-white leading-tight">
                Kurikulum & Metode Pembelajaran
            </h1>

            <!-- Description -->
            <p class="text-lg md:text-xl text-purple-100 leading-relaxed">
                Mengintegrasikan <strong>Kurikulum Merdeka</strong>, <strong>STEAM</strong>, teknologi digital, 
                dan karakter untuk mencetak lulusan yang unggul dan siap bersaing secara global.
            </p>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 pt-2">
                <a href="#kurikulum"
                   class="inline-flex items-center gap-2 bg-purple-500 hover:bg-purple-600
                   text-white font-semibold px-7 py-3 rounded-xl shadow-lg transition">
                    Lihat Kurikulum
                    <i class="ri-arrow-down-line"></i>
                </a>

                <a href="{{ url('/presmacontact') }}"
                   class="inline-flex items-center gap-2 bg-white/15 hover:bg-white/25
                   text-white font-semibold px-7 py-3 rounded-xl backdrop-blur transition">
                    Hubungi Kami
                    <i class="ri-arrow-right-line"></i>
                </a>
            </div>

        </div>
    </div>

    <!-- Decorative Blur -->
    <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-purple-500/40 rounded-full blur-3xl"></div>

</section>
