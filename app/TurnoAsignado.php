<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TurnoAsignado extends Model
{
   
    protected $table = 'turnoasignado';

    protected $primaryKey = 'id';

    protected $fillable = [
        'NombreTrabajador', 'NumeroSemana', 
        'MesDeLaSemanaAsignado
        ', 'AnoDeLaSemanaAsignado', 'DiaSemana','nombreturno'
        ,'created_at','updated_at'
    ];
    public $timestamps = false;


}
