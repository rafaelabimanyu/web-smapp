<?php

namespace App\Http\Controllers\prestasiprima;

use App\Http\Controllers\Controller;
use App\Models\prestasiprima\News;

class HomepageController extends Controller
{
    public function index()
    {
        $news = News::latest()->take(3)->get();
        return view('prestasiprima.pages.landing', compact('news'));
    }
}
