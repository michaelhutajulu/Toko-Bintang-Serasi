<?php

namespace App\Http\Controllers;

use App\Models\DataSekolah;

class datasekolahuserController extends Controller
{
    public function datasekolahuser()
    {
        $datasekolahuser = DataSekolah::first(); // Assuming there's only one entry for visi and misi
        return view('user.datasekolahuser', compact('datasekolahuser'));
    }

}
