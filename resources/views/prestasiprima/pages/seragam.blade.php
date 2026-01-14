@extends('prestasiprima.index')

@section('title', 'Seragam Siswa - SMA Prestasi Prima')

@section('content')

{{-- ================= HERO ================= --}}
<section class="relative pt-40 pb-28 bg-gradient-to-br from-purple-800 via-purple-700 to-purple-900 text-white overflow-hidden">
  <div class="absolute inset-0 bg-black/20"></div>

  <div class="relative max-w-6xl mx-auto px-6 text-center">
    <h1 class="text-3xl md:text-5xl font-extrabold mb-6">
      Seragam Siswa
    </h1>
    <p class="text-purple-100 max-w-2xl mx-auto">
      Setiap seragam mencerminkan kedisiplinan, identitas, dan karakter
      siswa SMA Prestasi Prima.
    </p>
  </div>
</section>

{{-- ================= SERAGAM HARIAN ================= --}}
<section class="py-28 bg-gray-50">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-14 items-center">

    <img src="{{ asset('assets/seragam/senin.jpg') }}"
         class="rounded-3xl shadow-xl"
         alt="Seragam Putih Abu">

    <div>
      <span class="text-purple-600 font-semibold">Hari Senin</span>
      <h2 class="text-3xl font-bold text-gray-800 mb-4">
        Seragam Putih Abu-Abu
      </h2>
      <ul class="space-y-2 text-gray-600">
        <li>✔ Atasan putih & bawahan abu-abu</li>
        <li>✔ ID Card</li>
        <li>✔ Dasi</li>
        <li>✔ Ikat pinggang</li>
        <li>✔ Kaos kaki putih</li>
        <li>✔ Sepatu Warrior</li>
      </ul>
    </div>

  </div>
</section>

{{-- ================= SELASA ================= --}}
<section class="py-28 bg-white">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-14 items-center">

    <div>
      <span class="text-purple-600 font-semibold">Hari Selasa</span>
      <h2 class="text-3xl font-bold text-gray-800 mb-4">
        Seragam Kotak Ungu
      </h2>
      <ul class="space-y-2 text-gray-600">
        <li>✔ Atasan kotak ungu & bawahan putih</li>
        <li>✔ ID Card</li>
        <li>✔ Ikat pinggang</li>
        <li>✔ Kaos kaki putih</li>
        <li>✔ Sepatu Warrior</li>
      </ul>
    </div>

    <img src="{{ asset('assets/seragam/selasa.jpg') }}"
         class="rounded-3xl shadow-xl"
         alt="Seragam Kotak Ungu">

  </div>
</section>

{{-- ================= PRAMUKA ================= --}}
<section class="py-28 bg-gray-50">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-14 items-center">

    <img src="{{ asset('assets/seragam/rabu.jpg') }}"
         class="rounded-3xl shadow-xl"
         alt="Seragam Pramuka">

    <div>
      <span class="text-purple-600 font-semibold">Hari Rabu</span>
      <h2 class="text-3xl font-bold text-gray-800 mb-4">
        Seragam Pramuka
      </h2>
      <ul class="space-y-2 text-gray-600">
        <li>✔ ID Card</li>
        <li>✔ Ikat pinggang pramuka</li>
        <li>✔ Dasi / Kacu pramuka</li>
        <li>✔ Kaos kaki tunas kelapa</li>
        <li>✔ Sepatu Warrior</li>
      </ul>
    </div>

  </div>
</section>

{{-- ================= BATIK ================= --}}
<section class="py-28 bg-white">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-14 items-center">

    <div>
      <span class="text-purple-600 font-semibold">Hari Kamis</span>
      <h2 class="text-3xl font-bold text-gray-800 mb-4">
        Seragam Batik
      </h2>
      <ul class="space-y-2 text-gray-600">
        <li>✔ Atasan batik & bawahan putih</li>
        <li>✔ ID Card</li>
        <li>✔ Ikat pinggang</li>
        <li>✔ Kaos kaki putih</li>
        <li>✔ Sepatu Warrior</li>
      </ul>
    </div>

    <img src="{{ asset('assets/seragam/kamis.jpg') }}"
         class="rounded-3xl shadow-xl"
         alt="Seragam Batik">

  </div>
</section>

{{-- ================= JUMAT ================= --}}
<section class="py-28 bg-gray-50">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-14 items-center">

    <img src="{{ asset('assets/seragam/jumat.jpg') }}"
         class="rounded-3xl shadow-xl"
         alt="Seragam Jumat">

    <div>
      <span class="text-purple-600 font-semibold">Hari Jumat</span>
      <h2 class="text-3xl font-bold text-gray-800 mb-4">
        Seragam Jumat (Muslim & Non-Muslim)
      </h2>
      <ul class="space-y-2 text-gray-600">
        <li>✔ Muslim: Atasan sadariah & bawahan abu</li>
        <li>✔ Non-Muslim: Atasan putih & bawahan abu</li>
        <li>✔ ID Card</li>
        <li>✔ Kaos kaki putih</li>
        <li>✔ Sepatu Warrior</li>
      </ul>
    </div>

  </div>
</section>

{{-- ================= OLAHRAGA (HIGHLIGHT) ================= --}}
<section class="relative py-32 bg-gradient-to-br from-gray-900 to-black text-white overflow-hidden">
  <div class="absolute inset-0 bg-[url('{{ asset('assets/patterns/noise.png') }}')] opacity-10"></div>

  <div class="relative max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">

    <div>
      <span class="uppercase tracking-widest text-purple-400 font-semibold">
        Seragam Olahraga
      </span>
      <h2 class="text-4xl font-extrabold mb-6">
        Aktif • Sehat • Disiplin
      </h2>
      <p class="text-gray-300 mb-6">
        Digunakan sesuai jadwal mata pelajaran olahraga untuk mendukung
        aktivitas fisik siswa secara optimal.
      </p>
      <ul class="space-y-3 text-gray-200">
        <li>✔ Seragam olahraga resmi sekolah</li>
        <li>✔ ID Card</li>
        <li>✔ Kaos kaki putih</li>
        <li>✔ Sepatu Warrior</li>
      </ul>
    </div>

    <img src="{{ asset('assets/seragam/olahraga.jpg') }}"
         class="rounded-3xl shadow-2xl"
         alt="Seragam Olahraga">

  </div>
</section>

@endsection
