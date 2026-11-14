<?php

namespace App\Http\Controllers;

use App\Models\Movimiento;
use Illuminate\Http\Request;

class MovimientoController extends Controller
{
    public function index() { return response()->json(['data' => Movimiento::all()]); }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'IdUsuario' => 'required|exists:usuarios,IdUsuario',
            'Concepto' => 'nullable|string|max:50',
            'Descripcion' => 'nullable|string|max:50',
            'Monto' => 'required|numeric',
            'Tipo' => 'required|string|max:50',
            'Fecha' => 'nullable|date',
            'IdEgresos' => 'nullable|exists:egresos,IdEgresos',
            'IdIngresos' => 'nullable|exists:ingresos,IdIngresos'
        ]);
        return response()->json(['data' => Movimiento::create($validated)], 201);
    }

    public function show(Movimiento $movimiento) { return response()->json(['data' => $movimiento]); }

    public function update(Request $request, Movimiento $movimiento)
    {
        $validated = $request->validate([
            'Concepto' => 'nullable|string|max:50',
            'Descripcion' => 'nullable|string|max:50',
            'Monto' => 'sometimes|numeric',
            'Tipo' => 'sometimes|string|max:50'
        ]);
        $movimiento->update($validated);
        return response()->json(['data' => $movimiento]);
    }

    public function destroy(Movimiento $movimiento)
    {
        $movimiento->delete();
        return response()->json(null, 204);
    }
}
