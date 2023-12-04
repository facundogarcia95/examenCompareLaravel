<?php

namespace App\Http\Controllers;

use App\Models\TablaApi;
use Illuminate\Http\Request;

class TablaApiController extends Controller
{
    // Mostrar todos los registros
    public function index()
    {
        $registros = TablaApi::where('estado',1)->get();
        return response()->json($registros);
    }

    // Crear un nuevo registro
    public function store(Request $request)
    {
        $registro = new TablaApi();
        $registro->nombre = $request->nombre;
        $registro->estado = TablaApi::$ESTADO_ACTIVO;
        $registro->save();

        return response()->json($registro, 201);
    }

    // Mostrar un registro específico
    public function show($id)
    {
        $registro = TablaApi::where('estado',TablaApi::$ESTADO_ACTIVO)->where('id',$id)->first();

        if (is_null($registro)) {
            return response()->json(['mensaje' => 'Registro no encontrado'], 404);
        }

        return response()->json($registro);
    }

    // Actualizar un registro
    public function update(Request $request, $id)
    {
        $registro = TablaApi::where('estado',TablaApi::$ESTADO_ACTIVO)->where('id',$id)->first();

        if (is_null($registro)) {
            return response()->json(['mensaje' => 'Registro no encontrado'], 404);
        }

        $registro->nombre = $request->nombre;
        $registro->save();

        return response()->json($registro);
    }

    // Eliminar un registro
    public function destroy($id)
    {
        $registro = TablaApi::where('estado',TablaApi::$ESTADO_ACTIVO)->where('id',$id)->first();

        if (is_null($registro)) {
            return response()->json(['mensaje' => 'Registro no encontrado'], 404);
        }

        $registro->delete();

        return response()->json(['mensaje' => 'Registro eliminado']);
    }
}
