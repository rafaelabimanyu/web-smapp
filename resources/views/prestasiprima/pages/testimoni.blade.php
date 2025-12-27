@extends('prestasiprima.index')

@section('title', 'Testimoni - SMA Prestasi Prima')

@section('content')

<!-- =====================================================
HEADER
===================================================== -->
<section
    class="relative mt-[100px] min-h-[70vh] md:min-h-[80vh]
           flex items-center justify-center text-center overflow-hidden"
    style="background: url('{{ asset('assets/images/lulusanptn/herobg.png') }}') center/cover no-repeat;"
>
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
TESTIMONI GRID
===================================================== -->
<section
    class="relative py-24 bg-gradient-to-b from-white via-purple-50/40 to-white overflow-hidden"
    x-data="{ open:false, image:'' }"
>
    <!-- ORNAMENT -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[700px] h-[700px]
                bg-purple-200/40 rounded-full blur-3xl opacity-60"></div>
    <div class="absolute bottom-0 right-1/3 w-[400px] h-[400px]
                bg-purple-100/40 rounded-full blur-2xl opacity-60 animate-pulse-slow"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 md:px-10">
        <h2
            class="text-3xl font-bold text-center text-purple-600 mb-16"
            data-aos="fade-up"
        >
            Apa Kata Alumni SMA Prestasi Prima?
        </h2>

        <!-- GRID TESTIMONI (POLLOS) -->
        <div
            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8"
            data-aos="fade-up"
            data-aos-delay="200"
        >
            @for ($i = 1; $i <= 10; $i++)
                <div
                    class="group cursor-zoom-in"
                    @click="open=true; image='{{ asset('assets/images/testimoni/testimoni (' . $i . ').png') }}'"
                >
                    <img
                        src="{{ asset('assets/images/testimoni/testimoni (' . $i . ').png') }}"
                        alt="Testimoni Alumni {{ $i }}"
                        loading="lazy"
                        class="w-full h-64 object-contain
                               transition-transform duration-500
                               group-hover:scale-105"
                    >
                </div>
            @endfor
        </div>
    </div>

    <!-- =====================================================
    MODAL PREVIEW
    ====================================================== -->
    <div
        x-show="open"
        x-transition.opacity
        class="fixed inset-0 z-[9999] bg-black/70
               flex items-center justify-center px-4"
        @click.self="open=false"
    >
        <div x-transition.scale class="relative max-w-5xl w-full">
            <button
                @click="open=false"
                class="absolute -top-4 -right-4 w-10 h-10 rounded-full
                       bg-white text-purple-600 shadow-lg
                       flex items-center justify-center
                       hover:bg-purple-600 hover:text-white transition"
            >
                ✕
            </button>

            <img
                :src="image"
                alt="Preview Testimoni"
                class="w-full max-h-[85vh] object-contain
                       bg-white p-4 rounded-2xl shadow-2xl"
            >
        </div>
    </div>
</section>


@endsection
