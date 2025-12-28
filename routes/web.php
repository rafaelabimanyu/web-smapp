<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\prestasiprima\{
    HomepageController,
    GalleryController,
    NewsController,
    SambutanController,
    FaqController,
    StaffController,
    IndustriController,
    ProfileSekolahController,
    EkstrakurikulerController,
    ProgramController,
    PenerimaanSiswaController,
    TestimoniController,
    KegiatanController,
    KaryaProyekController,
    ContactController,
    PrestasiController,
    TrafficController,
    FasilitasController,
    LulusanPtnController
};

/*
|--------------------------------------------------------------------------
| HALAMAN UTAMA
|--------------------------------------------------------------------------
*/
Route::get('/', [HomepageController::class, 'index']);

Route::view('/virtual-tour', 'Tour.VirtualTour')->name('virtual-tour');

/*
|--------------------------------------------------------------------------
| TENTANG
|--------------------------------------------------------------------------
*/
Route::prefix('tentang')->group(function () {
    Route::get('/program', [ProgramController::class, 'index'])->name('program');
        Route::get('/program/ipa', [ProgramController::class, 'ipa'])->name('program.ipa');
        Route::get('/program/ips', [ProgramController::class, 'ips'])->name('program.ips');
        Route::get('/program/bilingual-ipa', [ProgramController::class, 'bilingual_ipa'])->name('program.bilingual_ipa');
        Route::get('/program/bilingual-ips', [ProgramController::class, 'bilingual_ips'])->name('program.bilingual_ips');
    Route::get('/profile-sekolah', [ProfileSekolahController::class, 'index'])->name('prestasiprima.profile-sekolah');
    Route::get('/staffmanagement', [StaffController::class, 'index'])->name('staff');
    Route::get('/sambutan', [SambutanController::class, 'index'])->name('sambutan');
    Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas');
});

/*
|--------------------------------------------------------------------------
| SISWA
|--------------------------------------------------------------------------
*/
Route::prefix('siswa')->group(function () {
    Route::get('/prestasi', [PrestasiController::class, 'index'])->name('prestasi');
    Route::get('/ekstrakurikuler', [EkstrakurikulerController::class, 'index'])
        ->name('ekstrakurikuler');

    Route::get('/karya-proyek', [KaryaProyekController::class, 'index'])
        ->name('karya-proyek');

    Route::get('/karya-proyek/{slug}', [KaryaProyekController::class, 'show'])
        ->name('karya-proyek.show');
});

/*
|--------------------------------------------------------------------------
| INFORMASI
|--------------------------------------------------------------------------
*/
Route::prefix('informasi')->group(function () {
    Route::get('/faq', [FaqController::class, 'index'])->name('faq');

    Route::get('/industri', [IndustriController::class, 'index'])->name('industri');
    Route::get('/industri/{slug}', [IndustriController::class, 'show'])
        ->name('industri.show');

    Route::get('/testimoni', [TestimoniController::class, 'index'])->name('testimoni');
    
    Route::get('/penerimaan-siswa', function() {
        return redirect('https://spmb.prestasiprima.sch.id/');
    })->name('penerimaan.siswa');

    Route::get('/traffic', [TrafficController::class, 'index'])->name('traffic');
    Route::post('/traffic/calculate', [TrafficController::class, 'calculateDistance'])
        ->name('traffic.calculate');

    Route::get('/lulusan-ptn', [LulusanPtnController::class, 'index'])
        ->name('lulusan-ptn');
});

/*
|--------------------------------------------------------------------------
| DOKUMENTASI
|--------------------------------------------------------------------------
*/
Route::prefix('dokumentasi')->group(function () {

    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

    Route::prefix('berita')->name('berita.')->group(function () {
        Route::get('/', [NewsController::class, 'index'])->name('index');
        Route::get('/kategori/{slug}', [NewsController::class, 'category'])->name('kategori');
        Route::get('/{slug}', [NewsController::class, 'show'])->name('detail');
    });

    Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan');
});

/*
|--------------------------------------------------------------------------
| KONTAK
|--------------------------------------------------------------------------
*/
Route::get('/presmacontact', [ContactController::class, 'index'])->name('presmacontact');
Route::post('/presmacontact/send', [ContactController::class, 'sendMessage'])->name('presmacontact.send');