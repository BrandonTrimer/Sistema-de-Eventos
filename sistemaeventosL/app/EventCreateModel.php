<?php

/*EJEMPLO MODEL*/

namespace App;

use Illuminate\Database\Eloquent\Model;

/*

Creacion de Modelos/Controladores

php artisan make:controller NombreController

php artisan make:model NombreModel
*/

/*
Formato de Consultas
*/
$events = App\EventCreateModel::where('active',1)
    ->orderby('Nombre evento')
    ->take(10)
    ->get();



/*
Modelo para Control de la Tabla
*/
class EventCreateModel extends Model
{
    /*Modelo para creacion de eventos
    table: Nombre de la tabla
    primarykey: Llave Primaria
    timestamps: columnas de "desde de cuando" y "hasta cuando" deshabilitadas
    */
    public $table = 'Evento';
    public $primaryKey = 'IdEvento';
    public $timestamps = false;
    protected $fillable=['Nombre','Fecha','Capacidad','Ubicacion'];
}

