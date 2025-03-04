<?php

namespace App\Http\Controllers;

use App\Models\DataAlumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class DataAlumniController extends Controller
{
    public function index()
    {
        return view('admin.konfigurasi.dataalumni.index');
    }

    public function data()
    {
        $dataalumni = DataAlumni::all();

        return DataTables::of($dataalumni)
            ->addIndexColumn()
            ->addColumn('nama', function ($dataalumni) {
                return $dataalumni->nama;
            })
            ->addColumn('tahun', function ($dataalumni) {
                return $dataalumni->tahun;
            })
            ->addColumn('action', function ($dataalumni) {
                $editUrl = route('dataalumni.edit', $dataalumni->dataalumni_id);
                $deleteUrl = route('dataalumni.destroy', $dataalumni->dataalumni_id);

                return '
                    <button onclick="editDataAlumni(`' . $editUrl . '`)" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></button>
                    <button onclick="deleteDataAlumni(`' . $deleteUrl . '`, `' . $dataalumni->nama . '`)" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                ';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required|string|max:20000',
            'tahun' => 'required|string|max:20000',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'message' => 'Input tidak valid.'], 422);
        }

        $validatedData = $request->only('nama', 'tahun');

        $dataalumni = DataAlumni::create($validatedData);

        return response()->json(['message' => 'Data alumni berhasil ditambahkan', 'data' => $dataalumni], 200);
    }

    public function detail(dataalumni $dataalumni)
    {
        return response()->json(['data' => $dataalumni]);
    }
    public function edit(dataalumni $id)
    {
        return response()->json(['data' => $id]);
    }

    public function update(Request $request, dataalumni $dataalumni)
    {
        $rules = [
            'nama' => 'required|string|max:20000',
            'tahun' => 'required|string|max:20000',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'message' => 'Input tidak valid.'], 422);
        }

        $validatedData = $request->only('nama', 'tahun');

        $dataalumni->update($validatedData);

        return response()->json(['message' => 'Data alumni berhasil diupdate', 'data' => $dataalumni], 200);
    }

    public function show(dataalumni $dataalumni)
    {
        return response()->json(['data' => $dataalumni]);
    }

    public function destroy($dataalumni)
    {
        $dataalumni = DataAlumni::findOrFail($dataalumni);
        $dataalumni->delete();

        return response()->json(['message' => 'Data Alumni berhasil dihapus'], 200);
    }
}
