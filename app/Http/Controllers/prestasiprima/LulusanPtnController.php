<?php

namespace App\Http\Controllers\prestasiprima;

use App\Http\Controllers\Controller;
use App\Models\prestasiprima\Industri;

class LulusanPtnController extends Controller
{
    // Halaman Lulusan PTN
    public function index()
    {
        return view('prestasiprima.pages.lulusan-ptn');
    }

    // Opsional: detail industri
    public function show($slug)
    {
        $industri = Industri::where('slug', $slug)->firstOrFail();
        return view('prestasiprima.pages.industri_detail', compact('industri'));
    }
}
