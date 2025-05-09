<?php

use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        return response()->json(Mahasiswa::all());
    }

    public function store(Request $request)
    {
        $mahasiswa = Mahasiswa::create($request->all());
        return response()->json($mahasiswa, 201);
    }
}
