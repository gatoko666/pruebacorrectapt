<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 


class Feriado extends Model
{
    protected $table = 'detalleferiado';

    protected $primaryKey = 'IdDetalleFeriado';

    protected $fillable = [
        'FechaDiaFeriado', 'DescripcionFeriado', 'TipoDetalleEspecial', 'RepetirFeriado'
    ];

    public $timestamps = false;

  


}
