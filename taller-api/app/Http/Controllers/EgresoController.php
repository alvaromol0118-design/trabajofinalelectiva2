<?php

namespace App\Http\Controllers;

use App\Models\Egreso;
use Illuminate\Http\Request;

class EgresoController extends Controller
{
    public function index() { return response()->json(['data' => Egreso::all()]); }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'IdUsuario' => 'required|exists:usuarios,IdUsuario',
            'Descripcion' => 'nullable|string|max:50',
            'Monto' => 'required|numeric|min:0',
            'FechaCreacion' => 'nullable|date'
        ]);
        return response()->json(['data' => Egreso::create($validated)], 201);
    }

    public function show(Egreso $egreso) { return response()->json(['data' => $egreso]); }

    public function update(Request $request, Egreso $egreso)
    {
        $validated = $request->validate([
            'Descripcion' => 'nullable|string|max:50',
            'Monto' => 'sometimes|numeric|min:0'
        ]);
        $egreso->update($validated);
        return response()->json(['data' => $egreso]);
    }

    public function destroy(Egreso $egreso)
    {
        $egreso->delete();
        return response()->json(null, 204);
    }
}