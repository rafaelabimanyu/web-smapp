@extends('prestasiprima.index')

@section('title', 'Profil Sekolah - SMA Prestasi Prima')

@section('content')

<!-- ====================== HERO SECTION ====================== -->
<section class="relative bg-gradient-to-br from-purple-500 via-purple-400 to-purple-300 text-white pt-36 pb-28 overflow-hidden">
    <div class="absolute inset-0">
        <img src="{{ asset('assets/prestasiprima/gedungsiswa.avif') }}" alt="SMA Prestasi Prima"
             class="w-full h-full object-cover opacity-30" loading="lazy">
        <div class="absolute inset-0 bg-purple-500/30 mix-blend-multiply"></div>
    </div>

    <div class="relative z-10 text-center max-w-3xl mx-auto px-4" data-aos="fade-down">
        <img src="{{ asset('assets/logo_sma.png') }}" alt="Logo SMA Prestasi Prima"
             class="w-24 h-24 mx-auto mb-5">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4">
            SMA <span class="text-white">Prestasi Prima</span>
        </h1>
        <p class="text-white/90 text-lg italic">
            "If better is possible, good is not enough"
        </p>
    </div>
</section>

<!-- ====================== SEJARAH SEKOLAH ====================== -->
<section class="relative py-24 bg-gradient-to-b from-purple-50 via-white to-purple-100 text-gray-800 overflow-hidden">

    <div class="absolute top-0 left-0 w-64 h-64 bg-purple-200/40 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-72 h-72 bg-purple-300/30 rounded-full blur-3xl"></div>

    <div class="max-w-7xl mx-auto px-6 relative">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-extrabold mb-4">
                <span class="text-purple-600">Sejarah</span> Sekolah
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Perjalanan SMA Prestasi Prima dalam membentuk generasi akademis unggul dan berkarakter.
            </p>
        </div>

        @php
        $timeline = [
            ['year' => '2011', 'title' => 'Pendirian Sekolah', 'desc' => 'SMA Prestasi Prima berdiri sebagai lembaga pendidikan menengah yang menitikberatkan akademik dan karakter.'],
            ['year' => '2014', 'title' => 'Penguatan Akademik', 'desc' => 'Fokus pada pembelajaran sains, sosial, dan pengembangan karakter siswa.'],
            ['year' => '2017', 'title' => 'Pengembangan Fasilitas', 'desc' => 'Laboratorium, perpustakaan, dan ruang belajar modern dikembangkan.'],
            ['year' => '2020', 'title' => 'Pembelajaran Digital', 'desc' => 'Integrasi teknologi digital dalam kegiatan belajar mengajar.'],
            ['year' => '2023', 'title' => 'Akreditasi A', 'desc' => 'Pengakuan mutu pendidikan dengan capaian akreditasi A.'],
            ['year' => '2025', 'title' => 'Sekolah Unggul', 'desc' => 'Penerapan Kurikulum Merdeka dan penguatan profil pelajar Pancasila.'],
        ];
        @endphp

        <div class="relative border-l-4 border-purple-500 ml-6 space-y-16">
            @foreach ($timeline as $i => $item)
            <div class="relative pl-10" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                <div class="absolute -left-5 top-2 w-10 h-10 bg-purple-500 rounded-full text-white flex items-center justify-center font-bold shadow-md">
                    {{ substr($item['year'], -2) }}
                </div>

                <div class="bg-white rounded-2xl p-6 shadow-md border border-purple-100 hover:shadow-purple-400/40 transition">
                    <h3 class="text-xl font-semibold text-purple-600 mb-2">
                        {{ $item['year'] }} — {{ $item['title'] }}
                    </h3>
                    <p class="text-gray-700">{{ $item['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ====================== VISI & MISI ====================== -->
<section class="py-28 bg-gradient-to-tr from-purple-100 via-white to-purple-50">
    <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-14 px-6 items-center">

        <div data-aos="fade-right">
            <img src="{{ asset('assets/prestasiprima/gedungtinggi.webp') }}"
                 class="rounded-3xl shadow-2xl hover:scale-105 transition duration-700">
        </div>

        <div data-aos="fade-left">
            <h2 class="text-4xl font-extrabold mb-8">
                Visi & <span class="text-purple-600">Misi</span> Sekolah
            </h2>

            <div class="mb-8">
                <h3 class="text-xl font-semibold text-purple-600 mb-3">Visi</h3>
                <p class="bg-purple-50 p-5 rounded-2xl shadow-md border border-purple-100">
                    Mewujudkan lulusan SMA yang unggul secara akademik, berkarakter, berwawasan global,
                    dan berlandaskan nilai Pancasila.
                </p>
            </div>

            <div>
                <h3 class="text-xl font-semibold text-purple-600 mb-4">Misi</h3>
                <ul class="space-y-4">
                    @foreach ([
                        'Menyelenggarakan pembelajaran akademik berkualitas dan berorientasi prestasi.',
                        'Membentuk karakter siswa yang berintegritas dan berdaya saing global.',
                        'Mengembangkan potensi peserta didik melalui kegiatan intrakurikuler dan ekstrakurikuler.',
                        'Menanamkan nilai keimanan, etika, dan kepemimpinan.'
                    ] as $misi)
                    <li class="flex gap-3 bg-white p-4 rounded-xl border border-purple-100 shadow-md">
                        <span class="w-3 h-3 mt-2 bg-purple-500 rounded-full"></span>
                        <p>{{ $misi }}</p>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
</section>

<!-- ====================== KEPALA SEKOLAH ====================== -->
<section class="relative py-24 text-white overflow-hidden">
    <div class="absolute inset-0">
        <img src="{{ asset('assets/prestasiprima/gedungprestasiprima.avif') }}"
             class="w-full h-full object-cover opacity-30">
        <div class="absolute inset-0 bg-gradient-to-br from-purple-600 via-purple-500 to-purple-400 mix-blend-multiply"></div>
    </div>

    <div class="relative max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-16 z-10 items-center">
        <img src="{{ asset('assets/prestasiprima/kepalasekolahsma.png') }}"
             class="rounded-3xl shadow-2xl mx-auto w-80">

        <div>
            <h2 class="text-4xl font-extrabold mb-5">
                Sambutan <span class="text-purple-100">Kepala Sekolah</span>
            </h2>
            <p class="text-purple-50 mb-6 text-justify">
                SMA Prestasi Prima berkomitmen membangun generasi unggul secara akademik,
                berkarakter kuat, dan siap menghadapi tantangan masa depan.
            </p>

            <p class="font-semibold text-lg">
                — <span class="text-purple-200">Hendry Kurniawan, S.Kom., M.I.Kom.</span><br>
                Kepala Sekolah SMA Prestasi Prima
            </p>
        </div>
    </div>
</section>

<!-- ====================== VIDEO ====================== -->
<section class="py-24 bg-purple-50 text-center">
    <h2 class="text-4xl font-extrabold mb-6">
        Video <span class="text-purple-600">Profil Sekolah</span>
    </h2>
    <div class="max-w-4xl mx-auto aspect-video rounded-2xl overflow-hidden shadow-xl">
        <iframe class="w-full h-full"
                src="https://www.youtube.com/embed/EYzn0caf0_k"
                allowfullscreen></iframe>
    </div>
</section>

<!-- ====================== TESTIMONI ====================== -->
<section class="py-24 bg-white text-center">
    <h2 class="text-4xl font-extrabold mb-6">
        Suara dari <span class="text-purple-500">Alumni & Orang Tua</span>
    </h2>
    <a href="{{ url('/testimoni') }}"
       class="px-8 py-3 bg-purple-500 hover:bg-purple-600 text-white rounded-xl shadow-md transition">
        Lihat Semua Testimoni →
    </a>
</section>

<!-- ====================== LOKASI ====================== -->
<section class="py-28 bg-gradient-to-br from-purple-100 via-white to-purple-50 text-center">
    <h2 class="text-5xl font-extrabold mb-10">
        Lokasi <span class="text-purple-600">Sekolah</span>
    </h2>

    <div class="max-w-5xl mx-auto rounded-3xl overflow-hidden shadow-2xl border border-purple-200">
        <iframe class="w-full h-[450px]"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.4748268020353!2d106.8972187!3d-6.332476499999999"
            loading="lazy"></iframe>
    </div>
</section>

@endsection
