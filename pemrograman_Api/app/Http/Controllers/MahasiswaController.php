<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // 1. GET ALL + SEARCH
    public function index(Request $request)
    {
        $query = Mahasiswa::query();

        if ($request->search) {
            $query->where('nama', 'like', '%' . $request->search . '%');
        }

        return response()->json($query->get(), 200);
    }

    // 2. STORE (FINAL FIX - AMAN MASUK DB)
    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'nim' => 'required|unique:mahasiswa,nim',
                'nama' => 'required',
                'jenis_kelamin' => 'nullable',
                'alamat' => 'nullable',
                'tanggal_lahir' => 'nullable',
                'program_studi' => 'nullable',
                'angkatan' => 'nullable',
                'email' => 'nullable',
                'status' => 'nullable',
                'agama' => 'nullable',
                'hobi' => 'nullable',
            ]);

            $mahasiswa = Mahasiswa::create($data);

            return response()->json([
                'message' => 'Data berhasil ditambahkan',
                'data' => $mahasiswa
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Gagal menambahkan data',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    // 3. DETAIL (SHOW)
    public function show($nim)
    {
        $mahasiswa = Mahasiswa::where('nim', $nim)->first();

        if (!$mahasiswa) {
            return response()->json([
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        return response()->json($mahasiswa, 200);
    }

    // 4. UPDATE (FINAL FIX)
    public function update(Request $request, $nim)
    {
        try {
            $mahasiswa = Mahasiswa::where('nim', $nim)->first();

            if (!$mahasiswa) {
                return response()->json([
                    'message' => 'Data tidak ditemukan'
                ], 404);
            }

            $data = $request->validate([
                'nama' => 'sometimes|required',
                'jenis_kelamin' => 'nullable',
                'alamat' => 'nullable',
                'tanggal_lahir' => 'nullable',
                'program_studi' => 'nullable',
                'angkatan' => 'nullable',
                'email' => 'nullable',
                'status' => 'nullable',
                'agama' => 'nullable',
                'hobi' => 'nullable',
            ]);

            $mahasiswa->update($data);

            return response()->json([
                'message' => 'Data berhasil diupdate',
                'data' => $mahasiswa
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Gagal update data',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    // 5. DELETE (FINAL FIX)
    public function destroy($nim)
    {
        try {
            $mahasiswa = Mahasiswa::where('nim', $nim)->first();

            if (!$mahasiswa) {
                return response()->json([
                    'message' => 'Data tidak ditemukan'
                ], 404);
            }

            $mahasiswa->delete();

            return response()->json([
                'message' => 'Data berhasil dihapus'
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Gagal hapus data',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}