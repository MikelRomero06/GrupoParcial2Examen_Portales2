<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Machine;

class MaintenanceOrderController extends Controller
{
   
    public function machinesWithProductionLine()
    {
        $machines = Machine::with('productionLine:id,name,location')
            ->select('id', 'production_line_id', 'code', 'name', 'type', 'status', 'criticality')
            ->orderBy('name', 'asc')
            ->get();

        return response()->json($machines);
    }


    public function machinesWithMaintenanceCount()
    {
        $machines = Machine::withCount('maintenanceOrders')
            ->orderBy('maintenance_orders_count', 'desc')
            ->get();

        return response()->json($machines);
    }
}