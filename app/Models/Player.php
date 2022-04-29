<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    /**
     * Constantes para las posiciones de jugadores
     */
    const Posicion_Delantero = 1;
    const Posicion_Mediocampista = 2;
    const Posicion_Defensa = 3;
    const Posicion_Arquero = 4;

    const Posiciones_Nombres = [
        1 => "Delantero",
        2 => "Mediocampistas",
        3 => "Defensa",
        4 => "Arquero"
    ];
}
