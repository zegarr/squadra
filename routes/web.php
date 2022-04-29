<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Models\Players;

Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/jugadores/{lang?}', function ($lang = 'es') {
    App::setLocale("$lang");
    $jugadores = Players::all();
    return view('jugadores', ['jugadores' => $jugadores]);
})->name("jugadores");

Route::get('/jugadorFutbol/{nombre}', function () {
    return view('jugador', ["jugador"]);
})->name("jugador");