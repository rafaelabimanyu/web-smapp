@extends('prestasiprima.index')

@section('title', 'Prestasi Siswa - SMK Prestasi Prima')

@section('content')
<section id="prestasi" class="pt-36 pb-20 bg-white relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 md:px-8 text-center">

    {{-- ================= HEADER ================= --}}
    <div class="mb-12" data-aos="fade-down">
      <img src="{{ asset('assets/images/logo-smk.png') }}"
           alt="Logo Sekolah"
           class="mx-auto h-14 mb-4">

      <h3 class="text-lg font-bold text-gray-800">
        Prestasi Kami
      </h3>

      <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mt-2">
        Galeri <span class="text-purple-600">Prestasi Siswa</span>
      </h2>
    </div>

    {{-- ================= SWIPER PRESTASI ================= --}}
    <div class="relative flex items-center justify-center"
         data-aos="zoom-in"
         data-aos-delay="100">

      {{-- Navigasi --}}
      <button class="swiper-button-prev custom-nav absolute -left-20 md:-left-24 z-20"
              aria-label="Previous"></button>

      <button class="swiper-button-next custom-nav absolute -right-20 md:-right-24 z-20"
              aria-label="Next"></button>

      {{-- Swiper --}}
      <div class="swiper prestasiSwiper w-full">
        <div class="swiper-wrapper">
          @foreach ($prestasis->take(5) as $prestasi)
            <div class="swiper-slide">
              <div class="rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-500">
                <img src="{{ asset($prestasi->gambar) }}"
                     alt="{{ $prestasi->judul }}"
                     loading="lazy"
                     class="w-full h-72 object-cover hover:scale-105 transition-transform duration-700 ease-in-out">
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>

    {{-- Pagination --}}
    <div class="swiper-pagination mt-4 relative"></div>

    {{-- ================= GRID PRESTASI ================= --}}
    <div class="mt-16" data-aos="fade-up" data-aos-delay="200">
      <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-6">
        @foreach ($prestasis as $prestasi)
          <div class="rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-all duration-300 group">
            <img src="{{ asset($prestasi->gambar) }}"
                 alt="{{ $prestasi->judul }}"
                 loading="lazy"
                 class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500">
          </div>
        @endforeach
      </div>
    </div>

  </div>
</section>

{{-- ================= FALLBACK (NO JS) ================= --}}
<noscript>
  <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</noscript>

{{-- ================= SCRIPT ================= --}}
<script>
document.addEventListener("DOMContentLoaded", function () {

  const loadSwiper = () => {
    if (window.ensureSwiper) return window.ensureSwiper();
    if (window.Swiper) return Promise.resolve(window.Swiper);
    return Promise.reject('Swiper not loaded');
  };

  loadSwiper().then((Swiper) => {

    new Swiper(".prestasiSwiper", {
      slidesPerView: 1,
      spaceBetween: 20,
      loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        640: { slidesPerView: 2 },
        768: { slidesPerView: 3 },
        1024: { slidesPerView: 4 },
      },
    });

    // Init AOS
    const config = { duration: 1000, once: true };

    if (window.AOS) {
      AOS.init(config);
    } else if (window.ensureAOS) {
      window.ensureAOS().then(AOS => AOS.init(config));
    }

  }).catch(console.error);
});
</script>

{{-- ================= STYLE ================= --}}
<style>
/* === NAV BUTTON === */
.custom-nav {
  width: 46px;
  height: 46px;
  background: rgba(255, 255, 255, 0.95);
  border-radius: 50%;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
  color: #7c3aed;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all .3s ease;
}

.custom-nav:hover {
  background: #7c3aed;
  color: #fff;
  transform: scale(1.1);
}

/* === PAGINATION === */
.swiper-pagination-bullet {
  background: #7c3aed;
  opacity: .5;
}
.swiper-pagination-bullet-active {
  opacity: 1;
  transform: scale(1.25);
}

/* === RESPONSIVE === */
@media (max-width: 768px) {
  .custom-nav {
    width: 36px;
    height: 36px;
  }
}
</style>
@endsection
