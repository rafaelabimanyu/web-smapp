@extends('prestasiprima.index')

@section('title', 'Seragam Siswa - SMA Prestasi Prima')

@section('content')

{{-- ================= HERO ================= --}}
<section class="relative min-h-[75vh] flex items-center overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="{{ asset('assets/images/kurikulum/hero.png') }}"
             class="w-full h-full object-cover"
             alt="Seragam Siswa SMA Prestasi Prima">
        <div class="absolute inset-0 bg-gradient-to-r from-purple-900/85 via-purple-800/65 to-purple-700/40"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 max-w-5xl mx-auto px-6 py-28 text-center" data-aos="fade-up">
        <span class="inline-block bg-white/10 text-purple-100 text-sm font-semibold px-4 py-2 rounded-full backdrop-blur">
            Identitas & Karakter
        </span>

        <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-white mt-6 mb-6">
            Seragam Siswa<br class="hidden md:block">
            SMA Prestasi Prima
        </h1>

        <p class="text-lg md:text-xl text-purple-100 leading-relaxed max-w-3xl mx-auto">
            Setiap seragam dirancang sebagai simbol
            <strong>kedisiplinan</strong>, <strong>identitas sekolah</strong>,
            dan <strong>pembentukan karakter</strong> siswa
            dalam lingkungan pendidikan yang unggul dan berprestasi.
        </p>
    </div>
</section>

{{-- ================= SERAGAM SISWA ================= --}}
<section class="py-32 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Section Header --}}
        <div class="max-w-3xl mx-auto text-center mb-20" data-aos="fade-up">
            <span class="inline-block text-purple-600 font-semibold mb-3">
                Tata Busana Sekolah
            </span>
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-6">
                Seragam Resmi Siswa
            </h2>
            <p class="text-gray-600 text-lg">
                Seragam siswa SMA Prestasi Prima dirancang untuk membentuk
                <strong>kedisiplinan</strong>, <strong>kerapihan</strong>, dan
                <strong>identitas sekolah</strong> dalam setiap aktivitas pembelajaran.
            </p>
        </div>

        {{-- Uniform Grid --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-12">

            {{-- Senin --}}
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden group">
                <img src="{{ asset('assets/seragam/senin.jpg') }}"
                     class="w-full h-64 object-cover group-hover:scale-105 transition duration-500"
                     alt="Seragam Senin">

                <div class="p-8">
                    <span class="text-purple-600 font-semibold text-sm">
                        Hari Senin
                    </span>
                    <h3 class="text-xl font-bold text-gray-800 mt-2 mb-4">
                        Putih Abu-Abu
                    </h3>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li>• Atasan putih & bawahan abu</li>
                        <li>• ID Card & Dasi</li>
                        <li>• Ikat pinggang</li>
                        <li>• Kaos kaki putih</li>
                        <li>• Sepatu Warrior</li>
                    </ul>
                </div>
            </div>

            {{-- Selasa --}}
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden group">
                <img src="{{ asset('assets/seragam/selasa.jpg') }}"
                     class="w-full h-64 object-cover group-hover:scale-105 transition duration-500"
                     alt="Seragam Selasa">

                <div class="p-8">
                    <span class="text-purple-600 font-semibold text-sm">
                        Hari Selasa
                    </span>
                    <h3 class="text-xl font-bold text-gray-800 mt-2 mb-4">
                        Kotak Ungu
                    </h3>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li>• Atasan kotak ungu</li>
                        <li>• Bawahan putih</li>
                        <li>• ID Card</li>
                        <li>• Ikat pinggang</li>
                        <li>• Sepatu Warrior</li>
                    </ul>
                </div>
            </div>

            {{-- Rabu --}}
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden group">
                <img src="{{ asset('assets/seragam/rabu.jpg') }}"
                     class="w-full h-64 object-cover group-hover:scale-105 transition duration-500"
                     alt="Seragam Pramuka">

                <div class="p-8">
                    <span class="text-purple-600 font-semibold text-sm">
                        Hari Rabu
                    </span>
                    <h3 class="text-xl font-bold text-gray-800 mt-2 mb-4">
                        Pramuka
                    </h3>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li>• ID Card</li>
                        <li>• Ikat pinggang pramuka</li>
                        <li>• Dasi / Kacu</li>
                        <li>• Kaos kaki tunas kelapa</li>
                        <li>• Sepatu Warrior</li>
                    </ul>
                </div>
            </div>

            {{-- Kamis --}}
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden group">
                <img src="{{ asset('assets/seragam/kamis.jpg') }}"
                     class="w-full h-64 object-cover group-hover:scale-105 transition duration-500"
                     alt="Seragam Batik">

                <div class="p-8">
                    <span class="text-purple-600 font-semibold text-sm">
                        Hari Kamis
                    </span>
                    <h3 class="text-xl font-bold text-gray-800 mt-2 mb-4">
                        Batik Sekolah
                    </h3>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li>• Atasan batik</li>
                        <li>• Bawahan putih</li>
                        <li>• ID Card</li>
                        <li>• Ikat pinggang</li>
                        <li>• Sepatu Warrior</li>
                    </ul>
                </div>
            </div>

            {{-- Jumat --}}
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden group">
                <img src="{{ asset('assets/seragam/jumat.jpg') }}"
                     class="w-full h-64 object-cover group-hover:scale-105 transition duration-500"
                     alt="Seragam Jumat">

                <div class="p-8">
                    <span class="text-purple-600 font-semibold text-sm">
                        Hari Jumat
                    </span>
                    <h3 class="text-xl font-bold text-gray-800 mt-2 mb-4">
                        Religi & Nasional
                    </h3>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li>• Muslim: Sadariah & abu</li>
                        <li>• Non-Muslim: Putih & abu</li>
                        <li>• ID Card</li>
                        <li>• Kaos kaki putih</li>
                        <li>• Sepatu Warrior</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ================= SERAGAM OLAHRAGA ================= --}}
<section class="relative py-32 bg-gradient-to-br from-gray-900 to-black text-white">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">

        <div data-aos="fade-right">
            <span class="uppercase tracking-widest text-purple-400 font-semibold">
                Seragam Olahraga
            </span>
            <h2 class="text-4xl font-extrabold mt-4 mb-6">
                Aktif • Sehat • Disiplin
            </h2>
            <p class="text-gray-300 mb-6">
                Digunakan pada jadwal olahraga untuk mendukung kebugaran,
                sportivitas, dan semangat belajar siswa.
            </p>
            <ul class="space-y-3 text-gray-200">
                <li>✔ Seragam olahraga resmi</li>
                <li>✔ ID Card</li>
                <li>✔ Kaos kaki putih</li>
                <li>✔ Sepatu Warrior</li>
            </ul>
        </div>

        <img src="{{ asset('assets/seragam/olahraga.jpg') }}"
             class="rounded-3xl shadow-2xl"
             alt="Seragam Olahraga" data-aos="fade-left">

    </div>
</section>


@endsection