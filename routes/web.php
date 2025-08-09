<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\KomentarController;

Route::get('/', function () {
    return view('welcome');
});