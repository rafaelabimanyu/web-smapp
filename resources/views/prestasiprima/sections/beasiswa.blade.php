<!-- ==================== SECTION BEASISWA PRESTASI ==================== -->
<section id="beasiswa"
    class="relative py-24 bg-gradient-to-b from-purple-50 via-white to-white overflow-hidden">

    <!-- Background Decoration -->
    <div class="absolute top-0 left-0 w-64 h-64 bg-purple-300 rounded-full mix-blend-multiply opacity-20 blur-3xl animate-pulse"></div>
    <div class="absolute -bottom-24 right-0 w-96 h-96 bg-pink-300 rounded-full mix-blend-multiply opacity-15 blur-3xl animate-pulse"></div>

    <div class="relative max-w-7xl mx-auto px-4 md:px-8">

        <!-- Header -->
        <header class="mb-16 text-center" data-aos="fade-up">
            <p class="text-sm md:text-lg font-semibold text-purple-600 uppercase tracking-widest">
                Beasiswa Prestasi
            </p>
            <h2 class="text-3xl md:text-5xl font-extrabold text-gray-900 mt-3 mb-4">
                Raih Impianmu & Bersinar Bersama Kami
            </h2>
            <div class="w-24 h-1 bg-purple-500 mx-auto rounded-full"></div>
            <p class="text-gray-700 mt-4 max-w-2xl mx-auto">
                SMA Prestasi Prima memberikan kesempatan bagi calon siswa berprestasi untuk menempuh pendidikan dengan dukungan beasiswa.
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
                    'Memiliki prestasi akademik / olimpiade',
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
                'deskripsi' => 'Beasiswa Karya Ilmiah Remaja (KIR) diberikan kepada siswa kelas IX SMP/sederajat yang berprestasi di bidang karya ilmiah atau cerdas cermat sains.',
                'syarat' => [
                    'Murid aktif kelas IX SMP/sederajat',
                    'Tahun akademik 2025–2026',
                    'Berprestasi KIR / Cerdas Cermat Sains',
                    'Tidak sedang menerima beasiswa lain',
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
                'deskripsi' => 'Program Beasiswa Seni Tari Tradisional ditujukan bagi pelajar SMP/MTs yang memiliki prestasi di bidang tari tradisional.',
                'syarat' => [
                    'Pelajar aktif tingkat SMP/MTs',
                    'Berprestasi di bidang Tari Tradisional',
                    'Tidak sedang menerima beasiswa lain',
                    'Seleksi administrasi',
                    'Tes keterampilan tari',
                    'Wawancara',
                ],
                'pendaftaran' => '22 November – 1 Desember',
                'kontak' => 'Informasi melalui panitia sekolah',
                'link' => 'https://spmb.prestasiprima.sch.id/',
                'poster' => 'assets/images/beasiswa/beasiswa3.webp',
            ],
        ];
        @endphp

        <!-- Card Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($kategoriBeasiswa as $b)
                <div
                    class="group bg-white rounded-2xl shadow-lg overflow-hidden
                           hover:-translate-y-3 hover:shadow-2xl transition-all duration-300"
                    data-aos="fade-up">

                    <div class="h-[300px] overflow-hidden">
                        <img src="{{ asset($b['poster']) }}"
                             alt="{{ $b['nama'] }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition">
                    </div>

                    <div class="p-6 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $b['nama'] }}</h3>
                        <p class="text-sm text-gray-600 mb-4">{{ $b['ringkas'] }}</p>

                        <button
                            onclick='openModal(@json($b))'
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
        <div class="mt-16 text-center" data-aos="fade-up">
            <a href="https://spmb.prestasiprima.sch.id/" target="_blank"
               class="inline-block px-10 py-4 font-semibold text-white
                      bg-gradient-to-r from-purple-600 to-purple-400
                      rounded-full shadow-lg hover:scale-105 transition">
                Daftar Sekarang
            </a>
        </div>

    </div>
</section>

<!-- ==================== MODAL BEASISWA ==================== -->
<div id="modalBeasiswa"
     class="fixed inset-0 z-50 hidden items-center justify-center
            bg-black/60 backdrop-blur-md">

    <div
        class="relative w-full max-w-5xl mx-3 md:mx-4
               bg-white rounded-2xl md:rounded-3xl
               shadow-2xl overflow-hidden
               animate-modalEnter
               grid grid-cols-1 md:grid-cols-2
               max-h-[90vh] md:max-h-none">

        <!-- Close -->
        <button onclick="closeModal()"
    class="absolute z-20 flex items-center justify-center transition
           
           /* Mobile */
           top-3 right-3
           w-9 h-9 text-xl
           rounded-full
           bg-white/90 backdrop-blur
           text-gray-700
           
           /* Desktop (seperti versi awal) */
           md:top-4 md:right-4
           md:w-10 md:h-10 md:text-2xl
           md:bg-white/80 md:backdrop-blur-0
           md:text-gray-600
           
           hover:bg-purple-600 hover:text-white">
    &times;
</button>


        <!-- Image -->
        <div class="relative h-52 sm:h-60 md:h-full overflow-hidden">
            <img id="modalImage" class="w-full h-full object-cover scale-105">
            <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
        </div>

        <!-- Content -->
        <div class="p-5 sm:p-6 md:p-10 overflow-y-auto
                    max-h-[calc(90vh-13rem)] md:max-h-none">

            <h3 id="modalTitle"
                class="text-2xl md:text-3xl font-extrabold text-gray-900 mb-4"></h3>

            <p id="modalText"
               class="text-gray-700 leading-relaxed mb-6"></p>

            <div class="mb-6">
                <h4 class="font-bold text-gray-900 mb-2">Syarat Pendaftaran</h4>
                <ul id="modalSyarat" class="grid grid-cols-1 gap-2 text-sm"></ul>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
                <div class="p-4 rounded-xl bg-purple-50 border border-purple-100">
                    <p class="text-xs uppercase tracking-widest text-purple-500">Periode</p>
                    <p id="modalPeriode" class="font-semibold"></p>
                </div>
                <div class="p-4 rounded-xl bg-pink-50 border border-pink-100">
                    <p class="text-xs uppercase tracking-widest text-pink-500">Kontak</p>
                    <p id="modalKontak" class="font-semibold"></p>
                </div>
            </div>

            <a id="modalLink"
               target="_blank"
               class="block w-full text-center py-4
                      text-base md:text-lg font-semibold text-white
                      bg-gradient-to-r from-purple-600 to-pink-500
                      rounded-xl shadow-lg
                      active:scale-95 hover:scale-[1.02] transition">
                Daftar Beasiswa
            </a>
        </div>
    </div>
</div>

@push('styles')
<style>
@keyframes modalEnter {
    from {
        opacity: 0;
        transform: scale(.92) translateY(20px);
    }
    to {
        opacity: 1;
        transform: scale(1) translateY(0);
    }
}
.animate-modalEnter {
    animation: modalEnter .35s ease-out;
}
@media (max-width: 640px) {
    #modalBeasiswa {
        padding-bottom: env(safe-area-inset-bottom);
    }
}
</style>
@endpush

@push('scripts')
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
            <li class="flex items-start gap-2 bg-gray-50 p-3 rounded-lg">
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
@endpush
