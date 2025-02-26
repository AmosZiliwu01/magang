<?php

namespace App\Http\Controllers;

use App\Models\JenisKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JenisKategoriController extends Controller
{
    public function index()
    {
        $jenis_kategori = JenisKategori::get();
        return response()->json([
            'success' => true,
            'data' => $jenis_kategori
        ], 201);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 400);
        }

        $jenis_kategori = JenisKategori::create([
            'nama' => $request->nama,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil disimpan',
            'data' => $jenis_kategori
        ]);
    }

    public function show($id)
    {
        $jenis_kategori = JenisKategori::find($id);
        return response()->json([
            'success' => true,
            'data' => $jenis_kategori
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 400);
        }

        $jenis_kategori = JenisKategori::find($id);
        $jenis_kategori->update([
            'nama' => $request->nama,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil disimpan',
            'data' => $jenis_kategori
        ], 201);
    }

    public function destroy($id)
    {
        $jenis_kategori = JenisKategori::find($id);
        $jenis_kategori->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil dihapus'
        ], 201);
    }
}
