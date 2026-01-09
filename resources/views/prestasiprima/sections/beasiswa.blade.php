<!-- ==================== SECTION BEASISWA PRESTASI ==================== -->
<section id="beasiswa" class="relative py-24 bg-gradient-to-b from-purple-50 via-white to-white overflow-hidden">

    <!-- Background Decoration -->
    <div class="absolute top-0 left-0 w-64 h-64 bg-purple-300 rounded-full opacity-20 blur-3xl"></div>
    <div class="absolute -bottom-24 right-0 w-96 h-96 bg-pink-300 rounded-full opacity-15 blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-4 md:px-8">

        <!-- Header -->
<header class="mb-12 sm:mb-16 text-center" data-aos="fade-up">

  <p class="text-xs sm:text-sm md:text-lg font-semibold
            text-purple-600 uppercase
            tracking-wider sm:tracking-widest">
    Beasiswa Prestasi
  </p>

  <h2 class="text-2xl sm:text-3xl md:text-5xl
             font-extrabold text-gray-900
             mt-2 sm:mt-3 mb-3 sm:mb-4 leading-tight">
    Raih Impianmu & Bersinar Bersama Kami
  </h2>

  <div class="w-16 sm:w-20 md:w-24 h-1 bg-purple-500 mx-auto rounded-full"></div>

  <p class="text-sm sm:text-base text-gray-700
            mt-3 sm:mt-4 max-w-xl sm:max-w-2xl mx-auto leading-relaxed">
    SMA Prestasi Prima memberikan kesempatan bagi calon siswa berprestasi
    untuk menempuh pendidikan dengan dukungan beasiswa.
  </p>

</header>


        @php
            $kategoriBeasiswa = [
                [
                    'nama' => 'Akademik Olimpiade (PPOC)',
                    'ringkas' => 'Beasiswa berprestasi bidang akademik dan olimpiade.',
                    'deskripsi' => 'Program Beasiswa Akademik Olimpiade (PPOC) ditujukan bagi siswa kelas IX SMP/MTs yang memiliki prestasi akademik atau olimpiade.',
                    'syarat' => [
                        'Siswa kelas IX SMP/MTs',
                        'Prestasi akademik / olimpiade',
                        'Tidak sedang menerima beasiswa lain',
                        'Seleksi administrasi',
                        'Tes akademik',
                        'Wawancara',
                    ],
                    'pendaftaran' => '1 – 31 Desember 2025',
                    'kontak' => '0851-5656-2829 (Miss Caca)',
                    'link' => 'https://spmb.prestasiprima.sch.id/',
                    'poster' => 'assets/images/beasiswa/beasiswa1.webp',
                ],
                [
                    'nama' => 'Karya Ilmiah Remaja (KIR)',
                    'ringkas' => 'Beasiswa prestasi di bidang karya ilmiah dan sains.',
                    'deskripsi' => 'Beasiswa KIR diberikan kepada siswa kelas IX SMP/sederajat yang berprestasi di bidang karya ilmiah atau sains.',
                    'syarat' => [
                        'Murid aktif kelas IX',
                        'Prestasi KIR / Sains',
                        'Tidak menerima beasiswa lain',
                        'Seleksi administrasi',
                        'Tes keterampilan',
                        'Wawancara',
                    ],
                    'pendaftaran' => '3 – 24 Desember 2025',
                    'kontak' => '0815-7202-9045 (Sir Rafi)',
                    'link' => 'https://spmb.prestasiprima.sch.id/',
                    'poster' => 'assets/images/beasiswa/beasiswa2.webp',
                ],
                [
                    'nama' => 'Seni Tari Tradisional',
                    'ringkas' => 'Beasiswa bagi siswa berprestasi seni tari tradisional.',
                    'deskripsi' => 'Program beasiswa seni tari tradisional bagi pelajar SMP/MTs.',
                    'syarat' => [
                        'Pelajar aktif SMP/MTs',
                        'Prestasi seni tari',
                        'Tidak menerima beasiswa lain',
                        'Seleksi administrasi',
                        'Tes keterampilan',
                        'Wawancara',
                    ],
                    'pendaftaran' => '22 November – 1 Desember',
                    'kontak' => 'Panitia Sekolah',
                    'link' => 'https://spmb.prestasiprima.sch.id/',
                    'poster' => 'assets/images/beasiswa/beasiswa3.webp',
                ],
            ];
        @endphp

        <!-- ================= MOBILE CAROUSEL ================= -->
        <div class="md:hidden">
            <div class="flex gap-6 overflow-x-auto snap-x snap-mandatory pb-4
                        scroll-smooth touch-pan-x
                        [-ms-overflow-style:none] [scrollbar-width:none]"
                 style="scrollbar-width:none;">
                 
                @foreach($kategoriBeasiswa as $b)
                    <div class="snap-center shrink-0 w-[85%]">
                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">

                            <div class="h-56 overflow-hidden">
                                <img src="{{ asset($b['poster']) }}" alt="{{ $b['nama'] }}"
                                     class="w-full h-full object-cover">
                            </div>

                            <div class="p-5 flex flex-col">
                                <h3 class="text-lg font-bold mb-1">{{ $b['nama'] }}</h3>
                                <p class="text-sm text-gray-600 mb-4">{{ $b['ringkas'] }}</p>

                                <button onclick='openModal(@json($b))'
                                        class="mt-auto px-4 py-2 text-sm font-semibold
                                               text-purple-600 bg-purple-100 rounded-full">
                                    Lihat Detail
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- ================= DESKTOP GRID ================= -->
        <div class="hidden md:grid grid-cols-3 gap-8">
            @foreach($kategoriBeasiswa as $b)
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden
                            hover:-translate-y-2 hover:shadow-xl transition">

                    <div class="h-[300px] overflow-hidden">
                        <img src="{{ asset($b['poster']) }}" alt="{{ $b['nama'] }}"
                            class="w-full h-full object-cover">
                    </div>

                    <div class="p-6 flex flex-col">
                        <h3 class="text-xl font-bold mb-2">{{ $b['nama'] }}</h3>
                        <p class="text-sm text-gray-600 mb-4">{{ $b['ringkas'] }}</p>

                        <button onclick='openModal(@json($b))'
                                class="mt-auto px-5 py-2 text-sm font-semibold
                                    text-purple-600 bg-purple-100 rounded-full
                                    hover:bg-purple-200 transition">
                            Lihat Detail
                        </button>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- CTA -->
<div class="mt-10 sm:mt-16 text-center">
  <a href="https://spmb.prestasiprima.sch.id/" target="_blank"
     class="inline-block
            px-6 py-3 text-sm
            sm:px-8 sm:py-3.5 sm:text-base
            md:px-10 md:py-4 md:text-lg
            font-semibold text-white
            bg-gradient-to-r from-purple-600 to-purple-400
            rounded-full shadow
            hover:scale-105 transition">
    Daftar Sekarang
  </a>
</div>


    </div>
</section>

<!-- ==================== MODAL BEASISWA ==================== -->
<div id="modalBeasiswa" class="fixed inset-0 z-50 hidden items-center justify-center
            bg-black/60 backdrop-blur-md">

    <div class="relative w-full max-w-5xl
           mx-2 sm:mx-4
           bg-white
           rounded-xl md:rounded-2xl
           shadow-2xl
           overflow-hidden
           animate-modalEnter
           grid grid-cols-1 md:grid-cols-2
           max-h-[90vh]">

        <!-- CLOSE -->
        <button onclick="closeModal()" class="absolute z-30
             top-3 right-3 md:top-4 md:right-4
             w-9 h-9 md:w-10 md:h-10
             flex items-center justify-center
             rounded-full bg-white
             text-gray-700 text-xl
             shadow hover:bg-purple-600 hover:text-white transition">
            &times;
        </button>

        <!-- IMAGE (FIX HEIGHT) -->
        <div class="relative h-56 md:h-auto overflow-hidden">
            <img id="modalImage" class="w-full h-full object-cover" alt="">
            <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
        </div>

        <!-- CONTENT (SCROLL AREA) -->
        <div class="flex flex-col
         p-4 sm:p-6 md:p-8
         overflow-y-auto
         max-h-[calc(90vh-14rem)]
         md:max-h-none">


            <h3 id="modalTitle" class="text-xl md:text-2xl font-extrabold mb-3"></h3>

            <p id="modalText" class="text-gray-700 text-sm md:text-base mb-4"></p>

            <h4 class="font-bold mb-2">Syarat Pendaftaran</h4>
            <ul id="modalSyarat" class="space-y-2 text-sm mb-4"></ul>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-5">
                <div class="p-3 rounded-lg bg-purple-50">
                    <p class="text-xs text-purple-600">Periode</p>
                    <p id="modalPeriode" class="font-semibold text-sm"></p>
                </div>
                <div class="p-3 rounded-lg bg-pink-50">
                    <p class="text-xs text-pink-600">Kontak</p>
                    <p id="modalKontak" class="font-semibold text-sm"></p>
                </div>
            </div>

            <!-- CTA (AMAN SELALU KELIHATAN) -->
            <a id="modalLink" target="_blank" class="mt-auto text-center py-3
                font-semibold text-white
                bg-gradient-to-r from-purple-600 to-pink-500
                rounded-lg shadow
                hover:scale-[1.02] transition">
                Daftar Beasiswa
            </a>

        </div>
    </div>
</div>

<style>
    @keyframes modalEnter {
        from {
            opacity: 0;
            transform: scale(.95) translateY(20px);
        }

        to {
            opacity: 1;
            transform: scale(1) translateY(0);
        }
    }

    .animate-modalEnter {
        animation: modalEnter .3s ease-out;
    }

    body.overflow-hidden {
        overflow: hidden;
    }
</style>


<script>
    function openModal(data) {
        document.body.classList.add('overflow-hidden');

        modalImage.src = "{{ asset('') }}" + data.poster;
        modalTitle.innerText = data.nama;
        modalText.innerText = data.deskripsi;
        modalPeriode.innerText = data.pendaftaran;
        modalKontak.innerText = data.kontak;
        modalLink.href = data.link;

        modalSyarat.innerHTML = '';
        data.syarat.forEach(item => {
            modalSyarat.innerHTML += `
      <li class="flex gap-2 bg-gray-50 p-2 rounded">
        <span class="text-purple-600 font-bold">✓</span>
        <span>${item}</span>
      </li>`;
        });

        modalBeasiswa.classList.remove('hidden');
        modalBeasiswa.classList.add('flex');
    }

    function closeModal() {
        document.body.classList.remove('overflow-hidden');
        modalBeasiswa.classList.add('hidden');
        modalBeasiswa.classList.remove('flex');
    }

    modalBeasiswa.addEventListener('click', e => {
        if (e.target === modalBeasiswa) closeModal();
    });
</script>