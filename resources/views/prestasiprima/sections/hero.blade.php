<!-- ================= HERO VIDEO ================= -->
<section id="heroVideoSection"
  class="relative h-screen w-full overflow-hidden bg-cover bg-center"
  style="background-image:url('{{ asset('assets/prestasiprima/gedungprestasiprima.webp') }}');">

  <!-- Overlay -->
  <div class="absolute inset-0 bg-black/40 z-10"></div>

  <!-- Video -->
  <video id="heroVideo"
    autoplay
    muted
    playsinline
    preload="auto"
    poster="{{ asset('assets/prestasiprima/gedungprestasiprima.webp') }}"
    class="absolute inset-0 w-full h-full object-cover z-20 opacity-0 transition-opacity duration-700">
    <source src="{{ asset('assets/videos/videoss.mp4') }}" type="video/mp4">
  </video>

  <!-- Controls: Sound & Play -->
  <div class="absolute bottom-6 left-6 z-30 flex gap-3">
    <button id="soundBtn" class="control-btn" aria-label="Toggle sound">
      <i class="ri-volume-mute-line"></i>
    </button>

    <button id="playPauseBtn" class="control-btn" aria-label="Play / Pause">
      <i class="ri-pause-line"></i>
    </button>
  </div>

  <!-- Skip Button -->
  <button id="skipBtn"
    class="absolute bottom-6 right-6 z-30
           bg-purple-600 hover:bg-purple-700
           text-white font-semibold
           px-5 py-2 rounded-full
           shadow-lg transition">
    Lewati Video
  </button>
</section>

<!-- ================= HERO CONTENT ================= -->
<section id="heroContentSection"
  class="relative hidden min-h-screen text-white overflow-hidden">

  <!-- Background Carousel -->
  <div class="absolute inset-0 overflow-hidden">
    <div id="heroBgSlider" class="relative w-full h-full">
      <img src="{{ asset('assets/prestasiprima/gedungprestasiprima.webp') }}" class="hero-bg active" alt="">
      <img src="{{ asset('assets/prestasiprima/fotbarguru2.jpg') }}" class="hero-bg" alt="">
      <img src="{{ asset('assets/images/kurikulum/hero.png') }}" class="hero-bg" alt="">
      <img src="{{ asset('assets/prestasiprima/DSC00052.JPG') }}" class="hero-bg" alt="">
      <img src="{{ asset('assets/images/kurikulum/image1.png') }}" class="hero-bg" alt="">
      <img src="{{ asset('assets/prestasiprima/gedungsiswa.jpg') }}" class="hero-bg" alt="">
      <img src="{{ asset('assets/prestasiprima/basket1.jpg') }}" class="hero-bg" alt="">
      <img src="{{ asset('assets/prestasiprima/paskibra.jpeg') }}" class="hero-bg" alt="">
      <img src="{{ asset('assets/prestasiprima/paskibra2.jpeg') }}" class="hero-bg" alt="">
      <img src="{{ asset('assets/prestasiprima/google/ipb.jpg') }}" class="hero-bg" alt="">
    </div>

    <div class="absolute inset-0 bg-black/50 z-10"></div>
  </div>

  <!-- ================= FLOATING SOCIAL ================= -->
<div id="floatingSocial"
  class="absolute top-28 right-0 md:top-32 z-30 flex flex-col items-end space-y-3 pointer-events-none">

  <!-- Toggle Button -->
  <button id="toggleSocial"
    aria-label="Buka panel sosial"
    class="bg-purple-600 hover:bg-purple-700 text-white
           w-12 h-12 md:w-14 md:h-14
           rounded-l-2xl shadow-lg
           flex items-center justify-center
           transition opacity-0
           pointer-events-auto">
    <i class="ri-share-forward-line text-xl"></i>
  </button>

  <!-- Panel -->
  <div id="socialPanel"
    class="social-panel bg-white bg-opacity-95
           rounded-l-2xl shadow-lg
           flex flex-col items-center
           py-3 space-y-4
           w-0 overflow-hidden
           pointer-events-auto">

    <a href="{{ url('/') }}" aria-label="Home"
      class="bg-white rounded-xl shadow p-2
             flex items-center justify-center
             w-10 h-10 md:w-12 md:h-12">
      <img src="{{ asset('assets/logo_sma.png') }}"
        alt="Logo SMA Prestasi Prima"
        class="w-6 h-6 md:w-8 md:h-8 object-contain" loading="lazy">
    </a>

    <a href="https://wa.me/6285195928886" target="_blank" aria-label="WhatsApp"
      class="text-purple-600 hover:text-purple-700">
      <i class="ri-whatsapp-line text-lg md:text-xl"></i>
    </a>

    <a href="https://www.instagram.com/sma_prestasiprima/" target="_blank" aria-label="Instagram"
      class="text-purple-600 hover:text-purple-700">
      <i class="ri-instagram-line text-lg md:text-xl"></i>
    </a>

    <a href="https://www.youtube.com/@SEKOLAHPRESTASIPRIMA" target="_blank" aria-label="YouTube"
      class="text-purple-600 hover:text-purple-700">
      <i class="ri-youtube-line text-lg md:text-xl"></i>
    </a>

    <a href="https://www.tiktok.com/@smaprestasiprima" target="_blank" aria-label="TikTok"
      class="text-purple-600 hover:text-purple-700">
      <i class="ri-tiktok-fill text-lg md:text-xl"></i>
    </a>
  </div>
</div>


  <!-- Content -->
  <div class="relative z-20 max-w-7xl mx-auto px-6 min-h-screen flex items-center">
    <div>
      <p class="italic mb-2 hero-animate">
        "If better is possible, good is not enough"
      </p>

      <h1 class="text-4xl md:text-6xl font-extrabold mb-4 hero-animate">
        PRESTASI PRIMA
      </h1>

      <p class="max-w-xl mb-6 hero-animate">
        Kami berkomitmen menyelenggarakan pendidikan berkualitas tinggi
        yang membentuk generasi unggul dan berkarakter.
      </p>

      <a href="https://spmb.prestasiprima.sch.id/"
        target="_blank"
        class="inline-block bg-purple-500 hover:bg-purple-700
               px-6 py-3 rounded-lg shadow-lg hero-animate">
        Daftar Sekarang
      </a>
    </div>
  </div>
</section>

<!-- ================= SCRIPT ================= -->
<script>
(() => {
  const $ = id => document.getElementById(id);

  /* ================= VIDEO INTRO ================= */
  const video     = $("heroVideo");
  const wrapper   = $("heroVideoSection");
  const content   = $("heroContentSection");
  const skipBtn   = $("skipBtn");
  const soundBtn  = $("soundBtn");
  const playBtn   = $("playPauseBtn");

  const floatingBox = $("floatingSocial");
  const toggleBtn   = $("toggleSocial");
  const socialPanel = $("socialPanel");

  /* ===== Helper: Show Hero Content ===== */
  const showContent = () => {
    if (!wrapper || !content) return;

    wrapper.style.opacity = 0;

    setTimeout(() => {
      video?.pause();
      wrapper.remove();

      content.classList.remove("hidden");
      content.classList.add("block");

      /* Animate Hero Text */
      document.querySelectorAll(".hero-animate").forEach((el, i) => {
        el.style.animationDelay = `${i * 0.12}s`;
        el.classList.add("animate-hero-fast");
      });

      /* Show Floating Social */
      if (toggleBtn && floatingBox) {
        toggleBtn.classList.remove("opacity-0");
        toggleBtn.classList.add("animate-floating");
        floatingBox.classList.remove("pointer-events-none");
      }
    }, 500);
  };

  /* ===== Video Logic ===== */
  if (video) {
    const showVideo = () =>
      video.classList.replace("opacity-0", "opacity-100");

    ["canplay", "playing", "loadeddata"].forEach(e =>
      video.addEventListener(e, showVideo)
    );

    video.addEventListener("ended", showContent);
    skipBtn?.addEventListener("click", showContent);

    soundBtn?.addEventListener("click", () => {
      video.muted = !video.muted;
      soundBtn.innerHTML = video.muted
        ? '<i class="ri-volume-mute-line"></i>'
        : '<i class="ri-volume-up-line"></i>';
    });

    playBtn?.addEventListener("click", () => {
      if (video.paused) {
        video.play();
        playBtn.innerHTML = '<i class="ri-pause-line"></i>';
      } else {
        video.pause();
        playBtn.innerHTML = '<i class="ri-play-line"></i>';
      }
    });

    video.play().catch(showVideo);
  }

  /* ================= HERO BACKGROUND SLIDER ================= */
  const slides = document.querySelectorAll("#heroBgSlider .hero-bg");
  let slideIndex = 0;

  if (slides.length > 1) {
    setInterval(() => {
      slides[slideIndex].classList.remove("active");
      slideIndex = (slideIndex + 1) % slides.length;
      slides[slideIndex].classList.add("active");
    }, 4000);
  }

  /* ================= FLOATING SOCIAL ================= */
  if (toggleBtn && socialPanel) {
    let isOpen = false;

    toggleBtn.addEventListener("click", () => {
      isOpen = !isOpen;
      socialPanel.classList.toggle("open", isOpen);
      toggleBtn.innerHTML = isOpen
        ? '<i class="ri-close-line text-xl"></i>'
        : '<i class="ri-share-forward-line text-xl"></i>';
    });
  }
})();
</script>


<!-- ================= STYLE ================= -->
<style>
/* Background Slider */
.hero-bg {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  opacity: 0;
  transform: translateX(60px);
  transition: opacity 1.2s ease, transform 1.2s ease;
}

.hero-bg.active {
  opacity: 1;
  transform: translateX(0);
  z-index: 1;
}

/* Video Controls */
.control-btn {
  background: rgba(0,0,0,.6);
  color: #fff;
  width: 44px;
  height: 44px;
  border-radius: 9999px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: background .25s ease, transform .2s ease;
}

.control-btn:hover {
  background: rgba(0,0,0,.85);
  transform: translateY(-2px);
}

.control-btn i {
  font-size: 20px;
}

/* Hero Text Animation */
.hero-animate {
  opacity: 0;
}

@keyframes heroFast {
  from { opacity: 0; transform: translateX(-60px); }
  to   { opacity: 1; transform: none; }
}

.animate-hero-fast {
  animation: heroFast .8s cubic-bezier(.25,1,.5,1) forwards;
}

/* ===== Floating Social Panel ===== */
.social-panel {
  transition: width .45s ease, opacity .35s ease, transform .45s ease;
  opacity: 0;
  transform: translateX(50%) scale(.85);
}

.social-panel.open {
  width: 56px;
  opacity: 1;
  transform: translateX(0) scale(1);
}

/* Floating Button muncul setelah video */
@keyframes floatingIn {
  0%   { opacity: 0; transform: translateX(100%) scale(.8); }
  60%  { opacity: 1; transform: translateX(-10px) scale(1.05); }
  80%  { transform: translateX(5px) scale(.97); }
  100% { opacity: 1; transform: translateX(0) scale(1); }
}

.animate-floating {
  animation: floatingIn .9s cubic-bezier(.25,1,.5,1) forwards;
}

</style>
