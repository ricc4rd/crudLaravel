<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::resource('articulos', 'App\Http\Controllers\ArticuloController');
