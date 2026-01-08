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

            <h2 class="mt-3 sm:mt-4 text-2xl sm:text-3xl md:text-5xl font-extrabold text-gray-900 leading-tight">
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
                    class="w-full h-[280px] sm:h-[360px] md:h-[480px] object-cover rounded-2xl shadow-xl"
                >
                <div class="absolute bottom-4 left-4 bg-white px-4 py-2 rounded-lg shadow">
                    <p class="text-xs font-semibold text-gray-900">SMA Prestasi Prima</p>
                    <p class="text-[11px] text-purple-600">Unggul • Berkarakter • Berprestasi</p>
                </div>
            </div>

            {{-- Text --}}
            <div class="font-sans">

                {{-- Subheading --}}
                <h3 class="text-lg sm:text-xl md:text-2xl font-semibold text-gray-900 mb-3 leading-snug">
                    Membentuk <span class="text-purple-600">Siswa Siap Masa Depan</span>
                </h3>

                {{-- Paragraph --}}
                <p class="text-gray-700 text-sm sm:text-base md:text-base leading-relaxed mb-6">
                    SMA Prestasi Prima membina siswa melalui 
                    <span class="font-medium text-purple-600">pembelajaran terarah</span>, 
                    <span class="font-medium text-purple-600">penguatan karakter</span>, dan 
                    <span class="font-medium text-purple-600">pendampingan akademik berkelanjutan</span> 
                    agar setiap siswa berkembang optimal dan percaya diri menatap masa depan.
                </p>

                {{-- Points --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-8">
                    @foreach ([
                        'Pembinaan karakter, disiplin, dan tanggung jawab',
                        'Pendampingan akademik yang terarah dan konsisten',
                        'Pengembangan potensi dan prestasi siswa',
                        'Persiapan melanjutkan ke perguruan tinggi'
                    ] as $point)
                        <div class="flex items-start gap-2">
                            <span class="flex-shrink-0 w-5 h-5 rounded-full bg-gradient-to-tr from-purple-500 to-indigo-500 flex items-center justify-center text-white text-xs font-bold">
                                ✓
                            </span>
                            <p class="text-gray-700 text-sm sm:text-sm leading-relaxed">{{ $point }}</p>
                        </div>
                    @endforeach
                </div>

                {{-- Stats --}}
                <div class="grid grid-cols-2 sm:grid-cols-2 gap-6 sm:gap-10 mb-8">
                    @foreach ([
                        ['target' => 80,  'suffix' => '%', 'label' => 'Lulusan Melanjutkan Pendidikan'],
                        ['target' => 500, 'suffix' => '+', 'label' => 'Prestasi Akademik & Non-Akademik'],
                        ['target' => 100, 'suffix' => '%', 'label' => 'Pembinaan Karakter Siswa'],
                        ['target' => 95,  'suffix' => '%', 'label' => 'Kepuasan Orang Tua']
                    ] as $stat)
                        <div class="flex flex-col items-center sm:items-start w-full">
                            <p class="stat-number text-2xl sm:text-3xl font-semibold text-purple-600"
                            data-target="{{ $stat['target'] }}"
                            data-suffix="{{ $stat['suffix'] }}">
                                0
                            </p>
                            <p class="text-xs sm:text-sm text-gray-500 mt-1 text-center sm:text-left">{{ $stat['label'] }}</p>
                        </div>
                    @endforeach
                </div>

                {{-- CTA --}}
                <div class="flex flex-col sm:flex-row gap-3">
                    <a href="#prestasi"
                       class="w-full sm:w-auto text-center px-5 py-2.5 rounded-lg
                              bg-gradient-to-r from-purple-600 to-indigo-600 text-white font-semibold
                              shadow hover:scale-105 transition transform text-sm">
                        Prestasi Siswa
                    </a>

                    <a href="#ppdb"
                       class="w-full sm:w-auto text-center px-5 py-2.5 rounded-lg
                              border border-purple-600 text-purple-600 font-semibold
                              hover:bg-purple-50 transition text-sm">
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

    const animateCounter = (el) => {
        const target = parseFloat(el.dataset.target);
        const suffix = el.dataset.suffix || '';
        let current = 0;
        const duration = 1500; // durasi animasi (ms)
        const frameRate = 60; // frame per detik
        const totalFrames = Math.round((duration / 1000) * frameRate);
        const increment = target / totalFrames;

        let frame = 0;

        const update = () => {
            frame++;
            current += increment;
            if(frame >= totalFrames){
                el.textContent = Math.round(target) + suffix;
            } else {
                el.textContent = Math.round(current) + suffix;
                requestAnimationFrame(update);
            }
        }

        update();
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if(entry.isIntersecting){
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(counter => observer.observe(counter));
});
</script>
@endpush
