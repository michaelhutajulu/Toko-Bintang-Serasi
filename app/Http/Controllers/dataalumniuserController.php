<?php

namespace App\Http\Controllers;
use App\Models\DataAlumni;
use Illuminate\Http\Request;

class dataalumniuserController extends Controller
{
    public function dataalumniuser()
    {
        $dataalumnis = DataAlumni::all(); 
        return view('user.dataalumniuser', compact('dataalumnis'));
    }
}
