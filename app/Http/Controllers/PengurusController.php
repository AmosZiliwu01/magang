<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PengurusController extends Controller
{
    public function index()
    {
        $pengurus = Pengurus::get();
        return response()->json([
            'success' => true,
            'data' => $pengurus
        ], 201);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'jabatan' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required',
            'urutan' => 'required',
            'user_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 400);
        }

        $pengurus = Pengurus::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'deskripsi' => $request->deskripsi,
            'gambar' => $request->gambar,
            'urutan' => $request->urutan,
            'user_id' => $request->user_id
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil disimpan',
            'data' => $pengurus
        ]);
    }

    public function show($id)
    {
        $pengurus = Pengurus::find($id);
        return response()->json([
            'success' => true,
            'data' => $pengurus
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'jabatan' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required',
            'urutan' => 'required',
            'user_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 400);
        }

        $pengurus = Pengurus::find($id);
        $pengurus->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'deskripsi' => $request->deskripsi,
            'gambar' => $request->gambar,
            'urutan' => $request->urutan,
            'user_id' => $request->user_id
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil disimpan',
            'data' => $pengurus
        ]);
    }

    public function destroy($id)
    {
        $pengurus = Pengurus::find($id);
        $pengurus->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil dihapus',
            'data' => $pengurus
        ], 201);
    }
}
