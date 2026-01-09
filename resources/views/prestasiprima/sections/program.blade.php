<!-- ================= SECTION PROGRAM KEAHLIAN (Responsif Lengkap) ================= -->
<section id="program" class="bg-gray-50 py-16 md:py-20 overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">

    <!-- ================= HEADER =================  -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-10 md:mb-14 fade-in-up text-center md:text-left">
      <div>
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-gray-900">
          Program <span class="text-purple-600">Keahlian</span>
        </h2>
        <p class="text-gray-600 mt-3 text-sm sm:text-base max-w-2xl mx-auto md:mx-0">
          Empat jurusan unggulan siap membentuk generasi kreatif dan kompeten:
          IPA, IPS, Bilingual IPA, dan Bilingual IPS  lengkap dengan kurikulumCambridge.
        </p>
      </div>

      <div class="flex flex-col sm:flex-row justify-center gap-3 mt-6 md:mt-0">
        <a href="tentang/program"
          class="inline-flex items-center justify-center gap-2 bg-white border border-gray-200 text-gray-700 px-4 py-2 rounded-lg shadow-sm hover:shadow-md transition text-sm md:text-base">
          Semua Program
        </a>
        <a href="https://spmb.prestasiprima.sch.id/"
          class="inline-flex items-center justify-center gap-2 bg-purple-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-purple-700 transition text-sm md:text-base" target="_blank">
          Daftar Sekarang
        </a>
      </div>
    </div>

    
<!-- ================= 4 CARD JURUSAN ================= -->
<div id="program-grid"
  class="grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-5 sm:gap-6 mb-8 fade-in-up delay-100">

  @foreach(['ipa'=>'IPA','ips'=>'IPS','bilingual_ipa'=>'Bilingual IPA','bilingual_ips'=>'Bilingual IPS'] as $key => $label)
  <div class="relative group rounded-xl overflow-hidden shadow-lg">

    <!-- Gambar utama -->
    <img src="{{ asset('assets/program/' . $key . '.png') }}"
         alt="{{ $label }}"
         class="w-full h-64 sm:h-80 md:h-96 object-cover transition-transform duration-700 group-hover:scale-105">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/30 transition duration-700"></div>

    <!-- Konten -->
    <div class="absolute inset-0 flex flex-col justify-end text-center p-5 sm:p-6 md:p-8 z-10">

      <!-- ICON (SATU FILE) -->
      <img src="{{ asset('assets/logo_sma.png') }}"
           alt="Logo SMA Prestasi Prima"
           class="mx-auto w-10 sm:w-12 aspect-square mb-2 sm:mb-3 object-contain">

      <!-- Judul -->
      <h3 class="text-white font-bold text-lg sm:text-xl leading-snug">
        {{
          $label === 'IPA' ? 'Ilmu Pengetahuan Alam' :
          ($label === 'IPS' ? 'Ilmu Pengetahuan Sosial' :
          ($label === 'Bilingual IPA' ? 'Bilingual Science (IPA)' : 'Bilingual Social (IPS)'))
        }}
      </h3>

      <!-- Tombol -->
      <a href="/tentang/program"
        class="mt-3 inline-block text-xs sm:text-sm text-purple-300 font-semibold hover:underline">
          Lihat Selengkapnya
      </a>

    </div>
  </div>
  @endforeach
</div>


{{-- YANG ASLI INI DIBAWAH
    <!-- ================= 4 CARD JURUSAN ================= -->
<div id="program-grid"
  class="grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-5 sm:gap-6 mb-8 fade-in-up delay-100">

  <!-- Template Card -->
  @foreach(['ipa'=>'IPA','ips'=>'IPS','bilingual_ipa'=>'Bilingual IPA','bilingual_ips'=>'Bilingual IPS'] as $key => $label)
  <div class="relative group rounded-xl overflow-hidden shadow-lg">
    <!-- Gambar utama -->
    <img src="{{ asset('assets/images/section/program/' . $key . '.png') }}" alt="{{ $label }}"
      class="w-full h-64 sm:h-80 md:h-96 object-cover transition-transform duration-700 group-hover:scale-105">
    
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/30 transition duration-700"></div>
    
    <!-- Konten -->
    <div class="absolute inset-0 flex flex-col justify-end text-center p-5 sm:p-6 md:p-8 z-10">
      <img src="{{ asset('assets/images/section/program/icons/' . $key . '.png') }}" alt="icon"
        class="mx-auto w-10 sm:w-12 aspect-square mb-2 sm:mb-3 object-contain">
      <h3 class="text-white font-bold text-lg sm:text-xl leading-snug">
        {{
          $label === 'IPA' ? 'Ilmu Pengetahuan Alam' :
          ($label === 'IPS' ? 'Ilmu Pengetahuan Sosial' :
          ($label === 'Bilingual IPA' ? 'Bilingual Science (IPA)' : 'Bilingual Social (IPS)'))
        }}
      </h3>

      <!-- Tombol Lihat Selengkapnya -->
      <a href="{{ route('program.' . $key) }}"
        class="mt-3 inline-block text-xs sm:text-sm text-purple-300 font-semibold hover:underline">
        Lihat Selengkapnya
      </a>
    </div>
  </div>
  @endforeach
</div> --}}


    <!-- ================= WRAPPER DETAIL ================= -->
    <div id="jurusan-detail-wrapper"
      class="py-10 bg-white hidden opacity-0 transition duration-700 transform translate-y-6">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8" id="jurusan-detail-content"></div>
    </div>

    <!-- ================= FEATURED & VIDEO JURUSAN ================= -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-10 items-stretch fade-in-up delay-200 mt-10">

      <!-- Kiri: Featured -->
      <div class="relative rounded-2xl overflow-hidden shadow-2xl bg-white group flex flex-col justify-end h-[360px] sm:h-[420px] md:h-[480px]">
        <img src="{{ asset('assets/program/DSC01650.png') }}" alt="Featured Program"
          class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition duration-700">
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent"></div>
        <div class="relative z-10 p-6 sm:p-8 text-white">
          <span class="inline-block bg-purple-500/90 px-3 py-1 rounded-full text-[10px] sm:text-xs font-medium tracking-wide w-fit">
            Unggulan
          </span>
          <h3 class="mt-4 text-2xl sm:text-3xl md:text-4xl font-extrabold leading-snug md:leading-tight drop-shadow">
            Membangun Generasi Unggul Berwawasan Global
          </h3>
          <p class="mt-3 text-xs sm:text-sm md:text-base text-purple-100/90 max-w-md">
            Kurikulum terintegrasi yang mempersiapkan siswa menembus Perguruan Tinggi Negeri dan Internasional terbaik.
          </p>
          <div class="mt-6 flex flex-wrap justify-center sm:justify-start gap-3">
            <a href="tentang/program"
              class="inline-flex items-center gap-2 bg-white/10 border border-white/30 text-white px-4 py-2 sm:px-5 sm:py-2.5 rounded-lg hover:bg-white/20 transition text-xs sm:text-sm">
              Pelajari lebih lanjut
            </a>
      <a href="https://spmb.prestasiprima.sch.id/"
   class="inline-flex items-center gap-2 bg-purple-500 text-white px-4 py-2 sm:px-5 sm:py-2.5 rounded-lg hover:bg-purple-600 transition text-xs sm:text-sm" target="_blank">
  Gabung Sekarang
</a>

          </div>
        </div>
      </div>

      <!-- Kanan: Video Jurusan -->
      <div class="bg-white rounded-2xl shadow-xl border border-gray-200 p-5 sm:p-6 md:p-8 flex flex-col justify-between h-auto relative overflow-hidden">
        <div class="absolute -top-12 -right-12 sm:-top-16 sm:-right-16 w-48 sm:w-64 h-48 sm:h-64 bg-purple-100 rounded-full opacity-30 blur-2xl"></div>

        <div class="relative text-center mb-4 sm:mb-6">
          <h3 class="text-xl sm:text-2xl font-bold text-purple-600 mb-2 flex items-center justify-center gap-2">
            <i class="ph ph-video-camera text-lg sm:text-2xl"></i> Video kegiatan Menarik
          </h3>
          <p class="text-gray-600 italic text-sm sm:text-base max-w-sm mx-auto">
            Yuk kenali lebih dekat jurusan unggulan di SMA Prestasi Prima!
          </p>
        </div>

        @php
          $programVideoCards = [
            [
              'id' => 'Asi93VHxRgs',
              'title' => 'Study & Career Expo 2025',
              'description' => 'Pameran karya dan inovasi siswa dari berbagai jurusan.',
              'gradient' => 'from-purple-500 via-purple-400 to-purple-600',
              'thumbnail' => 'assets/images/video-thumbnails/study.webp',
            ],
            [
              'id' => 'zQYlLdHDCOI',
              'title' => 'Saintek Semua Jurusan',
              'description' => 'Kolaborasi siswa lintas jurusan dalam ajang lomba teknologi.',
              'gradient' => 'from-sky-500 via-blue-500 to-indigo-600',
              'thumbnail' => 'assets/images/video-thumbnails/saintek.webp',
            ],
          ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6 relative z-10">
          @foreach ($programVideoCards as $video)
            <div class="bg-white rounded-2xl shadow-md border border-gray-100 hover:shadow-xl transition focus-within:ring-2 focus-within:ring-purple-300">
              @include('components.youtube-lite', [
                  'videoId' => $video['id'],
                  'title' => $video['title'],
                  'gradient' => $video['gradient'],
                  'thumbnailPath' => $video['thumbnail'],
                  'wrapperClass' => 'cursor-pointer',
                  'behavior' => 'modal'
              ])
              <div class="p-3 text-center">
                <h4 class="font-semibold text-gray-800 text-sm">{{ $video['title'] }}</h4>
                <p class="text-xs text-gray-500">{{ $video['description'] }}</p>
              </div>
            </div>
          @endforeach
        </div>

        @include('components.youtube-lite-script')

        <div class="relative text-center mt-5 sm:mt-6">
          <a href="#galeri-video"
            class="inline-block text-purple-600 font-semibold text-sm hover:text-purple-700">
            Lihat semua video →
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- ================= MODAL VIDEO ================= -->
  <div id="videoModal"
    class="fixed inset-0 bg-black/80 hidden items-center justify-center z-50 transition duration-300 p-4">
    <div class="bg-white rounded-2xl overflow-hidden w-full max-w-xl sm:max-w-2xl md:max-w-3xl shadow-lg relative">
      <button onclick="closeVideoModal()"
        class="absolute top-2 right-2 bg-red-500 text-white rounded-full p-2 hover:bg-red-600 transition">
        <i class="ph ph-x text-xl"></i>
      </button>
  <iframe id="videoFrame" title="Video Jurusan" class="w-full aspect-video" src=""
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
    allowfullscreen loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
    </div>
  </div>
</section>


<!-- ================= STYLE ANIMASI & CUSTOM ================= -->
<style>
    .fade-in-up {
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.7s cubic-bezier(.22, 1, .36, 1);
    }

    .fade-in-up.show {
        opacity: 1;
        transform: translateY(0);
    }

    .group:hover img {
        transform: scale(1.07);
        transition: transform 0.6s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .group:hover .absolute.inset-0 {
        background-color: rgba(168, 85, 247, 0.25);
        transition: background-color 0.6s ease;
    }

    /* jurusan detail minor styling */
    #jurusan-detail-wrapper {
        will-change: opacity, transform;
    }

    .jurusan-detail-card {
        border-radius: .75rem;
        box-shadow: 0 12px 30px rgba(15, 23, 42, 0.06);
        overflow: hidden;
    }
</style>

<!-- ================= SCRIPT (Animasi, Toggle Detail, Modal) ================= -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        // Intersection Observer untuk semua .fade-in-up (dipakai ulang)
        const fadeElements = document.querySelectorAll(".fade-in-up");
        const io = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) entry.target.classList.add("show");
                else entry.target.classList.remove("show");
            });
        }, {
            threshold: 0.18
        });
        fadeElements.forEach(el => io.observe(el));

        // Data detail jurusan (HTML sebagai template string)
        const details = {
            ipa: `<!-- IPA content -->
      <div class="mb-6">
        <h2 class="text-2xl font-bold text-purple-600">Ilmu Pengetahuan Alam (IPA)</h2>
        <p class="text-gray-600 mt-1">Mendalami sains, biologi, fisika, kimia, dan matematika untuk masa depan kedokteran dan teknik.</p>
      </div>
      <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
          <img src="assets/images/section/program/ipa.JPG" loading="lazy" alt="Biologi" class="w-full h-40 object-cover">
          <div class="p-4">
            <h4 class="font-semibold">Biologi & Kedokteran</h4>
            <p class="text-sm text-gray-600">Eksplorasi kehidupan, anatomi, dan kesehatan.</p>
          </div>
        </div>
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
          <img src="assets/images/section/program/ipa-fisika.jpg" loading="lazy" alt="Fisika" class="w-full h-40 object-cover">
          <div class="p-4">
            <h4 class="font-semibold">Fisika Terapan</h4>
            <p class="text-sm text-gray-600">Memahami hukum alam dan teknologi rekayasa.</p>
          </div>
        </div>
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
          <img src="assets/images/section/program/ipa-kimia.jpg" loading="lazy" alt="Kimia" class="w-full h-40 object-cover">
          <div class="p-4">
            <h4 class="font-semibold">Kimia Industri</h4>
            <p class="text-sm text-gray-600">Analisis zat dan reaksi kimia laboratorium.</p>
          </div>
        </div>
      </div>
    `,
            ips: `<!-- IPS content -->
      <div class="mb-6">
        <h2 class="text-2xl font-bold text-purple-600">Ilmu Pengetahuan Sosial (IPS)</h2>
        <p class="text-gray-600 mt-1">Mempelajari dinamika masyarakat, ekonomi, sejarah, dan sosiologi.</p>
      </div>
      <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
          <img src="assets/images/section/program/ips-ekonomi.jpg" loading="lazy" alt="Ekonomi" class="w-full h-40 object-cover">
          <div class="p-4">
            <h4 class="font-semibold">Ekonomi & Bisnis</h4>
            <p class="text-sm text-gray-600">Dasar-dasar manajemen, akuntansi, dan pasar.</p>
          </div>
        </div>
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
          <img src="assets/images/section/program/ips-sosiologi.jpg" loading="lazy" alt="Sosiologi" class="w-full h-40 object-cover">
          <div class="p-4">
            <h4 class="font-semibold">Sosiologi</h4>
            <p class="text-sm text-gray-600">Interaksi sosial dan struktur masyarakat.</p>
          </div>
        </div>
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
          <img src="assets/images/section/program/ips-geografi.jpg" loading="lazy" alt="Geografi" class="w-full h-40 object-cover">
          <div class="p-4">
            <h4 class="font-semibold">Geografi & Lingkungan</h4>
            <p class="text-sm text-gray-600">Analisis wilayah dan fenomena geosfer.</p>
          </div>
        </div>
      </div>
    `,
            bilingual_ipa: `<!-- Bilingual IPA content -->
      <div class="mb-6">
        <h2 class="text-2xl font-bold text-purple-600">Bilingual Science (IPA)</h2>
        <p class="text-gray-600 mt-1">Program unggulan dimana semua pembelajaran menggunakan Bahasa Inggris, memadukan kurikulum Cambridge/Internasional dengan standar nasional.</p>
      </div>
      <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
          <img src="assets/images/section/program/bilingual-class.jpg" loading="lazy" alt="Classroom" class="w-full h-40 object-cover">
          <div class="p-4">
            <h4 class="font-semibold">Full English Instruction</h4>
            <p class="text-sm text-gray-600">Seluruh kegiatan belajar mengajar disampaikan dalam Bahasa Inggris.</p>
          </div>
        </div>
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
          <img src="assets/images/section/program/bilingual-lab.jpg" loading="lazy" alt="Lab" class="w-full h-40 object-cover">
          <div class="p-4">
            <h4 class="font-semibold">Global Standard Lab</h4>
            <p class="text-sm text-gray-600">Praktikum sains dengan standar internasional.</p>
          </div>
        </div>
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
          <img src="assets/images/section/program/bilingual-book.jpg" loading="lazy" alt="Cambridge" class="w-full h-40 object-cover">
          <div class="p-4">
            <h4 class="font-semibold">Cambridge Curriculum</h4>
            <p class="text-sm text-gray-600">Materi ajar berstandar global yang diakui dunia.</p>
          </div>
        </div>
      </div>
    `,
            bilingual_ips: `<!-- Bilingual IPS content -->
      <div class="mb-6">
        <h2 class="text-2xl font-bold text-purple-600">Bilingual Social (IPS)</h2>
        <p class="text-gray-600 mt-1">Program unggulan dimana semua pembelajaran menggunakan Bahasa Inggris, fokus pada studi sosial, ekonomi, dan humaniora global.</p>
      </div>
      <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
          <img src="assets/images/section/program/bil-social.jpg" loading="lazy" alt="Social" class="w-full h-40 object-cover">
          <div class="p-4">
            <h4 class="font-semibold">Global Perspectives</h4>
            <p class="text-sm text-gray-600">Mengkaji isu sosial dengan wawasan internasional.</p>
          </div>
        </div>
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
          <img src="assets/images/section/program/bil-economy.jpg" loading="lazy" alt="Economy" class="w-full h-40 object-cover">
          <div class="p-4">
            <h4 class="font-semibold">International Economics</h4>
            <p class="text-sm text-gray-600">Pembelajaran ekonomi dan bisnis dalam Bahasa Inggris.</p>
          </div>
        </div>
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
          <img src="assets/images/section/program/bil-debate.jpg" loading="lazy" alt="Debate" class="w-full h-40 object-cover">
          <div class="p-4">
            <h4 class="font-semibold">English Debate</h4>
            <p class="text-sm text-gray-600">Pengembangan kemampuan berpikir kritis dan debat bahasa Inggris.</p>
          </div>
        </div>
      </div>
    `
        };

        // Element references
        const links = document.querySelectorAll(".lihat-selengkapnya");
        const wrapper = document.getElementById("jurusan-detail-wrapper");
        const content = document.getElementById("jurusan-detail-content");

        // Utility: show detail (single open at a time)
        function showDetail(key) {
            if (!details[key]) return;
            // Masukkan HTML + tombol kembali
            content.innerHTML = details[key] + `
      <div class="mt-8 text-center fade-in-up">
        <a href="#" id="close-detail" class="inline-block bg-gray-200 hover:bg-gray-300 text-gray-800 px-6 py-3 rounded-lg font-semibold transition transform hover:scale-105">
          â† Kembali ke Program
        </a>
      </div>
    `;

            // Tampilkan wrapper dengan animasi
            wrapper.classList.remove("hidden");
            // small delay agar transition terbaca
            setTimeout(() => {
                wrapper.classList.remove("opacity-0", "translate-y-6");
            }, 40);

            // Scroll halus ke wrapper
            wrapper.scrollIntoView({
                behavior: "smooth",
                block: "start"
            });

            // Observe new fade-in-up elements di dalam content agar anim berjalan
            const newEls = content.querySelectorAll(".fade-in-up");
            newEls.forEach(el => io.observe(el));

            // Pasang event listener tombol close (pastikan hanya sekali)
            const closeBtn = document.getElementById("close-detail");
            if (closeBtn) {
                closeBtn.addEventListener("click", (e) => {
                    e.preventDefault();
                    hideDetail();
                }, {
                    once: true
                });
            }
        }

        // Utility: hide detail
        function hideDetail() {
            wrapper.classList.add("opacity-0", "translate-y-6");
            // delay hide agar anim selesai
            setTimeout(() => {
                wrapper.classList.add("hidden");
                content.innerHTML = "";
                // scroll kembali ke grid program
                const grid = document.getElementById("program-grid");
                if (grid) grid.scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                });
            }, 480);
        }

        // Attach click ke setiap link "Lihat Selengkapnya"
        links.forEach(link => {
            link.addEventListener("click", function(e) {
                e.preventDefault();
                const targetKey = this.dataset.target;
                // jika wrapper sudah terbuka dengan jurusan yang sama -> tutup
                // (alternatif: selalu replace konten)
                showDetail(targetKey);
            });
        });

        // Support keyboard ESC untuk menutup detail bila terbuka
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape") {
        if (!wrapper.classList.contains("hidden")) hideDetail();
        // juga tutup video modal jika terbuka
        window.closeVideoModal();
      }
    });
    });

  // Modal Video (lite trigger)
  window.openVideoModal = function(videoId, title = 'Video Jurusan') {
    const modal = document.getElementById("videoModal");
    const iframe = document.getElementById("videoFrame");
    if (!modal || !iframe || !videoId) {
      return;
    }

    const embedUrl = `https://www.youtube-nocookie.com/embed/${videoId}?autoplay=1&modestbranding=1&rel=0`;
    iframe.src = embedUrl;
    iframe.dataset.videoId = videoId;
    iframe.setAttribute('title', title || 'Video Jurusan');
    modal.classList.remove("hidden");
    modal.classList.add("flex");
    if (typeof iframe.focus === 'function') {
      iframe.focus();
    }
  };

  window.closeVideoModal = function() {
    const modal = document.getElementById("videoModal");
    const iframe = document.getElementById("videoFrame");
    if (iframe) {
      iframe.removeAttribute('data-video-id');
      iframe.src = "";
    }
    if (modal) {
      modal.classList.add("hidden");
      modal.classList.remove("flex");
    }
  };
</script>
