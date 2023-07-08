<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\Turno;
use App\Models\TipoTurno;
use Illuminate\Http\Request;

class TurnosController extends Controller
{
    public function index()
    {
        $turnos = Turno::all();
        return view('turnos.index', ['turnos' => $turnos]);
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
        $tiposTurno = TipoTurno::all();
        return view('turnos.create', compact('tiposTurno'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'fecha' => 'required|date',
        ]);
    
        $turno = new Turno();
        $turno->fecha = $request->fecha;
        $turno->nombre = '-'; 
        $turno->apellido = '-';
        $turno->telefono = '-';
        $turno->estado = 'Disponible';
        $turno->tipoturno_id = TipoTurno::first()->id;
    
        $turno->save();
    
        return redirect()->route('turnos.index')
            ->with('success', 'El turno ha sido creado correctamente.');
    }

    public function showTurnos(){
        // Devuelve los turnos que están disponibles y no hayan finalizado, esto es, que la fecha actual sea menor que la fecha del turno.
        $turnos = DB::table('turnos')
            ->where('estado', 'Disponible')
            ->whereRaw("fecha > NOW()")
            ->get();
		return response()->json($turnos);
   }
    
}
