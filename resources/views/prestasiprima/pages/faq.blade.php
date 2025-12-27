@extends('prestasiprima.index')

@section('title', 'FAQ - SMK Prestasi Prima')

@section('content')
<section 
  class="relative min-h-screen bg-white pt-44 pb-28 overflow-hidden"
  x-data="{ open: null }"
>
  {{-- Dekorasi Latar --}}
  <div class="absolute inset-0 -z-10 overflow-hidden">
    <div class="absolute top-10 left-20 w-96 h-96 bg-purple-200/30 rounded-full blur-3xl animate-pulse-slow"></div>
    <div class="absolute bottom-0 right-10 w-[28rem] h-[28rem] bg-purple-100/40 rounded-full blur-3xl animate-pulse-slow delay-1000"></div>
  </div>

  {{-- Header --}}
  <div class="max-w-5xl mx-auto text-center px-6 mb-16">
    <h1 class="text-5xl md:text-6xl font-extrabold text-gray-800 mb-6 relative inline-block">
      Pertanyaan Umum
      <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-24 h-1 bg-gradient-to-r from-purple-500 to-purple-400 rounded-full"></span>
    </h1>
    <p class="text-gray-600 text-lg max-w-2xl mx-auto">
      Klik pertanyaan di bawah untuk melihat jawabannya.
    </p>
  </div>

  {{-- List FAQ per baris --}}
  <div class="max-w-4xl mx-auto space-y-6 px-6">
    @php
      $faqs = [
        [
          'question' => 'Kurikulum apa yang digunakan di SMA Prestasi Prima?',
          'answer' => 'SMA Prestasi Prima menerapkan <strong>Kurikulum Merdeka</strong> yang menekankan penguatan karakter, kemampuan berpikir kritis, kreativitas, serta kesiapan siswa melanjutkan ke perguruan tinggi.',
        ],
        [
          'question' => 'Apa saja peminatan yang tersedia?',
          'answer' => '<strong>SMA Prestasi Prima</strong> memiliki beberapa peminatan utama:<br><br>
            <strong>IPA</strong> – Sains, teknologi, dan riset.<br>
            <strong>IPS</strong> – Sosial, ekonomi, dan humaniora.<br>
            <strong>Bahasa</strong> – Bahasa, sastra, dan komunikasi global.',
        ],
        [
          'question' => 'Bagaimana fasilitas pembelajaran di SMA Prestasi Prima?',
          'answer' => 'Fasilitas meliputi ruang kelas modern, laboratorium IPA, perpustakaan digital, ruang multimedia, serta lingkungan belajar yang aman dan nyaman.',
        ],
        [
          'question' => 'Apakah tersedia kegiatan ekstrakurikuler?',
          'answer' => 'Tersedia berbagai ekstrakurikuler seperti olahraga, seni, sains club, debat, organisasi siswa, dan kegiatan pengembangan kepemimpinan.',
        ],
        [
          'question' => 'Bagaimana sistem keamanan sekolah?',
          'answer' => 'Sekolah dilengkapi dengan sistem CCTV, pengawasan guru, serta petugas keamanan untuk memastikan kenyamanan seluruh warga sekolah.',
        ],
      ];
    @endphp

    @foreach ($faqs as $index => $faq)
    <div 
      class="bg-white backdrop-blur-xl rounded-2xl border border-gray-100 shadow-md hover:shadow-lg transition-all duration-300 overflow-hidden cursor-pointer group"
      @click="open === {{ $index }} ? open = null : open = {{ $index }}"
      :class="{ 'ring-2 ring-purple-400/70 scale-[1.01]': open === {{ $index }} }"
      x-data="{ show: false }"
      x-intersect.once="show = true"
      x-transition:enter="transition ease-out duration-700"
      x-transition:enter-start="opacity-0 translate-y-6"
      x-transition:enter-end="opacity-100 translate-y-0"
    >
      {{-- Pertanyaan --}}
      <div class="flex items-center gap-4 px-6 py-6">
        <div class="p-3 rounded-xl bg-purple-100 text-purple-500 shadow-md group-hover:bg-purple-500 group-hover:text-white transition-all duration-300">
          <i data-lucide="help-circle" class="w-6 h-6"></i>
        </div>
        <h2 class="text-lg md:text-xl font-semibold text-gray-800 leading-snug flex-1">
          {{ $faq['question'] }}
        </h2>
        <i 
          data-lucide="chevron-down" 
          class="w-5 h-5 text-purple-400 transition-transform duration-500"
          :class="{ 'rotate-180 text-purple-600': open === {{ $index }} }"
        ></i>
      </div>

      {{-- Jawaban --}}
      <div 
        x-show="open === {{ $index }}"
        x-transition:enter="transition-all ease-in-out duration-700"
        x-transition:enter-start="max-h-0 opacity-0"
        x-transition:enter-end="max-h-[1000px] opacity-100"
        x-transition:leave="transition-all ease-in-out duration-500"
        x-transition:leave-start="max-h-[1000px] opacity-100"
        x-transition:leave-end="max-h-0 opacity-0"
        class="px-6 pb-6 text-gray-600 text-sm md:text-base leading-relaxed border-t border-gray-100 overflow-hidden"
      >
        {!! $faq['answer'] !!}
      </div>
    </div>
    @endforeach
  </div>

  {{-- CTA --}}
  <div class="mt-24 text-center">
    <p class="text-gray-700 text-lg mb-6">Masih ada pertanyaan lain?</p>
    <a href="{{ url('/presmacontact') }}"
      class="inline-flex items-center gap-2 bg-purple-500 hover:bg-purple-600 text-white font-semibold px-10 py-4 rounded-full shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300">
      Hubungi Kami Sekarang
      <i data-lucide="message-circle" class="w-5 h-5"></i>
    </a>
  </div>
</section>

{{-- FOTO GEDUNG --}}
<section class="relative w-full bg-white overflow-hidden select-none pointer-events-none">
  <img alt="Gedung SMK Prestasi Prima" 
       class="w-full h-[40vh] sm:h-[55vh] lg:h-screen object-cover object-center hover:scale-[1.02] transition-transform duration-700" 
       src="{{ asset('assets/prestasiprima/gedungprestasiprima.avif') }}">
</section>

@push('scripts')
<script>
  lucide.createIcons();
</script>
@endpush

<style>
@keyframes pulse-slow {
  0%, 100% { transform: scale(1); opacity: 0.5; }
  50% { transform: scale(1.1); opacity: 0.9; }
}
.animate-pulse-slow { animation: pulse-slow 10s ease-in-out infinite; }
</style>
@endsection
