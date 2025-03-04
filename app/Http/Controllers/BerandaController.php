<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class BerandaController extends Controller
{
    public function index()
    {
        return view('admin.konfigurasi.beranda.index');
    }

    public function data()
    {
        $beranda = Beranda::all();
        return DataTables::of($beranda)
            ->addIndexColumn()
            ->addColumn('ketua_image', function ($beranda) {
                return '<img src="' . asset('images/beranda/' . $beranda->ketua_image) . '" class="img-thumbnail" width="100">';
            })
            ->addColumn('kepala_image', function ($beranda) {
                return '<img src="' . asset('images/beranda/' . $beranda->kepala_image) . '" class="img-thumbnail" width="100">';
            })

        // ->addColumn('ketua_image', function ($beranda) {
        //     return '<img src="' . asset('/storage/' . $beranda->ketua_image) . '" class="img-thumbnail" width="100">';
        // })
        // ->addColumn('kepala_image', function ($beranda) {
        //     return '<img src="' . asset('/storage/' . $beranda->kepala_image) . '" class="img-thumbnail" width="100">';
        // })
            ->addColumn('action', function ($beranda) {
                $editUrl = route('beranda.edit', ['beranda' => $beranda->beranda_id]);
                $deleteUrl = route('beranda.destroy', ['beranda' => $beranda->beranda_id]);

                return '
                    <button onclick="editBeranda(`' . $editUrl . '`)" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></button>
                    <button onclick="deleteBeranda(`' . $deleteUrl . '`, `' . $beranda->namaketua . '`)" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                ';
            })
            ->rawColumns(['action', 'ketua_image', 'kepala_image'])
            ->make(true);
    }

    public function store(Request $request)
    {
        $rules = [
            'namaketua' => 'required|string|max:20000',
            'ketua' => 'required|string|max:20000',
            'ketua_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:3048',
            'namakepala' => 'required|string|max:20000',
            'kepala' => 'required|string|max:20000',
            'kepala_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:3048',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'message' => 'Input tidak valid.'], 422);
        }

        $beranda = new Beranda();
        $beranda->fill($validator->validated());

        foreach (['ketua_image', 'kepala_image'] as $image) {
            if ($request->hasFile($image)) {
                $imageName = time() . '_' . $request->file($image)->getClientOriginalName();
                $request->file($image)->move(public_path('images/beranda'), $imageName);
                $beranda->$image = $imageName;
            }
        }

        // foreach (['ketua_image', 'kepala_image'] as $image) {
        //     if ($request->hasFile($image)) {
        //         $beranda->$image = $request->file($image)->store('images/beranda', 'public');
        //     }
        // }
        $beranda->save();

        return response()->json(['message' => 'Beranda berhasil ditambahkan', 'data' => $beranda], 200);
    }

    public function edit($id)
    {
        $beranda = Beranda::findOrFail($id);
        return response()->json(['data' => $beranda]);
    }

    public function update(Request $request, $id)
    {
        $beranda = Beranda::findOrFail($id);

        $validated = $request->validate([
            'namaketua' => 'required|string|max:20000',
            'ketua' => 'required|string|max:20000',
            'ketua_image' => 'image|mimes:jpeg,png,jpg,gif|max:3048',
            'namakepala' => 'required|string|max:20000',
            'kepala' => 'required|string|max:20000',
            'kepala_image' => 'image|mimes:jpeg,png,jpg,gif|max:3048',
        ]);

        $beranda->fill($validated);

        foreach (['ketua_image', 'kepala_image'] as $image) {
            if ($request->hasFile($image)) {
                $imageName = time() . '_' . $request->file($image)->getClientOriginalName();
                $request->file($image)->move(public_path('images/beranda'), $imageName);
                if ($beranda->$image) {
                    $oldImagePath = public_path('images/beranda/' . $beranda->$image);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }
                $beranda->$image = $imageName;
            }
        }

        // foreach (['ketua_image', 'kepala_image'] as $image) {
        //     if ($request->hasFile($image)) {
        //         Storage::disk('public')->delete($beranda->$image);
        //         $beranda->$image = $request->file($image)->store('images/beranda', 'public');
        //     }
        // }
        $beranda->save();

        return response()->json(['message' => 'Beranda berhasil diupdate', 'data' => $beranda], 200);
    }

    public function detail(Beranda $beranda)
    {
        $beranda->ketua_image_url = asset('images/beranda' . $beranda->ketua_image);
        $beranda->kepala_image_url = asset('images/beranda' . $beranda->kepala_image);
        return response()->json(['data' => $beranda]);
    }

    public function destroy($id)
    {
        $beranda = Beranda::findOrFail($id);

        foreach (['ketua_image', 'kepala_image'] as $image) {
            $imagePath = public_path('images/beranda/' . $beranda->$image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // foreach (['ketua_image', 'kepala_image'] as $image) {
        //     Storage::disk('public')->delete($beranda->$image);
        // }

        $beranda->delete();

        return response()->json(['message' => 'Beranda berhasil dihapus'], 200);
    }
}
