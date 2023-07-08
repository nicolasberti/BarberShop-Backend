<?php

namespace App\Http\Controllers;

use App\Models\TipoTurno;
use Illuminate\Http\Request;

class TipoTurnoController extends Controller
{
    public function index()
    {
        $tipoturnos = TipoTurno::all();
        return view('tipoturnos.index', ['tipoturnos' => $tipoturnos]);
    }

    public function show(string $id)
    {
        // Implementa la lógica para mostrar un turno específico
    }

    public function update(Request $request, string $id)
    {
        // Implementa la lógica para actualizar un turno específico
    }

    public function create()
    {
        return view('tipoturnos.create');
    }

    public function store(Request $request)
    {
        $tipoturno = new TipoTurno();
        $tipoturno->tipo = $request->tipo;
        $tipoturno->precio = $request->precio;
        $tipoturno->save();
    
        return redirect()->route('tipoturnos.index')
            ->with('success', 'El tipo de turno ha sido creado correctamente.');
    }
    
}
