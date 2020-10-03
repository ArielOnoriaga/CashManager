<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/IngresoDeDinero', "FlujoController@ingresoDeDinero")->name("ingresoDeDinero");
Route::post('/EgresoDeDinero', "FlujoController@egresoDeDinero")->name("egresoDeDinero");
