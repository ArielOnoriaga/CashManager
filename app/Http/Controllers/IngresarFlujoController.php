<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IngresarFlujoController extends Controller
{
    public function IngresoDeDinero(Request $data) {
        DB::table("ingreso_de_dinero")
            ->insert([
                "ingreso" => $data['ingreso'],
                "tipo" => $data['tipo'],
                "fecha" => 0
            ]);
    }
}
