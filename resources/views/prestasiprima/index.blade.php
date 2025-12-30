<!DOCTYPE html>
<html lang="id">
<head>
    <!-- =====================================================
    META
    ====================================================== -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'SMA Prestasi Prima')</title>

    @php
        $defaultDescription = 'SMA Prestasi Prima menghadirkan pendidikan berkualitas dengan program unggulan, fasilitas modern, dan lingkungan belajar inspiratif.';
    @endphp

    <meta name="description" content="@yield('meta_description', $defaultDescription)">

    @hasSection('meta_keywords')
        <meta name="keywords" content="@yield('meta_keywords')">
    @endif

    @hasSection('meta_robots')
        <meta name="robots" content="@yield('meta_robots')">
    @endif

    <!-- =====================================================
    OPEN GRAPH
    ====================================================== -->
    <meta property="og:title" content="@yield('title', 'SMA Prestasi Prima')">
    <meta property="og:description" content="@yield('meta_description', $defaultDescription)">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/logo_sma.png') }}">

    <!-- =====================================================
    ICON
    ====================================================== -->
    <link rel="icon" href="{{ asset('assets/logo_sma.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/logo_sma.png') }}">

    <!-- =====================================================
    CSS & ASSETS
    ====================================================== -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Swiper -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <!-- AOS -->
    <link
        rel="stylesheet"
        href="https://unpkg.com/aos@2.3.1/dist/aos.css"
    />

    <!-- FONT AWESOME -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


    <style>
        html {
            scroll-behavior: smooth;
        }

        @keyframes loadingBar {
            0%   { transform: translateX(-100%); }
            50%  { transform: translateX(0); }
            100% { transform: translateX(100%); }
        }

        .animate-loading-bar {
            animation: loadingBar 1.8s ease-in-out infinite;
        }
    </style>

    @stack('styles')
</head>

<body class="antialiased font-sans bg-white text-slate-800 overflow-x-hidden relative">

    <!-- =====================================================
    PRELOADER
    ====================================================== -->
    <div
        id="pageLoader"
        class="fixed inset-0 z-[9999] bg-white flex flex-col items-center justify-center transition-opacity duration-700"
    >
        <img
            src="{{ asset('assets/logo_sma.png') }}"
            alt="Logo SMA Prestasi Prima"
            class="w-16 h-16 mb-4 animate-pulse select-none"
        >

        <p id="loaderText" class="text-gray-700 font-semibold text-sm">
            Sedang memuat halaman...
        </p>

        <div class="mt-3 w-40 h-1.5 bg-gray-200 rounded-full overflow-hidden">
            <div class="h-full bg-purple-500 animate-loading-bar"></div>
        </div>
    </div>

    <!-- =====================================================
    HEADER
    ====================================================== -->
    @include('header')

    <!-- =====================================================
    MAIN CONTENT
    ====================================================== -->
    <main>
        @yield('content')
    </main>

    <!-- =====================================================
    FOOTER
    ====================================================== -->
    @include('footer')

    <!-- =====================================================
    JAVASCRIPT
    ====================================================== -->

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest" defer></script>

    <!-- Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            /* =====================
            LUCIDE
            ====================== */
            if (window.lucide) {
                lucide.createIcons();
            }

            /* =====================
            ACTIVE NAVIGATION
            ====================== */
            const currentPath = window.location.pathname;

            document.querySelectorAll('#navbar .nav-link').forEach(link => {
                const href = link.getAttribute('href');

                const isActive =
                    (href === '/' && currentPath === '/') ||
                    (href !== '/' && currentPath.startsWith(href));

                if (isActive) {
                    link.classList.add('border-b-2', 'border-purple-500');
                }
            });

            /* =====================
            PRELOADER
            ====================== */
            const loader = document.getElementById('pageLoader');
            const loaderText = document.getElementById('loaderText');

            const pageMap = {
                '/': 'Memuat Beranda...',
                '/tentang/program': 'Memuat Program...',
                '/tentang/profile-sekolah': 'Memuat Profil Sekolah...',
                '/tentang/staff': 'Memuat Staff & Guru...',
                '/tentang/sambutan': 'Memuat Sambutan...',
                '/siswa/prestasi': 'Memuat Prestasi...',
                '/siswa/ekstrakurikuler': 'Memuat Ekstrakurikuler...',
                '/siswa/karya-proyek': 'Memuat Karya & Proyek...',
                '/informasi/faq': 'Memuat FAQ...',
                '/informasi/industri': 'Memuat Industri...',
                '/dokumentasi/gallery': 'Memuat Galeri...',
                '/dokumentasi/berita': 'Memuat Berita...',
                '/dokumentasi/kegiatan': 'Memuat Kegiatan...',
            };

            if (loaderText) {
                loaderText.textContent =
                    pageMap[currentPath] || 'Sedang memuat halaman...';
            }

            const hideLoader = async () => {
                if (!loader) return;

                loader.style.opacity = '0';

                setTimeout(() => {
                    loader.remove();
                }, 600);

                // Refresh AOS setelah loader hilang
                if (window.initAOS) {
                    await window.initAOS();
                }
            };

            window.addEventListener('load', hideLoader, { once: true });
            setTimeout(hideLoader, 1800);
        });
    </script>

    @stack('scripts')
</body>
</html>
