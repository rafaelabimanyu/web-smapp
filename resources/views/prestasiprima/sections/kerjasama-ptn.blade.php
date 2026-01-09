<!-- ====================== SECTION: LULUSAN PTN ====================== -->
<section id="ptn" class="relative py-16 sm:py-20 bg-white overflow-hidden">

  <!-- Soft Ornament -->
  <div class="absolute inset-0 pointer-events-none">
    <div
      class="absolute top-0 left-1/2 -translate-x-1/2
             w-[520px] h-[520px]
             sm:w-[700px] sm:h-[700px]
             bg-purple-100 rounded-full blur-3xl opacity-30">
    </div>
  </div>

  <div class="relative max-w-7xl mx-auto px-4 sm:px-6">

    <!-- Title -->
    <div class="text-center mb-10 sm:mb-14" data-aos="fade-up">
      <h3 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-gray-800 leading-tight">
        Lulusan Diterima di
        <span class="text-purple-600">Perguruan Tinggi Negeri</span>
      </h3>
      <p class="text-sm sm:text-base text-gray-500 mt-2 sm:mt-3 max-w-xl mx-auto">
        Jejak prestasi lulusan SMA Prestasi Prima di berbagai PTN ternama
      </p>
    </div>

    <!-- Marquee Wrapper -->
    <div class="relative overflow-hidden ptn-wrapper py-6 sm:py-8">

      <!-- Gradient Fade -->
      <div class="pointer-events-none absolute left-0 top-0 h-full w-16 sm:w-24
                  bg-gradient-to-r from-white to-transparent z-10"></div>
      <div class="pointer-events-none absolute right-0 top-0 h-full w-16 sm:w-24
                  bg-gradient-to-l from-white to-transparent z-10"></div>

      <!-- Track -->
      <div class="ptn-marquee flex items-center gap-12 sm:gap-20">

        @foreach ([
          ['unj.png', 'Universitas Negeri Jakarta'],
          ['ipb.png', 'Institut Pertanian Bogor'],
          ['unpad.png', 'Universitas Padjadjaran'],
          ['trisakti.png', 'Universitas Trisakti'],
          ['uin2.png', 'UIN Jakarta'],
          ['isi2.png', 'ISI Surakarta'],
          ['politeknik.png', 'Politeknik Prestasi Prima'],
          ['ui3.png', 'Universitas Indonesia'],
        ] as [$img, $alt])
          <div class="ptn-item">
            <img src="{{ asset('assets/images/ptn/'.$img) }}"
                 alt="{{ $alt }}"
                 class="ptn-logo">
          </div>
        @endforeach

        <!-- Duplicate for seamless loop -->
        @foreach ([
          ['unj.png', 'Universitas Negeri Jakarta'],
          ['ipb.png', 'Institut Pertanian Bogor'],
          ['unpad.png', 'Universitas Padjadjaran'],
          ['trisakti.png', 'Universitas Trisakti'],
          ['uin2.png', 'UIN Jakarta'],
          ['isi2.png', 'ISI Surakarta'],
          ['politeknik.png', 'Politeknik Prestasi Prima'],
          ['ui3.png', 'Universitas Indonesia'],
        ] as [$img, $alt])
          <div class="ptn-item">
            <img src="{{ asset('assets/images/ptn/'.$img) }}"
                 alt="{{ $alt }}"
                 class="ptn-logo">
          </div>
        @endforeach

      </div>
    </div>

    <!-- Button -->
    <div class="mt-10 sm:mt-12 flex justify-center" data-aos="fade-up" data-aos-delay="200">
      <a href="{{ url('/informasi/lulusan-ptn') }}"
         class="ptn-btn group text-sm sm:text-base">
        <span>Lihat Lulusan Diterima di PTN</span>
        <svg xmlns="http://www.w3.org/2000/svg"
             class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1"
             fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 5l7 7-7 7" />
        </svg>
      </a>
    </div>

  </div>
</section>

<style>
/* ===== MARQUEE ===== */
.ptn-marquee {
  width: max-content;
  animation: marquee 18s linear infinite;
}

/* Pause on hover (desktop only) */
@media (min-width: 768px) {
  .ptn-wrapper:hover .ptn-marquee {
    animation-play-state: paused;
  }
}

/* ===== ITEM ===== */
.ptn-item {
  flex-shrink: 0;
  display: flex;
  align-items: center;
  justify-content: center;
}

/* ===== LOGO ===== */
.ptn-logo {
  height: 64px;
  object-fit: contain;
  filter: grayscale(100%);
  opacity: 0.75;
  transition: all .35s ease;
}

@media (min-width: 640px) {
  .ptn-logo {
    height: 80px;
  }
}

@media (min-width: 1024px) {
  .ptn-logo {
    height: 100px;
  }
}

@media (hover: hover) {
  .ptn-logo:hover {
    filter: grayscale(0%);
    opacity: 1;
    transform: scale(1.12);
  }
}

/* ===== BUTTON ===== */
.ptn-btn {
  display: inline-flex;
  align-items: center;
  padding: .75rem 1.75rem;
  border-radius: 9999px;
  font-weight: 600;
  color: #7c3aed;
  background: linear-gradient(135deg, rgba(124,58,237,.08), rgba(124,58,237,.15));
  border: 1px solid rgba(124,58,237,.3);
  transition: all .3s ease;
  backdrop-filter: blur(6px);
}

.ptn-btn:hover {
  color: #fff;
  background: linear-gradient(135deg, #7c3aed, #5b21b6);
  box-shadow: 0 14px 34px rgba(124,58,237,.35);
  transform: translateY(-2px);
}

/* ===== ANIMATION ===== */
@keyframes marquee {
  from {
    transform: translateX(0);
  }
  to {
    transform: translateX(-50%);
  }
}
</style>
