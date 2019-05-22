<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TiposDeTurnos extends Model
{
    protected $table = 'detalletipoturno';

    protected $primaryKey = 'IdDetalleTipoTurno';

    protected $fillable = ['IdDetalleTipoTurno',
        'HoraInicioTurno', 'HoraTerminoTurno',
         'AbreviacionTurno', 'DescripcionDetalleTipoTurno'
        , 'IdTurnosÍndice'       

    ];
    public $timestamps = false;


}
