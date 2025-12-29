@extends('prestasiprima.index')

@section('title', 'Sambutan Pimpinan - SMA Prestasi Prima')

@section('content')

<!-- ===================== HERO SAMBUTAN PIMPINAN ===================== -->
<section class="relative min-h-[70vh] md:min-h-[85vh] flex items-center overflow-hidden">

  <!-- Background Image -->
  <div class="absolute inset-0">
    <img
      src="{{ asset('assets/prestasiprima/gedungzoom.jpg') }}"
      alt="SMA Prestasi Prima"
      class="w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-r
                from-purple-900/90 via-purple-800/70 to-purple-700/40"></div>
  </div>

  <!-- Content -->
  <div class="relative z-10 max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 py-28">
    <div class="max-w-3xl space-y-6" data-aos="fade-up">

      <span class="inline-block bg-white/10 text-purple-100
                   text-sm font-semibold px-4 py-2 rounded-full backdrop-blur">
        Sambutan Pimpinan
      </span>

      <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-white leading-tight">
  Membangun Generasi Unggul,<br class="hidden sm:block">
  Berkarakter & Berdaya Saing Global
</h1>


      <p class="text-lg md:text-xl text-purple-100 leading-relaxed">
        SMA Prestasi Prima menghadirkan pendidikan menengah berkualitas
        melalui program <strong>IPA, IPS, dan Kelas Bilingual</strong>,
        sebagai langkah awal menuju universitas unggulan nasional
        dan internasional.
      </p>

      <div class="flex flex-wrap gap-4 pt-2">
        <a href="#sambutan-pimpinan"
           class="inline-flex items-center gap-2 bg-purple-500 hover:bg-purple-600
                  text-white font-semibold px-7 py-3 rounded-xl shadow-lg transition">
          Selengkapnya
          <i class="ri-arrow-down-line"></i>
        </a>

        <a href="https://spmb.prestasiprima.sch.id/"
           class="inline-flex items-center gap-2 bg-white/15 hover:bg-white/25
                  text-white font-semibold px-7 py-3 rounded-xl
                  backdrop-blur transition">
          Daftar Sekarang
          <i class="ri-arrow-right-line"></i>
        </a>
      </div>

    </div>
  </div>

  <!-- Decorative Blur -->
  <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-purple-500/40
              rounded-full blur-3xl"></div>

</section>

<!-- ===================== SAMBUTAN PENJAMIN MUTU ===================== -->
<section id="sambutan-pimpinan"
         class="mt-20 md:mt-28 bg-white relative overflow-hidden scroll-mt-32">

  <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 py-16 md:py-20
              grid grid-cols-1 lg:grid-cols-2 gap-12 md:gap-16 items-center">

    <!-- FOTO -->
    <div data-aos="fade-right">
      <div class="relative">
        <div class="absolute -top-4 -left-4 w-full h-full bg-purple-500 rounded-3xl -z-10"></div>
        <img
          src="{{ asset('assets/prestasiprima/sir_wanen_pakpahan.png') }}"
          alt="Penjamin Mutu Yayasan Prestasi Prima"
          class="rounded-3xl shadow-2xl w-full object-cover select-none pointer-events-none">
      </div>
    </div>

    <!-- TEKS -->
    <div data-aos="fade-left" class="space-y-5 text-gray-700 leading-relaxed">
      <div>
        <h3 class="text-sm font-semibold text-purple-600 uppercase tracking-wide">
          Penjamin Mutu Yayasan Prestasi Prima
        </h3>
        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900">
          Dr. Wannen Pakpahan, MM.
        </h2>
      </div>

      <p>
        <strong>Salam sejahtera bagi kita semua.</strong><br>
        Selamat datang di laman resmi <strong>SMA Prestasi Prima</strong>, sekolah yang
        berkomitmen menghadirkan pendidikan bermutu, berkarakter, dan berdaya saing global.
      </p>

      <p>
        Sebagai Penjamin Mutu Yayasan, kami memastikan seluruh proses pembelajaran
        berjalan dengan <strong>standar akademik yang kuat</strong>, melalui kurikulum
        nasional yang terintegrasi dengan wawasan internasional selama
        <strong>tiga tahun pendidikan SMA</strong>.
      </p>

      <blockquote class="border-l-4 border-purple-500 pl-5 italic text-gray-600 text-lg">
        <span id="quote-text"></span>
      </blockquote>

      <p>
        Program <strong>IPA</strong> dan <strong>IPS</strong> dirancang untuk membekali siswa
        dengan kompetensi akademik yang solid, membuka peluang karier di bidang
        <strong>kedokteran, teknik, farmasi, ekonomi, hukum, bisnis, dan politik</strong>,
        serta melanjutkan studi ke universitas unggulan nasional.
      </p>

      <p>
        Untuk menjawab tantangan global, kami menghadirkan
        <strong>kelas Bilingual IPA dan IPS</strong> dengan pengantar Bahasa Indonesia
        dan Bahasa Inggris, sebagai persiapan menuju
        <strong>program internasional dan universitas luar negeri</strong>.
      </p>

      <a href="https://spmb.prestasiprima.sch.id/"
         class="inline-flex items-center gap-2 bg-purple-500 hover:bg-purple-600
                text-white font-semibold px-6 py-3 rounded-xl shadow-md transition">
        Daftar Sekarang
        <i class="ri-arrow-right-line"></i>
      </a>
    </div>
  </div>
</section>

<!-- ===================== SAMBUTAN KETUA YAYASAN ===================== -->
<section class="relative py-24 bg-purple-50 overflow-hidden">
  <div class="max-w-7xl mx-auto px-6
              grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">

    <!-- TEKS -->
    <div data-aos="fade-right" class="space-y-6 order-2 lg:order-1 text-gray-700 leading-relaxed">
      <div>
        <h3 class="text-sm font-semibold text-purple-600 uppercase tracking-wide">
          Ketua Yayasan Prestasi Prima
        </h3>
        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900">
          Flores Sagala, S.E.
        </h2>
      </div>

      <p>
        <strong>Salam sejahtera bagi kita semua.</strong><br>
        Pendidikan adalah investasi jangka panjang yang menentukan masa depan bangsa.
        Oleh karena itu, Yayasan Prestasi Prima berkomitmen menghadirkan pendidikan
        menengah yang unggul secara akademik, berkarakter, dan relevan dengan
        perkembangan zaman.
      </p>

      <p>
        SMA Prestasi Prima dirancang sebagai lingkungan belajar yang aman, inspiratif,
        dan kompetitif melalui program <strong>IPA, IPS, serta kelas Bilingual</strong>
        yang disesuaikan dengan minat dan potensi peserta didik.
      </p>

      <p>
        Dengan penguatan kurikulum, pendampingan intensif, serta kolaborasi guru,
        orang tua, dan yayasan, kami membekali siswa untuk melanjutkan studi di bidang
        <strong>kedokteran, teknik, ekonomi, hukum, bisnis, hingga hubungan internasional</strong>,
        baik di universitas nasional maupun luar negeri.
      </p>

      <p>
        Dengan semangat <strong>“Menjadi yang Terbaik”</strong>, mari kita bersama
        membangun generasi muda yang berintegritas, berwawasan global, dan mampu
        berkontribusi nyata bagi masyarakat dan bangsa.
      </p>
    </div>

    <!-- FOTO -->
    <div data-aos="fade-left" class="order-1 lg:order-2">
      <div class="relative">
        <div class="absolute -top-4 -right-4 w-full h-full bg-purple-500 rounded-3xl -z-10"></div>
        <img
          src="{{ asset('assets/prestasiprima/mam_flores_sagala.jpg') }}"
          alt="Ketua Yayasan Prestasi Prima"
          class="rounded-3xl shadow-2xl w-full object-cover select-none pointer-events-none">
      </div>
    </div>
  </div>
</section>

<style>
  html {
  scroll-behavior: smooth;
}

</style>

<!-- ===================== TYPING QUOTE ===================== -->
@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function () {
  const quote =
    "Kami menyiapkan lulusan SMA Prestasi Prima yang unggul secara akademik, berkarakter kuat, serta siap bersaing di universitas nasional dan internasional.";
  const el = document.getElementById("quote-text");
  let i = 0;

  function typeWriter() {
    if (i < quote.length) {
      el.textContent += quote.charAt(i);
      i++;
      setTimeout(typeWriter, 28);
    }
  }

  if (el) typeWriter();
});
</script>
@endpush

@endsection
