<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TipoDeGasto extends Migration
{
    public function up()
    {
        Schema::create('tipo_de_gasto', function (Blueprint $table) {
            $table->increments('id')->start_from(0);
            $table->string("nombre")->nullable(false);
        });
    }

    public function down()
    {
        Schema::dropIfExists('tipo_de_gasto');
    }
}
