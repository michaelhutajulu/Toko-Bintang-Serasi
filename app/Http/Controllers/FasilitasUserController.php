<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;

class FasilitasUserController extends Controller
{
    // Display a listing of the facilities
    public function index()
    {
        $fasilitas = Fasilitas::all(); // Mengambil semua data fasilitas
        return view('user.fasilitasuser', compact('fasilitas'));
    }
}
