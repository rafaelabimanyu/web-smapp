@extends('prestasiprima.index')

@section('title', $news->title ?? 'Detail Berita')

@section('content')
<section class="bg-gray-50 relative z-10 pt-24 md:pt-36 pb-20">
  <div class="max-w-7xl mx-auto px-4 md:px-8">

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

      {{-- ================= KONTEN UTAMA ================= --}}
      <article class="lg:col-span-2">

        {{-- JUDUL --}}
        <header class="mb-6 md:mb-8" data-aos="fade-down">
          <h1 class="text-2xl sm:text-3xl md:text-5xl font-extrabold text-gray-900 mb-2 md:mb-3 leading-tight">
            {{ $news->title }}
          </h1>
          <div class="flex flex-wrap items-center gap-2 text-gray-500 text-xs md:text-sm">
            <span>{{ $news->category->name ?? 'Umum' }}</span>
            <span>•</span>
            <span>{{ $news->created_at->format('d M Y') }}</span>
          </div>
        </header>

        {{-- THUMBNAIL --}}
        <div class="mb-6 md:mb-8" data-aos="fade-up">
          <img src="{{ asset($news->thumbnail) }}"
               alt="{{ $news->title }}"
               class="w-full h-64 sm:h-80 md:h-[450px] object-cover rounded-xl md:rounded-2xl shadow-md">
        </div>

        {{-- KONTEN --}}
        <div class="prose max-w-none text-gray-700 text-sm sm:text-base">
          {!! $news->content !!}
        </div>

        {{-- BERITA TERKAIT --}}
        @if($related->count() > 0)
        <section class="mt-12" data-aos="fade-up">
          <h3 class="text-lg md:text-xl font-bold text-purple-600 mb-6">
            Berita Terkait
          </h3>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            @foreach($related as $item)
              <a href="{{ route('berita.detail', $item->slug) }}"
                 class="bg-white rounded-xl shadow-md hover:shadow-lg overflow-hidden transition hover:-translate-y-1">
                <img src="{{ asset($item->thumbnail) }}"
                     alt="{{ $item->title }}"
                     class="w-full h-40 object-cover">
                <div class="p-4">
                  <span class="text-xs text-purple-600 font-semibold">
                    {{ $item->category->name ?? 'Umum' }}
                  </span>
                  <h4 class="font-semibold text-gray-800 mt-2 line-clamp-2">
                    {{ $item->title }}
                  </h4>
                </div>
              </a>
            @endforeach
          </div>
        </section>
        @endif

      </article>

      {{-- ================= SIDEBAR (DESKTOP ONLY) ================= --}}
      <aside class="hidden lg:block lg:col-span-1 space-y-8">

        {{-- HOT NEWS --}}
        @if($hotNews->count() > 0)
        <div class="bg-white rounded-2xl shadow-md p-5" data-aos="fade-left">
          <h3 class="text-xl font-bold text-purple-600 border-b-2 border-purple-500 pb-2 mb-4">
            Hot News
          </h3>

          @foreach($hotNews as $item)
            <a href="{{ route('berita.detail', $item->slug) }}"
               class="block mb-4 group">
              <img src="{{ asset($item->thumbnail) }}"
                   alt="{{ $item->title }}"
                   class="w-full h-32 object-cover rounded-lg mb-2">
              <h4 class="font-semibold text-gray-800 group-hover:text-purple-600 transition line-clamp-2">
                {{ $item->title }}
              </h4>
            </a>
          @endforeach
        </div>
        @endif

        {{-- AKSES CEPAT --}}
        <div class="bg-white rounded-2xl shadow-md p-5" data-aos="fade-left" data-aos-delay="100">
          <h3 class="text-xl font-bold text-purple-600 border-b-2 border-purple-500 pb-2 mb-4">
            Akses Cepat
          </h3>

          <ul class="space-y-3">
            @foreach($categories as $category)
              <li>
                <a href="{{ route('berita.index', ['category' => $category->slug]) }}"
                   class="flex items-center justify-between px-4 py-2 rounded-lg border border-gray-200
                          hover:bg-purple-50 hover:text-purple-600 transition">
                  <span>{{ $category->name }}</span>
                  <svg xmlns="http://www.w3.org/2000/svg"
                       class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                       stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M9 5l7 7-7 7"/>
                  </svg>
                </a>
              </li>
            @endforeach
          </ul>
        </div>

      </aside>
    </div>
  </div>
</section>

{{-- ================= STYLE ================= --}}
@push('styles')
<style>
.prose p {
  margin-bottom: 1.6em;
  line-height: 1.9;
  text-align: justify;
  color: #374151;
}
.prose p:first-of-type::first-letter {
  float: left;
  font-size: 3rem;
  font-weight: 700;
  margin-right: .15em;
  color: #7c3aed;
}
.prose h2, .prose h3 {
  color: #5b21b6;
  font-weight: 700;
  margin: 2em 0 .8em;
}
.prose blockquote {
  border-left: 4px solid #8b5cf6;
  background: #faf5ff;
  padding: 1.2rem 1.5rem;
  border-radius: .75rem;
  margin: 2em 0;
}
.prose img {
  border-radius: 1rem;
  box-shadow: 0 10px 28px rgba(109,40,217,.15);
  margin: 2em 0;
}
</style>
@endpush

{{-- ================= SCRIPT ================= --}}
@push('scripts')
<script>
const configBeritaDetail = { duration: 800, once: true, offset: 80 };
if (window.AOS) AOS.init(configBeritaDetail);
</script>
@endpush
@endsection
