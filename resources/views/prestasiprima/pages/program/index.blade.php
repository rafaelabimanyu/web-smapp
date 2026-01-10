@extends('prestasiprima.index')

@section('title', 'Program Keahlian - SMA Prestasi Prima')

@section('content')
<section class="pt-32 pb-24 bg-white relative overflow-hidden">

  {{-- ==================== PROFIL JURUSAN ==================== --}}
<div class="max-w-7xl mx-auto px-6 md:px-10 flex flex-col md:flex-row items-center gap-10 md:gap-16" data-aos="fade-up">

  {{-- JUDUL KHUSUS MOBILE --}}
<div class="block md:hidden text-center space-y-2">
  <h2 class="text-3xl font-extrabold text-purple-600 leading-tight">
    Profil Jurusan
  </h2>
</div>


  {{-- GAMBAR --}}
  <div class="md:w-1/2">
    <div class="relative rounded-2xl overflow-hidden">
      <img src="{{ asset('assets/prestasiprima/kepalasekolahsma.png') }}"
           alt="Kepala Sekolah SMA Prestasi Prima"
           class="w-full object-cover">
    </div>
  </div>

  {{-- TEKS (DESKTOP TETAP) --}}
  <div class="md:w-1/2">
  <h2 class="hidden md:block text-4xl md:text-5xl font-bold text-purple-600 mb-4">
    Profil Jurusan
  </h2>

  <p class="text-gray-700 leading-relaxed mb-4 text-justify">
    <strong>SMA Prestasi Prima</strong> menerapkan <strong>Kurikulum Merdeka</strong> yang dirancang
    untuk menghadirkan pembelajaran yang adaptif, bermakna, dan relevan dengan perkembangan zaman.
    Pendekatan <strong>STEAM</strong> (<em>Science, Technology, Engineering, Art, Mathematics</em>)
    menjadi fondasi dalam mengembangkan kemampuan berpikir kritis, kreativitas, dan pemecahan masalah siswa.
  </p>

  <p class="text-gray-700 leading-relaxed mb-4 text-justify">
    Proses pembelajaran diperkuat melalui pengembangan <strong>Profil Pelajar Pancasila</strong>,
    literasi digital, serta penumbuhan jiwa kewirausahaan
    agar peserta didik memiliki karakter unggul dan kesiapan menghadapi tantangan abad ke-21.
  </p>

  <p class="text-gray-700 leading-relaxed mb-6 text-justify">
    Program Akademik Unggulan mencakup peminatan
    <span class="font-semibold">IPA</span>, <span class="font-semibold">IPS</span>,
    <span class="font-semibold">Bilingual IPA</span>, dan <span class="font-semibold">Bilingual IPS</span>
    yang didukung metode pembelajaran inovatif dan pemanfaatan teknologi
    untuk menyiapkan lulusan yang siap melanjutkan pendidikan dan bersaing secara global.
  </p>

  <a href="#programs"
     class="inline-flex items-center bg-purple-600 text-white px-5 py-3 rounded-lg font-medium hover:bg-purple-700 transition scroll-link">
    Selengkapnya <i class="ms-2 ri-arrow-down-line"></i>
  </a>
</div>

</div>


  <section id="programs" class="pt-28 pb-28 bg-gray-50 relative overflow-hidden">
  {{-- ==================== PROGRAM JURUSAN ==================== --}}
  <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-10 
              grid grid-cols-1 gap-10 md:gap-12 lg:grid-cols-2">

    {{-- ==================== IPA ==================== --}}
    <div class="bg-white rounded-2xl md:rounded-3xl shadow-xl md:shadow-2xl 
                overflow-hidden hover:shadow-3xl 
                transform hover:-translate-y-2 md:hover:-translate-y-3 
                transition-all duration-500"
         data-aos="fade-up">

      <div class="relative">
        <img src="{{ asset('assets/program/ipa.png') }}"
             alt="Ilmu Pengetahuan Alam"
             class="w-full h-52 sm:h-60 md:h-72 object-cover transition-transform duration-500 hover:scale-105">

        <span class="absolute top-4 left-4 px-4 py-1 text-xs font-semibold
                     bg-gradient-to-r from-purple-500 to-indigo-500
                     text-white rounded-full shadow-lg">
          Program Unggulan
        </span>
      </div>

      <div class="p-5 sm:p-6">
        <h3 class="text-xl sm:text-2xl md:text-3xl font-extrabold text-purple-600 mb-3 md:mb-4">
          Ilmu Pengetahuan Alam (IPA)
        </h3>

        <p class="text-gray-700 text-sm sm:text-base leading-relaxed mb-5 text-justify">
          Program IPA dirancang bagi siswa yang memiliki minat kuat pada sains dan teknologi,
          dengan penguatan pada Matematika, Fisika, Kimia, dan Biologi melalui pembelajaran
          konseptual serta praktikum modern.
        </p>

        <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 sm:gap-6 text-gray-700">
          <div class="flex flex-col gap-1 sm:gap-2">
            <i class="ri-book-line text-purple-600 text-xl sm:text-2xl"></i>
            <span class="font-semibold text-sm sm:text-base">Fokus</span>
            <p class="text-xs sm:text-sm text-gray-600">Matematika, Fisika, Kimia, Biologi</p>
          </div>
          <div class="flex flex-col gap-1 sm:gap-2">
            <i class="ri-rocket-line text-purple-600 text-xl sm:text-2xl"></i>
            <span class="font-semibold text-sm sm:text-base">Karier</span>
            <p class="text-xs sm:text-sm text-gray-600">Kedokteran, Teknik, Farmasi</p>
          </div>
          <div class="flex flex-col gap-1 sm:gap-2">
            <i class="ri-building-line text-purple-600 text-xl sm:text-2xl"></i>
            <span class="font-semibold text-sm sm:text-base">Universitas</span>
            <p class="text-xs sm:text-sm text-gray-600">UI, ITB, ITS, UGM</p>
          </div>
        </div>
      </div>
    </div>

    {{-- ==================== IPS ==================== --}}
    <div class="bg-white rounded-2xl md:rounded-3xl shadow-xl md:shadow-2xl 
                overflow-hidden hover:shadow-3xl 
                transform hover:-translate-y-2 md:hover:-translate-y-3 
                transition-all duration-500"
         data-aos="fade-up" data-aos-delay="100">

      <div class="relative">
        <img src="{{ asset('assets/program/ips.png') }}"
             alt="Ilmu Pengetahuan Sosial"
             class="w-full h-52 sm:h-60 md:h-72 object-cover transition-transform duration-500 hover:scale-105">

        <span class="absolute top-4 left-4 px-4 py-1 text-xs font-semibold
                     bg-gradient-to-r from-purple-500 to-indigo-500
                     text-white rounded-full shadow-lg">
          Social Track
        </span>
      </div>

      <div class="p-5 sm:p-6">
        <h3 class="text-xl sm:text-2xl md:text-3xl font-extrabold text-purple-600 mb-3 md:mb-4">
          Ilmu Pengetahuan Sosial (IPS)
        </h3>

        <p class="text-gray-700 text-sm sm:text-base leading-relaxed mb-5 text-justify">
          Program IPS menekankan pemahaman ekonomi, sosial, dan kebijakan publik
          melalui pembelajaran analitis, diskusi interaktif, dan penguatan wawasan global.
        </p>

        <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 sm:gap-6 text-gray-700">
          <div class="flex flex-col gap-1 sm:gap-2">
            <i class="ri-book-line text-purple-600 text-xl sm:text-2xl"></i>
            <span class="font-semibold text-sm sm:text-base">Fokus</span>
            <p class="text-xs sm:text-sm text-gray-600">Ekonomi, Sosiologi, Sejarah</p>
          </div>
          <div class="flex flex-col gap-1 sm:gap-2">
            <i class="ri-rocket-line text-purple-600 text-xl sm:text-2xl"></i>
            <span class="font-semibold text-sm sm:text-base">Karier</span>
            <p class="text-xs sm:text-sm text-gray-600">Bisnis, Hukum, Politik</p>
          </div>
          <div class="flex flex-col gap-1 sm:gap-2">
            <i class="ri-building-line text-purple-600 text-xl sm:text-2xl"></i>
            <span class="font-semibold text-sm sm:text-base">Universitas</span>
            <p class="text-xs sm:text-sm text-gray-600">FEB UI, FH UGM, FISIP</p>
          </div>
        </div>
      </div>
    </div>

    {{-- ==================== IPA BILINGUAL ==================== --}}
<div class="bg-white rounded-2xl md:rounded-3xl shadow-xl md:shadow-2xl 
            overflow-hidden hover:shadow-3xl 
            transform hover:-translate-y-2 md:hover:-translate-y-3 
            transition-all duration-500"
     data-aos="fade-up" data-aos-delay="200">

  <div class="relative">
    <img src="{{ asset('assets/program/bilingual_ipa.png') }}"
         alt="IPA Bilingual"
         class="w-full h-52 sm:h-60 md:h-72 object-cover transition-transform duration-500 hover:scale-105">

    <span class="absolute top-4 left-4 px-4 py-1 text-xs font-semibold
                 bg-gradient-to-r from-purple-600 to-indigo-500
                 text-white rounded-full shadow-lg">
      International Class
    </span>
  </div>

  <div class="p-5 sm:p-6">
    <h3 class="text-xl sm:text-2xl md:text-3xl font-extrabold text-purple-600 mb-3 md:mb-4">
      IPA Bilingual
    </h3>

    <p class="text-gray-700 text-sm sm:text-base leading-relaxed mb-5 text-justify">
      Program IPA Bilingual mengintegrasikan pembelajaran sains dengan penggunaan
      Bahasa Indonesia dan Bahasa Inggris secara seimbang untuk memperkuat pemahaman
      konsep ilmiah, terminologi internasional, serta kesiapan akademik global.
    </p>

    <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 sm:gap-6 text-gray-700">
      <div class="flex flex-col gap-1 sm:gap-2">
        <i class="ri-book-line text-purple-600 text-xl sm:text-2xl"></i>
        <span class="font-semibold text-sm sm:text-base">Keunggulan</span>
        <p class="text-xs sm:text-sm text-gray-600">Bilingual, standar internasional</p>
      </div>
      <div class="flex flex-col gap-1 sm:gap-2">
        <i class="ri-rocket-line text-purple-600 text-xl sm:text-2xl"></i>
        <span class="font-semibold text-sm sm:text-base">Karier</span>
        <p class="text-xs sm:text-sm text-gray-600">Kedokteran, Teknik, Peneliti</p>
      </div>
      <div class="flex flex-col gap-1 sm:gap-2">
        <i class="ri-building-line text-purple-600 text-xl sm:text-2xl"></i>
        <span class="font-semibold text-sm sm:text-base">Universitas</span>
        <p class="text-xs sm:text-sm text-gray-600">
          Program Internasional Dalam & Luar Negeri
        </p>
      </div>
    </div>
  </div>
</div>


    {{-- ==================== IPS BILINGUAL ==================== --}}
<div class="bg-white rounded-2xl md:rounded-3xl shadow-xl md:shadow-2xl 
            overflow-hidden hover:shadow-3xl 
            transform hover:-translate-y-2 md:hover:-translate-y-3 
            transition-all duration-500"
     data-aos="fade-up" data-aos-delay="300">

  <div class="relative">
    <img src="{{ asset('assets/program/output.JPG') }}"
         alt="IPS Bilingual"
         class="w-full h-52 sm:h-60 md:h-72 object-cover transition-transform duration-500 hover:scale-105">

    <span class="absolute top-4 left-4 px-4 py-1 text-xs font-semibold
                 bg-gradient-to-r from-purple-600 to-indigo-500
                 text-white rounded-full shadow-lg">
      Global Perspective
    </span>
  </div>

  <div class="p-5 sm:p-6">
    <h3 class="text-xl sm:text-2xl md:text-3xl font-extrabold text-purple-600 mb-3 md:mb-4">
      IPS Bilingual
    </h3>

    <p class="text-gray-700 text-sm sm:text-base leading-relaxed mb-5 text-justify">
      Program IPS Bilingual menekankan kajian ekonomi, sosial, dan kebijakan publik
      dengan perspektif global melalui pembelajaran bilingual, diskusi kritis,
      serta penguatan wawasan internasional.
    </p>

    <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 sm:gap-6 text-gray-700">
      <div class="flex flex-col gap-1 sm:gap-2">
        <i class="ri-book-line text-purple-600 text-xl sm:text-2xl"></i>
        <span class="font-semibold text-sm sm:text-base">Fokus</span>
        <p class="text-xs sm:text-sm text-gray-600">
          Ekonomi, Isu Global, Kebijakan Publik
        </p>
      </div>
      <div class="flex flex-col gap-1 sm:gap-2">
        <i class="ri-rocket-line text-purple-600 text-xl sm:text-2xl"></i>
        <span class="font-semibold text-sm sm:text-base">Karier</span>
        <p class="text-xs sm:text-sm text-gray-600">
          Diplomasi, Bisnis, Hukum Internasional
        </p>
      </div>
      <div class="flex flex-col gap-1 sm:gap-2">
        <i class="ri-building-line text-purple-600 text-xl sm:text-2xl"></i>
        <span class="font-semibold text-sm sm:text-base">Universitas</span>
        <p class="text-xs sm:text-sm text-gray-600">
          Program Internasional & Universitas Luar Negeri
        </p>
      </div>
    </div>
  </div>
</div>


  </div>
</section>

</section>
@endsection

@section('scripts')
{{-- AOS Animation & Smooth Scroll --}}
<script>
  const initAOSProgram = () => {
    const config = { duration: 1000, once: true };
    if (window.initAOS) {
      return window.initAOS(config);
    }
    if (typeof window.ensureAOS === 'function') {
      return window.ensureAOS().then((AOS) => {
        AOS.init(config);
        return AOS;
      });
    }
    if (window.AOS) {
      window.AOS.init(config);
      return Promise.resolve(window.AOS);
    }
    return Promise.reject(new Error('AOS loader is not available.'));
  };

  initAOSProgram().catch((error) => {
    console.error('Failed to initialize AOS on Program page', error);
  });

  // Smooth scroll
  document.querySelectorAll('.scroll-link').forEach(link => {
    link.addEventListener('click', e => {
      e.preventDefault();
      const target = document.querySelector(link.getAttribute('href'));
      if (target) {
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });
</script>
@endsection
