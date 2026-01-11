@extends('prestasiprima.index')

@section('title', 'Struktur Staff & Manajemen - SMK Prestasi Prima')

@section('content')

{{-- ========================================================= --}}
{{-- SECTION : ORNAMENT & HEADER --}}
{{-- ========================================================= --}}
<section
    class="relative text-center mt-12 mb-16 py-20 bg-cover bg-center"
    style="background-image: url('{{ asset('assets/prestasiprima/fotbarguru2.jpg') }}');"
>
    {{-- Overlay --}}
    <div class="absolute inset-0 bg-black/40 backdrop-blur-[1px]"></div>

    {{-- Content --}}
    <div class="relative max-w-4xl mx-auto px-4">

        {{-- Ornament --}}
        <div class="flex justify-center mb-8">
            <div class="flex items-center gap-6">
                <div class="w-20 h-[3px] bg-gradient-to-r from-purple-400 to-yellow-400 rounded-full"></div>

                <div class="relative w-16 h-16 flex items-center justify-center rounded-full
                            bg-gradient-to-br from-purple-50 to-yellow-50
                            shadow-md animate-pulse-glow">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="w-8 h-8 text-purple-600 drop-shadow-[0_0_8px_rgba(255,165,0,0.6)]"
                         fill="currentColor"
                         viewBox="0 0 24 24">
                        <path d="M12 2l2.5 6.5L21 9l-5 4 1.5 7L12 16l-5.5 4L8 13 3 9l6.5-.5L12 2z"/>
                    </svg>
                </div>

                <div class="w-20 h-[3px] bg-gradient-to-l from-purple-400 to-yellow-400 rounded-full"></div>
            </div>
        </div>

        {{-- Title --}}
        <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight mb-4 text-white">
            <span class="block sm:inline">Staff & Tenaga Pendidik</span>
            <span class="block sm:inline bg-gradient-to-r from-yellow-400 to-purple-400 bg-clip-text text-transparent">
                SMA Prestasi Prima
            </span>
        </h2>

        {{-- Description --}}
        <p class="text-white/90 text-sm sm:text-base leading-relaxed max-w-2xl mx-auto">
            Dedikasi, integritas, dan profesionalisme adalah fondasi kami dalam membimbing
            generasi unggul. Bersama tenaga pendidik dan staf terbaik, SMA Prestasi Prima
            berkomitmen menghadirkan pendidikan yang bermakna, berkarakter, dan berdaya saing
            tinggi di era modern.
        </p>

    </div>
</section>

{{-- ========================================================= --}}
{{-- SECTION : CONTENT WRAPPER --}}
{{-- ========================================================= --}}
<section class="min-h-screen bg-gradient-to-b from-white via-gray-50 to-white py-16 relative overflow-hidden">

{{-- ========================================================= --}}
{{-- SECTION : KEPALA SEKOLAH --}}
{{-- ========================================================= --}}
@php
    $kepala = \DB::table('prestasiprima_staff')
        ->where('kategori', 'kepala')
        ->first();
@endphp

<section class="max-w-7xl mx-auto px-6 mb-16">
    <div class="flex flex-col md:flex-row items-center justify-center gap-10" data-aos="fade-up">

        {{-- Foto --}}
        <div class="relative bg-white rounded-3xl shadow-lg border border-purple-100 p-3">
            @if($kepala && $kepala->foto)
                <img
                    src="{{ asset('storage/staff/' . $kepala->foto) }}"
                    alt="Kepala Sekolah"
                    class="rounded-2xl w-72 h-96 object-cover"
                >
            @else
                <div class="w-72 h-96 bg-gray-200 flex items-center justify-center rounded-2xl text-gray-400">
                    Tidak ada foto
                </div>
            @endif

            <div class="absolute -top-3 -left-3 w-12 h-12 bg-gradient-to-br from-purple-500 to-yellow-400 rounded-full shadow-md flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 12c2.7 0 4.9-2.2 4.9-4.9S14.7 2.2 12 2.2 7.1 4.4 7.1 7.1 9.3 12 12 12zm0 2c-3.3 0-9.8 1.7-9.8 4.9V22h19.6v-3.1c0-3.2-6.5-4.9-9.8-4.9z"/>
                </svg>
            </div>
        </div>

        {{-- Deskripsi --}}
        <div class="text-left max-w-xl">
            <span class="inline-flex items-center gap-2 bg-gradient-to-r from-purple-500 to-yellow-400 text-white px-5 py-2 rounded-full text-sm font-semibold shadow-md mb-4">
                Kepala Sekolah
            </span>

            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-3">
                {{ $kepala->nama ?? 'Tidak ada data' }}
            </h2>

            <div class="w-24 h-[3px] bg-gradient-to-r from-purple-500 to-yellow-400 mb-5 rounded-full"></div>

            <div class="bg-gradient-to-br from-purple-50 to-white border border-purple-100 rounded-2xl shadow-md p-7">
                <p class="text-gray-700 italic text-lg leading-relaxed">
                    {{ $kepala->kutipan ?? 'Tidak ada kutipan.' }}
                </p>
            </div>
        </div>

    </div>
</section>

{{-- ========================================================= --}}
{{-- SECTION : STAFF / MANAGEMENT --}}
{{-- ========================================================= --}}
<section class="max-w-7xl mx-auto px-6 mb-16">
    <div class="flex justify-center mb-8">
        <div class="inline-flex bg-gradient-to-r from-purple-500 to-yellow-400 rounded-xl p-1 shadow-lg">
            <button class="tab-btn active-tab rounded-lg px-8 py-2 font-semibold text-white">
                Management
            </button>
        </div>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-8">
        @foreach (\DB::table('prestasiprima_staff')->where('kategori', 'kesiswaan')->get() as $staff)
            <div class="staff-card">
                <img
                    src="{{ asset('storage/staff/' . $staff->foto) }}"
                    alt="{{ $staff->nama }}"
                >
            </div>
        @endforeach
    </div>
</section>

{{-- ========================================================= --}}
{{-- SECTION : GURU MAPEL --}}
{{-- ========================================================= --}}
<section class="max-w-7xl mx-auto px-6 pb-16">
    <div class="text-center mb-10">
        <h2 class="text-3xl font-bold text-purple-500">Guru Mapel</h2>
    </div>

    {{-- carousel tetap (tidak diubah) --}}
</section>

</section>
@endsection
