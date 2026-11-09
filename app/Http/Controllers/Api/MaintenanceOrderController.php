<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MaintenanceOrder;
use App\Models\Machine;


class MaintenanceOrderController extends Controller
{
    public function OrdenesMantenimientoProgramadas()
    {
        $maintenance = MaintenanceOrder::whereBetween('scheduled_at', ['2026-01-01', '2026-12-31'])
            ->orderBy('scheduled_at', 'asc')
            ->get([
                'order_number',
                'maintenance_type',
                'status',
                'technician',
                'estimated_cost',
                'scheduled_at'
            ]);

        return response()->json($maintenance);
    }


    public function OrdenesFinalizadasFechaEspecifica()
    {
        $maintenance = MaintenanceOrder::whereDate('completed_at', '2026-01-11')
            ->orderBy('completed_at', 'asc')
            ->get([
                'order_number',
                'machine_id',
                'technician',
                'actual_cost',
                'completed_at'
            ]);
        return response()->json($maintenance);
    }

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
