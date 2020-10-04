<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EgresoDeDinero extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egreso_de_dinero', function (Blueprint $table) {
            $table->increments("id")->start_from(0);
            $table->integer("egreso");
            $table->string("tipo");
            $table->integer("id_tipo");
            $table->string("fecha");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('egreso_de_dinero');
    }
}
