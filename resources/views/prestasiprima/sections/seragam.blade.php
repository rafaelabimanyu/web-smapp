<section
  id="seragam-section"
  class="relative py-24 md:py-28 bg-gradient-to-b from-white via-purple-50/40 to-white
         text-gray-900 overflow-hidden
         opacity-0 translate-y-10 transition-all duration-1000 ease-out">

  <!-- Decorative Blur -->
  <div class="absolute -top-40 -right-40 w-[420px] h-[420px] bg-purple-500/20 rounded-full blur-[120px]"></div>
  <div class="absolute bottom-0 -left-40 w-[420px] h-[420px] bg-purple-400/20 rounded-full blur-[120px]"></div>

  <div class="relative max-w-7xl mx-auto px-5 sm:px-6 md:px-10">

    {{-- HEADER --}}
    <div
      class="seragam-header mb-16 md:mb-20 max-w-2xl relative
             opacity-0 translate-y-6 transition-all duration-700 ease-out">

      <div class="absolute -left-4 md:-left-6 top-2 w-1 h-16 md:h-20 bg-gradient-to-b from-purple-500 to-purple-300 rounded-full"></div>

      <span class="inline-block text-[11px] uppercase tracking-[0.4em] text-purple-600 font-semibold mb-4">
        Student Uniform Collection
      </span>

      <h2 class="text-3xl md:text-5xl font-semibold leading-tight">
        Identitas Seragam Resmi
        <span class="block mt-2 text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-purple-400">
          SMA Prestasi Prima
        </span>
      </h2>

      <div class="mt-5 w-16 md:w-20 h-[2px] bg-gradient-to-r from-purple-500 to-purple-300"></div>

      <p class="mt-5 text-sm md:text-base text-gray-500 leading-relaxed max-w-xl">
        Representasi visual siswa berkarakter unggul yang mencerminkan disiplin,
        integritas, dan budaya prestasi dalam lingkungan pendidikan modern.
      </p>
    </div>

    {{-- CAROUSEL --}}
    <div class="relative">

      <div class="swiper seragamSwiper">
        <div class="swiper-wrapper">

          @php
            $seragam = [
              ['senin','Senin','Putih–Abu • Dasi • ID Card • Warrior'],
              ['selasa','Selasa','Kotak Ungu • ID Card • Warrior'],
              ['rabu','Rabu','Pramuka • Atribut Lengkap'],
              ['kamis','Kamis','Batik • Putih • Warrior'],
              ['jumatmuslim','Jumat (Muslim)','Sadariah • Abu'],
              ['jumatnonmuslim','Jumat (Non-Muslim)','Putih–Abu • Dasi'],
              ['olahraga','Olahraga','Menyesuaikan Jadwal'],
            ];
          @endphp

          @foreach($seragam as $s)
          <div
            class="swiper-slide !w-[220px] sm:!w-[240px] md:!w-[260px]
                   seragam-card
                   opacity-0 translate-y-6 transition-all duration-700 ease-out">

            <div class="relative rounded-3xl overflow-hidden bg-white border border-purple-100 shadow-lg
                        hover:shadow-purple-200/60 transition duration-500 group">

              <img
                src="{{ asset('assets/seragam/'.$s[0].'.png') }}"
                class="w-full h-[340px] sm:h-[360px] md:h-[380px] object-cover
                       transition-transform duration-700 group-hover:scale-105"
                alt="Seragam {{ $s[1] }}">

              <div class="absolute inset-0 bg-gradient-to-t from-purple-900/60 via-purple-900/10 to-transparent
                          opacity-0 group-hover:opacity-100 transition"></div>
            </div>

            <div class="mt-4 px-1">
              <p class="text-sm font-semibold tracking-wide">{{ $s[1] }}</p>
              <p class="text-xs text-gray-500 mt-1">{{ $s[2] }}</p>
            </div>
          </div>
          @endforeach

        </div>
      </div>

      {{-- NAVIGATION --}}
      <div class="flex gap-4 mt-10 md:mt-12">
        <button
          class="seragam-prev group w-10 h-10 md:w-11 md:h-11 rounded-full
                 bg-white border border-purple-200 text-purple-600 shadow-md
                 transition-all duration-200 ease-out
                 hover:bg-purple-600 hover:text-white active:scale-90">
          <span class="block text-lg transition-transform duration-200 group-hover:-translate-x-0.5">‹</span>
        </button>

        <button
          class="seragam-next group w-10 h-10 md:w-11 md:h-11 rounded-full
                 bg-white border border-purple-200 text-purple-600 shadow-md
                 transition-all duration-200 ease-out
                 hover:bg-purple-600 hover:text-white active:scale-90">
          <span class="block text-lg transition-transform duration-200 group-hover:translate-x-0.5">›</span>
        </button>
      </div>

    </div>
  </div>
</section>

@push('styles')
<style>
/* Header floating animation */
@keyframes softFloat {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-6px);
  }
}

.animate-soft-float {
  animation: softFloat 6s ease-in-out infinite;
}

/* Card pop animation */
@keyframes cardPop {
  0% {
    opacity: 0;
    transform: translateY(24px) scale(0.96);
  }
  100% {
    opacity: 1;
    transform: translateY(0) scale(1);
  }
}

.animate-card-pop {
  animation: cardPop 0.7s ease-out forwards;
}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {

  const section = document.getElementById('seragam-section');
  if (!section) return;

  const header = section.querySelector('.seragam-header');
  const cards  = section.querySelectorAll('.seragam-card');

  /* =====================
     SCROLL ANIMATION
  ====================== */
  const observer = new IntersectionObserver(
    ([entry]) => {
      if (!entry.isIntersecting) return;

      // Section reveal
      section.classList.remove('opacity-0', 'translate-y-10');

      // Header reveal + floating
      setTimeout(() => {
        header.classList.remove('opacity-0', 'translate-y-6');
        header.classList.add('animate-soft-float');
      }, 200);

      // Cards reveal stagger
      cards.forEach((card, i) => {
        setTimeout(() => {
          card.classList.remove('opacity-0', 'translate-y-6');
        }, 350 + i * 120);
      });

      observer.disconnect();
    },
    { threshold: 0.2 }
  );

  observer.observe(section);

  /* =====================
     SWIPER + REPEAT ANIM
  ====================== */
  const swiper = new Swiper('.seragamSwiper', {
    slidesPerView: 'auto',
    spaceBetween: 28,
    loop: true,
    speed: 700,
    grabCursor: true,
    navigation: {
      nextEl: '.seragam-next',
      prevEl: '.seragam-prev',
    },
    breakpoints: {
      768: { spaceBetween: 36 }
    },
    on: {
      slideChangeTransitionStart() {
        const activeSlides = document.querySelectorAll(
          '.swiper-slide-active, .swiper-slide-next'
        );

        activeSlides.forEach((slide, index) => {
          const card = slide.querySelector('.seragam-card');
          if (!card) return;

          card.classList.remove('animate-card-pop');
          void card.offsetWidth; // reset animation
          setTimeout(() => {
            card.classList.add('animate-card-pop');
          }, index * 120);
        });
      }
    }
  });

});
</script>
@endpush
