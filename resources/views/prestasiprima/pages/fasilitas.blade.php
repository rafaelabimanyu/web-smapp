@extends('prestasiprima.index')

@section('title', 'Fasilitas SMA Prestasi Prima')

@section('content')
<section class="min-h-screen bg-gradient-to-b from-white via-purple-50/20 to-white pt-44 pb-32 overflow-hidden">

  {{-- ========== HERO / HEADER ========== --}}
  <div class="text-center mb-20" data-aos="fade-down">
    <h1 class="text-4xl md:text-5xl font-extrabold text-[#0e162e] mb-4 tracking-tight">
      Fasilitas <span class="text-purple-500">SMA Prestasi Prima</span>
    </h1>
    <p class="text-gray-600 max-w-2xl mx-auto leading-relaxed text-lg">
      Kami menyediakan lingkungan belajar modern yang mendukung kreativitas, inovasi, dan pembelajaran berbasis teknologi.
    </p>
    <div class="w-24 h-[3px] bg-gradient-to-r from-purple-500 to-yellow-400 mx-auto mt-6 rounded-full"></div>
  </div>

  {{-- ========== FASILITAS AKADEMIK ========== --}}
  <div class="max-w-7xl mx-auto px-6 mb-28">
    <h2 class="text-2xl md:text-3xl font-bold text-center text-[#0e162e] mb-12">Fasilitas Akademik</h2>

    <div class="grid grid-cols-2 md:grid-cols-3 gap-10" data-aos="fade-up" data-aos-delay="200">
      @for ($i = 1; $i <= 3; $i++)
        <div class="group flex justify-center items-center bg-white rounded-2xl relative">
          <img src="{{ asset('assets/fasilitas/saranabelajar' . $i . '.png') }}"
               alt="Fasilitas Akademik {{ $i }}"
               class="w-full h-64 object-contain transition-all duration-1000 ease-[cubic-bezier(0.22,1,0.36,1)] transform group-hover:scale-105 group-hover:translate-y-[-4px]">
        </div>
      @endfor
    </div>
  </div>

  {{-- ========== LABORATORIUM & STUDIO ========== --}}
  <div class="max-w-7xl mx-auto px-6 mb-28">
    <h2 class="text-2xl md:text-3xl font-bold text-center text-[#0e162e] mb-12">Laboratorium & Studio</h2>

    <div class="grid grid-cols-2 md:grid-cols-3 gap-10" data-aos="fade-up" data-aos-delay="100">
      @php
        $labImages = []; // Kosong karena belum ada data
      @endphp

      @if(count($labImages) > 0)
        @foreach($labImages as $index => $img)
          <div class="group flex justify-center items-center bg-white rounded-2xl relative">
            <img src="{{ asset($img) }}"
                 alt="Laboratorium {{ $index + 1 }}"
                 class="w-full h-64 object-contain transition-all duration-1000 ease-[cubic-bezier(0.22,1,0.36,1)] transform group-hover:scale-105 group-hover:translate-y-[-4px]">
          </div>
        @endforeach
      @else
        <div class="col-span-2 md:col-span-3 text-center text-gray-500 py-20 border-dashed border-2 border-gray-300 rounded-2xl">
          Belum ada data gambar Laboratorium & Studio.<br>
          Silahkan hubungi <a href="sma.prestasiprima.sch.id" class="text-purple-500 underline">sma.prestasiprima.sch.id</a> untuk informasi lebih lanjut.
        </div>
      @endif
    </div>
  </div>

  {{-- ========== FASILITAS UMUM ========== --}}
  <div class="max-w-7xl mx-auto px-6 mb-12">
    <h2 class="text-2xl md:text-3xl font-bold text-center text-[#0e162e] mb-12">Fasilitas Umum</h2>

    <div class="grid grid-cols-2 md:grid-cols-3 gap-10" data-aos="fade-up" data-aos-delay="300">
      @for ($i = 1; $i <= 5; $i++)
        <div class="group flex justify-center items-center bg-white rounded-2xl relative">
          <img src="{{ asset('assets/fasilitas/fasum' . $i . '.png') }}"
               alt="Fasilitas Umum {{ $i }}"
               class="w-full h-64 object-contain transition-all duration-1000 ease-[cubic-bezier(0.22,1,0.36,1)] transform group-hover:scale-105 group-hover:translate-y-[-4px]">
        </div>
      @endfor
    </div>
  </div>

</section>

{{-- ========== AOS ANIMATION ========== --}}
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const config = { duration: 1000, once: true, offset: 120 };
    if (window.initAOS) {
      window.initAOS(config).catch(error => console.error('Failed to initialize AOS on Fasilitas page', error));
    } else if (typeof window.ensureAOS === 'function') {
      window.ensureAOS().then(AOS => AOS.init(config)).catch(error => console.error('Failed to initialize AOS on Fasilitas page', error));
    } else if (window.AOS) {
      window.AOS.init(config);
    }
  });
</script>
@endsection
