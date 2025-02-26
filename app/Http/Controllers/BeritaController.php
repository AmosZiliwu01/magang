<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::get();
        return response()->json([
            'success' => true,
            'data' => $berita
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

        $berita = Berita::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $request->gambar,
            'kategori_id' => $request->kategori_id,
            'user_id' => $request->user_id,
            'tanggal_publish' => $request->tanggal_publish,
        ]);

        return response()->json([
            'success' => true,
            'data' => $berita
        ], 201);
    }

    public function show($id)
    {
        $berita = Berita::find($id);
        return response()->json([
            'success' => true,
            'data' => $berita
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

        $berita = Berita::find($id);
        $berita->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $request->gambar,
            'kategori_id' => $request->kategori_id,
            'user_id' => $request->user_id,
            'tanggal_publish' => $request->tanggal_publish,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil disimpan',
            'data' => $berita
        ], 201);
    }

    public function destroy($id)
    {
        $berita = Berita::find($id);
        $berita->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil dihapus',
            'data' => $berita
        ],201);
    }
}
