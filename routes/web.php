<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TurnosController;
use App\Http\Controllers\TipoTurnoController;

Route::get('/', function () {
    return redirect('turnos');
});

Route::resource('turnos', TurnosController::class);
Route::resource('tipoturnos', TipoTurnoController::class);

Route::get('/api/turnos', 'App\Http\Controllers\TurnosController@showTurnos');
