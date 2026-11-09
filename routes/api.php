<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MaintenanceOrderController;

Route::get('/machines/production-lines', [MaintenanceOrderController::class, 'machinesWithProductionLine']);
Route::get('/machines/maintenance-count', [MaintenanceOrderController::class, 'machinesWithMaintenanceCount']);