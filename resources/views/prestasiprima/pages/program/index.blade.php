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

  {{-- ==================== PROGRAM JURUSAN ==================== --}}
  <div id="programs" class="mt-24 space-y-24">

    {{-- JURUSAN 1: IPA --}}
    <div class="max-w-6xl mx-auto px-6 md:px-10 flex flex-col md:flex-row items-center gap-10" data-aos="fade-right">
      <div class="md:w-1/2">
        {{-- Menggunakan gambar dari section program jika ada, atau fallback --}}
        <img src="{{ asset('assets/images/section/program/ipa.png') }}" alt="Ilmu Pengetahuan Alam" class="rounded-2xl w-full object-cover">
      </div>
      <div class="md:w-1/2">
        <h3 class="text-2xl md:text-3xl font-bold text-purple-600 mb-3">Ilmu Pengetahuan Alam (IPA)</h3>
        <p class="text-gray-700 mb-6 text-justify">
          Program ini dirancang untuk siswa yang memiliki minat kuat pada sains dan teknologi. 
          Mendalami mata pelajaran Biologi, Fisika, Kimia, dan Matematika dengan pendekatan praktis dan analitis. 
          Lulusan dipersiapkan untuk melanjutkan pendidikan ke jenjang universitas di bidang Kedokteran, Teknik, Sains, dan Farmasi.
        </p>
        <a href="{{ route('program.ipa') }}" class="inline-flex items-center bg-purple-600 text-white px-5 py-2.5 rounded-lg font-medium hover:bg-purple-700 transition">
          Selengkapnya <i class="ms-2 ri-arrow-right-line"></i>
        </a>
      </div>
    </div>

    {{-- JURUSAN 2: IPS --}}
    <div class="max-w-6xl mx-auto px-6 md:px-10 flex flex-col md:flex-row-reverse items-center gap-10" data-aos="fade-left">
      <div class="md:w-1/2">
        <img src="{{ asset('assets/images/section/program/ips.png') }}" alt="Ilmu Pengetahuan Sosial" class="rounded-2xl w-full object-cover">
      </div>
      <div class="md:w-1/2">
        <h3 class="text-2xl md:text-3xl font-bold text-purple-600 mb-3">Ilmu Pengetahuan Sosial (IPS)</h3>
        <p class="text-gray-700 mb-6 text-justify">
          Program ini fokus pada pemahaman dinamika masyarakat, ekonomi, dan hubungan internasional.
          Siswa mempelajari Sosiologi, Ekonomi, Geografi, dan Sejarah dengan wawasan luas.
          Lulusan siap melanjutkan ke jurusan Hukum, Hubungan Internasional, Manajemen, Akuntansi, dan Psikologi.
        </p>
        <a href="{{ route('program.ips') }}" class="inline-flex items-center bg-purple-600 text-white px-5 py-2.5 rounded-lg font-medium hover:bg-purple-700 transition">
          Selengkapnya <i class="ms-2 ri-arrow-right-line"></i>
        </a>
      </div>
    </div>

    {{-- JURUSAN 3: BILINGUAL IPA --}}
    <div class="max-w-6xl mx-auto px-6 md:px-10 flex flex-col md:flex-row items-center gap-10" data-aos="fade-right">
      <div class="md:w-1/2">
        <img src="{{ asset('assets/images/section/program/bilingual_ipa.png') }}" alt="Bilingual Science (IPA)" class="rounded-2xl w-full object-cover">
      </div>
      <div class="md:w-1/2">
        <h3 class="text-2xl md:text-3xl font-bold text-purple-600 mb-3">Bilingual Science (IPA)</h3>
        <p class="text-gray-700 mb-6 text-justify">
          Program unggulan yang memadukan Kurikulum Nasional dengan Kurikulum Internasional (Cambridge).
          Pembelajaran mata pelajaran sains disampaikan dalam Bahasa Inggris.
          Mempersiapkan siswa untuk bersaing di universitas luar negeri maupun program internasional dalam negeri.
        </p>
        <a href="{{ route('program.bilingual_ipa') }}" class="inline-flex items-center bg-purple-600 text-white px-5 py-2.5 rounded-lg font-medium hover:bg-purple-700 transition">
          Selengkapnya <i class="ms-2 ri-arrow-right-line"></i>
        </a>
      </div>
    </div>

    {{-- JURUSAN 4: BILINGUAL IPS --}}
    <div class="max-w-6xl mx-auto px-6 md:px-10 flex flex-col md:flex-row-reverse items-center gap-10" data-aos="fade-left">
      <div class="md:w-1/2">
        <img src="{{ asset('assets/images/section/program/bilingual_ips.png') }}" alt="Bilingual Social (IPS)" class="rounded-2xl w-full object-cover">
      </div>
      <div class="md:w-1/2">
        <h3 class="text-2xl md:text-3xl font-bold text-purple-600 mb-3">Bilingual Social (IPS)</h3>
        <p class="text-gray-700 mb-6 text-justify">
          Program kelas internasional untuk studi sosial dan humaniora.
          Mata pelajaran Ekonomi, Sosiologi, dan Geografi diajarkan dengan pengantar Bahasa Inggris.
          Fokus pada pengembangan wawasan global, kemampuan debat, dan analisis isu internasional.
        </p>
        <a href="{{ route('program.bilingual_ips') }}" class="inline-flex items-center bg-purple-600 text-white px-5 py-2.5 rounded-lg font-medium hover:bg-purple-700 transition">
          Selengkapnya <i class="ms-2 ri-arrow-right-line"></i>
        </a>
      </div>
    </div>

  </div>

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
