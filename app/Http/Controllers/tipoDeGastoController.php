<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class tipoDeGastoController extends Controller
{
    public function getTypes() {
        return DB::table("tipo_de_gasto")
            ->orderBy("t_id")
            ->get();
    }

    public function getGastos() {
        return DB::table("ingreso_de_dinero")
        // ->join('tipo_de_gasto', "ingreso_de_dinero.id_tipo", '=', "tipo_de_gasto.id")
        ->where('id_tipo', '=', '3')
        ->orderBy("ingreso", 'desc')
        ->get();
    }
}
