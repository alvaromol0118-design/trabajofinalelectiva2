<?php

namespace App\Http\Controllers;

use App\Models\Ingreso;
use Illuminate\Http\Request;

class IngresoController extends Controller
{
    public function index()
    {
        return response()->json(['data' => Ingreso::all()]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:50',
            'descripcion' => 'nullable|string|max:50',
            'monto' => 'required|numeric|min:0',
            'user_id' => 'nullable|integer',
        ]);

        $ingreso = Ingreso::create($validated);

        return response()->json(['data' => $ingreso], 201);
    }

    public function show(Ingreso $ingreso)
    {
        return response()->json(['data' => $ingreso]);
    }

    public function update(Request $request, Ingreso $ingreso)
    {
        $validated = $request->validate([
            'nombre' => 'sometimes|string|max:50',
            'descripcion' => 'nullable|string|max:50',
            'monto' => 'sometimes|numeric|min:0',
        ]);

        $ingreso->update($validated);

        return response()->json(['data' => $ingreso]);
    }

    public function destroy(Ingreso $ingreso)
    {
        $ingreso->delete();

        return response()->json(null, 204);
    }
}