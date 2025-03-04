<?php

namespace App\Http\Controllers;

use App\Models\DataSekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class DataSekolahController extends Controller
{
    public function index()
    {
        return view('admin.konfigurasi.datasekolah.index');
    }

    public function data()
    {
        $datasekolah = DataSekolah::all();

        return DataTables::of($datasekolah)
            ->addIndexColumn()
            ->addColumn('visi', function ($datasekolah) {
                return $datasekolah->visi;
            })
            ->addColumn('misi', function ($datasekolah) {
                return $datasekolah->misi;
            })
            ->addColumn('action', function ($datasekolah) {
                $editUrl = route('datasekolah.edit', $datasekolah->datasekolah_id);
                $deleteUrl = route('datasekolah.destroy', $datasekolah->datasekolah_id);

                return '
                    <button onclick="editDataSekolah(`' . $editUrl . '`)" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></button>
                    <button onclick="deleteDataSekolah(`' . $deleteUrl . '`, `' . $datasekolah->visi . '`)" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                ';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function store(Request $request)
    {
        $rules = [
            'visi' => 'required|string|max:20000',
            'misi' => 'required|string|max:20000',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'message' => 'Maaf, inputan yang Anda masukkan salah. Silakan periksa kembali dan coba lagi'], 422);
        }

        $validatedData = $request->only('visi', 'misi');

        $datasekolah = DataSekolah::create($validatedData);

        return response()->json(['message' => 'Data Sekolah berhasil ditambahkan', 'data' => $datasekolah], 200);
    }

    public function detail(datasekolah $datasekolah)
    {
        return response()->json(['data' => $datasekolah]);
    }

    public function edit(datasekolah $datasekolah)
    {
        return response()->json(['data' => $datasekolah]);
    }

    public function update(Request $request, datasekolah $datasekolah)
    {
        $rules = [
            'visi' => 'required|string|max:20000',
            'misi' => 'required|string|max:20000',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'message' => 'Input tidak valid.'], 422);
        }

        $validatedData = $request->only('visi', 'misi');

        $datasekolah->update($validatedData);

        return response()->json(['message' => 'Data Sekolah berhasil diupdate', 'data' => $datasekolah], 200);
    }

    public function destroy(datasekolah $datasekolah)
    {
        $datasekolah->delete();

        return response()->json(['message' => 'Data berhasil dihapus'], 200);
    }
}
