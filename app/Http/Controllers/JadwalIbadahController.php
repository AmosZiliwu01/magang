<?php

namespace App\Http\Controllers;

use App\Models\JadwalIbadah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JadwalIbadahController extends Controller
{
    public function index()
    {
        $jadwal_ibadah = JadwalIbadah::get();
        return response()->json([
            'success' => true,
            'data' => $jadwal_ibadah
        ], 201);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_ibadah' => 'required',
            'hari' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'lokasi' => 'required',
            'pengulangan' => 'required',
            'deskripsi' => 'required',
            'user_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 400);
        }

        $jadwal_ibadah = JadwalIbadah::create([
            'nama_ibadah' => $request->nama_ibadah,
            'hari' => $request->hari,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'lokasi' => $request->lokasi,
            'pengulangan' => $request->pengulangan,
            'deskripsi' => $request->deskripsi,
            'user_id' => $request->user_id
        ]);

        return response()->json([
            'success' => true,
            'data' => $jadwal_ibadah
        ], 201);
    }

    public function show($id)
    {
        $jadwal_ibadah = JadwalIbadah::find($id);
        return response()->json([
            'success' => true,
            'data' => $jadwal_ibadah
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama_ibadah' => 'required',
            'hari' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'lokasi' => 'required',
            'pengulangan' => 'required',
            'deskripsi' => 'required',
            'user_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 400);
        }

        $jadwal_ibadah = JadwalIbadah::find($id);
        $jadwal_ibadah->update([
            'nama_ibadah' => $request->nama_ibadah,
            'hari' => $request->hari,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'lokasi' => $request->lokasi,
            'pengulangan' => $request->pengulangan,
            'deskripsi' => $request->deskripsi,
            'user_id' => $request->user_id
        ]);

        return response()->json([
            'success' => true,
            'data' => $jadwal_ibadah
        ], 201);
    }

    public function destroy($id)
    {
        $jadwal_ibadah = JadwalIbadah::find($id);
        $jadwal_ibadah->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil dihapus',
            'data' => $jadwal_ibadah
        ], 201);
    }
}
