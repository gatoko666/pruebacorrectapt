<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OperadorConTurno extends Model
{
    protected $table = 'operadorconturno';

    protected $primaryKey = 'IdOperadorConTurno';

    protected $fillable = [
        'NombreTrabajador', 'IdAdministrador', 
         'created_at', 'updated_at'
    ];

 
}
