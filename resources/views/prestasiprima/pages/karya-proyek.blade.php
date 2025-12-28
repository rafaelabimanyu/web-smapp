@extends('prestasiprima.index')

@section('title', 'Karya & Proyek Siswa - SMA Prestasi Prima')

@section('content')
<!-- ====================== HERO SECTION ====================== -->
<section class="relative bg-gradient-to-br from-purple-500 via-purple-400 to-purple-300 text-white pt-36 pb-28 overflow-hidden">
    <div class="absolute inset-0">
        <img src="{{ asset('assets/prestasiprima/gedungsiswa.jpg') }}" alt="SMA Prestasi Prima"
             class="w-full h-full object-cover opacity-30" loading="lazy">
        <div class="absolute inset-0 bg-purple-500/30 mix-blend-multiply"></div>
    </div>

    <div class="relative z-10 text-center max-w-3xl mx-auto px-4" data-aos="fade-down">
        <img src="{{ asset('assets/logo_sma.png') }}" alt="Logo SMA Prestasi Prima"
             class="w-24 h-24 mx-auto mb-5">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4">
            Karya & Proyek Siswa
        </h1>
        <p class="text-white/90 text-lg italic">
            Temukan ide, inovasi, dan hasil karya siswa
            <strong>SMA Prestasi Prima</strong>
            yang telah terwujud dalam karya nyata dan membanggakan.
        </p>
    </div>
</section>

<!-- ====================== SECTION: KARYA UNGGULAN ====================== -->
<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-4">
                Karya Unggulan Siswa
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Karya siswa yang telah diterbitkan secara resmi dan tersedia
                di marketplace nasional sebagai bentuk prestasi dan kreativitas nyata.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <!-- Cover -->
            <div class="relative group" data-aos="zoom-in">
                <div class="absolute -inset-1 bg-gradient-to-r from-purple-500 to-pink-500 rounded-2xl blur opacity-25"></div>
                <div class="relative bg-white rounded-2xl overflow-hidden shadow-xl">
                    <img src="{{ asset('assets/images/karya-proyek/buku.jpg') }}"
                         alt="Antologi Cerpen Jejak Tanpa Akhir 2"
                         class="w-full object-cover">
                </div>
            </div>

            <!-- Detail -->
            <div data-aos="fade-left">
                <span class="inline-block mb-4 px-4 py-1 rounded-full text-sm font-semibold bg-purple-100 text-purple-700">
                    📚 Buku Resmi Siswa
                </span>

                <h3 class="text-3xl font-extrabold text-gray-800 mb-4">
                    Antologi Cerpen: Jejak Tanpa Akhir 2
                </h3>

                <p class="text-gray-600 mb-6 leading-relaxed">
                    Buku kumpulan cerpen karya siswa-siswi
                    <strong>SMA Prestasi Prima</strong> yang menyajikan kisah
                    penuh makna tentang harapan, perjuangan, cinta, dan kenangan.
                </p>

                <div class="grid grid-cols-2 gap-4 mb-6 text-sm">
                    @php
                        $info = [
                            ['Jenis Karya', 'Antologi Cerpen'],
                            ['QRCBN', '62-39-9073-819'],
                            ['Generasi', 'Pensil Gen 1'],
                            ['Harga', 'Rp 107.000']
                        ];
                    @endphp

                    @foreach($info as [$label, $value])
                        <div class="bg-white p-4 rounded-xl shadow">
                            <p class="text-gray-500">{{ $label }}</p>
                            <p class="font-semibold text-gray-800">{{ $value }}</p>
                        </div>
                    @endforeach
                </div>

                <div class="flex flex-wrap gap-4">
                    <a href="https://bit.ly/JTA2GUEPEDIA" target="_blank"
                       class="px-6 py-3 rounded-xl bg-purple-600 text-white font-semibold shadow hover:bg-purple-700 transition">
                        Beli di Guepedia
                    </a>
                    <a href="https://bit.ly/JTA2SHOPEE" target="_blank"
                       class="px-6 py-3 rounded-xl bg-white border border-purple-600 text-purple-600 font-semibold hover:bg-purple-50 transition">
                        Marketplace Lainnya
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ====================== CTA ====================== -->
<section class="py-24 bg-gradient-to-r from-purple-600 to-pink-500 text-white text-center">
    <div class="max-w-3xl mx-auto px-6" data-aos="fade-up">
        <h2 class="text-3xl md:text-4xl font-extrabold mb-6">
            Setiap Karya adalah Langkah Menuju Masa Depan
        </h2>
        <p class="text-white/90 mb-8">
            SMA Prestasi Prima mendorong siswa untuk berkarya,
            berinovasi, dan menghasilkan prestasi nyata.
        </p>
        <button id="btn-toggle-karya"
                class="px-8 py-4 rounded-full bg-white text-purple-700 font-bold shadow hover:scale-105 transition">
            Lihat Karya & Proyek Lainnya
        </button>
    </div>
</section>

<!-- ====================== SECTION: KARYA LAINNYA (HIDDEN) ====================== -->
<section id="karya-lainnya" class="py-24 bg-white hidden">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-4">
                Karya & Proyek Lainnya
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Beragam karya siswa dari berbagai bidang kreativitas.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
            @php
                $dummy = [
                    ['Literasi','Antologi Puisi Suara Remaja','dummy-1.jpg'],
                    ['Teknologi','Website Informasi Sekolah','dummy-2.jpg'],
                    ['Desain','Poster Edukasi Digital','dummy-3.jpg'],
                    ['Multimedia','Video Profil Sekolah','dummy-4.jpg'],
                    ['Wirausaha','Produk UMKM Siswa','dummy-5.jpg'],
                    ['Game','Game Edukasi Interaktif','dummy-6.jpg'],
                ];
            @endphp

            @foreach($dummy as [$kategori,$judul,$img])
                <div class="bg-gray-50 rounded-2xl shadow hover:shadow-xl transition overflow-hidden">
                    <img src="{{ asset('assets/images/karya-proyek/'.$img) }}"
                         class="w-full h-56 object-cover">
                    <div class="p-6">
                        <span class="text-sm text-purple-600 font-semibold">{{ $kategori }}</span>
                        <h3 class="text-xl font-bold text-gray-800 mt-2">{{ $judul }}</h3>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

<!-- ====================== TOGGLE SCRIPT ====================== -->
<script>
document.getElementById('btn-toggle-karya').addEventListener('click', function () {
    const section = document.getElementById('karya-lainnya');
    section.classList.remove('hidden');
    section.scrollIntoView({ behavior: 'smooth' });
    this.setAttribute('disabled', true);
    this.classList.add('opacity-70', 'cursor-not-allowed');
});
</script>
@endsection
