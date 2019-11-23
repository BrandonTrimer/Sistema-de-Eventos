<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModificarEventoController extends Controller
{
    //
    public function Modificar($id)
    {
        DB::table('Eventos')
        ->where('IdEventos',$id)
        ->update('NombreEvento','NombreEvento', 'Cantidad Personas','Cantidad', 'Fecha','FechaEvento','Ubicacion','UbicacionEvento');
    }
}
