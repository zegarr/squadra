<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/jugadores', function () {
    return view('jugadores');
})->name("jugadores");

Route::get('/jugadorFutbol/{nombre}', function () {
    return view('jugador', ["jugador"]);
})->name("jugador");