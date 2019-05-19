<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Detalleferiado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('detalleferiado', function (Blueprint $table) {
            $table->increments('IdDetalleFeriado');
            $table->date('FechaDiaFeriado');
            $table->text('DescripcionFeriado');
            $table->integer('TipoDetalleEspecial');
            $table->integer('RepetirFeriado');          
            $table->integer('IdAdministrador');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalleferiado');

    }
}
