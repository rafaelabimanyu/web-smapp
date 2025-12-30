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
    <div class="relative z-10 text-center max-w-4xl mx-auto px-6" data-aos="fade-down">

        <!-- Logo -->
        <img src="{{ asset('assets/logo_sma.png') }}"
             alt="Logo SMA Prestasi Prima"
             class="w-24 h-24 mx-auto mb-6">

        <!-- Title -->
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mb-5 leading-tight">
            Alumni SMA Prestasi Prima<br class="hidden sm:block">
            <span class="text-white">Diterima di Perguruan Tinggi Negeri</span>
        </h1>

        <!-- Description -->
        <p class="text-white/90 text-lg md:text-xl leading-relaxed max-w-3xl mx-auto">
            SMA Prestasi Prima secara konsisten mencetak lulusan berkualitas yang berhasil
            melanjutkan pendidikan ke berbagai <strong>Perguruan Tinggi Negeri (PTN)</strong>
            ternama di Indonesia melalui jalur seleksi nasional seperti
            <strong>SNBP, SNBT, dan jalur prestasi</strong>.
        </p>

        <!-- Highlight Info -->
        <div class="mt-8 flex flex-wrap justify-center gap-4 text-sm md:text-base">
            <span class="px-5 py-2 rounded-full bg-white/15 backdrop-blur border border-white/20 inline-flex items-center">
                <i data-lucide="graduation-cap" class="w-5 h-5 mr-2"></i>
                Alumni Berprestasi
            </span>
            <span class="px-5 py-2 rounded-full bg-white/15 backdrop-blur border border-white/20 inline-flex items-center">
                <i data-lucide="landmark" class="w-5 h-5 mr-2"></i>
                PTN Favorit Nasional
            </span>
            <span class="px-5 py-2 rounded-full bg-white/15 backdrop-blur border border-white/20 inline-flex items-center">
                <i data-lucide="trending-up" class="w-5 h-5 mr-2"></i>
                Seleksi Nasional & Prestasi
            </span>
        </div>
    </div>
</section>


<!-- ========== LULUSAN PTN (GALLERY) ========== -->
<section class="relative py-24 bg-gradient-to-b from-purple-50 to-white">
  <div class="max-w-6xl mx-auto px-6">

    <!-- Judul -->
    <div class="text-center mb-14">
      <h2 class="text-3xl md:text-4xl font-extrabold text-purple-700">
        Lulusan Perguruan Tinggi Negeri
      </h2>
      <p class="text-gray-600 mt-3">
        Prestasi siswa SMA Prestasi Prima di jalur SNBP
      </p>
    </div>

    <!-- Grid Gambar -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start">
      @foreach (['image1.jpg','image2.jpg','image3.jpg','image4.jpg','image5.jpg'] as $img)
        <div class="rounded-3xl shadow-xl overflow-hidden cursor-pointer">
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
