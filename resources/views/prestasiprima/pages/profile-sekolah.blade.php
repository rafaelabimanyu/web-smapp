@extends('prestasiprima.index')

@section('title', 'Profil Sekolah - SMA Prestasi Prima')

@section('content')

<!-- ====================== HERO SECTION ====================== -->
<section class="relative bg-gradient-to-br from-purple-500 via-purple-400 to-purple-300 text-white pt-36 pb-28 overflow-hidden">
    <div class="absolute inset-0">
        <img src="{{ asset('assets/prestasiprima/fotbarguru2.jpg') }}" alt="SMA Prestasi Prima"
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
             class="w-full h-full object-cover opacity-20"> <!-- opacity dikurangi untuk membuat warna lebih soft -->
                <div class="absolute inset-0 bg-gradient-to-br from-purple-600 via-purple-500 to-purple-400 mix-blend-multiply"></div>    </div>
    <div class="relative max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-16 z-10 items-center">
        <img src="{{ asset('assets/prestasiprima/kepalasekolahsma.png') }}"
             class="mx-auto w-80 rounded-none shadow-none"> <!-- hilangkan border/shadow -->

        <div>
            <h2 class="text-4xl font-extrabold mb-5">
                Sambutan <span class="text-purple-100">Kepala Sekolah</span>
            </h2>
            <p class="text-purple-50 mb-6 text-justify">
                SMA Prestasi Prima berkomitmen membangun generasi unggul secara akademik,
                berkarakter kuat, dan siap menghadapi tantangan masa depan.
            </p>

            <p class="font-semibold text-lg">
                — <span class="text-purple-200">David H. Silaen, ST., MP.d</span><br>
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

<section id="lokasi-akses" class="scroll-mt-20 relative py-24 overflow-hidden" data-astro-cid-ustxrop7="">    <!-- Animated Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900" data-astro-cid-ustxrop7=""></div>
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=%2260%22 height=%2260%22 viewBox=%220 0 60 60%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cg fill=%22none%22 fill-rule=%22evenodd%22%3E%3Cg fill=%22%239C92AC%22 fill-opacity=%220.05%22%3E%3Cpath d=%22M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z%22/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-40" data-astro-cid-ustxrop7=""></div>    <!-- Floating Orbs -->
    <div class="absolute top-20 left-10 w-72 h-72 bg-purple-500/30 rounded-full blur-3xl animate-pulse" data-astro-cid-ustxrop7=""></div>
    <div class="absolute bottom-20 right-10 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;" data-astro-cid-ustxrop7=""></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-indigo-500/10 rounded-full blur-3xl" data-astro-cid-ustxrop7=""></div>
    <div class="container mx-auto px-4 relative z-10" data-astro-cid-ustxrop7="">        <!-- Section Header -->
        <div class="text-center mb-16" data-aos="fade-up" data-astro-cid-ustxrop7="">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6" data-astro-cid-ustxrop7="">
Lokasi &amp; Akses
            </h2>
            <p class="text-lg md:text-xl text-white/70 max-w-2xl mx-auto leading-relaxed" data-astro-cid-ustxrop7="">
Temukan lokasi sekolah, informasi kontak, dan petunjuk transportasi untuk memudahkan kunjungan Anda
            </p>
        </div>
        <div class="grid lg:grid-cols-5 gap-8" data-astro-cid-ustxrop7="">            <!-- Google Maps Section - Takes 3 columns -->
            <div class="lg:col-span-3 space-y-6" data-aos="fade-right" data-aos-delay="100" data-astro-cid-ustxrop7="">
                <div class="group relative bg-white/10 backdrop-blur-xl rounded-3xl border border-white/20 overflow-hidden hover:border-white/40 transition-all duration-500 hover:shadow-2xl hover:shadow-purple-500/20" data-astro-cid-ustxrop7="">                    <!-- Header with gradient -->
                    <div class="relative p-6 bg-gradient-to-r from-blue-600/90 to-purple-600/90 backdrop-blur-sm" data-astro-cid-ustxrop7="">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-purple-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500" data-astro-cid-ustxrop7=""></div>
                        <div class="relative flex items-center gap-4" data-astro-cid-ustxrop7="">
                            <div class="w-14 h-14 rounded-2xl bg-white/20 backdrop-blur-sm flex items-center justify-center group-hover:scale-110 transition-transform duration-300" data-astro-cid-ustxrop7="">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" data-astro-cid-ustxrop7="">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" data-astro-cid-ustxrop7=""></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" data-astro-cid-ustxrop7=""></path>
                                </svg>
                            </div>
                            <div data-astro-cid-ustxrop7="">
                                <h3 class="text-2xl font-bold text-white" data-astro-cid-ustxrop7="">Lokasi Sekolah</h3>
                                <p class="text-white/70 text-sm" data-astro-cid-ustxrop7="">SMA Prestasi Prima</p>
                            </div>
                        </div>
                    </div>                    <!-- Google Maps Embed with overlay effect -->
                    <div class="relative group/map" data-astro-cid-ustxrop7="">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/50 to-transparent z-10 pointer-events-none opacity-0 group-hover/map:opacity-100 transition-opacity duration-300" data-astro-cid-ustxrop7=""></div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.4748268020353!2d106.8972187!3d-6.332476499999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed2681bc7c67%3A0x777152b1d3f74a62!2sSMA%20Prestasi%20Prima!5e0!3m2!1sid!2sid!4v1756647265168!5m2!1sid!2sid" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full grayscale hover:grayscale-0 transition-all duration-500" data-astro-cid-ustxrop7="">
                        </iframe>
                    </div>                    <!-- Address Card -->
                    <div class="p-6" data-astro-cid-ustxrop7="">
                        <div class="flex items-start gap-4 p-4 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition-colors duration-300" data-astro-cid-ustxrop7="">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-blue-500 to-purple-500 flex items-center justify-center flex-shrink-0" data-astro-cid-ustxrop7="">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" data-astro-cid-ustxrop7="">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" data-astro-cid-ustxrop7=""></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" data-astro-cid-ustxrop7=""></path>
                                </svg>
                            </div>
                            <div data-astro-cid-ustxrop7="">
                                <p class="font-bold text-white text-lg mb-1" data-astro-cid-ustxrop7="">SMA Prestasi Prima</p>
                                <p class="text-white/60 leading-relaxed" data-astro-cid-ustxrop7="">Jl. Hankam Raya No. 54, Kelurahan Cipayung, Kecamatan Cipayung, Jakarta Timur 13840</p>
                            </div>
                        </div>                        <!-- Quick Actions -->
                        <div class="grid grid-cols-2 gap-3 mt-4" data-astro-cid-ustxrop7="">
                            <a href="https://maps.google.com/?q=SMK+Prestasi+Prima+Jakarta" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center gap-2 px-4 py-3 rounded-xl bg-gradient-to-r from-blue-500 to-blue-600 text-white font-semibold hover:from-blue-600 hover:to-blue-700 transition-all duration-300 hover:scale-[1.02] hover:shadow-lg hover:shadow-blue-500/25" data-astro-cid-ustxrop7="">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" data-astro-cid-ustxrop7="">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" data-astro-cid-ustxrop7=""></path>
                                </svg>
Buka di Maps
                            </a>
                            <a href="https://maps.google.com/maps/dir//SMK+Prestasi+Prima+Jakarta" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center gap-2 px-4 py-3 rounded-xl bg-white/10 border border-white/20 text-white font-semibold hover:bg-white/20 transition-all duration-300 hover:scale-[1.02]" data-astro-cid-ustxrop7="">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" data-astro-cid-ustxrop7="">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" data-astro-cid-ustxrop7=""></path>
                                </svg>
Petunjuk Arah
                            </a>
                        </div>
                    </div>
                </div>
            </div>            <!-- Contact & Transport Section - Takes 2 columns -->
            <div class="lg:col-span-2 space-y-6" data-aos="fade-left" data-aos-delay="200" data-astro-cid-ustxrop7="">                <!-- Contact Information -->
                <div class="bg-white/10 backdrop-blur-xl rounded-3xl border border-white/20 p-6 hover:border-white/40 transition-all duration-500 hover:shadow-2xl hover:shadow-purple-500/20" data-astro-cid-ustxrop7="">
                    <div class="flex items-center gap-4 mb-6" data-astro-cid-ustxrop7="">
                        <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-green-500 to-emerald-500 flex items-center justify-center" data-astro-cid-ustxrop7="">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" data-astro-cid-ustxrop7="">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" data-astro-cid-ustxrop7=""></path>
                            </svg>
                        </div>
                        <div data-astro-cid-ustxrop7="">
                            <h3 class="text-xl font-bold text-white" data-astro-cid-ustxrop7="">Kontak Sekolah</h3>
                            <p class="text-white/60 text-sm" data-astro-cid-ustxrop7="">Hubungi kami kapan saja</p>
                        </div>
                    </div>
                    <div class="space-y-3" data-astro-cid-ustxrop7="">                        <!-- WhatsApp Contacts -->
                        <a href="https://wa.me/628123456789" target="_blank" rel="noopener noreferrer" class="group/contact flex items-center gap-4 p-4 rounded-2xl bg-gradient-to-r from-green-500/10 to-emerald-500/10 border border-green-500/20 hover:from-green-500/20 hover:to-emerald-500/20 hover:border-green-500/40 transition-all duration-300" data-astro-cid-ustxrop7="">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-green-500 to-emerald-500 flex items-center justify-center group-hover/contact:scale-110 transition-transform duration-300 shadow-lg shadow-green-500/25" data-astro-cid-ustxrop7="">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24" data-astro-cid-ustxrop7="">
                                    <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.130-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" data-astro-cid-ustxrop7=""></path>
                                </svg>
                            </div>
                            <div class="flex-1 min-w-0" data-astro-cid-ustxrop7="">
                                <p class="font-semibold text-white truncate" data-astro-cid-ustxrop7="">WhatsApp Admisi</p>
                                <p class="text-sm text-white/60 truncate" data-astro-cid-ustxrop7="">628123456789</p>
                            </div>
                            <div class="flex-shrink-0" data-astro-cid-ustxrop7="">
                                <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center group-hover/contact:bg-green-500 transition-colors duration-300" data-astro-cid-ustxrop7="">
                                    <svg class="w-5 h-5 text-white/70 group-hover/contact:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" data-astro-cid-ustxrop7="">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" data-astro-cid-ustxrop7=""></path>
                                    </svg>
                                </div>
                            </div>
                        </a>                        <!-- Phone Contacts -->
                        <a href="tel:021-8123456" class="group/contact flex items-center gap-4 p-4 rounded-2xl bg-gradient-to-r from-blue-500/10 to-indigo-500/10 border border-blue-500/20 hover:from-blue-500/20 hover:to-indigo-500/20 hover:border-blue-500/40 transition-all duration-300" data-astro-cid-ustxrop7="">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-blue-500 to-indigo-500 flex items-center justify-center group-hover/contact:scale-110 transition-transform duration-300 shadow-lg shadow-blue-500/25" data-astro-cid-ustxrop7="">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" data-astro-cid-ustxrop7="">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" data-astro-cid-ustxrop7=""></path>
                                </svg>
                            </div>
                            <div class="flex-1 min-w-0" data-astro-cid-ustxrop7="">
                                <p class="font-semibold text-white truncate" data-astro-cid-ustxrop7="">Telepon Sekolah</p>
                                <p class="text-sm text-white/60 truncate" data-astro-cid-ustxrop7="">021-8123456</p>
                            </div>
                            <div class="flex-shrink-0" data-astro-cid-ustxrop7="">
                                <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center group-hover/contact:bg-blue-500 transition-colors duration-300" data-astro-cid-ustxrop7="">
                                    <svg class="w-5 h-5 text-white/70 group-hover/contact:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" data-astro-cid-ustxrop7="">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" data-astro-cid-ustxrop7=""></path>
                                    </svg>
                                </div>
                            </div>
                        </a>                        <!-- Email Contacts -->
                        <a href="mailto:info@prestasiprima.sch.id" class="group/contact flex items-center gap-4 p-4 rounded-2xl bg-gradient-to-r from-purple-500/10 to-pink-500/10 border border-purple-500/20 hover:from-purple-500/20 hover:to-pink-500/20 hover:border-purple-500/40 transition-all duration-300" data-astro-cid-ustxrop7="">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-purple-500 to-pink-500 flex items-center justify-center group-hover/contact:scale-110 transition-transform duration-300 shadow-lg shadow-purple-500/25" data-astro-cid-ustxrop7="">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" data-astro-cid-ustxrop7="">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" data-astro-cid-ustxrop7=""></path>
                                </svg>
                            </div>
                            <div class="flex-1 min-w-0" data-astro-cid-ustxrop7="">
                                <p class="font-semibold text-white truncate" data-astro-cid-ustxrop7="">Email Resmi</p>
                                <p class="text-sm text-white/60 truncate" data-astro-cid-ustxrop7="">info@prestasiprima.sch.id</p>
                            </div>
                            <div class="flex-shrink-0" data-astro-cid-ustxrop7="">
                                <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center group-hover/contact:bg-purple-500 transition-colors duration-300" data-astro-cid-ustxrop7="">
                                    <svg class="w-5 h-5 text-white/70 group-hover/contact:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" data-astro-cid-ustxrop7="">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" data-astro-cid-ustxrop7=""></path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>                <!-- Transportation Guide -->
                <div class="bg-white/10 backdrop-blur-xl rounded-3xl border border-white/20 p-6 hover:border-white/40 transition-all duration-500 hover:shadow-2xl hover:shadow-purple-500/20" data-astro-cid-ustxrop7="">
                    <div class="flex items-center gap-4 mb-6" data-astro-cid-ustxrop7="">
                        <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-orange-500 to-amber-500 flex items-center justify-center" data-astro-cid-ustxrop7="">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" data-astro-cid-ustxrop7="">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" data-astro-cid-ustxrop7=""></path>
                            </svg>
                        </div>
                        <div data-astro-cid-ustxrop7="">
                            <h3 class="text-xl font-bold text-white" data-astro-cid-ustxrop7="">Transportasi Umum</h3>
                            <p class="text-white/60 text-sm" data-astro-cid-ustxrop7="">Petunjuk rute menuju sekolah</p>
                        </div>
                    </div>
                    <div class="space-y-3" data-astro-cid-ustxrop7="">
                        <div class="group/transport rounded-2xl border border-white/10 overflow-hidden hover:border-white/30 transition-all duration-300" data-astro-cid-ustxrop7="">
                            <button class="transport-toggle w-full p-4 text-left bg-white/5 hover:bg-white/10 transition-colors focus:outline-none focus:bg-white/10" data-target="transport-0" data-astro-cid-ustxrop7="">
                                <div class="flex items-center justify-between gap-4" data-astro-cid-ustxrop7="">
                                    <div class="flex items-center gap-3" data-astro-cid-ustxrop7="">
                                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-orange-500 to-amber-500 flex items-center justify-center text-white font-bold text-sm shadow-lg shadow-orange-500/25 group-hover/transport:scale-110 transition-transform duration-300" data-astro-cid-ustxrop7=""> 1 </div>
                                        <span class="font-semibold text-white" data-astro-cid-ustxrop7="">Dari TMII naik T-15A</span>
                                    </div>
                                    <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center flex-shrink-0" data-astro-cid-ustxrop7="">
                                        <svg class="w-4 h-4 text-white/70 transform transition-transform duration-300 transport-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24" data-astro-cid-ustxrop7="" style="transform: rotate(0deg);">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" data-astro-cid-ustxrop7=""></path>
                                        </svg>
                                    </div>
                                </div>
                            </button>
                            <div class="transport-content px-4 pb-4 bg-white/5 hidden" data-astro-cid-ustxrop7="">
                                <div class="pt-3 pl-13 border-t border-white/10" data-astro-cid-ustxrop7="">
                                    <p class="text-white/70 leading-relaxed text-sm pl-[52px]" data-astro-cid-ustxrop7="">Naik bus T-15A dari TMII, turun di Pertigaan Hankam Raya, kemudian jalan kaki sekitar 100 meter ke arah sekolah.</p>
                                </div>
                            </div>
                        </div>
                        <div class="group/transport rounded-2xl border border-white/10 overflow-hidden hover:border-white/30 transition-all duration-300" data-astro-cid-ustxrop7="">
                            <button class="transport-toggle w-full p-4 text-left bg-white/5 hover:bg-white/10 transition-colors focus:outline-none focus:bg-white/10" data-target="transport-1" data-astro-cid-ustxrop7="">
                                <div class="flex items-center justify-between gap-4" data-astro-cid-ustxrop7="">
                                    <div class="flex items-center gap-3" data-astro-cid-ustxrop7="">
                                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-orange-500 to-amber-500 flex items-center justify-center text-white font-bold text-sm shadow-lg shadow-orange-500/25 group-hover/transport:scale-110 transition-transform duration-300" data-astro-cid-ustxrop7=""> 2 </div>
                                        <span class="font-semibold text-white" data-astro-cid-ustxrop7="">Dari TMII naik KWK 02</span>
                                    </div>
                                    <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center flex-shrink-0" data-astro-cid-ustxrop7="">
                                        <svg class="w-4 h-4 text-white/70 transform transition-transform duration-300 transport-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24" data-astro-cid-ustxrop7="" style="transform: rotate(0deg);">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" data-astro-cid-ustxrop7=""></path>
                                        </svg>
                                    </div>
                                </div>
                            </button>
                            <div class="transport-content px-4 pb-4 bg-white/5 hidden" data-astro-cid-ustxrop7="">
                                <div class="pt-3 pl-13 border-t border-white/10" data-astro-cid-ustxrop7="">
                                    <p class="text-white/70 leading-relaxed text-sm pl-[52px]" data-astro-cid-ustxrop7="">Naik angkot KWK 02 dari TMII, turun di Kantor Kelurahan Cipayung (lama), kemudian jalan kaki sekitar 150 meter ke arah sekolah.</p>
                                </div>
                            </div>
                        </div>
                        <div class="group/transport rounded-2xl border border-white/10 overflow-hidden hover:border-white/30 transition-all duration-300" data-astro-cid-ustxrop7="">
                            <button class="transport-toggle w-full p-4 text-left bg-white/5 hover:bg-white/10 transition-colors focus:outline-none focus:bg-white/10" data-target="transport-2" data-astro-cid-ustxrop7="">
                                <div class="flex items-center justify-between gap-4" data-astro-cid-ustxrop7="">
                                    <div class="flex items-center gap-3" data-astro-cid-ustxrop7="">
                                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-orange-500 to-amber-500 flex items-center justify-center text-white font-bold text-sm shadow-lg shadow-orange-500/25 group-hover/transport:scale-110 transition-transform duration-300" data-astro-cid-ustxrop7=""> 3 </div>
                                        <span class="font-semibold text-white" data-astro-cid-ustxrop7="">Dari Lampu Merah Keong naik KWK-14</span>
                                    </div>
                                    <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center flex-shrink-0" data-astro-cid-ustxrop7="">
                                        <svg class="w-4 h-4 text-white/70 transform transition-transform duration-300 transport-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24" data-astro-cid-ustxrop7="" style="transform: rotate(0deg);">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" data-astro-cid-ustxrop7=""></path>
                                        </svg>
                                    </div>
                                </div>
                            </button>
                            <div class="transport-content px-4 pb-4 bg-white/5 hidden" data-astro-cid-ustxrop7="">
                                <div class="pt-3 pl-13 border-t border-white/10" data-astro-cid-ustxrop7="">
                                    <p class="text-white/70 leading-relaxed text-sm pl-[52px]" data-astro-cid-ustxrop7="">Naik angkot KWK-14 dari Lampu Merah Keong ke arah Setu, turun tepat di depan Gerbang SMA Prestasi Prima.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        <!-- Bottom CTA -->
        <div class="mt-16 text-center" data-aos="fade-up" data-aos-delay="300" data-astro-cid-ustxrop7="">
            <div class="inline-flex flex-col sm:flex-row items-center gap-4 p-6 rounded-3xl bg-white/5 backdrop-blur-xl border border-white/10" data-astro-cid-ustxrop7="">
                <div class="flex items-center gap-3" data-astro-cid-ustxrop7="">
                    <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-purple-500 to-pink-500 flex items-center justify-center" data-astro-cid-ustxrop7="">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" data-astro-cid-ustxrop7="">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" data-astro-cid-ustxrop7=""></path>
                        </svg>
                    </div>
                    <div class="text-left" data-astro-cid-ustxrop7="">
                        <p class="text-white font-semibold" data-astro-cid-ustxrop7="">Ingin berkunjung langsung?</p>
                        <p class="text-white/60 text-sm" data-astro-cid-ustxrop7="">Jadwalkan kunjungan Anda sekarang</p>
                    </div>
                </div>
                <a href="/kontak" class="px-6 py-3 rounded-xl bg-gradient-to-r from-purple-500 to-pink-500 text-white font-semibold hover:from-purple-600 hover:to-pink-600 transition-all duration-300 hover:scale-105 hover:shadow-lg hover:shadow-purple-500/25" data-astro-cid-ustxrop7="">
Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    // Ambil semua tombol transportasi
    const toggles = document.querySelectorAll('.transport-toggle');

    toggles.forEach(toggle => {
      toggle.addEventListener('click', () => {
        const content = toggle.nextElementSibling; // transport-content
        const arrow = toggle.querySelector('.transport-arrow');

        // Toggle class hidden
        content.classList.toggle('hidden');

        // Rotate arrow
        if (content.classList.contains('hidden')) {
          arrow.style.transform = 'rotate(0deg)';
        } else {
          arrow.style.transform = 'rotate(180deg)';
        }
      });
    });
  });
</script>


@endsection
