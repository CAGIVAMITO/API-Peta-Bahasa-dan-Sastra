<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Komentar; 

class KomentarController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'comment' => 'required|string',
        ]);

        $komentar = Komentar::create($validated); // aktifkan lagi

        return response()->json([
            'status'  => 'success',
            'message' => 'Komentar berhasil disimpan',
            'data'    => $komentar
        ], 201);
    }
}
