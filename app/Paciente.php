<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //
    public $timestamps = false;

    protected $table = 'paciente';
    protected $primaryKey = 'dni';
    protected $fillable = [
        'dni',
        'nombre',
        'apellido',
        'edad',
        'talla',
        'telefono',
        'direccion',
        'estado'
    ];
}
