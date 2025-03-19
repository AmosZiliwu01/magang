<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KegiatanController extends Controller
{
    public function index()
    {
        $kegiatan = Kegiatan::latest()->get();
        return response()->json([
            'success' => true,
            'data' => $kegiatan
        ],201);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'jenis_kegiatan_id' => 'required',
            'kategori_id' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'lokasi' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 400);
        }

        $kegiatan = Kegiatan::create([
            'jenis_kegiatan_id' => $request->jenis_kegiatan_id,
            'kategori_id' => $request->kategori_id,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'lokasi' => $request->lokasi,
        ]);

        return response()->json([
            'success' => true,
            'data' => $kegiatan
        ],201);
    }

    public function show($id)
    {
        $kegiatan = Kegiatan::find($id);
        return response()->json([
            'success' => true,
            'data' => $kegiatan
        ],201);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'jenis_kegiatan_id' => 'required',
            'kategori_id' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'lokasi' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 400);
        }

        $kegiatan = Kegiatan::find($id);
        $kegiatan->update([
            'jenis_kegiatan_id' => $request->jenis_kegiatan_id,
            'kategori_id' => $request->kategori_id,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'lokasi' => $request->lokasi,
        ]);

        return response()->json([
            'success' => true,
            'data' => $kegiatan
        ],201);
    }

    public function destroy($id)
    {
        $kegiatan = Kegiatan::find($id);
        $kegiatan->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil dihapus',
            'data' => $kegiatan
        ],201);
    }
}
