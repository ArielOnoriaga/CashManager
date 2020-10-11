<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/bringAllIncome", "FlujoController@bringAllIncome")->name("bringAllIncome");
Route::get("/bringAllDeparture", "FlujoController@bringAllDeparture")->name("bringAllDeparture");
Route::get("/getTypes", "tipoDeGastoController@getTypes")->name("getTypes");
Route::get("/getGastos", "tipoDeGastoController@getGastos")->name("getGastos");