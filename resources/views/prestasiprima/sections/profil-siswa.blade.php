<section id="profil-siswa" class="relative py-16 sm:py-20 md:py-24 bg-gray-50 overflow-hidden">

    {{-- Background Accent --}}
    <div class="absolute -top-32 -right-32 w-72 h-72 sm:w-80 sm:h-80 md:w-96 md:h-96
                bg-purple-200 rounded-full blur-3xl opacity-30"></div>

    <div class="relative max-w-7xl mx-auto px-5 sm:px-6 lg:px-10">

        {{-- Heading --}}
        <div class="text-center max-w-3xl mx-auto mb-12 sm:mb-14 md:mb-16">
            <span class="text-xs sm:text-sm font-semibold text-purple-600 tracking-widest uppercase">
                Profil Siswa
            </span>

            <h2 class="mt-3 sm:mt-4 text-2xl sm:text-3xl md:text-5xl
                       font-extrabold text-gray-900 leading-tight">
                Generasi Masa Depan
                <span class="block text-purple-600">
                    SMA Prestasi Prima
                </span>
            </h2>

            <p class="mt-4 sm:mt-5 text-gray-600 text-sm sm:text-base md:text-lg leading-relaxed">
                Pembinaan akademik dan karakter untuk membentuk siswa unggul,
                berdaya saing, dan siap melanjutkan pendidikan ke jenjang lebih tinggi.
            </p>
        </div>

        {{-- Content --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-14 items-center">

            {{-- Image --}}
            <div class="relative">
                <img
                    src="{{ asset('assets/images/DSC00024.JPG') }}"
                    alt="Siswa SMA Prestasi Prima"
                    class="w-full h-[280px] sm:h-[360px] md:h-[480px]
                           object-cover rounded-2xl shadow-xl"
                >

                <div class="absolute bottom-4 left-4 bg-white px-4 py-2 rounded-lg shadow">
                    <p class="text-xs font-semibold text-gray-900">
                        SMA Prestasi Prima
                    </p>
                    <p class="text-[11px] text-purple-600">
                        Unggul • Berkarakter • Berprestasi
                    </p>
                </div>
            </div>

            {{-- Text --}}
            <div>
                <h3 class="text-lg sm:text-xl md:text-3xl font-semibold text-gray-900 mb-3 sm:mb-4">
                    Membentuk Siswa Siap Masa Depan
                </h3>

                <p class="text-gray-600 text-sm sm:text-base leading-relaxed mb-8">
                    SMA Prestasi Prima membina siswa melalui pembelajaran terarah,
                    penguatan karakter, dan pendampingan akademik berkelanjutan
                    agar setiap siswa berkembang optimal dan melangkah percaya diri
                    menuju masa depan.
                </p>

                {{-- Points --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4 mb-10 text-sm text-gray-700">
                    @foreach ([
                        'Pembinaan karakter, disiplin, dan tanggung jawab',
                        'Pendampingan akademik yang terarah dan konsisten',
                        'Pengembangan potensi dan prestasi siswa',
                        'Persiapan melanjutkan ke perguruan tinggi'
                    ] as $point)
                        <div class="flex gap-3">
                            <span class="text-purple-600 font-bold">✓</span>
                            <p>{{ $point }}</p>
                        </div>
                    @endforeach
                </div>

                {{-- Stats --}}
                <div class="grid grid-cols-2 gap-6 sm:flex sm:flex-wrap sm:gap-10
                            mb-10 text-center sm:text-left">

                    @foreach ([
                        ['target' => 80,  'suffix' => '%', 'label' => 'Lulusan Melanjutkan Pendidikan'],
                        ['target' => 500, 'suffix' => '+', 'label' => 'Prestasi Akademik & Non-Akademik'],
                        ['target' => 100, 'suffix' => '%', 'label' => 'Pembinaan Karakter Siswa'],
                        ['target' => 95,  'suffix' => '%', 'label' => 'Kepuasan Orang Tua']
                    ] as $stat)
                        <div>
                            <p class="stat-number text-2xl sm:text-4xl font-bold text-purple-600"
                               data-target="{{ $stat['target'] }}"
                               data-suffix="{{ $stat['suffix'] }}">
                                0
                            </p>
                            <p class="text-xs text-gray-500 mt-1">
                                {{ $stat['label'] }}
                            </p>
                        </div>
                    @endforeach

                </div>

                {{-- CTA --}}
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#prestasi"
                       class="w-full sm:w-auto text-center px-6 py-3 rounded-lg
                              bg-purple-600 text-white font-semibold
                              hover:bg-purple-700 transition">
                        Prestasi Siswa
                    </a>

                    <a href="#ppdb"
                       class="w-full sm:w-auto text-center px-6 py-3 rounded-lg
                              border border-purple-600 text-purple-600 font-semibold
                              hover:bg-purple-50 transition">
                        Informasi Pendaftaran
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('.stat-number');

    const animateCounter = el => {
        const target = Number(el.dataset.target);
        const suffix = el.dataset.suffix || '';
        let current = 0;
        const duration = 1500;
        const increment = Math.max(1, Math.ceil(target / (duration / 16)));

        const update = () => {
            current += increment;
            if (current >= target) {
                el.textContent = target + suffix;
                return;
            }
            el.textContent = current + suffix;
            requestAnimationFrame(update);
        };

        update();
    };

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(counter => observer.observe(counter));
});
</script>
@endpush
