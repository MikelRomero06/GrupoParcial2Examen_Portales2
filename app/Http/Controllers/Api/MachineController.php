<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Machine;

class MachineController extends Controller
{
    public function operationalCriticalMachines()
    {
        $results = Machine::select('code', 'name', 'type', 'status', 'criticality')
            ->where(function ($query) {
                $query->where('status', 'operativa')
                      ->orWhere('status', 'mantenimiento');
            })
            ->where('criticality', 'alta')
            ->get();

        return response()->json($results);
    }
}
