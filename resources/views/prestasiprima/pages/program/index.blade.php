@extends('prestasiprima.index')

@section('title', 'Program Keahlian - SMA Prestasi Prima')

@section('content')
<section class="pt-32 pb-24 bg-white relative overflow-hidden">

  {{-- ==================== PROFIL JURUSAN ==================== --}}
  <div class="max-w-7xl mx-auto px-6 md:px-10 flex flex-col md:flex-row items-center gap-10 md:gap-16" data-aos="fade-up">
    <div class="md:w-1/2">
      <div class="relative rounded-2xl overflow-hidden">
        <img src="{{ asset('assets/prestasiprima/kepalasekolahsma.png') }}" alt="Kepala Sekolah SMA Prestasi Prima" class="w-full object-cover">
      </div>
    </div>

    <div class="md:w-1/2">
      <h2 class="text-4xl md:text-5xl font-bold text-purple-600 mb-4">Profil Jurusan</h2>
      <p class="text-gray-700 leading-relaxed mb-6 text-justify">
        Di <strong>SMA Prestasi Prima</strong>, kami percaya bahwa masa depan ada di tangan para <em>pemimpin masa depan</em>.
        Sebagai <strong>Sekolah Unggulan</strong>, kami berkomitmen membentuk talenta unggul melalui empat Program Peminatan yang relevan —
        <span class="font-semibold">IPA</span>, <span class="font-semibold">IPS</span>, <span class="font-semibold">Bilingual IPA</span>, dan <span class="font-semibold">Bilingual IPS</span> —
        dengan kurikulum berstandar internasional. Kami memastikan setiap lulusan siap bersaing di tingkat global.
      </p>
      <a href="#programs" class="inline-flex items-center bg-purple-600 text-white px-5 py-3 rounded-lg font-medium hover:bg-purple-700 transition scroll-link">
        Selengkapnya <i class="ms-2 ri-arrow-down-line"></i>
      </a>
    </div>
  </div>

  <section id="programs" class="pt-32 pb-32 bg-gray-50 relative overflow-hidden">
  {{-- ==================== PROGRAM JURUSAN ==================== --}}
  <div class="max-w-7xl mx-auto px-6 md:px-10 grid gap-12 sm:grid-cols-1 lg:grid-cols-2">

    {{-- IPA --}}
    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden hover:shadow-3xl transform hover:-translate-y-3 transition-all duration-500" data-aos="fade-up">
      <div class="relative">
        <img src="{{ asset('assets/program/ipa.png') }}" alt="Ilmu Pengetahuan Alam" class="w-full h-64 md:h-72 object-cover transition-transform duration-500 hover:scale-105">
        <span class="absolute top-4 left-4 px-4 py-1 text-xs font-semibold bg-gradient-to-r from-purple-500 to-indigo-500 text-white rounded-full shadow-lg">Program Unggulan</span>
      </div>
      <div class="p-6">
        <h3 class="text-2xl md:text-3xl font-extrabold text-purple-600 mb-4">Ilmu Pengetahuan Alam (IPA)</h3>
        <p class="text-gray-700 mb-6 text-justify">
          Program IPA untuk siswa yang memiliki minat tinggi pada sains dan teknologi. Fokus pada Matematika, Fisika, Kimia, dan Biologi dengan metode praktikum modern.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-gray-700">
          <div class="flex flex-col items-start gap-2">
            <i class="ri-book-line text-purple-600 text-2xl"></i>
            <span class="font-semibold">Fokus</span>
            <p class="text-sm">Matematika, Fisika, Kimia, Biologi</p>
          </div>
          <div class="flex flex-col items-start gap-2">
            <i class="ri-rocket-line text-purple-600 text-2xl"></i>
            <span class="font-semibold">Karier</span>
            <p class="text-sm">Kedokteran, Teknik, Farmasi</p>
          </div>
          <div class="flex flex-col items-start gap-2">
            <i class="ri-building-line text-purple-600 text-2xl"></i>
            <span class="font-semibold">Universitas</span>
            <p class="text-sm">FK UI, ITB, ITS, UGM</p>
          </div>
        </div>
      </div>
    </div>

    {{-- IPS --}}
    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden hover:shadow-3xl transform hover:-translate-y-3 transition-all duration-500" data-aos="fade-up" data-aos-delay="100">
      <div class="relative">
        <img src="{{ asset('assets/program/ips.png') }}" alt="Ilmu Pengetahuan Sosial" class="w-full h-64 md:h-72 object-cover transition-transform duration-500 hover:scale-105">
        <span class="absolute top-4 left-4 px-4 py-1 text-xs font-semibold bg-gradient-to-r from-purple-500 to-indigo-500 text-white rounded-full shadow-lg">Social Track</span>
      </div>
      <div class="p-6">
        <h3 class="text-2xl md:text-3xl font-extrabold text-purple-600 mb-4">Ilmu Pengetahuan Sosial (IPS)</h3>
        <p class="text-gray-700 mb-6 text-justify">
          Program IPS fokus pada pemahaman sosial, ekonomi, dan kebijakan publik. Mata pelajaran: Ekonomi, Sosiologi, Geografi, Sejarah dengan pendekatan interaktif dan debat.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-gray-700">
          <div class="flex flex-col items-start gap-2">
            <i class="ri-book-line text-purple-600 text-2xl"></i>
            <span class="font-semibold">Fokus</span>
            <p class="text-sm">Ekonomi, Sosiologi, Geografi, Sejarah</p>
          </div>
          <div class="flex flex-col items-start gap-2">
            <i class="ri-rocket-line text-purple-600 text-2xl"></i>
            <span class="font-semibold">Karier</span>
            <p class="text-sm">Ekonomi, Hukum, Bisnis, Politik</p>
          </div>
          <div class="flex flex-col items-start gap-2">
            <i class="ri-building-line text-purple-600 text-2xl"></i>
            <span class="font-semibold">Universitas</span>
            <p class="text-sm">FEB UI, FH UGM, FISIP Unpad</p>
          </div>
        </div>
      </div>
    </div>

    {{-- IPA Bilingual --}}
    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden hover:shadow-3xl transform hover:-translate-y-3 transition-all duration-500" data-aos="fade-up" data-aos-delay="200">
      <div class="relative">
        <img src="{{ asset('assets/images/section/program/bilingual_ipa.png') }}" alt="IPA Bilingual" class="w-full h-64 md:h-72 object-cover transition-transform duration-500 hover:scale-105">
        <span class="absolute top-4 left-4 px-4 py-1 text-xs font-semibold bg-gradient-to-r from-purple-600 to-indigo-500 text-white rounded-full shadow-lg">International Class</span>
      </div>
      <div class="p-6">
        <h3 class="text-2xl md:text-3xl font-extrabold text-purple-600 mb-4">IPA Bilingual</h3>
        <p class="text-gray-700 mb-6 text-justify">
          Pembelajaran IPA dengan Bahasa Indonesia & Inggris untuk menguatkan kompetensi akademik dan terminologi ilmiah internasional.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-gray-700">
          <div class="flex flex-col items-start gap-2">
            <i class="ri-book-line text-purple-600 text-2xl"></i>
            <span class="font-semibold">Keunggulan</span>
            <p class="text-sm">Dua bahasa, Standar internasional</p>
          </div>
          <div class="flex flex-col items-start gap-2">
            <i class="ri-rocket-line text-purple-600 text-2xl"></i>
            <span class="font-semibold">Karier</span>
            <p class="text-sm">Kedokteran, Teknik, Peneliti</p>
          </div>
          <div class="flex flex-col items-start gap-2">
            <i class="ri-building-line text-purple-600 text-2xl"></i>
            <span class="font-semibold">Universitas</span>
            <p class="text-sm">FK UI Bilingual, ITB International, Universitas Luar Negeri</p>
          </div>
        </div>
      </div>
    </div>

    {{-- IPS Bilingual --}}
    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden hover:shadow-3xl transform hover:-translate-y-3 transition-all duration-500" data-aos="fade-up" data-aos-delay="300">
      <div class="relative">
        <img src="{{ asset('assets/images/section/program/bilingual_ips.png') }}" alt="IPS Bilingual" class="w-full h-64 md:h-72 object-cover transition-transform duration-500 hover:scale-105">
        <span class="absolute top-4 left-4 px-4 py-1 text-xs font-semibold bg-gradient-to-r from-purple-600 to-indigo-500 text-white rounded-full shadow-lg">Global Perspective</span>
      </div>
      <div class="p-6">
        <h3 class="text-2xl md:text-3xl font-extrabold text-purple-600 mb-4">IPS Bilingual</h3>
        <p class="text-gray-700 mb-6 text-justify">
          Program IPS bilingual fokus pada ekonomi, sosial, dan kebijakan publik dengan perspektif global melalui pembelajaran bilingual dan interaktif.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-gray-700">
          <div class="flex flex-col items-start gap-2">
            <i class="ri-book-line text-purple-600 text-2xl"></i>
            <span class="font-semibold">Fokus</span>
            <p class="text-sm">Ekonomi, Isu Internasional, Public Policy</p>
          </div>
          <div class="flex flex-col items-start gap-2">
            <i class="ri-rocket-line text-purple-600 text-2xl"></i>
            <span class="font-semibold">Karier</span>
            <p class="text-sm">Hubungan Internasional, Bisnis, Hukum & Diplomasi</p>
          </div>
          <div class="flex flex-col items-start gap-2">
            <i class="ri-building-line text-purple-600 text-2xl"></i>
            <span class="font-semibold">Universitas</span>
            <p class="text-sm">FISIP UI Bilingual, FH UGM International, Universitas Luar Negeri</p>
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
