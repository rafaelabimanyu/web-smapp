@extends('prestasiprima.index')

@section('title', 'Ekstrakurikuler SMK Prestasi Prima')

@section('content')

<!-- ====================== HERO SECTION ====================== -->
<section
    class="relative min-h-[75vh]
           bg-gradient-to-br from-purple-500 via-purple-400 to-purple-300
           text-white
           pt-44 md:pt-52 pb-28
           overflow-hidden">

    <!-- CAROUSEL BACKGROUND -->
    <div class="absolute inset-0 overflow-hidden">

        <img src="{{ asset('assets/prestasiprima/basket1.jpg') }}"
             class="hero-slide"
             loading="lazy">

        <img src="{{ asset('assets/prestasiprima/dance.jpg') }}"
             class="hero-slide"
             loading="lazy">

        <img src="{{ asset('assets/prestasiprima/basket2.jpg') }}"
             class="hero-slide"
             loading="lazy">

        <!-- Overlay -->
        <div class="absolute inset-0 bg-purple-500/30 mix-blend-multiply z-10"></div>
    </div>

    <!-- CONTENT -->
<div class="relative z-20 text-center max-w-2xl mx-auto px-4" data-aos="fade-down">
    
    <!-- Logo -->
    <img src="{{ asset('assets/logo_sma.png') }}"
         alt="Logo SMA Prestasi Prima"
         class="w-16 h-16 md:w-20 md:h-20 mx-auto mb-4">

    <!-- Title -->
    <h1 class="text-2xl md:text-3xl font-extrabold mb-3 leading-tight">
        Ekstrakurikuler SMA <span class="text-white">Prestasi Prima</span>
    </h1>

    <!-- Subtitle -->
    <p class="text-white/90 text-sm md:text-base italic leading-relaxed">
        "Wadah pengembangan minat dan bakat siswa untuk membentuk karakter unggul,
        mandiri, dan kreatif."
    </p>

</div>

</section>


<section class="min-h-screen bg-gradient-to-b from-white via-purple-50/20 to-white pt-44 pb-28 relative overflow-hidden">
  <!-- ======== Grid Ekstrakurikuler ======== -->
  <div class="max-w-7xl mx-auto px-6 relative">
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6 md:gap-8" data-aos="fade-up" data-aos-delay="200">

      @php
        $ekskul = [
          ['nama' => 'Badminton', 'gambar' => 'badminton.jpg'],
          ['nama' => 'Bola Basket', 'gambar' => 'basketball.jpg'],
          ['nama' => 'Bola Voli', 'gambar' => 'volly.jpg'],
          ['nama' => 'English Club', 'gambar' => 'english.jpg'],
          ['nama' => 'Futsal', 'gambar' => 'futsall.jpg'],
          ['nama' => 'Ganefo', 'gambar' => 'ganefo.jpg'],
          ['nama' => 'ICT Club', 'gambar' => 'ict.jpg'],
          ['nama' => 'KIR', 'gambar' => 'kir.jpg'],
          ['nama' => 'Modern Dance', 'gambar' => 'moderndance.jpg'],
          ['nama' => 'Orens Digital', 'gambar' => 'digital.jpg'],
          ['nama' => 'Orens Network', 'gambar' => 'network.jpg'],
          ['nama' => 'Orens Solution', 'gambar' => 'solution.jpg'],
          ['nama' => 'Orens Studio', 'gambar' => 'studio.jpg'],
          ['nama' => 'PMR', 'gambar' => 'pmr.jpg'],
          ['nama' => 'PPOC', 'gambar' => 'ppoc.jpg'],
          ['nama' => 'Pramuka', 'gambar' => 'pramuka.jpg'],
          ['nama' => 'Rohis', 'gambar' => 'rohis.jpg'],
          ['nama' => 'Rohkris', 'gambar' => 'rohkris.jpg'],
          ['nama' => 'Silat', 'gambar' => 'silat.png'],
          ['nama' => 'Tari Tradisional', 'gambar' => 'tari.jpg'],
          ['nama' => 'Esport', 'gambar' => 'esport.jpg'],
        ];
      @endphp

      @foreach ($ekskul as $index => $item)
      <div
        class="relative rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-500 group backdrop-blur-md"
        data-aos="zoom-in" data-aos-delay="{{ $index * 50 }}"
      >
        <div 
  class="absolute inset-0 bg-center bg-cover"
  style="background-image: url('{{ asset('assets/prestasiprima/gedungsiswa.jpg') }}'); filter: blur(2px) brightness(1); transform: scale(1.02);"
></div>


        <!-- Overlay hitam transparan -->
        <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition-all duration-500"></div>

        <!-- Konten tengah (logo ekskul dan nama) -->
        <div class="relative flex flex-col items-center justify-center py-6 z-10">
          <div class="w-20 h-20 md:w-24 md:h-24 rounded-full bg-white/80 backdrop-blur-md shadow-md flex items-center justify-center mb-3 border border-white/50">
            <img src="{{ asset('assets/images/ekskul/' . $item['gambar']) }}" alt="{{ $item['nama'] }}" class="w-16 h-16 md:w-20 md:h-20 object-contain rounded-full" />
          </div>
        </div>

        <!-- Nama ekskul -->
        <div class="relative bg-purple-500 text-white text-center py-3 text-sm md:text-base font-semibold z-10">
          {{ $item['nama'] }}
        </div>
      </div>
      @endforeach

    </div>
  </div>
</section>

<style>
.hero-slide {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;

    opacity: 0;
    transform: translateX(100%);
    transition: transform 1.2s ease, opacity 1.2s ease;
}

.hero-slide.active {
    opacity: 0.35;
    transform: translateX(0);
    z-index: 2;
}

.hero-slide.exit {
    opacity: 0;
    transform: translateX(-100%);
    z-index: 1;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const slides = document.querySelectorAll('.hero-slide');
    let current = 0;
    const total = slides.length;
    const duration = 1200;

    slides[current].classList.add('active');

    setInterval(() => {
        const prev = current;
        current = (current + 1) % total;

        slides.forEach(slide => slide.classList.remove('exit'));

        slides[prev].classList.remove('active');
        slides[prev].classList.add('exit');

        slides[current].classList.add('active');

    }, duration + 800);
});
</script>

@endsection

