<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrearEventoController extends Controller
{
    //
    public function Crear()
    {
        DB::table('Eventos')->insertGetId(
            ['NombreEvento' => 'NombreEvento', 'Cantidad Personas' => 'Cantidad', 'Fecha' => 'FechaEvento', 'Ubicacion' => 'UbicacionEvento']
        );
    }
}
