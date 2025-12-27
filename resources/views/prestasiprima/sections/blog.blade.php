<!-- ==================== SECTION BLOG ==================== -->
<section id="blog" class="relative py-24 bg-gradient-to-b from-purple-50 via-white to-white overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 md:px-8">

    <!-- ===== Header ===== -->
    <header data-aos="fade-up" class="mb-16 text-center">
      <p class="text-sm md:text-lg font-semibold text-purple-600 uppercase tracking-widest">
        Blog & Artikel
      </p>

      <h2 class="text-3xl md:text-5xl font-extrabold text-gray-900 mt-3 mb-4">
        Cerita & <span class="text-purple-600">Kabar Terbaru</span> SMA Prestasi Prima
      </h2>

      <div class="w-24 h-1 bg-purple-500 mx-auto rounded-full"></div>

      <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
        Informasi kegiatan, prestasi, dan inspirasi terbaru dari lingkungan SMA Prestasi Prima.
      </p>
    </header>

    <!-- ===== Swiper Blog ===== -->
    <div class="swiper blogSwiper relative">
      <div class="swiper-wrapper">

        @php
          $blogs = [
            [
              'img' => 'assets/images/blog/nobar.png',
              'category' => 'Kegiatan',
              'date' => '20 September 2025',
              'title' => 'Nonton Bareng SMA Prestasi Prima',
              'desc' => 'Kegiatan nonton bareng yang mempererat kebersamaan siswa dan guru dalam suasana penuh kekeluargaan.'
            ],
            [
              'img' => 'assets/images/blog/rapat-guru.png',
              'category' => 'Akademik',
              'date' => '05 Oktober 2025',
              'title' => 'Rapat Guru & Evaluasi Pembelajaran',
              'desc' => 'Rapat koordinasi guru untuk meningkatkan mutu pembelajaran dan kesiapan akademik siswa.'
            ],
            [
              'img' => 'assets/images/blog/penghargaan-guru.png',
              'category' => 'Prestasi',
              'date' => '01 Oktober 2025',
              'title' => 'Apresiasi Guru Berprestasi',
              'desc' => 'Pemberian penghargaan kepada guru atas dedikasi dan kontribusi dalam dunia pendidikan.'
            ],
          ];
        @endphp

        @foreach ($blogs as $index => $blog)
        <div class="swiper-slide" data-aos="zoom-out-up" data-aos-delay="{{ ($index + 1) * 150 }}">
          <article class="group relative rounded-2xl overflow-hidden bg-white/90 backdrop-blur-xl shadow-md transition-all duration-700 hover:-translate-y-3 hover:shadow-2xl border border-white/20 flex flex-col h-full">

            <!-- Gambar -->
            <div class="relative overflow-hidden">
              <img src="{{ asset($blog['img']) }}"
                   alt="{{ $blog['title'] }}"
                   class="w-full h-60 object-cover transition-transform duration-700 group-hover:scale-110">

              <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>

              <span class="absolute top-4 left-4 bg-gradient-to-r from-purple-600 to-purple-500 text-white text-xs font-semibold px-3 py-1.5 rounded-full shadow-lg">
                {{ $blog['category'] }}
              </span>
            </div>

            <!-- Konten -->
            <div class="p-6 flex flex-col flex-grow">
              <div class="flex items-center gap-2 text-xs text-gray-400 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10m-12 8h14a2 2 0 002-2V7a2 2 0 00-2-2H6a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                {{ $blog['date'] }}
              </div>

              <h3 class="font-extrabold text-lg md:text-xl text-gray-900 mb-3 leading-snug group-hover:text-purple-600 transition-colors">
                {{ $blog['title'] }}
              </h3>

              <p class="text-gray-600 text-sm leading-relaxed flex-grow">
                {{ $blog['desc'] }}
              </p>

              <div class="mt-5 flex items-center justify-between">
                <a href="{{ route('berita.index') }}"
                   class="inline-flex items-center gap-2 text-purple-600 hover:text-purple-700 font-semibold text-sm transition">
                  Selengkapnya
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                  </svg>
                </a>
                <div class="h-1.5 w-8 bg-gradient-to-r from-purple-500 to-purple-300 rounded-full group-hover:w-14 transition-all duration-500"></div>
              </div>
            </div>

          </article>
        </div>
        @endforeach

      </div>

      <!-- Navigasi -->
      <div class="swiper-pagination mt-10"></div>
      <div class="swiper-button-prev custom-nav"></div>
      <div class="swiper-button-next custom-nav"></div>
    </div>
  </div>
</section>

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

<style>
.blogSwiper article:hover {
  box-shadow: 0 14px 36px rgba(124, 58, 237, 0.18);
  border-color: rgba(124, 58, 237, 0.35);
}

.swiper-button-prev,
.swiper-button-next {
  color: #7c3aed !important;
  transition: transform .3s ease;
}

.swiper-button-prev:hover,
.swiper-button-next:hover {
  transform: scale(1.15);
}

.swiper-pagination-bullet {
  background: #7c3aed;
  opacity: .5;
}
.swiper-pagination-bullet-active {
  opacity: 1;
}
</style>
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>
document.addEventListener('DOMContentLoaded', () => {
  AOS.init({ once: true, duration: 1000, offset: 120 });

  new Swiper('.blogSwiper', {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    pagination: { el: '.swiper-pagination', clickable: true },
    navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
    breakpoints: {
      640: { slidesPerView: 2 },
      1024: { slidesPerView: 3 },
    },
  });
});
</script>
@endpush
