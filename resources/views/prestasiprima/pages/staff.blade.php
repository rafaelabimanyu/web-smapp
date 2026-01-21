@extends('prestasiprima.index')

@section('title', 'Struktur Staff & Manajemen - SMA Prestasi Prima')

@section('content')

{{-- =========================================================
= HERO / HEADER STAFF
========================================================= --}}
<section
    class="relative text-center mt-12 mb-24 py-20 bg-cover bg-center"
    style="background-image: url('{{ asset('assets/prestasiprima/fotbarguru2.jpg') }}');"
>
    {{-- Overlay --}}
    <div class="absolute inset-0 bg-black/40 backdrop-blur-[1px]"></div>

    {{-- Content --}}
    <div class="relative max-w-4xl mx-auto px-4">

        {{-- Ornament --}}
        <div class="flex justify-center mb-8">
            <div class="flex items-center gap-6">
                <div class="w-20 h-[3px] bg-gradient-to-r from-purple-400 to-yellow-400 rounded-full"></div>

                <div class="relative w-16 h-16 flex items-center justify-center rounded-full
                            bg-gradient-to-br from-purple-50 to-yellow-50
                            shadow-md animate-pulse-glow">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="w-8 h-8 text-purple-600 drop-shadow-[0_0_8px_rgba(255,165,0,0.6)]"
                         fill="currentColor"
                         viewBox="0 0 24 24">
                        <path d="M12 2l2.5 6.5L21 9l-5 4 1.5 7L12 16l-5.5 4L8 13 3 9l6.5-.5L12 2z"/>
                    </svg>
                </div>

                <div class="w-20 h-[3px] bg-gradient-to-l from-purple-400 to-yellow-400 rounded-full"></div>
            </div>
        </div>

        {{-- Title --}}
        <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight mb-4 text-white">
            <span class="block sm:inline">Staff & Tenaga Pendidik</span>
            <span class="block sm:inline bg-gradient-to-r from-yellow-400 to-purple-400 bg-clip-text text-transparent">
                SMA Prestasi Prima
            </span>
        </h2>

        {{-- Description --}}
        <p class="text-white/90 text-sm sm:text-base leading-relaxed max-w-2xl mx-auto">
            Dedikasi, integritas, dan profesionalisme menjadi fondasi kami dalam membimbing
            generasi unggul melalui pendidikan yang berkarakter dan berdaya saing.
        </p>

    </div>
</section>

{{-- =========================================================
= SECTION STRUKTUR STAFF & TENAGA PENDIDIK
========================================================= --}}
<section class="min-h-screen bg-gradient-to-b from-white via-gray-50 to-white py-24 relative overflow-hidden">

  {{-- ================= KEPALA SEKOLAH ================= --}}
  @php
      $kepala = \DB::table('prestasiprima_staff')
                  ->where('kategori', 'kepala')
                  ->first();
  @endphp

  <div class="max-w-7xl mx-auto px-6 text-center mb-28">
    <div class="flex flex-col md:flex-row items-center justify-center gap-14" data-aos="fade-up">

      {{-- Foto Kepala Sekolah --}}
      <div class="relative bg-white rounded-3xl shadow-lg border border-purple-100 p-3">
        @if($kepala && $kepala->foto)
          <img
            src="{{ asset('storage/staff/' . $kepala->foto) }}"
            alt="Kepala Sekolah"
            class="rounded-2xl w-72 h-96 object-cover"
          >
        @else
          <div class="w-72 h-96 bg-gray-200 flex items-center justify-center rounded-2xl text-gray-400">
            Tidak ada foto
          </div>
        @endif

        <div class="absolute -top-3 -left-3 w-12 h-12 bg-gradient-to-br from-purple-500 to-yellow-400 rounded-full shadow-md flex items-center justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 12c2.7 0 4.9-2.2 4.9-4.9S14.7 2.2 12 2.2 7.1 4.4 7.1 7.1 9.3 12 12 12zm0 2c-3.3 0-9.8 1.7-9.8 4.9V22h19.6v-3.1c0-3.2-6.5-4.9-9.8-4.9z"/>
          </svg>
        </div>
      </div>

      {{-- Deskripsi Kepala Sekolah --}}
      <div class="text-left max-w-xl">
        <div class="inline-flex items-center gap-2 bg-gradient-to-r from-purple-500 to-yellow-400 text-white px-5 py-2 rounded-full text-sm font-semibold shadow-md mb-5">
          Kepala Sekolah
        </div>

        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4">
          {{ $kepala->nama ?? 'Tidak ada data' }}
        </h2>

        <div class="w-28 h-[3px] bg-gradient-to-r from-purple-500 to-yellow-400 mb-6 rounded-full"></div>

        <div class="relative bg-gradient-to-br from-purple-50 to-white border border-purple-100 rounded-2xl shadow-md p-8">
          <p class="text-gray-700 italic text-lg leading-relaxed">
            {{ $kepala->kutipan ?? 'Tidak ada kutipan.' }}
          </p>
        </div>
      </div>

    </div>
  </div>

  {{-- ================= MANAGEMENT / STAFF ================= --}}
  <div class="max-w-7xl mx-auto px-6 mb-24">
    <div class="flex justify-center mb-12">
      <div class="inline-flex bg-gradient-to-r from-purple-500 to-yellow-400 rounded-xl p-1 shadow-lg">
        <button
          class="tab-btn active-tab rounded-lg px-8 py-2 font-semibold transition"
          data-target="kesiswaan"
        >
          Management
        </button>
      </div>
    </div>

    <div id="kesiswaan" class="tab-content grid grid-cols-2 md:grid-cols-4 gap-8 show">
      @foreach (\DB::table('prestasiprima_staff')->where('kategori', 'kesiswaan')->get() as $staff)
        <div class="staff-card">
          <img src="{{ asset('storage/staff/' . $staff->foto) }}" alt="{{ $staff->nama }}">
        </div>
      @endforeach
    </div>
  </div>

  {{-- ================= GURU MAPEL ================= --}}
  <div class="max-w-7xl mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-purple-500">Guru Mapel</h2>
    </div>

    <div class="relative flex justify-center items-center">
      <button id="prevBtn"
        class="hidden md:flex absolute left-[-2.5rem] lg:left-[-3rem] top-1/2 -translate-y-1/2 z-20 bg-purple-500 hover:bg-purple-600 text-white p-3 rounded-full shadow-lg transition">
        <i data-lucide="chevron-left" class="w-5 h-5"></i>
      </button>

      <div id="guruMapelWrapper" class="overflow-hidden w-full max-w-6xl">
        <div id="guruMapelCarousel" class="flex gap-6 transition-transform duration-700 ease-out">
          @foreach (\DB::table('prestasiprima_staff')->where('kategori', 'guru_mapel')->get() as $staff)
            <div class="flex-shrink-0 w-48 h-[280px] rounded-xl overflow-hidden shadow-lg bg-white transform hover:scale-105 transition">
              <img src="{{ asset('storage/staff/' . $staff->foto) }}" alt="{{ $staff->nama }}" class="w-full h-full object-cover">
            </div>
          @endforeach
        </div>
      </div>

      <button id="nextBtn"
        class="hidden md:flex absolute right-[-2.5rem] lg:right-[-3rem] top-1/2 -translate-y-1/2 z-20 bg-purple-500 hover:bg-purple-600 text-white p-3 rounded-full shadow-lg transition">
        <i data-lucide="chevron-right" class="w-5 h-5"></i>
      </button>
    </div>
  </div>

</section>

{{-- =========================================================
= STYLE
========================================================= --}}
<style>
  .active-tab {
    background: white;
    color: #ff7a00;
    box-shadow: 0 4px 12px rgba(255,165,0,.3);
  }

  .tab-content { opacity: 0; transform: translateY(10px); transition: .4s; }
  .tab-content.show { opacity: 1; transform: translateY(0); }

  .staff-card {
    @apply bg-white rounded-2xl shadow-md overflow-hidden hover:-translate-y-2 transition;
  }
  .staff-card img { @apply w-full h-64 object-cover; }

  .guru-card {
    @apply flex-shrink-0 w-48 h-[280px] rounded-xl overflow-hidden shadow-lg bg-white hover:scale-105 transition;
  }
  .guru-card img { @apply w-full h-full object-cover; }

  .nav-btn {
    @apply hidden md:flex absolute top-1/2 -translate-y-1/2 z-20
           bg-purple-500 hover:bg-purple-600 text-white
           p-3 rounded-full shadow-lg transition;
  }

  @keyframes pulse-glow {
    0%,100% { box-shadow:0 0 12px rgba(255,165,0,.4); }
    50% { box-shadow:0 0 30px rgba(255,165,0,.8); }
  }
  .animate-pulse-glow { animation: pulse-glow 2.5s infinite; }
</style>

{{-- =========================================================
= SCRIPT
========================================================= --}}
<script>
document.addEventListener("DOMContentLoaded", () => {

  // Carousel Guru Mapel
  const carousel = document.getElementById("guruMapelCarousel");
  const nextBtn = document.getElementById("nextBtn");
  const prevBtn = document.getElementById("prevBtn");

  let index = 0;
  const cardWidth = 224;

  nextBtn.addEventListener("click", () => {
    index++;
    carousel.style.transform = `translateX(-${index * cardWidth}px)`;
  });

  prevBtn.addEventListener("click", () => {
    index = Math.max(0, index - 1);
    carousel.style.transform = `translateX(-${index * cardWidth}px)`;
  });

});
</script>

@endsection
{{--  --}}