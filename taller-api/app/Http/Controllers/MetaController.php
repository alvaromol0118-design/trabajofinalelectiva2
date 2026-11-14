<?php

namespace App\Http\Controllers;

use App\Models\Meta;
use Illuminate\Http\Request;

class MetaController extends Controller
{
    public function index() { return response()->json(['data' => Meta::all()]); }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'IdUsuario' => 'required|exists:usuarios,IdUsuario',
            'nombre_meta' => 'required|string|max:50',
            'monto_objetivo' => 'required|numeric|min:0',
            'monto_actual' => 'nullable|numeric|min:0',
            'porcentaje_ahorro' => 'nullable|numeric|min:0|max:100',
            'FechaMeta' => 'nullable|date'
        ]);
        return response()->json(['data' => Meta::create($validated)], 201);
    }

    public function show(Meta $meta) { return response()->json(['data' => $meta]); }

    public function update(Request $request, Meta $meta)
    {
        $validated = $request->validate([
            'nombre_meta' => 'sometimes|string|max:50',
            'monto_objetivo' => 'sometimes|numeric|min:0',
            'monto_actual' => 'sometimes|numeric|min:0',
            'porcentaje_ahorro' => 'sometimes|numeric|min:0|max:100'
        ]);
        $meta->update($validated);
        return response()->json(['data' => $meta]);
    }

    public function destroy(Meta $meta)
    {
        $meta->delete();
        return response()->json(null, 204);
    }
}