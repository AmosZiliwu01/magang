<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::with('kategori')->get();
        return response()->json([
            'success' => true,
            'data' => $galeri
        ], 201);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'nullable',
            'kategori_id' => 'nullable',
            'user_id' => 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 400);
        }

        $gambar = $request->file('gambar')->store('public/galerry');
        $gambar = str_replace('public/', '', $gambar);

        $galeri = Galeri::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambar,
            'kategori_id' => $request->kategori_id,
            'user_id' => $request->user_id
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil disimpan',
            'data' => $galeri
        ], 201);
    }

    public function show($id)
    {
        $galeri = Galeri::find($id);
        return response()->json([
            'success' => true,
            'data' => $galeri
        ], 201);
    }

    // app/Http/Controllers/GaleriController.php
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image',
            'kategori_id' => 'required',
            'user_id' => 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 400);
        }

        $galeri = Galeri::find($id);

        // Handle file upload if a new file is provided
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('public/galerry');
            $gambar = str_replace('public/', '', $gambar);
        } else {
            $gambar = $galeri->gambar; // Keep the existing image if no new file is uploaded
        }

        $galeri->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambar,
            'kategori_id' => $request->kategori_id,
            'user_id' => $request->user_id
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil disimpan',
            'data' => $galeri
        ], 201);
    }

    public function destroy($id)
    {
        $galeri = Galeri::find($id);
        $galeri->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil dihapus',
            'data' => $galeri
        ], 201);
    }
}
