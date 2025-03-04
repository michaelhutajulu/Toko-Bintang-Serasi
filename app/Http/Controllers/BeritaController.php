<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class BeritaController extends Controller
{
    public function index()
    {
        return view('admin.konfigurasi.berita.index');
    }

    public function data()
    {
        $berita = Berita::all();

        return DataTables::of($berita)
            ->addIndexColumn()
            ->addColumn('image', function ($row) {
                $imageUrl = asset('images/berita/' . $row->image);
                return '<img src="' . $imageUrl . '" alt="Image" height="50">';
            })

        // ->addColumn('image', function ($row) {
        //     $imageUrl = asset('storage/' . $row->image);
        //     return '<img src="' . $imageUrl . '" alt="Image" height="50">';
        // })
            ->addColumn('action', function ($row) {
                $editUrl = route('berita.edit', ['berita' => $row->berita_id]);
                $deleteUrl = route('berita.destroy', ['berita' => $row->berita_id]);

                return '
                    <button onclick="editDataBerita(`' . $editUrl . '`)" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></button>
                    <button onclick="deleteDataBerita(`' . $deleteUrl . '`, `' . $row->informasi_berita . '`)" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                ';
            })
            ->rawColumns(['image', 'action'])
            ->make(true);
    }

    public function store(Request $request)
    {
        $rules = [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:23048',
            'informasi_berita' => 'required|string|max:20000',
            'informasi_alumni' => 'required|string|max:20000',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'message' => 'Maaf, inputan yang Anda masukkan salah. Silakan periksa kembali dan coba lagi'], 422);
        }

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/berita'), $imageName);

        $validatedData = $request->only('informasi_berita', 'informasi_alumni');
        $validatedData['image'] = $imageName;

        // $path = $request->file('image')->store('images/berita', 'public');
        // $validatedData = $request->only('informasi_berita', 'informasi_alumni');
        // $validatedData['image'] = $path;

        $berita = Berita::create($validatedData);

        return response()->json(['message' => 'Berita berhasil ditambahkan', 'data' => $berita], 200);
    }

    public function detail(Berita $berita)
    {
        $berita->image_url = asset('images/berita/' . $berita->image);
        return response()->json(['data' => $berita]);
    }

    // public function detail(Berita $berita)
    // {
    //     $berita->image_url = asset('storage/' . $berita->image);
    //     return response()->json(['data' => $berita]);
    // }

    public function edit(Berita $berita)
    {
        return response()->json(['data' => $berita]);
    }

    public function update(Request $request, Berita $berita)
    {
        $rules = [
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:3048',
            'informasi_berita' => 'required|string|max:20000',
            'informasi_alumni' => 'required|string|max:20000',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'message' => 'Input tidak valid.'], 422);
        }

        $validatedData = $request->only('informasi_berita', 'informasi_alumni');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/berita'), $imageName);

            // Delete the old image if it exists
            if ($berita->image && File::exists(public_path('images/berita/' . $berita->image))) {
                File::delete(public_path('images/berita/' . $berita->image));
            }

            $validatedData['image'] = $imageName;
        }

        // if ($request->hasFile('image')) {
        //     if ($berita->image) {
        //         Storage::disk('public')->delete($berita->image);
        //     }
        //     $path = $request->file('image')->store('images/berita', 'public');
        //     $validatedData['image'] = $path;
        // }

        $berita->update($validatedData);

        return response()->json(['message' => 'Berita berhasil diupdate', 'data' => $berita], 200);
    }

    public function destroy(Berita $berita)
    {
        //Delete the image from the public directory if it exists
        if ($berita->image && File::exists(public_path('images/berita/' . $berita->image))) {
            File::delete(public_path('images/berita/' . $berita->image));
        }

        // if ($berita->image) {
        //     Storage::disk('public')->delete($berita->image);
        // }
        $berita->delete();

        return response()->json(['message' => 'Berita berhasil dihapus'], 200);
    }
}
