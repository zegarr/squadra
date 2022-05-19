<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Models\Player;

Route::redirect("/", "/es");

Route::group(["prefix" => "{idioma}"], function () {

    Route::get('/', function () {
        return view('home');
    })->name("home");

    Route::get('/jugadores', function () {
        $delanteros = Player::all()->where("posicion", Player::Posicion_Delantero);
        $mediocampistas = Player::all()->where("posicion", Player::Posicion_Mediocampista);
        $defensas = Player::all()->where("posicion", Player::Posicion_Defensa);
        $arqueros = Player::all()->where("posicion", Player::Posicion_Arquero);
        $arrJugadores = array(
            Player::Posiciones_Nombres[4] => $arqueros,
            Player::Posiciones_Nombres[3] => $defensas,
            Player::Posiciones_Nombres[2] => $mediocampistas,
            Player::Posiciones_Nombres[1] => $delanteros
        );
        return view('jugadores', [
            'posiciones' => Player::Posiciones_Nombres,
            'arrJugadores' => $arrJugadores
        ]);
    })->name("jugadores");

    Route::get('/jugadorFutbol', function () {
        return view('jugadorFutbol');
    })->name("jugadorFutbol");

    Route::get('/directoresTecnicos', function () {
        return view('directoresTecnicos');
    })->name("directoresTecnicos");

    Route::get('/servicios', function () {
        return view('servicios');
    })->name("servicios");

    Route::get('/marketingDeportivo', function () {
        return view('marketingDeportivo');
    })->name("marketingDeportivo");

    Route::get('/nosotros', function () {
        return view('nosotros');
    })->name("nosotros");
});