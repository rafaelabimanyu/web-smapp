@extends('prestasiprima.index')

@section('title', 'Testimoni - SMA Prestasi Prima')

@section('content')

<!-- =====================================================
HEADER
===================================================== -->
<section class="relative mt-[100px] min-h-[70vh] md:min-h-[80vh]
               flex items-center justify-center text-center overflow-hidden"
    style="background: url('{{ asset('assets/images/lulusanptn/herobg.png') }}') center/cover no-repeat;">
    <div class="absolute inset-0 bg-purple-700/60"></div>

    <div class="relative z-10 bg-white py-8 px-10 md:px-16 rounded-2xl shadow-xl">
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-purple-600">
            TESTIMONI ALUMNI
        </h1>
        <p class="text-purple-500 mt-2 font-medium">
            Cerita Inspiratif dari Alumni SMA Prestasi Prima
        </p>
    </div>
</section>

<!-- =====================================================
TESTIMONI SLIDER
===================================================== -->
<section class="relative py-24 bg-gradient-to-b from-purple-50 to-white overflow-visible">
    <div class="max-w-6xl mx-auto px-6">

        <!-- Heading -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-extrabold text-purple-700">
                Apa Kata Alumni Kami?
            </h2>
            <p class="text-gray-600 mt-3">
                Pengalaman belajar yang membentuk masa depan mereka
            </p>
        </div>

        <!-- Swiper Wrapper -->
        <div class="relative overflow-visible">

            <!-- Swiper -->
            <div class="swiper testimoniSwiper overflow-visible">
                <div class="swiper-wrapper">

                    <!-- Slide 1 -->
                    <div class="swiper-slide flex justify-center">
                        <div class="bg-white rounded-3xl shadow-xl p-10 text-center max-w-4xl w-full">
                            <img src="{{ asset('assets/images/testimoni/fahreza.png') }}"
                                 class="w-28 h-28 mx-auto rounded-full object-cover ring-4 ring-purple-200">

                            <p class="mt-8 text-gray-700 italic leading-relaxed">
                                “Selama tiga tahun bersekolah di SMA Prestasi Prima, saya mendapatkan
                                banyak kesempatan untuk mengembangkan diri, salah satunya melalui
                                peran sebagai Ketua OSIS. Pengalaman ini mengajarkan saya tentang
                                kepemimpinan, tanggung jawab, serta pentingnya kerja sama dalam tim.
                                Dukungan guru dan teman-teman sangat luar biasa dan memotivasi saya
                                untuk terus berkembang.”
                            </p>

                            <h4 class="mt-8 font-bold text-purple-700 text-lg">
                                Fahreza Nur Fajri
                            </h4>
                            <span class="text-sm text-gray-500">
                                Alumni XII-3
                            </span>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide flex justify-center">
                        <div class="bg-white rounded-3xl shadow-xl p-10 text-center max-w-4xl w-full">
                            <img src="{{ asset('assets/images/testimoni/candra.png') }}"
                                 class="w-28 h-28 mx-auto rounded-full object-cover ring-4 ring-purple-200">

                            <p class="mt-8 text-gray-700 italic leading-relaxed">
                                “SMA Prestasi Prima memberikan lingkungan belajar yang positif
                                dan mendukung. Saya belajar untuk disiplin, percaya diri,
                                serta berani mengambil tantangan baru. Bimbingan guru-guru
                                sangat membantu saya dalam menentukan arah masa depan.”
                            </p>

                            <h4 class="mt-8 font-bold text-purple-700 text-lg">
                                Candra Adi Pratama
                            </h4>
                            <span class="text-sm text-gray-500">
                                Alumni XII-1
                            </span>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide flex justify-center">
                        <div class="bg-white rounded-3xl shadow-xl p-10 text-center max-w-4xl w-full">
                            <img src="{{ asset('assets/images/testimoni/fahreza.png') }}"
                                 class="w-28 h-28 mx-auto rounded-full object-cover ring-4 ring-purple-200">

                            <p class="mt-8 text-gray-700 italic leading-relaxed">
                                “Selama tiga tahun bersekolah di SMA Prestasi Prima, saya mendapatkan
                                banyak kesempatan untuk mengembangkan diri, salah satunya melalui
                                peran sebagai Ketua OSIS. Pengalaman ini mengajarkan saya tentang
                                kepemimpinan, tanggung jawab, serta pentingnya kerja sama dalam tim.
                                Dukungan guru dan teman-teman sangat luar biasa dan memotivasi saya
                                untuk terus berkembang.”
                            </p>

                            <h4 class="mt-8 font-bold text-purple-700 text-lg">
                                Fahreza Nur Fajri
                            </h4>
                            <span class="text-sm text-gray-500">
                                Alumni XII-3
                            </span>
                        </div>
                    </div>

                </div>

                <!-- Pagination -->
                <div class="swiper-pagination !static mt-12"></div>
            </div>

            <!-- Navigation -->
            <div class="swiper-button-prev !text-purple-600 !z-30"></div>
            <div class="swiper-button-next !text-purple-600 !z-30"></div>

        </div>

    </div>
</section>

<!-- =====================================================
SWIPER SCRIPT
===================================================== -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.testimoniSwiper', {
        loop: true,
        spaceBetween: 40,
        speed: 800,

        autoplay: {
            delay: 2000, // ⏱️ 5 detik
            disableOnInteraction: false,
        },

        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
});
</script>

@endsection
