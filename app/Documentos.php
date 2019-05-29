<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documentos extends Model
{
    protected $table = 'documentos';

    protected $primaryKey = 'IdDocumentos';



    protected $fillable = ['IdDocumentos',
        'RutaDocumento', 'DescripcionDocumento',
         'IdAdministrador'
    ];
    public $timestamps = false;
}
