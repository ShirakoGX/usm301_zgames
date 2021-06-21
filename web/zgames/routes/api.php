<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ConsolasController;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("marcas/get", [ConsolasController::class, "getMarcas"]);
Route::get("consolas/get", [ConsolasController::class, "getConsolas"]);
Route::get("consolas/post", [ConsolasController::class,"crearConsolas"]);