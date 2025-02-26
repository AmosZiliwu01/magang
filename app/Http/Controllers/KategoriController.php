<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::with('jenis_kategori')->get();
        return response()->json([
            'success' => true,
            'data' => $kategori, compact('kategori')
        ], 201);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'jenis_kategori_id' => 'required',
            'nama' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 400);
        }

        $kategori = Kategori::create([
            'jenis_kategori_id' => $request->jenis_kategori_id,
            'nama' => $request->nama,
        ]);

        return response()->json([
            'success' => true,
            'data' => $kategori
        ], 201);
    }

    public function show($id)
    {
        $kategori = Kategori::find($id);
        return response()->json([
            'success' => true,
            'data' => $kategori
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'jenis_kategori_id' => 'required',
            'nama' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 400);
        }

        $kategori = Kategori::find($id);
        $kategori->update([
            'jenis_kategori_id' => $request->jenis_kategori_id,
            'nama' => $request->nama,
        ]);

        return response()->json([
            'success' => true,
            'data' => $kategori
        ], 201);
    }

    public function destroy($id)
    {
        $kategori = Kategori::find($id);
        $kategori->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil dihapus',
            'data' => $kategori
        ], 201);
    }
}
