<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turnos extends Model
{
     
    protected $table = 'turnos';

    protected $primaryKey = 'IdTurnos';

    protected $fillable = [
        'FechaPublicacion', 'FechaModificacion',
         'DiaSemana ', 'TurnoAsignado'
        , 'IdOperador', 'TurnoBorrador'
        , 'IdOperadorExterno', 'IdNotificacion'
                

    ];
 



}
