<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * GET /api/v1/usuarios (READ ALL)
     */
    public function index()
    {
        return response()->json([
            'data' => Usuario::all()
        ], 200);
    }

    /**
     * POST /api/v1/usuarios (CREATE)
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'Nombres'         => 'required|string|max:100',
            'Apellidos'       => 'required|string|max:100',
            'Correo'          => 'required|email|max:50|unique:usuarios,Correo',
            'Telefono'        => 'nullable|string|max:50',
            'FechaNacimiento' => 'nullable|date',
            'Estado'          => 'nullable|boolean',
        ]);

        $usuario = Usuario::create($validated);

        return response()->json([
            'message' => 'Usuario creado exitosamente',
            'data'    => $usuario
        ], 201);
    }

    /**
     * GET /api/v1/usuarios/{usuario} (READ ONE)
     */
    public function show(Usuario $usuario)
    {
        return response()->json([
            'data' => $usuario
        ], 200);
    }

    /**
     * PUT/PATCH /api/v1/usuarios/{usuario} (UPDATE)
     */
    public function update(Request $request, Usuario $usuario)
    {
        $validated = $request->validate([
            'Nombres'         => 'sometimes|string|max:100',
            'Apellidos'       => 'sometimes|string|max:100',
            'Correo'          => 'sometimes|email|max:50|unique:usuarios,Correo,' . $usuario->IdUsuario . ',IdUsuario',
            'Telefono'        => 'nullable|string|max:50',
            'FechaNacimiento' => 'nullable|date',
            'Estado'          => 'sometimes|boolean',
        ]);

        $usuario->update($validated);

        return response()->json([
            'message' => 'Usuario actualizado exitosamente',
            'data'    => $usuario
        ], 200);
    }

    /**
     * DELETE /api/v1/usuarios/{usuario} (DELETE)
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();

        return response()->json(null, 204);
    }
}