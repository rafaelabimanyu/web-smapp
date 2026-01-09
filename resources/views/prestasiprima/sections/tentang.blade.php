<!-- ================= SECTION TENTANG KAMI ================= -->
<section id="tentang" class="relative bg-white py-16 md:py-24 overflow-hidden">

  <!-- Dekorasi Background -->
  <div class="absolute inset-0 pointer-events-none">
    <img src="assets/images/dekorasi/lingkaran.svg"
         alt="Dekorasi"
         class="absolute -bottom-20 -right-24 w-64 md:w-[420px] opacity-20 object-contain">
  </div>

  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
  <div class="grid grid-cols-1 md:grid-cols-2 items-center ggap-8 sm:gap-10 md:gap-20">

    <!-- ================= FOTO + JUDUL MOBILE ================= -->
    <div class="relative flex flex-col items-center fade-in-right">

      <!-- Judul MOBILE ONLY (MENEMPEL KE FOTO) -->
      <div class="block md:hidden text-center mb-4">
        <h2 class="text-2xl font-extrabold text-gray-800 leading-tight">
          Tentang <span class="text-purple-600">Kami</span>
        </h2>
        <p class="text-sm text-gray-500 mt-1">
          Mengenal lebih dekat profil dan komitmen sekolah kami
        </p>
      </div>

      <!-- Foto Kepala Sekolah -->
      <div class="flex justify-center">
        <img src="{{ asset('assets/prestasiprima/kepalasekolahsma.png') }}"
            alt="Kepala Sekolah"
            class="w-72 sm:w-80 md:w-[28rem]
                    h-auto object-contain">
      </div>

    </div>

    <!-- ================= TEKS ================= -->
    <div class="fade-in-left text-center md:text-left">

      <!-- Judul DESKTOP ONLY -->
      <h2 class="hidden md:block text-3xl md:text-4xl font-extrabold text-gray-800 mb-6">
        Tentang <span class="text-purple-600">Kami</span>
      </h2>

      <p
        class="text-gray-600 leading-relaxed
               text-sm sm:text-base md:text-lg
               mb-10 max-w-prose mx-auto md:mx-0">
        Kami adalah lembaga pendidikan yang berkomitmen mencetak generasi unggul,
        kreatif, dan siap menghadapi tantangan masa depan. Dengan tenaga pendidik
        profesional serta fasilitas modern, kami menghadirkan pengalaman belajar
        berbasis praktik nyata dan pembentukan karakter yang kuat.
      </p>

      <!-- ================= STATISTIK ================= -->
      <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 md:gap-8 mb-10">

        <div class="fade-in-up">
          <p class="stat-number text-2xl md:text-3xl font-extrabold text-gray-900"
             data-target="2550">0</p>
          <span class="block text-xs md:text-sm text-purple-600 mt-1">
            Peserta Didik
          </span>
        </div>

        <div class="fade-in-up delay-100">
          <p class="stat-number text-2xl md:text-3xl font-extrabold text-gray-900"
             data-target="200">0</p>
          <span class="block text-xs md:text-sm text-purple-600 mt-1">
            Guru & Tendik
          </span>
        </div>

        <div class="fade-in-up delay-200">
          <p class="stat-number text-2xl md:text-3xl font-extrabold text-gray-900"
             data-target="40">0</p>
          <span class="block text-xs md:text-sm text-purple-600 mt-1">
            Ruang Kelas
          </span>
        </div>

        <div class="fade-in-up delay-300">
          <p class="stat-number text-2xl md:text-3xl font-extrabold text-gray-900"
             data-target="10">0</p>
          <span class="block text-xs md:text-sm text-purple-600 mt-1">
            Laboratorium
          </span>
        </div>

      </div>

      <!-- ================= BUTTON ================= -->
      <a href="/tentang/profile-sekolah"
         class="inline-flex items-center gap-2
                bg-purple-600 hover:bg-purple-700
                text-white font-semibold
                px-6 md:px-8 py-2.5 md:py-3
                rounded-full shadow-lg
                transition transform hover:-translate-y-0.5 hover:shadow-xl">
        Selengkapnya
        <span>→</span>
      </a>

    </div>
  </div>
</div>

</section>

<style>
  /* === Animasi === */
.fade-in-up,
.fade-in-left,
.fade-in-right {
  opacity: 0;
  transition: all .8s ease-out;
}

.fade-in-up {
  transform: translateY(24px);
}

.fade-in-left {
  transform: translateX(-32px);
}

.fade-in-right {
  transform: translateX(32px);
}

.show {
  opacity: 1;
  transform: translate(0, 0);
}

.delay-100 { transition-delay: .1s; }
.delay-200 { transition-delay: .2s; }
.delay-300 { transition-delay: .3s; }

/* Mobile safety */
@media (max-width: 768px) {
  .fade-in-left,
  .fade-in-right {
    transform: translateY(24px);
  }
}

</style>

<script>
document.addEventListener("DOMContentLoaded", () => {

  const fadeItems = document.querySelectorAll(
    ".fade-in-up, .fade-in-left, .fade-in-right"
  );
  const numbers = document.querySelectorAll(".stat-number");

  const animateNumber = (el) => {
    const target = +el.dataset.target;
    let start = 0;
    const duration = 1800;
    const startTime = performance.now();

    const update = (time) => {
      const progress = Math.min((time - startTime) / duration, 1);
      const eased = 1 - Math.pow(1 - progress, 3);
      const value = Math.floor(eased * target);
      el.textContent = value.toLocaleString() + "+";
      if (progress < 1) requestAnimationFrame(update);
    };

    requestAnimationFrame(update);
  };

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("show");
        if (entry.target.classList.contains("stat-number")) {
          animateNumber(entry.target);
        }
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.35 });

  fadeItems.forEach(el => observer.observe(el));
  numbers.forEach(el => observer.observe(el));
});
</script>
