<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MaintenanceOrderController;
use App\Http\Controllers\Api\MachineController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/maintenance-orders', [MaintenanceOrderController::class, 'OrdenesMantenimientoProgramadas']);
Route::get('/maintenance-orders/completed', [MaintenanceOrderController::class, 'OrdenesFinalizadasFechaEspecifica']);
Route::get('/machines/production-lines', [MaintenanceOrderController::class, 'machinesWithProductionLine']);
Route::get('/machines/maintenance-count', [MaintenanceOrderController::class, 'machinesWithMaintenanceCount']);
Route::get('/machines/operational-critical', [MachineController::class, 'operationalCriticalMachines']);