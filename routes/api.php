<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\KomentarController;
use App\Http\Controllers\Api\BahasaController;

Route::post('/bahasa', [BahasaController::class, 'store']);


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/halo', function (Request $request) {
    return response()->json([
        'status' => 'success',
        'message' => 'API Peta Bahasa berjalan dengan baik'
    ]);
});

Route::post('/komentar', [KomentarController::class, 'store']);