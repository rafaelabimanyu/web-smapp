@php
$pillars = [
    ['icon' => '📚', 'title' => 'Kurikulum Merdeka', 'desc' => 'Adaptif, fleksibel, dan relevan dengan kebutuhan abad 21'],
    ['icon' => '🧪', 'title' => 'STEAM', 'desc' => 'Integrasi sains, teknologi, seni, dan matematika berbasis proyek'],
    ['icon' => '🌱', 'title' => 'Profil Pelajar Pancasila', 'desc' => 'Penguatan karakter, iman, kreativitas, dan nalar kritis'],
    ['icon' => '🤖', 'title' => 'IT & AI', 'desc' => 'Literasi digital, coding, dan kecerdasan buatan masa depan'],
];
@endphp

<section class="relative bg-gray-50 py-20 md:py-24 overflow-hidden">

    {{-- decorative background --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-1/3 -left-32 w-96 h-96 bg-purple-200/30 rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/3 -right-32 w-96 h-96 bg-indigo-200/30 rounded-full blur-3xl"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-5 sm:px-6">

        {{-- section heading --}}
        <div class="text-center mb-14">
            <span class="inline-block bg-purple-100 text-purple-700
                         text-sm font-semibold px-5 py-2 rounded-full">
                Pilar Akademik
            </span>

            <h2 class="mt-4 text-3xl md:text-4xl font-extrabold text-gray-900">
                Fondasi Kurikulum Unggulan
            </h2>

            <p class="mt-4 max-w-2xl mx-auto text-gray-600">
                Empat pilar utama yang membentuk sistem pembelajaran
                modern dan berorientasi masa depan.
            </p>
        </div>

        {{-- cards --}}
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($pillars as $item)
                <div
                    class="group relative bg-white rounded-3xl p-8
                           border border-gray-100
                           shadow-sm hover:shadow-xl
                           hover:-translate-y-1
                           transition duration-500">

                    {{-- soft glow --}}
                    <div class="absolute inset-0 rounded-3xl
                                bg-purple-500/10 blur-xl
                                opacity-0 group-hover:opacity-100
                                transition duration-500"></div>

                    <div class="relative">
                        {{-- icon --}}
                        <div class="w-14 h-14 flex items-center justify-center
                                    bg-purple-100 text-purple-600
                                    rounded-2xl mb-6 text-2xl">
                            {{ $item['icon'] }}
                        </div>

                        {{-- title --}}
                        <h3 class="text-lg font-bold text-gray-900 mb-3">
                            {{ $item['title'] }}
                        </h3>

                        {{-- description --}}
                        <p class="text-gray-600 leading-relaxed text-sm">
                            {{ $item['desc'] }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
