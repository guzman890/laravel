<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico_has_especialidad extends Model
{
    //
    public $timestamps = false;

    protected $table = 'medico_has_especialidad';
    protected $primaryKey = 'medico_idmedico';
    protected $fillable =[
        'medico_idmedico',
        'especialidad_idespecialidad'
    ];
}
