@extends('prestasiprima.index')

@section('title', 'Kurikulum & Metode Pembelajaran - SMA Prestasi Prima')

@section('content')

{{-- ================= HERO ================= --}}
<section class="relative min-h-[75vh] flex items-center overflow-hidden">
    <div class="absolute inset-0">
        <img src="{{ asset('assets/prestasiprima/pembelajaran/kelas-hero.jpg') }}"
             class="w-full h-full object-cover"
             alt="Kurikulum SMA Prestasi Prima">
        <div class="absolute inset-0 bg-gradient-to-r from-purple-900/85 via-purple-800/65 to-purple-700/40"></div>
    </div>

    <div class="relative z-10 max-w-5xl mx-auto px-6 py-28 text-center" data-aos="fade-up">
        <span class="inline-block bg-white/10 text-purple-100 text-sm font-semibold px-4 py-2 rounded-full backdrop-blur">
            Akademik Unggulan
        </span>

        <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-white mt-6 mb-6">
            Kurikulum & Metode Pembelajaran
        </h1>

        <p class="text-lg md:text-xl text-purple-100 leading-relaxed">
            Integrasi <strong>Kurikulum Merdeka</strong>, <strong>STEAM</strong>,
            teknologi digital, dan penguatan karakter
            untuk mencetak lulusan unggul berdaya saing global.
        </p>
    </div>
</section>

{{-- ================= PENGANTAR ================= --}}
<section class="bg-white py-24">
    <div class="max-w-6xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">

        <div class="space-y-6">
            <h2 class="text-3xl font-extrabold text-gray-800">
                Kurikulum Merdeka Berbasis STEAM
            </h2>
            <p class="text-gray-600 text-lg leading-relaxed">
                SMA Prestasi Prima menerapkan Kurikulum Merdeka dengan pendekatan
                <strong>STEAM</strong>, penguatan
                <strong>Profil Pelajar Pancasila</strong>,
                serta dukungan <strong>AI & Coding</strong>
                dan pembinaan kewirausahaan.
            </p>
        </div>

        <div class="relative">
            <img src="{{ asset('assets/prestasiprima/pembelajaran/steam-class.jpg') }}"
                 class="rounded-3xl shadow-2xl"
                 alt="STEAM Learning">
            <span class="absolute -bottom-6 -left-6 bg-purple-600 text-white px-6 py-3 rounded-xl shadow-lg">
                STEAM Learning
            </span>
        </div>

    </div>
</section>

{{-- ================= PILAR KURIKULUM ================= --}}
@php
$pillars = [
    ['icon' => '📚', 'title' => 'Kurikulum Merdeka', 'desc' => 'Adaptif, fleksibel, dan relevan dengan kebutuhan abad 21.'],
    ['icon' => '🧪', 'title' => 'STEAM', 'desc' => 'Integrasi sains, teknologi, seni, dan matematika berbasis proyek.'],
    ['icon' => '🌱', 'title' => 'Profil Pelajar Pancasila', 'desc' => 'Membentuk karakter beriman, mandiri, kreatif, dan bernalar kritis.'],
    ['icon' => '🤖', 'title' => 'IT & AI', 'desc' => 'Literasi digital, coding, dan kecerdasan buatan.'],
];
@endphp

<section class="bg-gray-50 py-24">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 lg:grid-cols-4 gap-10">
        @foreach ($pillars as $pillar)
            <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl hover:-translate-y-2 transition">
                <div class="w-14 h-14 flex items-center justify-center bg-purple-100 text-purple-600 rounded-2xl mb-6 text-2xl">
                    {{ $pillar['icon'] }}
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">
                    {{ $pillar['title'] }}
                </h3>
                <p class="text-gray-600 leading-relaxed">
                    {{ $pillar['desc'] }}
                </p>
            </div>
        @endforeach
    </div>
</section>

{{-- ================= METODE PEMBELAJARAN ================= --}}
<section class="bg-white py-24">
    <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">

        <div>
            <h2 class="text-3xl font-extrabold text-gray-800 mb-6">
                Metode Pembelajaran Modern & Interaktif
            </h2>
            <p class="text-gray-600 mb-8 leading-relaxed">
                Pembelajaran dirancang aktif, kolaboratif, dan berbasis teknologi
                untuk mendorong kreativitas serta prestasi akademik.
            </p>
            <ul class="space-y-4 text-gray-700">
                <li>✔ Pembelajaran Berbasis IT & Digital</li>
                <li>✔ Project Based Learning</li>
                <li>✔ Deep Learning & Coding AI</li>
                <li>✔ Orientasi Prestasi Nasional & Internasional</li>
            </ul>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <img src="{{ asset('assets/prestasiprima/pembelajaran/it-learning.jpg') }}" class="rounded-2xl shadow-lg">
            <img src="{{ asset('assets/prestasiprima/pembelajaran/project-based.jpg') }}" class="rounded-2xl shadow-lg mt-8">
            <img src="{{ asset('assets/prestasiprima/pembelajaran/coding-ai.jpg') }}" class="rounded-2xl shadow-lg">
            <img src="{{ asset('assets/prestasiprima/pembelajaran/presentation.jpg') }}" class="rounded-2xl shadow-lg mt-8">
        </div>

    </div>
</section>

{{-- ================= PROGRAM & PEMINATAN ================= --}}
@php
$programs = [
    [
        'title' => 'IPA',
        'image' => 'ipa-lab.jpg',
        'desc' => 'Matematika, Fisika, Kimia, dan Biologi',
        'career' => 'Kedokteran, Teknik, Farmasi, Sains',
        'univ' => 'UI, ITB, ITS, UGM'
    ],
    [
        'title' => 'IPS',
        'image' => 'ips-class.jpg',
        'desc' => 'Ekonomi, Sosiologi, Geografi, Sejarah',
        'career' => 'Ekonomi, Hukum, Bisnis, Politik',
        'univ' => 'UI, UGM, Unpad'
    ],
    [
        'title' => 'Program Bilingual',
        'image' => 'bilingual.jpg',
        'desc' => 'Pembelajaran bilingual untuk kompetensi global',
        'career' => 'Program Internasional & Global',
        'univ' => 'Universitas Luar Negeri'
    ],
];
@endphp

<section class="bg-gray-50 py-24">
    <div class="max-w-7xl mx-auto px-6 space-y-16">
        <h2 class="text-3xl font-extrabold text-center text-gray-800">
            Program & Peminatan
        </h2>

        <div class="grid lg:grid-cols-3 gap-10">
            @foreach ($programs as $program)
                <div class="bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition">
                    <img src="{{ asset('assets/prestasiprima/pembelajaran/'.$program['image']) }}"
                         class="h-56 w-full object-cover">
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-purple-600 mb-4">
                            {{ $program['title'] }}
                        </h3>
                        <p class="text-gray-600 mb-3">{{ $program['desc'] }}</p>
                        <p class="text-gray-700"><strong>Peluang Karier:</strong> {{ $program['career'] }}</p>
                        <p class="text-gray-700"><strong>Universitas Tujuan:</strong> {{ $program['univ'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ================= CTA ================= --}}
<section class="relative py-28 text-center text-white overflow-hidden">
    <img src="{{ asset('assets/prestasiprima/pembelajaran/cta-bg.jpg') }}"
         class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-purple-900/80"></div>

    <div class="relative z-10">
        <h2 class="text-4xl font-extrabold mb-6">
            Siap Bergabung dengan SMA Prestasi Prima?
        </h2>
        <a href="{{ url('/penerimaan-siswa') }}"
           class="inline-flex items-center gap-2 bg-white text-purple-600 font-semibold px-12 py-4 rounded-full shadow-lg hover:scale-105 transition">
            Daftar Sekarang
        </a>
    </div>
</section>

@endsection
