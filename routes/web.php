<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/IngresoDeDinero', "IngresarFlujoController@IngresoDeDinero")->name("ingresoDeDinero");
