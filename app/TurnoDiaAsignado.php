<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TurnoDiaAsignado extends Model
{
    protected $table = 'turnodiaasignado';

    protected $primaryKey = 'IdTurnoDiaAsignado';

    protected $fillable = [
        'DiaDeLaSemanaAsignado', 'MesDeLaSemanaAsignado', 
        'AnoDeLaSemanaAsignado
        ', 'created_at', 'updated_at'
    ];

 
}
