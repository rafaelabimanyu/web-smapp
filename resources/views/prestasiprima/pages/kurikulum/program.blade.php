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


<section class="bg-gray-50 py-28">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Heading --}}
        <div class="max-w-3xl mx-auto text-center mb-20">
            <span class="text-sm font-semibold tracking-wide text-purple-600">
                Program Akademik
            </span>

            <h2 class="mt-3 text-3xl md:text-4xl font-extrabold text-gray-900">
                Program Pendidikan<br class="hidden sm:block">
                SMA Prestasi Prima
            </h2>

            <p class="mt-5 text-lg text-gray-600">
                Dirancang untuk mengembangkan potensi akademik, karakter,
                dan kesiapan siswa menuju pendidikan tinggi.
            </p>
        </div>

        {{-- Program Grid --}}
        <div class="grid gap-12 sm:grid-cols-1 lg:grid-cols-2">
            @foreach ($programs as $program)
                <div class="bg-white rounded-3xl p-10
                            shadow-sm hover:shadow-xl
                            transition duration-300">

                    {{-- Title --}}
                    <h3 class="text-2xl font-extrabold text-gray-900 mb-5">
                        {{ $program['title'] }}
                    </h3>

                    {{-- Description --}}
                    <p class="text-gray-600 leading-relaxed mb-8">
                        {{ $program['desc'] }}
                    </p>

                    {{-- Info --}}
                    <div class="border-t border-gray-100 pt-6 space-y-4 text-sm text-gray-700">
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
