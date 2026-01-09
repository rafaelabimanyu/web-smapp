@extends('prestasiprima.index')

@section('title', 'Galeri Kegiatan Sekolah')

@section('content')
<section 
    class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 py-16 pt-44"
    x-data="{
        category: 'all',
        visible: 3,
        total: {{ count($galleries) }},
        expanded: false,
        toggleView() {
            this.expanded = !this.expanded;
            this.visible = this.expanded ? this.total : 3;
        }
    }"
>

    {{-- ====================== JUDUL UTAMA ====================== --}}
    <div class="text-center mb-14">
        <h1 class="text-3xl md:text-4xl font-extrabold text-purple-800 dark:text-purple-300 mb-3 tracking-tight animate-fade-down">
            Dokumentasi Kegiatan SMA Prestasi Prima
        </h1>
        <p class="text-gray-600 dark:text-gray-300 text-base animate-fade-up max-w-2xl mx-auto">
            Mengabadikan momen terbaik dari berbagai kegiatan akademik, non-akademik, dan prestasi siswa
        </p>
    </div>

    {{-- ====================== VIDEO UTAMA ====================== --}}
    <div class="mb-16 flex justify-center animate-fade-in">
        <div class="relative w-full md:w-3/4 lg:w-2/3 overflow-hidden rounded-3xl shadow-2xl 
                    bg-white/70 dark:bg-gray-800/80 backdrop-blur-xl 
                    border border-purple-200/40 dark:border-purple-700/40
                    hover:scale-[1.02] transition-transform duration-500">
            @if($galleries->isNotEmpty() && $galleries->first()->video_url)
                @php
                    preg_match("/(?:youtu\.be\/|youtube\.com\/(?:watch\?v=|embed\/|live\/))([\w\-]+)/", $galleries->first()->video_url, $matches);
                    $videoId = $matches[1] ?? null;
                @endphp
                @if($videoId)
                    <iframe 
                        class="w-full aspect-video rounded-3xl"
                        src="https://www.youtube.com/embed/{{ $videoId }}"
                        title="{{ $galleries->first()->title }}"
                        frameborder="0"
                        allowfullscreen
                        loading="lazy">
                    </iframe>
                @else
                    <img 
                        src="{{ $galleries->first()->thumbnail_url ?? asset('images/no-thumbnail.jpg') }}"
                        alt="{{ $galleries->first()->title }}"
                        class="w-full aspect-video object-cover rounded-3xl"
                    >
                @endif
            @else
                <div class="w-full aspect-video flex items-center justify-center bg-purple-50 text-purple-400 rounded-3xl">
                    Tidak ada video tersedia
                </div>
            @endif
        </div>
    </div>

    {{-- ====================== FILTER KATEGORI ====================== --}}
    <div class="flex flex-wrap justify-center gap-4 mb-20">
        @php
            $icons = [
                'all' => 'ri-stack-line',
                'Kegiatan Sekolah' => 'ri-community-line',
                'Prestasi' => 'ri-trophy-line',
                'Kunjungan' => 'ri-route-line',
                'Lomba' => 'ri-medal-line',
                'Ekstrakurikuler' => 'ri-team-line',
                'Kesehatan' => 'ri-heart-pulse-line',
                'Olahraga' => 'ri-dumbbell-line',
            ];
        @endphp

        <button
            @click="category='all'; visible=3"
            :class="category==='all' 
                ? 'bg-gradient-to-r from-purple-600 to-indigo-600 text-white shadow-xl scale-105' 
                : 'bg-white/70 dark:bg-gray-800/70 text-gray-700 dark:text-gray-200 hover:bg-purple-600 hover:text-white'"
            class="flex items-center gap-2 px-5 py-2.5 text-sm rounded-full font-medium 
                   transition-all duration-300 transform hover:scale-105 backdrop-blur-lg
                   border border-purple-200/50 dark:border-purple-700/50"
        >
            <i class="{{ $icons['all'] }} text-lg"></i>
            <span>Semua</span>
        </button>

        @foreach ($categories as $cat)
            @php $icon = $icons[$cat] ?? 'ri-image-line'; @endphp
            <button
                @click="category='{{ $cat }}'; visible=3"
                :class="category==='{{ $cat }}' 
                    ? 'bg-gradient-to-r from-purple-600 to-indigo-600 text-white shadow-xl scale-105' 
                    : 'bg-white/70 dark:bg-gray-800/70 text-gray-700 dark:text-gray-200 hover:bg-purple-600 hover:text-white'"
                class="flex items-center gap-2 px-5 py-2.5 text-sm rounded-full font-medium 
                       transition-all duration-300 transform hover:scale-105 backdrop-blur-lg
                       border border-purple-200/50 dark:border-purple-700/50"
            >
                <i class="{{ $icon }} text-lg"></i>
                <span>{{ $cat }}</span>
            </button>
        @endforeach
    </div>

    {{-- ====================== GRID GALERI ====================== --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
        @foreach ($galleries as $i => $item)
            <template x-if="(category==='all' || category==='{{ $item->category }}') && {{ $i }} < visible">
                <div
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="opacity-0 scale-75 translate-y-6"
                    x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                    class="overflow-hidden rounded-3xl shadow-lg bg-white/80 dark:bg-gray-800/90
                           border border-purple-100 dark:border-purple-800
                           backdrop-blur-xl hover:shadow-2xl transition-all duration-300
                           transform hover:-translate-y-2 hover:ring-4 hover:ring-purple-500/30"
                >
                    @if($item->video_url)
                        @php
                            preg_match("/(?:youtu\.be\/|youtube\.com\/(?:watch\?v=|embed\/|live\/))([\w\-]+)/", $item->video_url, $matches);
                            $videoId = $matches[1] ?? null;
                        @endphp
                        @if($videoId)
                            <iframe 
                                class="w-full aspect-video rounded-t-3xl"
                                src="https://www.youtube.com/embed/{{ $videoId }}"
                                title="{{ $item->title }}"
                                frameborder="0"
                                allowfullscreen
                                loading="lazy">
                            </iframe>
                        @else
                            <img 
                                src="{{ $item->thumbnail_url ?? asset('images/no-thumbnail.jpg') }}"
                                alt="{{ $item->title }}"
                                class="w-full aspect-video object-cover rounded-t-3xl"
                            >
                        @endif
                    @else
                        <img 
                            src="{{ $item->thumbnail_url ?? asset('images/no-thumbnail.jpg') }}"
                            alt="{{ $item->title }}"
                            class="w-full aspect-video object-cover rounded-t-3xl"
                        >
                    @endif

                    <div class="p-6 text-center">
                        <h3 class="text-base font-semibold text-gray-800 dark:text-gray-100 line-clamp-2 hover:text-purple-600 transition-colors">
                            {{ $item->title }}
                        </h3>
                        <p class="text-sm text-purple-600 mt-1 font-medium">
                            {{ $item->category ?? 'Tanpa Kategori' }}
                        </p>
                    </div>
                </div>
            </template>
        @endforeach
    </div>

    {{-- ====================== TOMBOL LIHAT SEMUA ====================== --}}
    <div class="mt-24 text-center">
        <button
            @click="toggleView()"
            class="px-10 py-3 font-semibold text-white 
                   bg-gradient-to-r from-purple-600 to-indigo-600
                   hover:from-purple-700 hover:to-indigo-700
                   rounded-2xl shadow-xl transition-all duration-300
                   transform hover:scale-105 focus:ring-4 focus:ring-purple-300"
            x-text="expanded ? 'Tutup Galeri' : 'Lihat Semua Dokumentasi'"
        ></button>
    </div>

</section>
@endsection
