<section id="ptn" class="ptn-section relative py-16 md:py-20 overflow-hidden">

  <!-- Grid Background -->
  <div class="ptn-grid"></div>
  <div class="ptn-grid-diagonal"></div>

  <!-- Dekorasi -->
  <img src="assets/images/dekorasi/race.svg"
       alt="Dekorasi"
       class="decor-right"
       data-aos="zoom-in-up"
       data-aos-duration="1200" />

  <!-- Konten -->
  <div class="relative z-10 max-w-7xl mx-auto px-4 text-center">
    <h3 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-purple-600 mb-12"
        data-aos="zoom-in">
      LULUSAN PTN
    </h3>

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-8 place-items-center">
      @foreach ([
        ['unj.png','Universitas Negeri Jakarta'],
        ['ipb.png','Institut Pertanian Bogor'],
        ['unpad.png','Universitas Padjadjaran'],
        ['trisakti.png','Universitas Trisakti'],
        ['uin2.png','UIN Jakarta'],
        ['isi2.png','ISI Surakarta'],
        ['politeknik.png','Politeknik Prestasi Prima'],
        ['ui3.png','Universitas Indonesia'],
      ] as $i => [$img, $alt])
        <img src="assets/images/ptn/{{ $img }}"
             alt="{{ $alt }}"
             data-aos="fade-up"
             data-aos-delay="{{ $i * 100 }}"
             class="ptn-logo" />
      @endforeach
    </div>
  </div>
</section>

<style>
  /* ===== SECTION ===== */
.ptn-section {
  background-color: #ffffff;
}

/* ===== GRID DOT ===== */
.ptn-grid {
  position: absolute;
  inset: 0;
  z-index: 0;
  background-image:
    radial-gradient(circle, rgba(124,58,237,0.15) 1px, transparent 1px);
  background-size: 44px 44px;
  animation: pulseGrid 6s ease-in-out infinite;
}

/* ===== GRID DIAGONAL ===== */
.ptn-grid-diagonal {
  position: absolute;
  inset: 0;
  z-index: 0;
  background-image:
    linear-gradient(135deg,
      rgba(124,58,237,0.08) 25%,
      transparent 25%,
      transparent 50%,
      rgba(124,58,237,0.08) 50%,
      rgba(124,58,237,0.08) 75%,
      transparent 75%);
  background-size: 90px 90px;
  animation: moveGrid 16s linear infinite;
  opacity: 0.5;
}

/* ===== LOGO ===== */
.ptn-logo {
  max-height: 90px;
  object-fit: contain;
  transition: transform .4s ease, filter .4s ease;
  filter: grayscale(100%);
}
.ptn-logo:hover {
  transform: scale(1.1);
  filter: grayscale(0%);
}

/* ===== DECOR ===== */
.decor-right {
  position: absolute;
  right: 0;
  bottom: -320px;
  width: 620px;
  opacity: .25;
  z-index: 0;
  animation: float 9s ease-in-out infinite;
}

/* ===== ANIMATION ===== */
@keyframes moveGrid {
  from { background-position: 0 0; }
  to { background-position: 90px 90px; }
}
@keyframes pulseGrid {
  0%,100% { opacity: .35; }
  50% { opacity: .6; }
}
@keyframes float {
  0%,100% { transform: translateY(0); }
  50% { transform: translateY(-18px); }
}

</style>

<script>
AOS.init({
  duration: 900,
  once: false,
  offset: 120
});
</script>
