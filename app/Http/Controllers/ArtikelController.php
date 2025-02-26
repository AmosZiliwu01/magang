<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikel = Artikel::get();
        return response()->json([
            'success' => true,
            'data' => $artikel
        ],201);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'nullable',
            'kategori_id' => 'required',
            'user_id' => 'required',
            'tanggal_publish' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 400);
        }

        $artikel = Artikel::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $request->gambar,
            'kategori_id' => $request->kategori_id,
            'user_id' => $request->user_id,
            'tanggal_publish' => $request->tanggal_publish,
        ]);

        return response()->json([
            'success' => true,
            'data' => $artikel
        ],201);
    }

    public function show($id)
    {
        $artikel = Artikel::find($id);
        return response()->json([
            'success' => true,
            'data' => $artikel
        ],201);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'nullable',
            'kategori_id' => 'required',
            'user_id' => 'required',
            'tanggal_publish' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 400);
        }

        $artikel = Artikel::find($id);
        $artikel->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $request->gambar,
            'kategori_id' => $request->kategori_id,
            'user_id' => $request->user_id,
            'tanggal_publish' => $request->tanggal_publish,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Artikel updated successfully',
            'data' => $artikel
        ],201);
    }

    public function destroy($id)
    {
        $artikel = Artikel::find($id);
        $artikel->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil dihapus',
            'data' => $artikel
        ],201);
    }
}
