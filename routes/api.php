<?php

use App\Http\Controllers\MesaController;



Route::get('/mesas', [MesaController::class, 'index']);
Route::post('/mesas', [MesaController::class, 'store']);
Route::get('/mesas/{id}', [MesaController::class, 'show']);
Route::put('/mesas/{id}', [MesaController::class, 'update']);
Route::delete('/mesas/{id}', [MesaController::class, 'destroy']);
