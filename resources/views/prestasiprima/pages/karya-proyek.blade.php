@extends('prestasiprima.index')

@section('title', 'Karya & Proyek Siswa - SMA Prestasi Prima')

@section('content')
<!-- ====================== HERO SECTION ====================== -->
<section class="relative bg-gradient-to-br from-purple-500 via-purple-400 to-purple-300 text-white pt-36 pb-28 overflow-hidden">
    <div class="absolute inset-0">
        <img src="{{ asset('assets/prestasiprima/DSC00052.JPG') }}" alt="SMA Prestasi Prima"
            class="w-full h-full object-cover opacity-35" loading="lazy">
        <div class="absolute inset-0 bg-gradient-to-br from-purple-600/15 via-purple-400/10 to-purple-300/10"></div>
    </div>


    <div class="relative z-10 text-center max-w-3xl mx-auto px-4 md:px-6"
     data-aos="fade-down">

    <!-- Logo -->
    <img src="{{ asset('assets/logo_sma.png') }}"
         alt="Logo SMA Prestasi Prima"
         class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 mx-auto mb-4 md:mb-5">

    <!-- Judul -->
    <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-extrabold mb-3 md:mb-4">
        Karya & Proyek Siswa
    </h1>

    <!-- Deskripsi -->
    <p class="text-white/90 text-sm sm:text-base md:text-lg leading-relaxed italic">
        Temukan ide, inovasi, dan hasil karya siswa
        <strong>SMA Prestasi Prima</strong>
        yang telah terwujud dalam karya nyata dan membanggakan.
    </p>

</div>



</section>

<!-- ====================== SECTION: KARYA UNGGULAN ====================== -->
<section class="py-16 md:py-24 bg-gray-50 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <!-- Header -->
        <div class="text-center mb-12 md:mb-16"
             data-aos="fade-up"
             data-aos-duration="700"
             data-aos-once="true">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-gray-800 mb-3 md:mb-4">
                Karya Unggulan Siswa
            </h2>
            <p class="text-gray-600 max-w-xl md:max-w-2xl mx-auto text-sm sm:text-base">
                Karya siswa yang telah diterbitkan secara resmi dan tersedia
                di marketplace nasional sebagai bentuk prestasi dan kreativitas nyata.
            </p>
        </div>

        <!-- Content -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-12 items-center">

            <!-- Cover -->
            <div class="relative group mx-auto max-w-sm sm:max-w-md"
                 data-aos="fade-up"
                 data-aos-duration="800"
                 data-aos-once="true">
                <div class="absolute -inset-1 bg-gradient-to-r from-purple-500 to-pink-500
                            rounded-2xl blur opacity-20"></div>

                <div class="relative bg-white rounded-2xl overflow-hidden shadow-xl
                            transition-transform duration-500 md:hover:scale-105">
                    <img src="{{ asset('assets/images/karya-proyek/buku.jpg') }}"
                         alt="Antologi Cerpen Jejak Tanpa Akhir 2"
                         class="w-full object-cover">
                </div>
            </div>

            <!-- Detail -->
            <div data-aos="fade-up"
                 data-aos-duration="700"
                 data-aos-delay="100"
                 data-aos-once="true">

                <span class="inline-block mb-3 px-4 py-1 rounded-full
                             text-xs sm:text-sm font-semibold
                             bg-purple-100 text-purple-700">
                    📚 Buku Resmi Karya Siswa
                </span>

                <h3 class="text-2xl sm:text-3xl font-extrabold text-gray-800 mb-4">
                    Antologi Cerpen: Jejak Tanpa Akhir 2
                </h3>

                <p class="text-gray-600 mb-6 leading-relaxed text-sm sm:text-base">
                    Buku kumpulan cerpen karya siswa-siswi
                    <strong>SMA Prestasi Prima</strong> yang menyajikan kisah
                    penuh makna tentang harapan, perjuangan, cinta, dan kenangan.
                </p>

                <!-- Info -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6 text-sm">
                    @php
                        $info = [
                            ['Jenis Karya', 'Antologi Cerpen'],
                            ['QRCBN', '62-39-9073-819'],
                            ['Generasi', 'Pensil Gen 1'],
                            ['Harga', 'Rp 107.000']
                        ];
                    @endphp

                    @foreach($info as [$label, $value])
                        <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100"
                             data-aos="fade-up"
                             data-aos-delay="50"
                             data-aos-once="true">
                            <p class="text-gray-500 text-xs">{{ $label }}</p>
                            <p class="font-semibold text-gray-800">{{ $value }}</p>
                        </div>
                    @endforeach
                </div>

                <!-- Action -->
                <div class="flex flex-col sm:flex-row gap-4"
                     data-aos="fade-up"
                     data-aos-delay="150"
                     data-aos-once="true">
                    <a href="https://bit.ly/JTA2GUEPEDIA" target="_blank"
                       class="text-center px-6 py-3 rounded-xl
                              bg-purple-600 text-white font-semibold
                              shadow hover:bg-purple-700 transition">
                        Beli di Guepedia
                    </a>
                    <a href="https://bit.ly/JTA2SHOPEE" target="_blank"
                       class="text-center px-6 py-3 rounded-xl
                              bg-white border border-purple-600
                              text-purple-600 font-semibold
                              hover:bg-purple-50 transition">
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

