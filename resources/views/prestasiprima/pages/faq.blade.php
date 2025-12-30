@extends('prestasiprima.index')

@section('title', 'FAQ - SMA Prestasi Prima')

@section('content')
  
{{-- ================= HERO / HEADER FAQ SMA ================= --}}
<section class="relative min-h-[70vh] md:min-h-[85vh] flex items-center overflow-hidden">

    {{-- Background --}}
    <div class="absolute inset-0">
        <img src="{{ asset('assets/prestasiprima/gedungzoom.jpg') }}"
            alt="FAQ SMA Prestasi Prima"
            class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r
            from-purple-900/90 via-purple-800/70 to-purple-700/40">
        </div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 py-28">
        <div class="max-w-3xl space-y-6" data-aos="fade-up">

            <span
                class="inline-block bg-white/10 text-purple-100
                text-sm font-semibold px-4 py-2 rounded-full backdrop-blur">
                FAQ SMA Prestasi Prima
            </span>

            <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-white leading-tight">
                Pertanyaan Umum<br class="hidden sm:block">
                SMA Prestasi Prima
            </h1>

            <p class="text-lg md:text-xl text-purple-100 leading-relaxed">
                Informasi lengkap seputar <strong>kurikulum, peminatan IPA & IPS,
                program bilingual, fasilitas, serta peluang masuk
                perguruan tinggi favorit</strong>.
            </p>

            <div class="flex flex-wrap gap-4 pt-2">
                <a href="#faq"
                    class="inline-flex items-center gap-2 bg-purple-500 hover:bg-purple-600
                    text-white font-semibold px-7 py-3 rounded-xl shadow-lg transition">
                    Lihat FAQ
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

    {{-- Decorative Blur --}}
    <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-purple-500/40 rounded-full blur-3xl"></div>
</section>


{{-- ================= FAQ SECTION ================= --}}
<section id="faq" class="relative bg-white pt-32 pb-28 overflow-hidden" x-data="{ open: null }">

    {{-- Background Decoration --}}
    <div class="absolute inset-0 -z-10 overflow-hidden">
        <div class="absolute top-10 left-20 w-96 h-96 bg-purple-200/30 rounded-full blur-3xl animate-pulse-slow"></div>
        <div class="absolute bottom-0 right-10 w-[28rem] h-[28rem] bg-purple-100/40 rounded-full blur-3xl animate-pulse-slow delay-1000"></div>
    </div>
 
    {{-- FAQ List --}}
    <div class="max-w-4xl mx-auto space-y-6 px-6">
        @php
            $faqs = [
                [
                    'question' => 'Kurikulum apa yang digunakan di SMA Prestasi Prima?',
                    'answer' => 'SMA Prestasi Prima menerapkan <strong>Kurikulum Merdeka</strong> yang menekankan penguatan karakter, kemampuan berpikir kritis, kreativitas, serta kesiapan siswa untuk melanjutkan ke perguruan tinggi favorit.',
                ],
                [
                    'question' => 'Apa saja pilihan peminatan di SMA Prestasi Prima?',
                    'answer' => 'SMA Prestasi Prima menyediakan beberapa pilihan peminatan unggulan:<br><br>
                    <strong>IPA</strong> – Fokus Matematika, Fisika, Kimia, dan Biologi.<br>
                    <strong>IPS</strong> – Fokus Ekonomi, Sosiologi, Geografi, dan Sejarah.<br>
                    <strong>IPA Bilingual</strong> – Program sains dengan pengantar Bahasa Indonesia dan Inggris.<br>
                    <strong>IPS Bilingual</strong> – Program sosial dengan perspektif global dan bilingual.',
                ],
                [
                    'question' => 'Apa keunggulan program IPA di SMA Prestasi Prima?',
                    'answer' => 'Program <strong>IPA</strong> dirancang untuk siswa yang memiliki minat di bidang sains dan teknologi.<br><br>
                    <strong>Peluang Karier:</strong> Kedokteran, Teknik, Farmasi, Sains Murni.<br>
                    <strong>Universitas Tujuan:</strong> FK UI, ITB, ITS, UGM.',
                ],
                [
                    'question' => 'Apa perbedaan IPA reguler dan IPA Bilingual?',
                    'answer' => '<strong>IPA Bilingual</strong> menggunakan Bahasa Indonesia dan Bahasa Inggris sebagai bahasa pengantar pembelajaran sains.<br><br>
                    <strong>Universitas Tujuan:</strong> ITB Program Internasional, FK UI (Bilingual), dan universitas luar negeri.',
                ],
                [
                    'question' => 'Apa keunggulan program IPS di SMA Prestasi Prima?',
                    'answer' => 'Program <strong>IPS</strong> fokus pada analisis sosial dan ekonomi.<br><br>
                    <strong>Peluang Karier:</strong> Ekonomi, Hukum, Bisnis, Politik.<br>
                    <strong>Universitas Tujuan:</strong> FEB UI, FH UGM, FISIP Unpad.',
                ],
                [
                    'question' => 'Apa kelebihan IPS Bilingual di SMA Prestasi Prima?',
                    'answer' => '<strong>IPS Bilingual</strong> mengintegrasikan kurikulum nasional dengan perspektif global.<br><br>
                    <strong>Universitas Tujuan:</strong> FISIP UI (Bilingual), FH UGM Program Internasional, dan universitas luar negeri.',
                ],
                [
                    'question' => 'Apakah lulusan SMA Prestasi Prima memiliki peluang masuk perguruan tinggi favorit?',
                    'answer' => 'Ya. Program akademik dan pembinaan prestasi dirancang khusus untuk mempersiapkan siswa masuk perguruan tinggi favorit nasional maupun internasional.',
                ],
                [
                    'question' => 'Apa saja fasilitas pembelajaran yang tersedia?',
                    'answer' => 'Ruang kelas modern, laboratorium IPA, perpustakaan digital, ruang multimedia, serta lingkungan belajar yang aman dan nyaman.',
                ],
                [
                    'question' => 'Apakah tersedia kegiatan ekstrakurikuler?',
                    'answer' => 'Tersedia ekstrakurikuler olahraga, seni, sains club, debat, organisasi siswa, serta program pengembangan kepemimpinan.',
                ],
                [
                    'question' => 'Bagaimana sistem keamanan dan kenyamanan siswa?',
                    'answer' => 'Sekolah dilengkapi CCTV, pengawasan guru, serta petugas keamanan untuk menjamin keselamatan dan kenyamanan siswa.',
                ],
            ];
        @endphp

        @foreach ($faqs as $index => $faq)
            <div
                class="bg-white rounded-2xl border border-gray-100 shadow-md hover:shadow-lg transition-all duration-300 overflow-hidden cursor-pointer group"
                @click="open === {{ $index }} ? open = null : open = {{ $index }}"
                :class="{ 'ring-2 ring-purple-400/70 scale-[1.01]': open === {{ $index }} }">

                {{-- Question --}}
                <div class="flex items-center gap-4 px-6 py-6">
                    <div class="p-3 rounded-xl bg-purple-100 text-purple-500 shadow-md
                        group-hover:bg-purple-500 group-hover:text-white transition">
                        <i data-lucide="help-circle" class="w-6 h-6"></i>
                    </div>

                    <h3 class="text-lg md:text-xl font-semibold text-gray-800 flex-1">
                        {{ $faq['question'] }}
                    </h3>

                    <i data-lucide="chevron-down"
                        class="w-5 h-5 text-purple-400 transition-transform duration-500"
                        :class="{ 'rotate-180 text-purple-600': open === {{ $index }} }">
                    </i>
                </div>

                {{-- Answer --}}
                <div
                    x-show="open === {{ $index }}"
                    x-transition:enter="transition-all ease-in-out duration-700"
                    x-transition:enter-start="max-h-0 opacity-0"
                    x-transition:enter-end="max-h-[1000px] opacity-100"
                    x-transition:leave="transition-all ease-in-out duration-500"
                    x-transition:leave-start="max-h-[1000px] opacity-100"
                    x-transition:leave-end="max-h-0 opacity-0"
                    class="px-6 pb-6 text-gray-600 text-sm md:text-base leading-relaxed border-t border-gray-100 overflow-hidden">
                    {!! $faq['answer'] !!}
                </div>
            </div>
        @endforeach
    </div>

    {{-- CTA --}}
    <div class="mt-24 text-center">
        <p class="text-gray-700 text-lg mb-6">Masih ada pertanyaan lain?</p>
        <a href="{{ url('/presmacontact') }}"
            class="inline-flex items-center gap-2 bg-purple-500 hover:bg-purple-600
            text-white font-semibold px-10 py-4 rounded-full shadow-lg
            hover:shadow-xl hover:scale-105 transition">
            Hubungi Kami Sekarang
            <i data-lucide="message-circle" class="w-5 h-5"></i>
        </a>
    </div>

</section>

@endsection


{{-- ================= SCRIPTS & STYLE ================= --}}
@push('scripts')
<script>
    lucide.createIcons();
</script>
@endpush

<style>
@keyframes pulse-slow {
    0%, 100% { transform: scale(1); opacity: .5; }
    50% { transform: scale(1.1); opacity: .9; }
}
.animate-pulse-slow {
    animation: pulse-slow 10s ease-in-out infinite;
}
</style>