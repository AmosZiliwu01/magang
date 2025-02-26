<?php

namespace App\Http\Controllers;

use App\Models\JenisKegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JenisKegiatanController extends Controller
{
    public function index()
    {
        $jenis_kegiatan = JenisKegiatan::get();
        return response()->json([
            'success' => true,
            'data' => $jenis_kegiatan
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

        $jenis_kegiatan = JenisKegiatan::create([
            'nama' => $request->nama,
        ]);

        return response()->json([
            'success' => true,
            'data' => $jenis_kegiatan
        ], 201);
    }

    public function show($id)
    {
        $jenis_kegiatan = JenisKegiatan::find($id);
        return response()->json([
            'success' => true,
            'data' => $jenis_kegiatan
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

        $jenis_kegiatan = JenisKegiatan::find($id);
        $jenis_kegiatan->update([
            'nama' => $request->nama,
        ]);

        return response()->json([
            'success' => true,
            'data' => $jenis_kegiatan
        ], 201);
    }

    public function destroy($id)
    {
        $jenis_kegiatan = JenisKegiatan::find($id);
        $jenis_kegiatan->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil dihapus',
            'data' => $jenis_kegiatan
        ], 201);
    }
}
