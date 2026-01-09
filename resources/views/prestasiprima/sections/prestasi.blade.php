<!-- ================= SECTION PRESTASI ================= -->
<section id="prestasi" class="relative py-16 md:py-24 bg-white overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">

    <!-- ===== Header ===== -->
    <header class="mb-10 md:mb-14 text-center">
      <img src="{{ asset('assets/logo_sma.png') }}"
           alt="Logo SMA"
           class="mx-auto h-12 md:h-14 mb-3 md:mb-4"
           data-aos="zoom-in">

      <h3 class="text-sm md:text-lg font-semibold text-gray-700 mb-1"
          data-aos="fade-up" data-aos-delay="100">
        Prestasi Kami
      </h3>

      <h2 class="text-xl sm:text-2xl md:text-3xl font-extrabold text-gray-900 leading-snug"
          data-aos="fade-up" data-aos-delay="200">
        Mengabadikan momen di balik setiap
        <span class="text-purple-600 glow-text">kemenangan</span>
      </h2>
    </header>

    <!-- ===== Swiper Wrapper ===== -->
    <div class="relative">

      <!-- Navigation -->
      <button class="swiper-button-prev custom-nav hidden sm:flex"></button>
      <button class="swiper-button-next custom-nav hidden sm:flex"></button>

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

      <!-- Pagination -->
      <div class="swiper-pagination mt-6 md:mt-8 text-center"></div>

      <!-- Button -->
      <div class="mt-8 md:mt-12 flex justify-center">
        <a href="{{ url('/siswa/prestasi') }}"
           class="prestasi-btn group text-sm md:text-base">
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
  /* === Card === */
.prestasi-card {
  display: inline-block;
  border-radius: 1rem;
  overflow: hidden;
  background: #fff;
  box-shadow: 0 10px 24px rgba(0,0,0,.14);
  transition: transform .35s ease, box-shadow .35s ease;
}

@media (hover:hover) {
  .prestasi-card:hover {
    transform: translateY(-6px) scale(1.03);
    box-shadow: 0 18px 36px rgba(124,58,237,.25);
  }
}

/* Image */
.prestasi-img {
  display: block;
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

.swiper-button-prev { left: -42px; }
.swiper-button-next { right: -42px; }

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
  opacity: .35;
}
.swiper-pagination-bullet-active {
  opacity: 1;
  transform: scale(1.25);
}

/* === Button === */
.prestasi-btn {
  display: inline-flex;
  align-items: center;
  padding: 0.7rem 1.6rem;
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

/* === Mobile Optimization === */
@media (max-width: 640px) {
  .prestasi-card {
    border-radius: 0.85rem;
  }

  .prestasi-btn {
    padding: 0.6rem 1.4rem;
  }
}

</style>


<script>
document.addEventListener('DOMContentLoaded', () => {
  new Swiper('.prestasiSwiper', {
    slidesPerView: 1.1,
    spaceBetween: 16,
    loop: true,
    autoplay: {
      delay: 3500,
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 24
      }
    }
  });
});
</script>
