<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EliminarEvento extends Controller
{
    //
    public function Eliminar($id)
    {
    DB::table('Eventos')->where('IdEventos','=',$id)->delete();
    }
}
