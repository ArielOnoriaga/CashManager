<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class TipoDeGasto extends Migration
{
    private $tipos = [
        "Fotografia",
        "Comida",
        "Varios",
        "+18",
        "Bebida",
        "Higiene",
        "Muebles"
    ];

    public function up()
    {
        Schema::create('tipo_de_gasto', function (Blueprint $table) {
            $table->increments('t_id')->start_from(0);
            $table->string("nombre")->nullable(false);
        });

        foreach($this->tipos as $tipo) {
            DB::table("tipo_de_gasto")
            ->insert([
                "nombre" => $tipo
            ]);
        }
    }

    public function down()
    {
        Schema::dropIfExists('tipo_de_gasto');
    }
}
