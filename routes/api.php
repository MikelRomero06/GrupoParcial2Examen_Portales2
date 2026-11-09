<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MachineController;
use App\Http\Controllers\Api\MaintenanceOrderController;

Route::get('/machines/operational-critical', [MachineController::class, 'operationalCriticalMachines']);