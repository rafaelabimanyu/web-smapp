<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PrestasiprimaNewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prestasiprima_news')->truncate();

        DB::table('prestasiprima_news')->insert([
            [
                'id' => 1,
                'category_id' => 1,
                'title' => 'Tim Imagine Presma Raih Juara 2 Nasional JHIC 2025',
                'slug' => 'tim-imagine-presma-raih-juara-2-nasional-jhic-2025',
                'thumbnail' => 'uploads/thumbnails/tim-imagine-presma-juara-2-jhic-2025.jpeg',
                'excerpt' => 'Tim Imagine Presma dari SMK Prestasi Prima Jakarta Timur berhasil meraih Juara 2 Nasional dalam ajang Jagoan Hosting Infrastructure Competition (JHIC) 2025 di Surabaya.',
                'content' => '
                <article class="prose prose-lg max-w-none text-gray-800">

  <p class="font-semibold">
    Semangat kolaborasi lintas jenjang pendidikan kembali mengantarkan prestasi gemilang.
    <strong>Tim Imagine Presma</strong>, hasil sinergi siswa
    <strong>SMK Prestasi Prima</strong> dan <strong>SMA Prestasi Prima Jakarta Timur</strong>,
    sukses meraih
    <strong class="text-purple-600">Juara 2 Nasional</strong>
    dalam ajang bergengsi
    <strong>Jagoan Hosting Infrastructure Competition (JHIC) 2025</strong>.
  </p>

  <p>
    Capaian ini menjadi bukti nyata bahwa kolaborasi antara pendidikan vokasi dan akademik
    mampu melahirkan inovasi digital yang kompetitif di tingkat nasional.
    Kompetisi ini diselenggarakan oleh <strong>Jagoan Hosting</strong> bekerja sama dengan
    <strong>Komdigi</strong> serta <strong>Maspion IT</strong>.
    Puncak final nasional dilaksanakan secara offline di
    <strong>Atrium IT Lantai 1 Maspion Square, Surabaya</strong>,
    pada <strong>Sabtu, 8 November 2025</strong>.
  </p>

  <blockquote class="border-l-4 border-purple-500 pl-4 italic text-gray-600 bg-purple-50 rounded-r-lg py-3">
    Ajang ini diikuti oleh <strong>185 siswa dari 30 tim finalis terbaik se-Indonesia</strong>
    yang beradu kemampuan dalam merancang dan membangun
    website sekolah berbasis teknologi cloud modern.
  </blockquote>

  <p>
    Pada babak final, seluruh tim mempresentasikan karya mereka di hadapan dewan juri profesional
    yang terdiri dari:
  </p>

  <ul>
    <li><strong>Bonda Sisephaputra, M.Kom.</strong> – Kaprodi S1 Informatika PSDKU Universitas Negeri Surabaya</li>
    <li><strong>Indra Mayati, S.Kom., M.Kom.</strong> – Kaprodi Sistem Informasi Universitas Ciputra Surabaya</li>
    <li><strong>Tri Puspa Rinjeni, S.Kom., M.Kom.</strong> – Dosen Sistem Informasi UPN Veteran Jawa Timur</li>
  </ul>

  <p>
    Dari lebih dari <strong>1.200 peserta</strong> di tahap penyisihan,
    hanya <strong>30 tim terbaik</strong> yang berhasil melaju ke final nasional.
    Tim Imagine Presma tampil menonjol dengan menghadirkan
    website sekolah berbasis cloud yang unggul dari sisi
    <strong>UI/UX, performa server, keamanan data</strong>,
    serta <strong>manajemen infrastruktur digital</strong>.
  </p>

  <h3 class="text-purple-700">🏆 Daftar Pemenang JHIC 2025</h3>

  <ul>
    <li>🥇 <strong>Juara 1:</strong> Semicolon – SMK Telkom Sidoarjo</li>
    <li>🥈 <strong class="text-purple-600">Juara 2:</strong> Imagine Presma – Kolaborasi SMK & SMA Prestasi Prima</li>
    <li>🥉 <strong>Juara 3:</strong> Aicademy – SMK Telkom Purwokerto</li>
  </ul>

  <h3 class="text-purple-700">👨‍💻 Tim Kolaborasi Imagine Presma</h3>

  <p>
    Keunikan Tim Imagine Presma terletak pada kolaborasi lintas jenjang antara siswa
    <strong>SMK Prestasi Prima</strong> dan <strong>SMA Prestasi Prima</strong>,
    yang menyatukan kompetensi teknis, kreativitas, serta sudut pandang akademik.
  </p>

  <ol>
    <li><strong>Muhammad Aulia Ardy Al Banna</strong> (X PPLG 1 – SMK)</li>
    <li><strong>Rafael Abimanyu</strong> (XI PPLG 1 – SMK)</li>
    <li><strong>Zwingli Savanarola Lubis</strong> (XI PPLG 1 – SMK)</li>
    <li><strong>Andi Gibran</strong> (XI PPLG 2 – SMK)</li>
    <li>
      <strong>Marchia Diandra Gusti</strong> (XI 8 – SMA)  
      <span class="text-gray-600 italic">
        sebagai representasi kolaborasi lintas jenjang SMA Prestasi Prima
      </span>
    </li>
  </ol>

  <p>
    General Manager Jagoan Hosting,
    <strong>Andy Novianto, S.Ikom., M.M.</strong>,
    menyampaikan bahwa JHIC tidak hanya berfokus pada kompetisi,
    tetapi juga sebagai wadah pembinaan agar siswa SMK dan SMA
    dapat belajar langsung dari industri serta menghasilkan
    karya digital yang relevan dan berdampak.
  </p>

  <p>
    Sebelum babak final, seluruh peserta mengikuti
    <strong>bootcamp intensif</strong>
    yang membekali mereka dengan pemahaman mendalam terkait
    teknologi cloud, keamanan website, serta optimasi performa
    menggunakan ekosistem <strong>Jagoan Cloud</strong>.
  </p>

  <div class="mt-6 p-5 bg-purple-50 border border-purple-200 rounded-xl">
    <p class="font-semibold text-purple-700 mb-2">
      🎉 Simbol Kolaborasi & Prestasi
    </p>
    <p>
      Prestasi ini menjadi simbol keberhasilan kolaborasi antara
      <strong>SMK dan SMA Prestasi Prima</strong>
      dalam mencetak generasi muda yang adaptif, inovatif,
      dan siap menghadapi tantangan
      <strong>Industri 4.0 dan transformasi digital</strong>.
    </p>
  </div>

  <p class="mt-6 font-semibold text-center text-purple-700">
    Selamat kepada Tim Imagine Presma atas raihan
    <strong>Juara 2 Nasional JHIC 2025</strong>.
    Kolaborasi hari ini, inovasi untuk masa depan! 🚀
  </p>

</article>',
                'published_at' => Carbon::parse('2025-11-08 20:00:00'),
                'created_at' => Carbon::parse('2025-11-08 20:00:00'),
                'updated_at' => Carbon::parse('2025-11-08 20:00:00'),
            ],
            [
                'id' => 7,
                'category_id' => 5,
                'title' => 'Peringatan Maulid Nabi Muhammad SAW 1447 H di SMA Prestasi Prima',
                'slug' => 'peringatan-maulid-nabi-muhammad-saw-1447-h-di-smk-prestasi-prima',
                'thumbnail' => 'uploads/thumbnails/1760922773_🌙✨ Selamat Memperingati Maulid Nabi Muhammad SAW ✨🌙12 Rabiul Awal 1447 HHari penuh berkah unt.webp',
                'excerpt' => null,
                'content' => "Dalam rangka memperingati Maulid Nabi Muhammad SAW 12 Rabiul Awal 1447 H, SMA Prestasi Prima menyelenggarakan kegiatan penuh makna sebagai bentuk rasa syukur dan cinta kepada Rasulullah.\r\n\r\nMelalui kegiatan ini, seluruh warga sekolah diajak untuk meneladani akhlak mulia Nabi Muhammad SAW — mulai dari kejujuran, kasih sayang, hingga semangat menebarkan kebaikan kepada sesama.\r\n\r\nPeringatan Maulid Nabi juga menjadi momen penting untuk memperkuat nilai spiritual, mempererat silaturahmi antar siswa, guru, dan staf, serta menanamkan semangat religius dalam kehidupan sehari-hari.\r\n\r\nDengan tema dan semangat kebersamaan, kegiatan ini diharapkan dapat menumbuhkan karakter siswa yang berakhlak mulia, berempati, dan menjadi generasi yang membawa keberkahan bagi lingkungan sekitarnya.",
                'published_at' => null,
                'created_at' => Carbon::parse('2025-10-19 13:01:32'),
                'updated_at' => Carbon::parse('2025-10-19 18:12:53'),
            ],
            [
                'id' => 8,
                'category_id' => 3,
                'title' => 'SMK Prestasi Prima Rilis Film Pendek “Jejak Satu Kak” Karya Oren’s Studio Production',
                'slug' => 'smk-prestasi-prima-rilis-film-pendek-jejak-satu-kak-karya-orens-studio-production',
                'thumbnail' => 'uploads/thumbnails/1760922755_SMK Prestasi Prima Rilis Film Pendek “Jejak Satu Kak” Karya Oren’s Studio Production.jpeg',
                'excerpt' => null,
                'content' => "Jakarta Timur, 10 September 2025 — Siswa-siswi SMK Prestasi Prima kembali menorehkan karya inspiratif di bidang perfilman melalui perilisan film pendek berjudul “Jejak Satu Kak”. Film ini diproduksi oleh Oren’s Studio Production 2025, yang merupakan kelompok produksi dari jurusan Broadcasting dan Film (BCF) SMK Prestasi Prima, Jakarta Timur, DKI Jakarta.\r\n\r\nFilm berdurasi singkat ini mengisahkan perjalanan Kirana, seorang siswi SMA yang memiliki kecintaan mendalam terhadap tari tradisional Indonesia. Kirana dikenal sebagai penari muda yang bersemangat dan sering mengikuti berbagai ajang perlombaan tari. Namun, meski telah berulang kali mencoba, ia belum pernah berhasil membawa pulang piala kemenangan. Kegigihan Kirana diuji ketika sebuah kecelakaan tragis menimpanya beberapa hari sebelum lomba besar yang sudah lama ia impikan. Akibat insiden itu, ia harus dirawat di rumah sakit dan sempat kehilangan semangat untuk kembali menari.\r\n\r\nNamun, kisah film ini berubah penuh haru ketika sebuah keajaiban kecil terjadi — panitia lomba mengumumkan adanya perubahan aturan yang membuat Kirana tetap memenuhi syarat penilaian. Tanpa diduga, ia diumumkan sebagai Juara 1 Lomba Tari Tradisional. Momen ini menjadi titik balik bagi Kirana, yang akhirnya kembali menari dengan semangat baru, melampaui batas fisik dan emosional yang sempat menahannya. Dalam pesan penutup film, Kirana menyampaikan rasa terima kasih atas dukungan teman-teman, keluarga, dan para guru yang tak henti memberi doa dan semangat.\r\n\r\n“Jejak Satu Kak bukan hanya kisah tentang menari, tetapi tentang keteguhan hati dan makna tidak menyerah,” ujar Sir Ilham, guru pembimbing jurusan Broadcasting & Film, yang turut mendampingi proses produksi film ini. Ia menambahkan bahwa seluruh proses — mulai dari penulisan naskah, pengambilan gambar, penyuntingan, hingga publikasi — dilakukan sepenuhnya oleh siswa dengan semangat kolaborasi dan profesionalisme tinggi.\r\n\r\nFilm ini resmi dirilis pada 10 September 2025 dan tayang perdana di kanal YouTube resmi SMK Prestasi Prima serta diputar di aula sekolah dalam kegiatan apresiasi karya siswa. Dengan karya ini, SMK Prestasi Prima kembali membuktikan komitmennya untuk menumbuhkan kreativitas siswa dalam dunia seni, teknologi, dan media digital.",
                'published_at' => null,
                'created_at' => Carbon::parse('2025-10-19 13:02:58'),
                'updated_at' => Carbon::parse('2025-10-19 18:12:35'),
            ],
            [
                'id' => 11,
                'category_id' => 1,
                'title' => 'Ratusan Siswa SMA-SMK Prestasi Prima Hadiri Sosialisasi Jalur Masuk UPNVJ',
                'slug' => 'ratusan-siswa-sma-smk-prestasi-prima-hadiri-sosialisasi-jalur-masuk-upnvj',
                'thumbnail' => 'uploads/thumbnails/520.webp',
                'excerpt' => null,
                'content' => "Memasuki masa penerimaan mahasiswa baru, Universitas Pembangunan Nasional “Veteran” Jakarta (UPNVJ) kembali menerima undangan sosialisasi tentang jalur masuk UPNVJ yang berlangsung di SMA-SMK Prestasi Prima, Jakarta Timur, pada Senin, 24 Februari 2025.\r\n\r\nTidak hanya ratusan siswa, sosialisasi ini juga dihadiri perwakilan guru dari SMA-SMK Prestasi Prima.\r\n\r\nAntuasiasme luar biasa juga ditunjukkan para siswa/siswi yang serentak menyimak penjelasan dari Kepala Humas UPNVJ Dr Witanti Prihatiningsih dan Anisa Triselia selaku staf Humas UPNVJ saat menjelaskan tentang fakultas juga jalur masuk yang tersedia di UPNVJ.\r\n\r\nAgenda ini bersifat dua arah, sehingga, narasumber dan peserta bisa melakukan tanya jawab seara langsung dengan tujuan membantu siswa memahami proses penerimaan jalur masuk dan memberikan pemahaman komprehensif kepada siswa tentang tahapan, syarat, dan strategi mengikuti seleksi masuk UPNVJ 2025. \r\n\r\n“Sosialisasi semacam ini penting untuk membantu siswa mempersiapkan diri dengan baik dalam menghadapi seleksi masuk perguruan tinggi. Melalui kegiatan ini, siswa dapat memperoleh informasi yang akurat mengenai prosedur dan mekanisme masuk UPNVJ, serta strategi pemilihan program studi yang mereka minati,” ujar Witanti.\r\n\r\nTidak hanya UPNVJ, puluhan perguruan tinggi negeri dan swasta lainnya juga ikut meramaikan sosialisasi penerimaan mahasiswa baru yang digelar oleh SMA-SMK Prestasi Prima. Diharapkan lewat acara ini, penyebaran informasi dan kepeminatan siswauntuk naik ke jenjang perguruan tinggi dapat meningkat.",
                'published_at' => null,
                'created_at' => Carbon::parse('2025-10-19 13:04:51'),
                'updated_at' => Carbon::parse('2025-10-19 18:10:40'),
            ],
            [
                'id' => 12,
                'category_id' => 4,
                'title' => 'Sejarah Baru! Prestasi Prima Akhirnya Tembus Fantastic Four!',
                'slug' => 'sejarah-baru-prestasi-prima-akhirnya-tembus-fantastic-four',
                'thumbnail' => 'uploads/thumbnails/1760922456_(Fantastic Four) SMA Prestasi Prima.jpg',
                'excerpt' => null,
                'content' => "SMA Prestasi Prima berhasil mengamankan tiket Fantastic Four pertama sepanjang sejarah usai menyingkirkan SMA 48 Jakarta (Fourtight) di babak delapan besar Honda DBL with Kopi Good Day 2025 East Jakarta dengan skor akhir 33-18.\r\n\r\nSang kapten, Andrew Destinov Syahailatua (Andrew), menjadi motor kemenangan dengan torehan 8 poin, 4 rebound, dan 1 assist. Ternyata, lolos ke Fantastic Four memang sudah mereka prediksi sejak awal menginjakkan kaki ke lapangan.\r\n\r\nUniknya, pada pertandingan kali ini kunci kemenangan Prestasi Prima justru datang dari pemain yang turun dari bangku cadangan. Hal itu diakui langsung oleh Andrew.\r\n\r\n\"Kunci kemenangannya udah pasti dari bench yang berhasil step up hari ini,\" katanya.\r\n\r\nJarak skor yang tercipta pun terbilang cukup jauh. Menurut Andrew, hal itu tak lepas dari mental pantang kalah yang semakin kuat berkat dorongan motivasi para pemain senior.\r\n\r\n\"Mental gak mau kalah karena setengah dari kita yang last year. Jadi di tahun terakhir kita, kita mau ngasih yang terbaik,\" ujar Andrew.\r\n\r\nSetiap permainan apik yang mereka suguhkan di hadapan penonton tentu lahir dari rangkaian kerja keras.\r\n\r\nAndrew menegaskan bahwa semua pemain Prestasi Prima punya komitmen tinggi terhadap latihan, yang digelar empat kali seminggu selama dua bulan menjelang kompetisi DBL.",
                'published_at' => null,
                'created_at' => Carbon::parse('2025-10-19 13:05:24'),
                'updated_at' => Carbon::parse('2025-10-19 18:07:36'),
            ],
            [
    'id' => 13,
    'category_id' => 5,
    'title' => 'SMA Prestasi Prima Terima Program Makan Bergizi Gratis dari Pemerintah',
    'slug' => 'sma-prestasi-prima-terima-program-makan-bergizi-gratis-dari-pemerintah',
    'thumbnail' => 'uploads/thumbnails/1760879945_SMK Prestasi Prima Terima Program Makan Bergizi Gratis dari Pemerintah.jpeg',
    'excerpt' => null,
    'content' => '
        <p>
            <strong>Jakarta Timur, 19 Oktober 2025</strong> — 
            <strong>SMA Prestasi Prima</strong> menjadi salah satu sekolah swasta berakreditasi A
            yang menerima <strong>Program Makan Bergizi Gratis (MBG)</strong> dari pemerintah pusat.
            Program nasional yang digagas oleh Presiden
            <strong>Prabowo Subianto</strong> ini resmi diluncurkan di sejumlah sekolah
            di wilayah Jakarta Timur, termasuk SMA Prestasi Prima yang berlokasi di
            <strong>Cilangkap</strong>.
        </p>

        <p>
            Kepala Sekolah <strong>SMA Prestasi Prima</strong>, 
            <strong>Sir David</strong>, menyampaikan apresiasi atas terselenggaranya
            program tersebut. Ia menilai program MBG merupakan bentuk perhatian nyata
            pemerintah terhadap <strong>kesehatan dan kualitas pendidikan peserta didik</strong>.
        </p>

        <blockquote>
            <p>
                “Kami merasa sangat bersyukur dan berterima kasih kepada pemerintah,
                khususnya Bapak Presiden Prabowo Subianto, atas perhatian besar beliau
                terhadap dunia pendidikan. Program makan bergizi gratis ini bukan hanya
                sekadar menyediakan makanan, tetapi juga menjadi sumber energi dan
                motivasi bagi siswa-siswi kami untuk belajar dan berprestasi lebih baik,”
                ujar <strong>Sir David</strong> saat ditemui di aula sekolah.
            </p>
        </blockquote>

        <p>
            Menurut Sir David, program MBG memberikan dampak langsung terhadap
            <strong>konsentrasi dan semangat belajar siswa</strong>. Ia mengungkapkan
            bahwa sebelum adanya program ini, sebagian siswa datang ke sekolah tanpa
            sarapan akibat keterbatasan ekonomi keluarga.
        </p>

        <p>
            “Kini kami melihat perubahan yang signifikan. Siswa menjadi lebih fokus,
            lebih aktif di kelas, dan tidak mudah lelah. Suasana belajar pun terasa
            jauh lebih positif. Ini membuktikan bahwa pemenuhan gizi memiliki
            pengaruh besar terhadap kualitas pembelajaran,” tambahnya.
        </p>

        <p>
            Selain <strong>SMA Prestasi Prima</strong>, sejumlah sekolah lain di wilayah
            Jakarta Timur juga menerima program MBG tahap pertama ini. Setiap sekolah
            mendapatkan pasokan makanan bergizi yang terdiri dari:
        </p>

        <ul>
            <li>Nasi</li>
            <li>Lauk pauk bernutrisi</li>
            <li>Sayuran segar</li>
            <li>Buah-buahan</li>
            <li>Susu</li>
        </ul>

        <p>
            Dalam pelaksanaannya, pemerintah bekerja sama dengan berbagai pihak,
            termasuk <strong>UMKM lokal</strong>, untuk memastikan seluruh bahan makanan
            diproses secara higienis dan memenuhi <strong>standar gizi nasional</strong>.
        </p>

        <p>
            Menutup pernyataannya, Sir David berharap program ini dapat terus berlanjut
            dan diperluas jangkauannya ke lebih banyak sekolah di Indonesia.
        </p>

        <p>
            “Dengan tubuh yang sehat dan pikiran yang kuat, kami optimistis siswa-siswi
            Indonesia akan tumbuh menjadi generasi unggul dan siap menyongsong
            <strong>Indonesia Emas 2045</strong>,” tutupnya.
        </p>
    ',
    'published_at' => null,
    'created_at' => Carbon::parse('2025-10-19 13:06:07'),
    'updated_at' => Carbon::parse('2025-10-19 18:10:13'),
],

            [
    'id' => 14,
    'category_id' => 5,
    'title' => 'SMA Prestasi Prima Resmikan Kantin Baru di Belakang Sekolah, Sediakan Meja dan Kursi Nyaman untuk Siswa',
    'slug' => 'sma-prestasi-prima-resmikan-kantin-baru-di-belakang-sekolah-sediakan-meja-dan-kursi-nyaman-untuk-siswa',
    'thumbnail' => 'uploads/thumbnails/1760922592_SMK Prestasi Prima Resmikan Kantin Baru di Belakang Sekolah, Sediakan Meja dan Kursi Nyaman untuk Siswa.jpeg',
    'excerpt' => null,
    'content' => '
        <p>
            <strong>Jakarta Timur, 4 Oktober 2025</strong> — 
            Dalam upaya meningkatkan kenyamanan dan ketertiban lingkungan sekolah,
            <strong>SMA Prestasi Prima</strong> resmi meresmikan kantin baru yang
            berlokasi di belakang gedung sekolah. Kehadiran fasilitas ini menjadi
            solusi atas keterbatasan tempat duduk di kantin utama yang sebelumnya
            kerap membuat siswa makan di lorong-lorong kelas.
        </p>

        <p>
            Kantin baru tersebut dilengkapi dengan <strong>meja dan kursi yang tertata rapi</strong>
            serta area yang lebih luas sehingga mampu menampung lebih banyak siswa
            pada jam istirahat. Dengan suasana yang lebih terbuka, bersih, dan nyaman,
            pihak sekolah berharap kebiasaan makan di area yang kurang tepat,
            seperti di depan kelas atau di tangga, tidak lagi terjadi.
        </p>

        <blockquote>
            <p>
                “Kami ingin seluruh siswa memiliki tempat yang layak, bersih, dan nyaman
                untuk makan. Dengan adanya kantin baru ini, aktivitas makan siang dapat
                berlangsung lebih tertib, nyaman, dan tentunya lebih higienis,”
                ujar <strong>Sir David</strong>, selaku guru bidang Kesiswaan
                <strong>SMA Prestasi Prima</strong>.
            </p>
        </blockquote>

        <p>
            Sir David menambahkan bahwa penambahan fasilitas kantin ini juga merupakan
            bagian dari upaya pembinaan <strong>karakter disiplin dan tanggung jawab siswa</strong>.
            Sekolah tidak hanya menyediakan sarana, tetapi juga menanamkan kesadaran
            kepada siswa untuk menjaga kebersihan dan ketertiban bersama.
        </p>

        <p>
            “Kami terus berupaya menciptakan lingkungan belajar yang positif.
            Dengan penataan area makan yang lebih baik, diharapkan siswa dapat
            membiasakan diri untuk hidup tertib, bertanggung jawab, dan peduli
            terhadap lingkungan sekolah,” tuturnya.
        </p>

        <p>
            Pihak sekolah menyampaikan bahwa dengan hadirnya kantin baru ini,
            <strong>SMA Prestasi Prima</strong> kini memiliki dua area kantin aktif
            yang siap melayani kebutuhan makan dan minum siswa selama jam istirahat.
            Keberadaan fasilitas ini turut menciptakan suasana sekolah yang
            lebih nyaman, tertib, dan mendukung semangat belajar siswa setiap hari.
        </p>
    ',
    'published_at' => null,
    'created_at' => Carbon::parse('2025-10-19 13:06:47'),
    'updated_at' => Carbon::parse('2025-10-19 18:09:52'),
],
            [
                'id' => 17,
                'category_id' => 4,
                'title' => 'Ultras Presma Raih Juara 1 Most Favorite Supporter DBL 2025 East Jakarta',
                'slug' => 'ultras-presma-raih-juara-1-most-favorite-supporter-dbl-2025-east-jakarta',
                'thumbnail' => 'uploads/thumbnails/1760922540_images (1).jfif',
                'excerpt' => null,
                'content' => "Prestasi membanggakan kembali diraih oleh Ultras Presma! Dalam ajang DBL 2025 East Jakarta, SMA Prestasi Prima Jakarta berhasil meraih Juara 1 Most Favorite Supporter berkat semangat, kreativitas, dan kekompakan luar biasa dari seluruh anggota Ultras Presma.\r\n\r\nDengan yel-yel penuh energi, koreografi megah, dan semangat yang membara, Ultras Presma berhasil menciptakan atmosfer yang luar biasa di setiap pertandingan. Mereka bukan hanya sekadar suporter, tetapi juga simbol kebanggaan, solidaritas, dan identitas kuat SMA Prestasi Prima Jakarta.\r\n\r\nGelar ini menjadi bukti nyata bahwa dukungan tulus dan kebersamaan dapat membawa prestasi, bukan hanya di lapangan, tetapi juga di luar arena pertandingan. Semangat “To Get Her I Can’t, But Together We Can” benar-benar hidup di setiap teriakan dan langkah Ultras Presma, menjadikan mereka inspirasi bagi seluruh siswa untuk terus berprestasi dan menjaga kekompakan.",
                'published_at' => null,
                'created_at' => Carbon::parse('2025-10-19 13:10:06'),
                'updated_at' => Carbon::parse('2025-10-19 18:09:00'),
            ],
            [
                'id' => 21,
                'category_id' => 1,
                'title' => 'SMA Prestasi Prima Perkuat Pendidikan Berkualitas melalui Kurikulum Nasional, Internasional, dan Pendekatan STEAM',
                'slug' => 'SMA Prestasi Prima Perkuat Pendidikan Berkualitas melalui Kurikulum Nasional, Internasional, dan Pendekatan STEAM',
                'thumbnail' => 'uploads/thumbnails/DSC00052.JPG',
                'excerpt' => null,
                'content' => "SMA Prestasi Prima merupakan sekolah swasta berakreditasi A yang berlokasi di Cilangkap, Jakarta Timur. Sebagai institusi pendidikan menengah atas, SMA Prestasi Prima menyelenggarakan program pendidikan 3 tahun yang mengintegrasikan kurikulum nasional dan internasional, guna mempersiapkan peserta didik menghadapi tantangan pendidikan tinggi dan dunia global. Dalam upaya mengakomodasi minat, bakat, serta rencana karier siswa, SMA Prestasi Prima menghadirkan berbagai pilihan program peminatan, baik di bidang sains maupun sosial. Pada Program IPA (Ilmu Pengetahuan Alam), pembelajaran difokuskan pada mata pelajaran Matematika, Fisika, Kimia, dan Biologi. Program ini dirancang untuk siswa yang bercita-cita melanjutkan studi dan berkarier di bidang Kedokteran, Teknik, Farmasi, maupun Sains Murni, dengan tujuan universitas unggulan seperti Fakultas Kedokteran Universitas Indonesia (FK UI), Institut Teknologi Bandung (ITB), Institut Teknologi Sepuluh Nopember (ITS), dan Universitas Gadjah Mada (UGM). Sementara itu, Program IPS (Ilmu Pengetahuan Sosial) menitikberatkan pembelajaran pada Ekonomi, Sosiologi, Geografi, dan Sejarah. Program ini membuka peluang karier di bidang Ekonomi, Hukum, Bisnis, hingga Politik, dengan universitas tujuan antara lain FEB UI, FH UGM, dan FISIP Universitas Padjadjaran (Unpad). Menjawab kebutuhan pendidikan global, SMA Prestasi Prima juga menyediakan Program IPA Bilingual dan IPS Bilingual. Pada program IPA Bilingual, kurikulum sains diajarkan menggunakan Bahasa Indonesia dan Bahasa Inggris, sehingga siswa tidak hanya unggul secara akademik tetapi juga memiliki kompetensi bahasa yang kuat. Lulusan program ini dipersiapkan untuk melanjutkan studi di program bilingual atau internasional, seperti FK UI (Bilingual), ITB Program Internasional, hingga universitas luar negeri. Adapun Program IPS Bilingual dirancang dengan pengantar bilingual dan perspektif global, khususnya dalam kajian ekonomi, sosial, dan kebijakan publik. Program ini membuka peluang karier di bidang Hubungan Internasional, Ekonomi, Hukum, dan Bisnis Internasional, dengan tujuan pendidikan tinggi seperti FISIP UI (Bilingual), FH UGM Program Internasional, serta universitas luar negeri. Dalam pelaksanaannya, SMA Prestasi Prima menerapkan Kurikulum Merdeka berbasis STEAM (Science, Technology, Engineering, Art, and Mathematics). Pendekatan ini diintegrasikan dengan penguatan Profil Pelajar Pancasila, nilai kewirausahaan, serta literasi digital sebagai bekal menghadapi tantangan abad ke-21. Melalui pembelajaran yang adaptif dan kontekstual, penguatan karakter serta kreativitas, dan orientasi masa depan serta global, SMA Prestasi Prima berkomitmen untuk mencetak lulusan yang tidak hanya unggul secara akademik, tetapi juga siap bersaing di tingkat nasional maupun internasional.",
                'published_at' => null,
                'created_at' => Carbon::parse('2025-10-19 13:13:00'),
                'updated_at' => Carbon::parse('2025-10-19 18:07:59'),
            ],
        ]);
    }
}
