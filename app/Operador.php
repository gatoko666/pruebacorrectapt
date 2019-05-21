<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operador extends Model
{
    protected $table = 'operador';

    protected $primaryKey = 'IdOperador';

    protected $fillable = [
        'NombreOperador', 'ApellidoOperador',
         'Password ', 'Correo'
        , 'TelefonoOperador', 'ImagenPerfilOperador'
        , 'EstadoCuentaOperador', 'FechaAltaOperador'
        , 'FechaBajaOperador', 'IdAdministrador'
        , 'RutOperador', 'LocacionOperador'        

    ];
 

 
    
    //public $timestamps = false;

}
