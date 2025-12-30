@extends('prestasiprima.index')

@section('title', 'Kegiatan - SMA Prestasi Prima')

@section('content')

<!-- ========== HEADER SECTION : KEGIATAN ========== -->
<section class="relative bg-gradient-to-br from-purple-600 via-purple-500 to-purple-400
               text-white pt-36 pb-28 overflow-hidden">

    <!-- Background -->
    <div class="absolute inset-0">
        <img src="{{ asset('assets/prestasiprima/gedungsiswa.jpg') }}"
             alt="Kegiatan SMA Prestasi Prima"
             class="w-full h-full object-cover opacity-25"
             loading="lazy">
        <div class="absolute inset-0 bg-purple-700/40 mix-blend-multiply"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 text-center max-w-3xl mx-auto px-6" data-aos="fade-down">

        <img src="{{ asset('assets/logo_sma.png') }}"
             alt="Logo SMA Prestasi Prima"
             class="w-20 h-20 mx-auto mb-5">

        <h1 class="text-4xl md:text-5xl font-extrabold mb-4 tracking-tight">
            Kegiatan Sekolah
        </h1>

        <p class="text-white/90 text-lg leading-relaxed">
            Dokumentasi berbagai kegiatan akademik dan non-akademik
            <strong>SMA Prestasi Prima</strong> yang mencerminkan
            karakter, kreativitas, dan semangat berprestasi siswa.
        </p>

    </div>
</section>

<!-- ========== SECTION GRID KEGIATAN ========== -->
<section class="bg-gradient-to-b from-gray-50 to-white relative z-10 py-24 overflow-hidden">

    <!-- Dekorasi Latar -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute w-72 h-72 bg-purple-200/30 blur-[120px] -top-24 -left-24 rounded-full"></div>
        <div class="absolute w-72 h-72 bg-yellow-300/20 blur-[100px] bottom-0 right-0 rounded-full"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 md:px-8 relative z-10">

        <!-- GRID CARD -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            @forelse ($kegiatan as $item)
            <div
                class="group relative bg-white border border-gray-100 rounded-2xl p-6
                       shadow-sm transition-all duration-500 ease-out
                       hover:shadow-xl hover:-translate-y-1 hover:border-purple-300 overflow-hidden"
                data-aos="fade-up"
            >

                <!-- Hover Accent Line -->
                <div class="absolute top-[1px] left-[1px] right-[1px] h-[3px]
                            bg-gradient-to-r from-purple-500 to-yellow-400
                            rounded-t-[14px] opacity-0 scale-x-0 origin-center
                            transition-all duration-500 ease-out
                            group-hover:opacity-100 group-hover:scale-x-100">
                </div>

                <!-- Tanggal & Waktu -->
                <div class="mb-3 text-sm flex justify-between items-center">
                    <span class="font-semibold text-purple-500">
                        {{ \Carbon\Carbon::createFromFormat('Y-m-d', $item->tanggal)->translatedFormat('l, d F Y') }}
                    </span>
                    <span class="text-gray-400">{{ $item->waktu }}</span>
                </div>

                <!-- Judul -->
                <h3 class="text-lg font-bold text-gray-800 mb-3
                           transition-all duration-300
                           group-hover:text-purple-600 group-hover:tracking-wide">
                    {{ $item->judul }}
                </h3>

                <!-- Deskripsi -->
                <p class="text-gray-600 leading-relaxed mb-5 line-clamp-4">
                    {{ $item->deskripsi }}
                </p>

                <!-- Footer -->
                <div class="flex justify-between items-center text-sm
                            text-gray-500 border-t border-gray-100 pt-3">

                    <span class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-4 h-4 text-purple-500"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 2l7 7-7 7-7-7 7-7z"/>
                        </svg>
                        {{ $item->tempat }}
                    </span>

                    <a href="#"
                       class="text-purple-500 font-semibold
                              hover:underline hover:text-purple-600 transition-colors">
                        Lihat Detail →
                    </a>

                </div>
            </div>
            @empty
            <p class="col-span-full text-center text-gray-500">
                Belum ada kegiatan yang tersedia.
            </p>
            @endforelse

        </div>

        <!-- CTA -->
        <div class="mt-16 text-center" data-aos="zoom-in">
            <a href="/dokumentasi/berita"
               class="inline-block px-8 py-3
                      bg-purple-500 text-white font-semibold
                      rounded-full transition-all duration-300
                      hover:bg-purple-600 hover:-translate-y-1 shadow-md">
                Lihat Semua Kegiatan
            </a>
        </div>

    </div>
</section>

<!-- Line Clamp -->
<style>
.line-clamp-4 {
    display: -webkit-box;
    -webkit-line-clamp: 4;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>

@endsection
