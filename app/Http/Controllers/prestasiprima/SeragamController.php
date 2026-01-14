<?php

namespace App\Http\Controllers\PrestasiPrima;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeragamController extends Controller
{
    /**
     * Menampilkan halaman Seragam Siswa
     */
    public function index()
    {
        return view('prestasiprima.pages.seragam');
    }
}
