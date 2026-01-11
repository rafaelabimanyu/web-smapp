@extends('prestasiprima.index')

@section('title', 'Galeri Kegiatan Sekolah')

@section('content')
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 pt-36 pb-20" x-data="{
        category: 'all',
        showMore: false
    }">

        @php
            $firstRow = $galleries->take(3);
            $secondRow = $galleries->skip(3)->take(2);
            $extraGalleries = $galleries->skip(5);
        @endphp

        {{-- ====================== JUDUL ====================== --}}
        <div class="text-center mb-10">
    <h1 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-purple-600 mb-3 leading-tight">
        <span class="block sm:inline">
            Dokumentasi Kegiatan
        </span>
        <span class="block sm:inline text-purple-600">
            SMA Prestasi Prima
        </span>
    </h1>

    <p class="text-gray-600 text-sm sm:text-base max-w-2xl mx-auto">
        Kumpulan dokumentasi kegiatan akademik, non-akademik, serta prestasi siswa
    </p>
</div>



        {{-- ====================== VIDEO UTAMA ====================== --}}
        @if ($galleries->first()?->video_url)
            <div class="mb-14 flex justify-center">
                <div class="w-full md:w-3/4 lg:w-2/3 overflow-hidden rounded-3xl shadow-xl bg-white">
                    @php
                        preg_match(
                            '/(?:youtu\.be\/|youtube\.com\/(?:watch\?v=|embed\/))([\w\-]+)/',
                            $galleries->first()->video_url,
                            $m,
                        );
                    @endphp
                    @if (isset($m[1]))
                        <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/{{ $m[1] }}"
                            allowfullscreen loading="lazy">
                        </iframe>
                    @endif
                </div>
            </div>
        @endif

        {{-- ====================== FILTER CATEGORY ====================== --}}
        <div
            class="flex gap-3 mb-14 overflow-x-auto whitespace-nowrap sm:flex-wrap sm:justify-center sm:overflow-visible pb-2">

            {{-- BUTTON ALL --}}
            <button @click="category='all'; showMore=false"
                :class="category === 'all' ?
                    'bg-purple-600 text-white' :
                    'bg-white text-gray-700 hover:bg-purple-600 hover:text-white'"
                class="flex-shrink-0 px-4 py-2 rounded-full text-sm font-medium
               border shadow transition">
                Semua
            </button>

            {{-- BUTTON CATEGORY --}}
            @foreach ($categories as $cat)
                <button @click="category='{{ $cat }}'; showMore=false"
                    :class="category === '{{ $cat }}' ?
                        'bg-purple-600 text-white' :
                        'bg-white text-gray-700 hover:bg-purple-600 hover:text-white'"
                    class="flex-shrink-0 px-4 py-2 rounded-full text-sm font-medium
                   border shadow transition">
                    {{ $cat }}
                </button>
            @endforeach

        </div>


        {{-- ====================== MOBILE VIEW ====================== --}}
        <div class="block lg:hidden space-y-6">

            {{-- BARIS 1 : 3 ITEM --}}
            <div class="flex gap-4 overflow-x-auto pb-3">
                @foreach ($firstRow as $item)
                    <template x-if="category==='all' || category==='{{ $item->category }}'">
                        <div class="min-w-[75%] bg-white rounded-2xl shadow-md overflow-hidden">
                            @include('partials.gallery-card', ['item' => $item])
                        </div>
                    </template>
                @endforeach
            </div>

            {{-- BARIS 2 : 2 ITEM --}}
            <div class="flex gap-4 overflow-x-auto pb-3">
                @foreach ($secondRow as $item)
                    <template x-if="category==='all' || category==='{{ $item->category }}'">
                        <div class="min-w-[85%] bg-white rounded-2xl shadow-md overflow-hidden">
                            @include('partials.gallery-card', ['item' => $item])
                        </div>
                    </template>
                @endforeach
            </div>

            {{-- BUTTON --}}
            <div class="text-center pt-4">
                <button @click="showMore = !showMore"
                    class="px-8 py-3 bg-purple-600 hover:bg-purple-700
                   text-white rounded-xl shadow transition"
                    x-text="showMore ? 'Tutup Galeri' : 'Lihat Semua Galeri'">
                </button>
            </div>

            {{-- GALERI TAMBAHAN --}}
            <div x-show="showMore" x-transition class="flex gap-4 overflow-x-auto pt-4 pb-3">
                @foreach ($extraGalleries as $item)
                    <template x-if="category==='all' || category==='{{ $item->category }}'">
                        <div class="min-w-[80%] bg-white rounded-2xl shadow-md overflow-hidden">
                            @include('partials.gallery-card', ['item' => $item])
                        </div>
                    </template>
                @endforeach
            </div>

        </div>

        {{-- ====================== DESKTOP GRID ====================== --}}
<div class="hidden lg:grid grid-cols-3 gap-10 mt-20">
    @foreach ($galleries as $item)
        <template x-if="category==='all' || category==='{{ $item->category }}'">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-xl transition">

                {{-- VIDEO / IMAGE --}}
                @if($item->video_url)
                    @php
                        preg_match(
                            "/(?:youtu\.be\/|youtube\.com\/(?:watch\?v=|embed\/))([\w\-]+)/",
                            $item->video_url,
                            $m
                        );
                        $videoId = $m[1] ?? null;
                    @endphp

                    @if($videoId)
                        <iframe
                            class="w-full h-56"
                            src="https://www.youtube.com/embed/{{ $videoId }}"
                            allowfullscreen
                            loading="lazy">
                        </iframe>
                    @else
                        <img
                            src="{{ $item->thumbnail_url }}"
                            class="w-full h-56 object-cover">
                    @endif
                @else
                    <img
                        src="{{ $item->thumbnail_url }}"
                        class="w-full h-56 object-cover">
                @endif

                {{-- INFO --}}
                <div class="p-6 text-center">
                    <h3 class="font-semibold text-gray-800 line-clamp-2">
                        {{ $item->title }}
                    </h3>
                    <p class="text-sm text-purple-600 mt-1">
                        {{ $item->category }}
                    </p>
                </div>
            </div>
        </template>
    @endforeach
</div>


    </section>
@endsection
