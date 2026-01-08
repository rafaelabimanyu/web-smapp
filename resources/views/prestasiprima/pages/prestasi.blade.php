@extends('prestasiprima.index')

@section('title', 'Prestasi Siswa - SMA Prestasi Prima')

@section('content')

<!-- ================= PRESTASI SECTION ================= -->
<section id="prestasi" class="pt-36 pb-20 bg-white relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 md:px-8 text-center">

    <!-- ================= HEADER ================= -->
    <div class="mb-12" data-aos="fade-down">
      <img src="{{ asset('assets/logo_sma.png') }}"
           alt="Logo Sekolah"
           class="mx-auto h-14 mb-4">

      <h3 class="text-lg font-bold text-gray-800">Prestasi Kami</h3>

      <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mt-2">
        Galeri <span class="text-purple-600">Prestasi Siswa</span>
      </h2>
    </div>

    <!-- ================= SWIPER ================= -->
    <div class="relative flex items-center justify-center"
         data-aos="zoom-in"
         data-aos-delay="100">

      <!-- Navigation -->
      <button class="swiper-button-prev custom-nav absolute -left-20 md:-left-24 z-20"
              aria-label="Previous"></button>

      <button class="swiper-button-next custom-nav absolute -right-20 md:-right-24 z-20"
              aria-label="Next"></button>

      <!-- Swiper -->
      <div class="swiper prestasiSwiper w-full">
        <div class="swiper-wrapper">
          @foreach ($prestasis->take(5) as $prestasi)
            <div class="swiper-slide">
              <div class="rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-500">
                <img src="{{ asset($prestasi->gambar) }}"
                     alt="{{ $prestasi->judul }}"
                     loading="lazy"
                     onclick="openImageModal(this.src)"
                     class="cursor-pointer w-full h-72 object-cover hover:scale-105 transition-transform duration-700 ease-in-out">
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>

    <!-- Pagination -->
    <div class="swiper-pagination mt-4 relative"></div>

    <!-- ================= GRID ================= -->
    <div class="mt-16" data-aos="fade-up" data-aos-delay="200">
      <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-6">
        @foreach ($prestasis as $prestasi)
          <div class="rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-all duration-300 group">
            <img src="{{ asset($prestasi->gambar) }}"
                 alt="{{ $prestasi->judul }}"
                 loading="lazy"
                 onclick="openImageModal(this.src)"
                 class="cursor-pointer w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500">
          </div>
        @endforeach
      </div>
    </div>

  </div>
</section>

<!-- ================= MODAL IMAGE ================= -->
<div id="imageModal"
     class="fixed inset-0 bg-black/80 backdrop-blur-sm z-50 hidden items-center justify-center">

  <!-- Overlay -->
  <div class="absolute inset-0 cursor-pointer" onclick="closeImageModal()"></div>

  <!-- Image Wrapper -->
  <div class="relative z-10 max-w-5xl w-full px-4 animate-zoomIn">

    <!-- CLOSE BUTTON -->
    <button onclick="closeImageModal()"
            aria-label="Close"
            class="absolute -top-4 -right-2 md:-top-6 md:-right-4
                   w-10 h-10 rounded-full bg-white/90
                   flex items-center justify-center
                   text-gray-700 hover:text-white
                   hover:bg-purple-600
                   shadow-lg transition">
      ✕
    </button>

    <!-- Image -->
    <img id="modalImage"
         src=""
         alt="Preview Prestasi"
         class="w-full max-h-[85vh] object-contain rounded-xl shadow-2xl">
  </div>
</div>


<!-- ================= FALLBACK ================= -->
<noscript>
  <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</noscript>

<!-- ================= SCRIPT ================= -->
<script>
document.addEventListener("DOMContentLoaded", () => {

  /* ===== SWIPER ===== */
  const initSwiper = () => {
    if (!window.Swiper) return;

    new Swiper(".prestasiSwiper", {
      slidesPerView: 1,
      spaceBetween: 20,
      loop: true,
      autoplay: { delay: 3000, disableOnInteraction: false },
      pagination: { el: ".swiper-pagination", clickable: true },
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
  };

  /* ===== AOS ===== */
  const initAOS = () => {
    if (window.AOS) AOS.init({ duration: 1000, once: true });
  };

  initSwiper();
  initAOS();
});

/* ===== MODAL IMAGE ===== */
function openImageModal(src) {
  const modal = document.getElementById('imageModal');
  const image = document.getElementById('modalImage');

  image.src = src;
  modal.classList.remove('hidden');
  modal.classList.add('flex');
  document.body.style.overflow = 'hidden';
}

function closeImageModal() {
  const modal = document.getElementById('imageModal');
  const image = document.getElementById('modalImage');

  modal.classList.add('hidden');
  modal.classList.remove('flex');
  image.src = '';
  document.body.style.overflow = '';
}

document.addEventListener('keydown', e => {
  if (e.key === 'Escape') closeImageModal();
});
</script>

<!-- ================= STYLE ================= -->
<style>
/* NAV BUTTON */
.custom-nav {
  width: 40px;
  height: 40px;
  background: rgba(255,255,255,.95);
  border-radius: 9999px;
  box-shadow: 0 6px 16px rgba(0,0,0,.15);
  color: #7c3aed;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all .25s ease;
}
.custom-nav:hover {
  background: #7c3aed;
  color: #fff;
  transform: scale(1.08);
  box-shadow: 0 10px 24px rgba(124,58,237,.35);
}

/* ICON */
.swiper-button-prev::after,
.swiper-button-next::after {
  font-size: 14px;
  font-weight: 700;
}

/* PAGINATION */
.swiper-pagination-bullet {
  background: #7c3aed;
  opacity: .45;
}
.swiper-pagination-bullet-active {
  opacity: 1;
  transform: scale(1.25);
}

/* MODAL ANIMATION */
@keyframes zoomIn {
  from { opacity: 0; transform: scale(.92); }
  to { opacity: 1; transform: scale(1); }
}
.animate-zoomIn {
  animation: zoomIn .25s ease-out;
}

#imageModal button {
  transition: background-color .25s ease, transform .2s ease;
}

#imageModal button:hover {
  transform: scale(1.1);
}

/* RESPONSIVE */
@media (max-width: 768px) {
  .custom-nav {
    width: 34px;
    height: 34px;
  }
  .swiper-button-prev::after,
  .swiper-button-next::after {
    font-size: 12px;
  }
}
</style>

@endsection
