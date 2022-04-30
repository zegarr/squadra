<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Models\Player;

Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/jugadores/{lang?}', function ($lang = 'es') {
    App::setLocale($lang);
    
    $delanteros = Player::all()->where("posicion", Player::Posicion_Delantero);
    $mediocampistas = Player::all()->where("posicion", Player::Posicion_Mediocampista);
    $defensas = Player::all()->where("posicion", Player::Posicion_Defensa);
    $arqueros = Player::all()->where("posicion", Player::Posicion_Arquero);

    return view('jugadores', [
        'delanteros' => $delanteros,
        'mediocampistas' => $mediocampistas,
        'defensas' => $defensas,
        'arqueros' => $arqueros
    ]);
})->name("jugadores");

Route::get('/jugadorFutbol/{nombre}', function () {
    return view('jugador', ["jugador"]);
})->name("jugador");
