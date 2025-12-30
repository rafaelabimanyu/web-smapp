<!-- ================= SECTION PRESTASI ================= -->
<section id="prestasi" class="relative py-24 bg-white overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 md:px-8">

    <!-- ===== Header ===== -->
    <header class="mb-14 text-center">
      <img src="{{ asset('assets/logo_sma.png') }}"
           alt="Logo SMA"
           class="mx-auto h-14 mb-4"
           data-aos="zoom-in">

      <h3 class="text-lg font-semibold text-gray-700 mb-1"
          data-aos="fade-up" data-aos-delay="100">
        Prestasi Kami
      </h3>

      <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900"
          data-aos="fade-up" data-aos-delay="200">
        Mengabadikan momen di balik setiap
        <span class="text-purple-600 glow-text">kemenangan</span>
      </h2>
    </header>

    <!-- ===== Swiper Wrapper ===== -->
    <div class="relative">

      <!-- Navigation (LUAR GAMBAR) -->
      <button class="swiper-button-prev custom-nav"></button>
      <button class="swiper-button-next custom-nav"></button>

      <!-- Swiper -->
      <div class="swiper prestasiSwiper">
        <div class="swiper-wrapper">

          @for ($i = 1; $i <= 6; $i++)
          <div class="swiper-slide flex justify-center">
            <figure class="prestasi-card">
              <img src="{{ asset('assets/images/prestasi/prestasi' . $i . '.png') }}"
                   alt="Prestasi {{ $i }}"
                   loading="lazy"
                   class="prestasi-img">
            </figure>
          </div>
          @endfor

        </div>
      </div>

      <!-- Pagination (LUAR GAMBAR) -->
      <div class="swiper-pagination mt-8 text-center"></div>
      
      <!-- Button Lihat Semua -->
<div class="mt-12 flex justify-center">
  <a href="{{ url('/siswa/prestasi') }}"
     class="prestasi-btn group">
    <span>Lihat Semua Prestasi</span>
    <svg xmlns="http://www.w3.org/2000/svg"
         class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1"
         fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M9 5l7 7-7 7" />
    </svg>
  </a>
</div>


    </div>

  </div>
</section>

<style>
  /* === Card mengikuti gambar === */
.prestasi-card {
  display: inline-block;
  border-radius: 1rem;
  overflow: hidden;
  background: #fff;
  box-shadow: 0 10px 24px rgba(0,0,0,.14);
  transition: transform .35s ease, box-shadow .35s ease;
}

.prestasi-card:hover {
  transform: translateY(-6px) scale(1.03);
  box-shadow: 0 18px 36px rgba(124,58,237,.25);
}

/* Image natural size */
.prestasi-img {
  display: block;
  width: auto;
  max-width: 100%;
  height: auto;
}

/* Glow text */
.glow-text {
  text-shadow: 0 0 6px rgba(124,58,237,.45);
}
/* === Navigation === */
.custom-nav {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 34px;
  height: 34px;
  background: #fff;
  border-radius: 9999px;
  box-shadow: 0 2px 8px rgba(0,0,0,.15);
  color: #7c3aed;
  z-index: 20;
  transition: all .25s ease;
}

.swiper-button-prev { left: -48px; }
.swiper-button-next { right: -48px; }

.custom-nav::after {
  font-size: 14px;
  font-weight: bold;
}

.custom-nav:hover {
  background: #7c3aed;
  color: #fff;
  transform: translateY(-50%) scale(1.1);
}

/* Pagination */
.swiper-pagination-bullet {
  background: #7c3aed;
  opacity: .4;
}
.swiper-pagination-bullet-active {
  opacity: 1;
  transform: scale(1.3);
}

/* === Button Prestasi === */
.prestasi-btn {
  display: inline-flex;
  align-items: center;
  padding: 0.85rem 2rem;
  border-radius: 9999px;
  font-weight: 600;
  color: #7c3aed;
  background: linear-gradient(135deg, rgba(124,58,237,.08), rgba(124,58,237,.15));
  border: 1px solid rgba(124,58,237,.3);
  transition: all .3s ease;
  backdrop-filter: blur(6px);
}

.prestasi-btn:hover {
  color: #fff;
  background: linear-gradient(135deg, #7c3aed, #5b21b6);
  box-shadow: 0 12px 30px rgba(124,58,237,.35);
  transform: translateY(-2px);
}


/* Mobile */
@media (max-width: 768px) {
  .swiper-button-prev { left: -12px; }
  .swiper-button-next { right: -12px; }
}

</style>

<script>
document.addEventListener('DOMContentLoaded', () => {

  new Swiper('.prestasiSwiper', {
    slidesPerView: 1,
    spaceBetween: 24,
    loop: true,
    autoplay: { delay: 3500, disableOnInteraction: false },
    pagination: { el: '.swiper-pagination', clickable: true },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    },
    preloadImages: false,
    lazy: true,
    breakpoints: {
      640: { slidesPerView: 2 },
      1024: { slidesPerView: 3 }
    }
  });

});
</script>
