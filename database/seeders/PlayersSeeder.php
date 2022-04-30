<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PlayersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 15; $i++) {
            DB::table('players')->insert([
                'name' => Str::random(10),
                'nombre' => Str::random(10),
                'apellido' => Str::random(10),
                'nacimiento' => Carbon::today(),
                'posicion' => rand(1, 4),
                'nroCamiseta' => rand(1, 99),
                'piernaHabil' => rand(0, 1),
                'clubActual' => Str::random(10),
                'pasaporteComunitario' => Str::random(10),
                'altura' => Str::random(10),
                'transferMarketLink' => Str::random(10) . ".com",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
