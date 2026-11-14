<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ahorro; // <-- 1. Agrega esta línea arriba con los demás "use"

class AhorroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 2. Devuelve todos los ahorros en formato JSON para que la tabla los lea
        return response()->json(Ahorro::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Tu lógica para crear el ahorro
        $ahorro = Ahorro::create($request->all());

        // Retorna formato JSON con código 201
        return response()->json($ahorro, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ahorro = Ahorro::findOrFail($id);
        return response()->json($ahorro, 200);
    }
}