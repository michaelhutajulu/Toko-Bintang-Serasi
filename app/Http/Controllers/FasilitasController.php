<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class FasilitasController extends Controller
{
    public function index()
    {
        return view('admin.konfigurasi.fasilitas.index');
    }

    public function data()
    {
        $fasilitas = Fasilitas::all();
        return DataTables::of($fasilitas)
            ->addIndexColumn()
            ->addColumn('fasilitas_image', function ($fasilitas) {
                return '<img src="' . asset('images/fasilitas/' . $fasilitas->fasilitas_image) . '" class="img-thumbnail" width="100">';
            })
        // ->addColumn('fasilitas_image', function ($fasilitas) {
        //     return '<img src="' . asset('storage/' . $fasilitas->fasilitas_image) . '" class="img-thumbnail" width="100">';
        // })
            ->addColumn('action', function ($fasilitas) {
                $editUrl = route('fasilitas.edit', $fasilitas->fasilitas_id);
                $deleteUrl = route('fasilitas.destroy', $fasilitas->fasilitas_id);

                return '
                    <button onclick="editDataFasilitas(`' . $editUrl . '`)" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></button>
                    <button onclick="deleteDataFasilitas(`' . $deleteUrl . '`, `' . $fasilitas->nama . '`)" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                ';
            })
            ->rawColumns(['fasilitas_image', 'action'])
            ->make(true);
    }

    public function store(Request $request)
    {
        $rules = [
            'fasilitas_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:3048',
            'nama' => 'required|string|max:20000',
            'deskripsi' => 'required|string|max:20000',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'message' => 'Input tidak valid.'], 422);
        }

        $fasilitas = new Fasilitas();
        $fasilitas->fill($validator->validated());

        if ($request->hasFile('fasilitas_image')) {
            $imageName = time() . '_' . $request->file('fasilitas_image')->getClientOriginalName();
            $request->file('fasilitas_image')->move(public_path('images/fasilitas'), $imageName);
            $fasilitas->fasilitas_image = $imageName;
        }

        // foreach (['fasilitas_image'] as $image) {
        //     if ($request->hasFile($image)) {
        //         $fasilitas->$image = $request->file($image)->store('images/fasilitas', 'public');
        //     }
        // }

        $fasilitas->save();

        return response()->json(['message' => 'Fasilitas berhasil ditambahkan', 'data' => $fasilitas], 200);
    }

    public function edit($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        return response()->json($fasilitas);
    }

    public function update(Request $request, $id)
    {
        $fasilitas = Fasilitas::findOrFail($id);

        $validated = $request->validate([
            'fasilitas_image' => 'image',
            'nama' => 'required|string|max:20000',
            'deskripsi' => 'required|string|max:20000',
        ]);

        $fasilitas->fill($validated);

        if ($request->hasFile('fasilitas_image')) {
            $imageName = time() . '_' . $request->file('fasilitas_image')->getClientOriginalName();
            $request->file('fasilitas_image')->move(public_path('images/fasilitas'), $imageName);
            if ($fasilitas->fasilitas_image) {
                $oldImagePath = public_path('images/fasilitas/' . $fasilitas->fasilitas_image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            $fasilitas->fasilitas_image = $imageName;
        }

        // foreach (['fasilitas_image'] as $image) {
        //     if ($request->hasFile($image)) {
        //         Storage::disk('public')->delete($fasilitas->$image);
        //         $fasilitas->$image = $request->file($image)->store('images/fasilitas', 'public');
        //     }
        // }

        $fasilitas->save();

        return response()->json(['success' => 'Fasilitas berhasil diupdate.', 'data' => $fasilitas]);
    }

    public function show(Fasilitas $id)
    {
        $id->image_url = asset('images/fasilitas/' . $id->image);
        return response()->json(['data' => $id]);
    }

    // public function show(Fasilitas $id)
    // {
    //     $id->image_url = asset('storage/' . $id->image);
    //     return response()->json(['data' => $id]);
    // }

    public function destroy($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);

        $imagePath = public_path('images/fasilitas/' . $fasilitas->fasilitas_image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        // foreach (['fasilitas_image'] as $image) {
        //     Storage::disk('public')->delete($fasilitas->$image);
        // }

        $fasilitas->delete();

        return response()->json(['success' => 'Fasilitas berhasil dihapus.']);
    }
}
