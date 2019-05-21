<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OperadorExterno extends Model
{
    protected $table = 'operadorexterno';

    protected $primaryKey = 'IdOperadorExterno';

    protected $fillable = [
        'NombreOperadorEx', 'ApellidoOperadorEX',
         'Password ', 'Correo'
        , 'TelefonoOperadorEX'
        , 'EstadoCuentaOperadorEX', 'FechaAltaOperadorEX'
        , 'FechaBajaOperadorEX', 'IdAdministrador'
        , 'RutOperadorExterno', 'LocalizacionExterno'        

    ];
    public $timestamps = false;
}


