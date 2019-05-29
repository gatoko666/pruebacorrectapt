<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operador_Turno extends Model
{
    protected $table = 'operador_turno';

    protected $primaryKey = 'idOperador_Turno';

    protected $fillable = [
        'IdOperadorConTurno', 'IdTurnoDiaAsignado', 
         'RepetirFeriado', 'created_at', 'updated_at'
    ];

 


}
