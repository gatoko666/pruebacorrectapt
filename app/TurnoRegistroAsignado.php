<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TurnoRegistroAsignado extends Model
{
    protected $table = 'turnoregistroasignado';
    protected $primaryKey = 'idturnoregistroasignado';
    protected $fillable = ['idDetalleTipoTurno',
        'RutOperador', 'fechacreacion',
         'nombreturnol', 'nombreturnom'
        , 'nombreturnomm' , 'nombreturnoj'  , 'nombreturnov'  , 'nombreturnos'  , 'nombreturnod'        , 'NumeroSemana'      , 'MesDeLaSemanaAsignado'    , 'AnoDeLaSemanaAsignado'  

    ];
    public $timestamps = false;

    public $incrementing=false;

}
