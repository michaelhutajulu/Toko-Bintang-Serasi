<?php

namespace App\Http\Controllers;

use App\Models\Berita;

class BeritasController extends Controller
{
    public function index()
    {
        $berita = Berita::all();
        return view('user.berita.beritauser', compact('berita'));
    }

    public function show($berita_id)
    {
        $berita = Berita::findOrFail($berita_id);
        return view('user.berita.show', compact('berita'));
    }
}
