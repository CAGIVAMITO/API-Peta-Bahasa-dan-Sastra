<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bahasa; 

class BahasaController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_bahasa' => 'required|string|max:255',
        ]);

        $bahasa = Bahasa::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Data bahasa berhasil ditambahkan',
            'data' => $bahasa
        ], 201);
    }
}
