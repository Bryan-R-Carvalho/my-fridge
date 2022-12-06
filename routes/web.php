<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    IngredienteController,
    TipoIngredienteController,
    SessionController
};

Route::get('/', function () {
    return view('home');
});

Route::get('/', [IngredienteController::class, "index"])->name('ingredientes.index');
Route::get('/ingredientes', [IngredienteController::class, "create"])->name('ingredientes.create');
Route::post('/ingredientes', [IngredienteController::class, "store"])->name('ingredientes.store');

Route::get('/tipos', [TipoIngredienteController::class, "create"])->name('tipo_ingredientes.create');
Route::post('/tipos', [TipoIngredienteController::class, "store"])->name('tipo_ingredientes.store');
Route::get('/setSession', [SessionController::class,'setSession'])->name('setSession');
Route::get('/getSession', [SessionController::class,'getSession'])->name('getSession');