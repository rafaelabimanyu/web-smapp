<?php

namespace App\Http\Controllers\prestasiprima;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * ======================================================
     * HALAMAN PROGRAM SEKOLAH / KEAHLIAN
     * ======================================================
     * Menampilkan daftar program keahlian atau program unggulan
     * di SMK Prestasi Prima.
     */
    public function index()
    {
        // Jika nanti kamu ingin ambil data dari database,
        // kamu bisa ubah bagian ini menjadi query ke model.
        // Untuk sekarang kita arahkan ke view statis.

        return view('prestasiprima.pages.program.index');
    }

    public function ipa()
    {
        return view('prestasiprima.pages.program.ipa');
    }

    public function ips()
    {
        return view('prestasiprima.pages.program.ips');
    }

    public function bilingual_ipa()
    {
        return view('prestasiprima.pages.program.bilingual_ipa');
    }

    public function bilingual_ips()
    {
        return view('prestasiprima.pages.program.bilingual_ips');
    }

}
