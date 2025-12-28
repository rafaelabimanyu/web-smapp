@extends('prestasiprima.index')

@section('title', 'Lulusan PTN — SMA Prestasi Prima')

@section('content')

<!-- ========== HEADER SECTION ========== -->
<section class="relative mt-[100px] min-h-[70vh] md:min-h-[80vh]
       flex items-center justify-center text-center overflow-hidden"
  style="background: url('{{ asset('assets/images/lulusanptn/herobg.png') }}') center/cover no-repeat;">

  <div class="absolute inset-0 bg-purple-700/60"></div>

  <div class="relative z-10 bg-white py-8 px-10 md:px-16 rounded-2xl shadow-xl">
    <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold
               text-purple-600 tracking-tight whitespace-nowrap">
      SELAMAT & SUKSES
    </h1>
    <p class="text-purple-500 text-base sm:text-lg mt-2 font-medium">
      Untuk Siswa SMA Prestasi Prima yang Lulus SNBP
    </p>
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
