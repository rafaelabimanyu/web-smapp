<?php

namespace App\Http\Controllers\prestasiprima;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class KaryaProyekController extends Controller
{
    /**
     * Menampilkan halaman utama Karya & Proyek Siswa
     */
    public function index()
    {
        $projects = collect([
            // isi data nanti
        ]);

        return view('prestasiprima.pages.karya-proyek', compact('projects'));
    }

    /**
     * Menampilkan detail dari proyek tertentu
     */
    public function show($slug)
    {
        $projects = collect([
            // isi data proyek nanti
        ]);

        $project = $projects->firstWhere('slug', $slug);

        if (!$project) {
            abort(404);
        }

        return view('prestasiprima.pages.karya-proyek-detail', compact('project'));
    }
}

//controller sebelumnya