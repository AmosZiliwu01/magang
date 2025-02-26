<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::get();
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
            'kategori_id' => 'required',
            'user_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 400);
        }

        $galeri = Galeri::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $request->gambar,
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

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'nullable',
            'kategori_id' => 'required',
            'user_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 400);
        }

        $galeri = Galeri::find($id);
        $galeri->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $request->gambar,
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
