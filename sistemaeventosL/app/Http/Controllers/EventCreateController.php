<?php

/*Ejemplos SQL CONTROLLER*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventCreate extends Controller
{
    /*
    Mostrar una lista de todos los eventos
    */
    Public function index()
    {
        $events = DB ::table('Eventos')->get();

        return view('event.index',['events'=>$events]);

        /*
        Utilizado en la vista para colocar todas las filas del resultado


        foreach($events as $event)
        {
            echo $event->name;
        }
        */

        /*
        Recuperar la primera columna del resultado
        */
        $events = DB ::table('Eventos')->where('Nombre','Evento1')->first();
        /*
        Recuperar un valor del resultado
        */
        $events=DB::table('Eventos')->where('Nombre','Evento1')->value('Ubicacion');


        /*
        Insertar
        Sin Id Auto incrementable
        */
        DB::table('Eventos')->insert(
            ['Nombre' => 'EventoNuevo', 'Cantidad Personas' => 10]
        );

        /*
        Id AutoIncrementable
        */
        DB::table('Eventos')->insertGetId(
            ['Nombre' => 'EventoNuev1', 'Cantidad Personas' => 30]
        );

        /*
        Update
        */
        DB::table('Eventos')
            ->where('id', 1)
            ->update(['Cantidad Personas' => 40]);

    }
}

