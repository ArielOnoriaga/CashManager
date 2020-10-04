<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class tipoDeGastoController extends Controller
{
    public function getTypes() {
        return DB::table("tipo_de_gasto")
            ->orderBy("id")
            ->get();
    }
}
