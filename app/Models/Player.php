<?php

namespace App\Models;

use Carbon\Carbon;
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

    const Pierna_Habil_Derecha = 0;
    const Pierna_Habil_Izquierda = 1;

    const Posiciones_Nombres = [
        1 => "Arqueros",
        2 => "Defensas",
        3 => "Mediocampistas",
        4 => "Delanteros"
    ];
    
    const Posiciones_Nombres_Sing = [
        1 => "Arquero",
        2 => "Defensa",
        3 => "Mediocampista",
        4 => "Delantero"
    ];

    public function obtenerFechaNacimiento()
    {
        return Carbon::create($this->nacimiento)->format("d/m/Y");
    }
    public function obtenerNombrePosicion()
    {
        return Player::Posiciones_Nombres_Sing[$this->posicion];
    }
    public function obtenerNombreCompleto()
    {
        return $this->nombre . ' ' . $this->apellido;
    }
}
