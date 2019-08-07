<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    //
    public $timestamps = false;

    protected $table = 'medico';
    protected $primaryKey = 'idmedico';
    protected $fillable = [
        'dni',
        'nombre',
        'apellido',
        'telefono',
        'direccion',
        'idespecialidad',
        'estado'
    ];
}
