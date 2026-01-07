@extends('prestasiprima.index')

@section('title', 'FAQ - SMA Prestasi Prima')

@section('content')
  
{{-- ================= HERO / HEADER FAQ SMA ================= --}}
<section class="relative min-h-[70vh] md:min-h-[85vh] flex items-center overflow-hidden">

    {{-- Background --}}
    <div class="absolute inset-0">
        <img src="{{ asset('assets/images/DSC00015.JPG') }}"
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
                'Jurusan & Program' => [
                    [
                        'question' => 'Kurikulum apa yang digunakan di SMA Prestasi Prima?',
                        'answer' => 'SMA Prestasi Prima menerapkan <strong>Kurikulum Merdeka</strong> yang menekankan penguatan karakter, berpikir kritis, kreativitas, serta kesiapan masuk perguruan tinggi favorit.',
                    ],
                    [
                        'question' => 'Apa saja pilihan jurusan di SMA Prestasi Prima?',
                        'answer' => '
                        <strong>IPA</strong> – Fokus Matematika, Fisika, Kimia, Biologi.<br>
                        <strong>IPS</strong> – Fokus Ekonomi, Sosiologi, Geografi, Sejarah.<br>
                        <strong>IPA Bilingual</strong> – Program sains bilingual.<br>
                        <strong>IPS Bilingual</strong> – Program sosial dengan perspektif global.',
                    ],
                    [
                        'question' => 'Apa perbedaan IPA Reguler dan IPA Bilingual?',
                        'answer' => 'IPA Bilingual menggunakan Bahasa Indonesia dan Inggris dalam pembelajaran sains serta dipersiapkan untuk program internasional dan luar negeri.',
                    ],
                ],

                'Fasilitas Sekolah' => [
                    [
                        'question' => 'Apa saja fasilitas pembelajaran yang tersedia?',
                        'answer' => 'Ruang kelas modern, laboratorium IPA lengkap, perpustakaan digital, ruang multimedia, serta lingkungan belajar yang nyaman dan aman.',
                    ],
                    [
                        'question' => 'Apakah tersedia fasilitas penunjang non-akademik?',
                        'answer' => 'Tersedia fasilitas olahraga, ruang seni, area diskusi siswa, serta ruang organisasi.',
                    ],
                ],

                'Keamanan & Kenyamanan' => [
                    [
                        'question' => 'Bagaimana sistem keamanan di SMA Prestasi Prima?',
                        'answer' => 'Sekolah dilengkapi CCTV, petugas keamanan, serta pengawasan guru untuk menjamin keselamatan siswa.',
                    ],
                    [
                        'question' => 'Bagaimana sekolah menjaga kenyamanan siswa?',
                        'answer' => 'Lingkungan sekolah tertata rapi, bersih, serta memiliki sistem pengawasan yang mendukung kenyamanan belajar.',
                    ],
                ],

                'Guru & Tenaga Kependidikan' => [
                    [
                        'question' => 'Bagaimana kualitas guru di SMA Prestasi Prima?',
                        'answer' => 'Guru berpengalaman, profesional, serta aktif mengikuti pelatihan dan pengembangan kompetensi.',
                    ],
                    [
                        'question' => 'Apakah tersedia tenaga kependidikan pendukung?',
                        'answer' => 'Tersedia tenaga administrasi, laboran, pustakawan, serta staf pendukung kegiatan sekolah.',
                    ],
                ],

                'Akademik & Prestasi' => [
                    [
                        'question' => 'Apakah lulusan SMA Prestasi Prima berpeluang masuk PTN favorit?',
                        'answer' => 'Ya. Program akademik dan pembinaan prestasi disiapkan untuk masuk PTN favorit nasional maupun internasional.',
                    ],
                    [
                        'question' => 'Apakah tersedia kegiatan ekstrakurikuler?',
                        'answer' => 'Tersedia ekstrakurikuler olahraga, seni, sains club, debat, serta organisasi siswa.',
                    ],
                ],
            ];
            @endphp


        @php $i = 0; @endphp

@foreach ($faqs as $category => $items)

    {{-- Category Title --}}
    <h2 class="text-2xl font-bold text-gray-800 mt-16 mb-6 border-l-4 border-purple-500 pl-4">
        {{ $category }}
    </h2>

    @foreach ($items as $faq)
        <div
            class="bg-white rounded-2xl border border-gray-100 shadow-md hover:shadow-lg transition-all duration-300 overflow-hidden cursor-pointer group"
            @click="open === {{ $i }} ? open = null : open = {{ $i }}"
            :class="{ 'ring-2 ring-purple-400/70 scale-[1.01]': open === {{ $i }} }">

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
                    :class="{ 'rotate-180 text-purple-600': open === {{ $i }} }">
                </i>
            </div>

            {{-- Answer --}}
            <div
                x-show="open === {{ $i }}"
                x-transition
                class="px-6 pb-6 text-gray-600 text-sm md:text-base leading-relaxed border-t border-gray-100">
                {!! $faq['answer'] !!}
            </div>
        </div>

        @php $i++; @endphp
    @endforeach

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