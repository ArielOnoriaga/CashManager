<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FlujoController extends Controller
{
    public function ingresoDeDinero(Request $data) {
        DB::table("ingreso_de_dinero")
            ->insert([
                "ingreso" => intval($data['ingreso']),
                "tipo" => $data['tipo'],
                "fecha" => $data['fecha']
            ]);
    }

    public function egresoDeDinero(Request $data) {
        DB::table("egreso_de_dinero")
            ->insert([
                "egreso" => intval($data['egreso']),
                "tipo" => $data['tipo'],
                "fecha" => $data['fecha']
            ]);
    }

    public function bringAllIncome () {
        return DB::table("ingreso_de_dinero")
            ->orderBy("ingreso", "desc")
            ->get();
    }

    public function bringAllDeparture () {
        return DB::table("egreso_de_dinero")
            ->get();
    }
}
