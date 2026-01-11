@extends('prestasiprima.index')

@section('title', 'Lulusan PTN — SMA Prestasi Prima')

@section('content')

<!-- ========== HEADER SECTION (ALUMNI PTN) ========== -->
<section class="relative bg-gradient-to-br from-purple-600 via-purple-500 to-purple-400
               text-white pt-36 pb-28 overflow-hidden">

    <!-- Background Image + Overlay -->
    <div class="absolute inset-0">
        <img src="{{ asset('assets/prestasiprima/fotbarguru2.jpg') }}"
             alt="SMA Prestasi Prima"
             class="w-full h-full object-cover opacity-30"
             loading="lazy">
        <div class="absolute inset-0 bg-purple-700/40 mix-blend-multiply"></div>
    </div>

    <!-- Content -->
<div class="relative z-10 text-center max-w-2xl md:max-w-3xl mx-auto px-4 sm:px-6"
     data-aos="fade-down">

    <!-- Logo -->
    <img src="{{ asset('assets/logo_sma.png') }}"
         alt="Logo SMA Prestasi Prima"
         class="w-14 h-14 sm:w-16 sm:h-16 md:w-20 md:h-20 mx-auto mb-4">

    <!-- Title -->
    <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-extrabold mb-3 leading-snug">
        Alumni SMA Prestasi Prima<br class="hidden sm:block">
        <span class="text-white">Diterima di Perguruan Tinggi Negeri</span>
    </h1>

    <!-- Description -->
    <p class="text-white/90 text-xs sm:text-sm md:text-base leading-relaxed max-w-xl mx-auto">
        SMA Prestasi Prima secara konsisten mencetak lulusan berkualitas yang berhasil
        melanjutkan pendidikan ke berbagai <strong>PTN</strong> ternama melalui
        <strong>SNBP, SNBT, dan jalur prestasi</strong>.
    </p>

    <!-- Highlight Info -->
    <div class="mt-5 flex flex-wrap justify-center gap-2 text-xs sm:text-sm">
        <span class="px-3 py-1.5 rounded-full bg-white/15 backdrop-blur border border-white/20 inline-flex items-center">
            <i data-lucide="graduation-cap" class="w-4 h-4 mr-1.5"></i>
            Alumni Berprestasi
        </span>

        <span class="px-3 py-1.5 rounded-full bg-white/15 backdrop-blur border border-white/20 inline-flex items-center">
            <i data-lucide="landmark" class="w-4 h-4 mr-1.5"></i>
            PTN Favorit Nasional
        </span>

        <span class="px-3 py-1.5 rounded-full bg-white/15 backdrop-blur border border-white/20 inline-flex items-center">
            <i data-lucide="trending-up" class="w-4 h-4 mr-1.5"></i>
            Seleksi Nasional & Prestasi
        </span>
    </div>
</div>

</section>


<!-- ========== LULUSAN PTN (GALLERY) ========== -->
<section class="relative py-16 sm:py-20 bg-gradient-to-b from-purple-50 to-white">
  <div class="max-w-6xl mx-auto px-4 sm:px-6">

    <!-- Judul -->
    <div class="text-center mb-10 sm:mb-14">
      <h2 class="text-xl sm:text-2xl md:text-4xl font-extrabold text-purple-700">
        Lulusan Perguruan Tinggi Negeri
      </h2>
      <p class="text-gray-600 mt-2 text-sm sm:text-base">
        Prestasi siswa SMA Prestasi Prima di jalur SNBP
      </p>
    </div>

    <!-- Grid Gambar -->
    <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 lg:gap-10">
      @foreach (['image1.jpg','image2.jpg','image3.jpg','image4.jpg','image5.jpg'] as $img)
        <div class="rounded-xl sm:rounded-2xl lg:rounded-3xl shadow-md sm:shadow-lg overflow-hidden cursor-pointer">
          <img
            src="{{ asset('assets/images/lulusanptn/' . $img) }}"
            alt="Lulusan PTN"
            class="w-full h-auto hover:opacity-90 transition"
            onclick="openImageModal(this.src)">
        </div>
      @endforeach
    </div>

  </div>
</section>


<!-- ========== IMAGE MODAL ========== -->
<div id="imageModal"
     class="fixed inset-0 bg-black/80 z-50 hidden items-center justify-center px-4"
     onclick="closeImageModal()">

  <!-- Close Button -->
  <button
    class="absolute top-6 right-6 text-white text-4xl font-bold"
    onclick="closeImageModal()">&times;</button>

  <!-- Image -->
  <img id="modalImage"
       class="max-w-full max-h-[90vh] rounded-xl shadow-2xl">
</div>

<!-- ========== SCRIPT ========== -->

<script>
  lucide.createIcons();
</script>

<script>
  function openImageModal(src) {
    const modal = document.getElementById('imageModal');
    const img = document.getElementById('modalImage');

    img.src = src;
    modal.classList.remove('hidden');
    modal.classList.add('flex');
  }

  function closeImageModal() {
    const modal = document.getElementById('imageModal');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
  }
</script>

@endsection
