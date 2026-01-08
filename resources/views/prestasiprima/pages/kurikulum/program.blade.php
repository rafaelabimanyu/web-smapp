@php
$programs = [
    [
        'title' => 'IPA',
        'desc'  => 'Penguatan sains dan riset sebagai fondasi pendidikan tinggi.',
        'career'=> 'Kedokteran, Teknik, Farmasi, Sains Murni',
        'univ'  => 'FK UI, ITB, ITS, UGM'
    ],
    [
        'title' => 'IPS',
        'desc'  => 'Membangun analisis sosial, ekonomi, dan kepemimpinan.',
        'career'=> 'Ekonomi, Hukum, Bisnis, Politik',
        'univ'  => 'FEB UI, FH UGM, FISIP Unpad'
    ],
    [
        'title' => 'IPA Bilingual',
        'desc'  => 'Menyiapkan siswa untuk kompetisi sains dan studi internasional.',
        'career'=> 'Kedokteran, Teknik, Farmasi, Peneliti Internasional',
        'univ'  => 'FK UI (Bilingual), ITB Internasional, LN'
    ],
    [
        'title' => 'IPS Bilingual',
        'desc'  => 'Fokus ekonomi, sosial, dan kebijakan publik internasional.',
        'career'=> 'HI, Ekonomi, Hukum, Bisnis Internasional',
        'univ'  => 'FISIP UI, FH UGM Internasional, LN'
    ],
];
@endphp

<section class="relative bg-gray-50 py-20 md:py-28 overflow-hidden">

    {{-- Ambient Light --}}
    <div class="absolute -top-40 md:-top-56 right-0
                w-80 md:w-[520px] h-80 md:h-[520px]
                bg-gradient-to-br from-purple-300/30 to-indigo-300/20
                rounded-full blur-[100px] md:blur-[120px]"></div>

    <div class="absolute -bottom-40 md:-bottom-56 left-0
                w-80 md:w-[520px] h-80 md:h-[520px]
                bg-gradient-to-tr from-indigo-300/20 to-purple-300/30
                rounded-full blur-[100px] md:blur-[120px]"></div>

    <div class="relative max-w-7xl mx-auto px-5 sm:px-6">

        {{-- Heading --}}
        <div class="max-w-4xl mx-auto text-center mb-20 md:mb-28">

            <span class="inline-flex items-center gap-2
                         px-4 md:px-5 py-2 mb-6
                         text-[10px] md:text-[11px]
                         font-semibold tracking-[0.3em]
                         uppercase text-purple-700
                         rounded-full border border-purple-200/60
                         bg-white/70 backdrop-blur">
                Program Akademik
            </span>

            <h2 class="text-3xl sm:text-4xl md:text-6xl
                       font-extrabold text-gray-900 leading-tight">
                Program Pendidikan
                <span class="block mt-2
                             bg-gradient-to-r from-purple-800 via-indigo-700 to-purple-800
                             bg-clip-text text-transparent">
                    SMA Prestasi Prima
                </span>
            </h2>

            <p class="mt-6 md:mt-8
                      text-base md:text-lg
                      text-gray-600 leading-relaxed">
                Kurikulum unggulan yang dirancang untuk membentuk
                kecerdasan intelektual, karakter unggul, dan kesiapan
                menuju universitas terbaik dunia.
            </p>
        </div>

        {{-- Program Grid --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12">
            @foreach ($programs as $program)
                <div class="bg-white rounded-2xl md:rounded-3xl
                            p-6 md:p-10
                            shadow-sm hover:shadow-xl
                            transition duration-300">

                    {{-- Title --}}
                    <h3 class="text-xl md:text-2xl
                               font-extrabold text-gray-900 mb-4 md:mb-5">
                        {{ $program['title'] }}
                    </h3>

                    {{-- Description --}}
                    <p class="text-sm md:text-base
                              text-gray-600 leading-relaxed mb-6 md:mb-8">
                        {{ $program['desc'] }}
                    </p>

                    {{-- Info --}}
                    <div class="border-t border-gray-100 pt-5 md:pt-6
                                space-y-3 md:space-y-4
                                text-xs md:text-sm text-gray-700">
                        <p>
                            <span class="font-semibold text-gray-900">
                                Peluang Karier
                            </span><br>
                            {{ $program['career'] }}
                        </p>

                        <p>
                            <span class="font-semibold text-gray-900">
                                Universitas Tujuan
                            </span><br>
                            {{ $program['univ'] }}
                        </p>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
</section>
