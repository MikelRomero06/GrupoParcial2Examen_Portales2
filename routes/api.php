<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MaintenanceOrderController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/maintenance-orders', [MaintenanceOrderController::class, 'OrdenesMantenimientoProgramadas']);
Route::get('/maintenance-orders/completed', [MaintenanceOrderController::class, 'OrdenesFinalizadasFechaEspecifica']);