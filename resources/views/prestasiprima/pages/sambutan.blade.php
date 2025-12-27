@extends('prestasiprima.index')

@section('title', 'Sambutan Pimpinan - SMA Prestasi Prima')

@section('content')
<!-- ===================== SAMBUTAN PENJAMIN MUTU ===================== -->
<section class="mt-20 md:mt-28 bg-white relative overflow-hidden">

  <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 py-16 md:py-20 grid grid-cols-1 lg:grid-cols-2 gap-10 md:gap-16 items-center">

    <!-- FOTO -->
    <div data-aos="fade-right">
      <div class="relative">
        <div class="absolute -top-4 -left-4 w-full h-full bg-purple-500 rounded-3xl -z-10"></div>
        <img
          src="{{ asset('assets/prestasiprima/sir_wanen_pakpahan.png') }}"
          alt="Penjamin Mutu Yayasan Prestasi Prima"
          class="rounded-3xl shadow-2xl w-full object-cover select-none pointer-events-none"
        >
      </div>
    </div>

    <!-- TEKS -->
    <div data-aos="fade-left" class="space-y-6">
      <div>
        <h3 class="text-sm font-semibold text-purple-600 uppercase tracking-wide">
          Penjamin Mutu Yayasan Prestasi Prima
        </h3>
        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900">
          Dr. Wannen Pakpahan, MM.
        </h2>
      </div>

      <p class="text-gray-700 leading-relaxed">
        <strong>Assalamu’alaikum Warahmatullahi Wabarakatuh.</strong><br>
        Selamat datang di laman resmi <strong>SMA Prestasi Prima</strong>.
        Kami berkomitmen menghadirkan pendidikan yang unggul secara akademik,
        berkarakter, serta berlandaskan nilai moral dan spiritual.
      </p>

      <blockquote class="border-l-4 border-purple-500 pl-4 italic text-gray-600 text-lg">
        <span id="quote-text"></span>
      </blockquote>

      <p class="text-gray-700 leading-relaxed">
        Melalui pembelajaran abad 21 dan Kurikulum Merdeka,
        SMA Prestasi Prima membentuk peserta didik yang
        <strong>kritis, kreatif, berdaya saing global</strong>,
        serta berkarakter Pancasila.
      </p>

      <p class="font-semibold text-gray-800">
        Wassalamu’alaikum Warahmatullahi Wabarakatuh.
      </p>

      <a href="https://spmb.prestasiprima.sch.id/"
         class="inline-flex items-center gap-2 bg-purple-500 hover:bg-purple-600 text-white font-semibold px-6 py-3 rounded-xl shadow-md transition">
        Daftar Sekarang
        <i class="ri-arrow-right-line"></i>
      </a>
    </div>
  </div>
</section>

<!-- ===================== SAMBUTAN KETUA YAYASAN ===================== -->
<section class="relative py-24 bg-purple-50 overflow-hidden">

  <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">

    <!-- TEKS -->
    <div data-aos="fade-right" class="space-y-6 order-2 lg:order-1">
      <div>
        <h3 class="text-sm font-semibold text-purple-600 uppercase tracking-wide">
          Ketua Yayasan Prestasi Prima
        </h3>
        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900">
          Flores Sagala, S.E.
        </h2>
      </div>

      <p class="text-gray-700 leading-relaxed">
        <strong>Salam sejahtera bagi kita semua.</strong><br>
        Pendidikan adalah investasi jangka panjang bagi masa depan bangsa.
        Oleh karena itu, Yayasan Prestasi Prima berkomitmen
        menciptakan lingkungan pendidikan yang unggul, aman, dan inspiratif.
      </p>

      <p class="text-gray-700 leading-relaxed">
        Dengan semangat <strong>“Menjadi yang Terbaik”</strong>,
        mari kita bersama membangun generasi muda yang berintegritas,
        berpengetahuan luas, dan siap menghadapi tantangan global.
      </p>
    </div>

    <!-- FOTO -->
    <div data-aos="fade-left" class="order-1 lg:order-2">
      <div class="relative">
        <div class="absolute -top-4 -right-4 w-full h-full bg-purple-500 rounded-3xl -z-10"></div>
        <img
          src="{{ asset('assets/prestasiprima/mam_flores_sagala.jpg') }}"
          alt="Ketua Yayasan Prestasi Prima"
          class="rounded-3xl shadow-2xl w-full object-cover select-none pointer-events-none"
        >
      </div>
    </div>
  </div>
</section>

<!-- ===================== FOTO GEDUNG ===================== -->
<section class="relative w-full overflow-hidden">
  <img
    src="{{ asset('assets/prestasiprima/gedungprestasiprima.avif') }}"
    alt="Gedung SMA Prestasi Prima"
    class="w-full h-[50vh] md:h-screen object-cover object-center"
  >
</section>

<!-- ===================== TYPING QUOTE ===================== -->
@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function () {
  const quote = "Kami menyiapkan generasi muda yang unggul secara akademik, berkarakter kuat, dan siap bersaing di tingkat global.";
  const el = document.getElementById("quote-text");
  let i = 0;

  function typeWriter() {
    if (i < quote.length) {
      el.textContent += quote.charAt(i);
      i++;
      setTimeout(typeWriter, 30);
    }
  }

  if (el) typeWriter();
});
</script>
@endpush

@endsection
