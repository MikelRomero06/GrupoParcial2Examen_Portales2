<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\Api\MachineController;
use App\Http\Controllers\Api\MaintenanceOrderController;

Route::get('/machines/operational-maintenance', [MaintenanceOrderController::class, 'machinesOperationalOrMaintenance']);
