<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarketingPostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marketing_posts')->insert([
            'titulo' => "INTEL/EFECTIVO SI",
            'cuerpo' => "Hospitality Vip -Eliminatorias mundial Rusia 2018",
            'icono' => "intel",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('marketing_posts')->insert([
            'titulo' => "SANCOR SEGUROS",
            'cuerpo' => "Hospitality Vip Copa América Chile 2015",
            'icono' => "sancor",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('marketing_posts')->insert([
            'titulo' => "LA SERENÍSIMA",
            'cuerpo' => "Comercial Mundial 2014",
            'icono' => "serenisima",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('marketing_posts')->insert([
            'titulo' => "COCA COLA",
            'cuerpo' => "El abrazo del alma – Fillol y Tarantini.",
            'icono' => "cocacola",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('marketing_posts')->insert([
            'titulo' => "FIFA",
            'cuerpo' => "COCA COLA Trophy Tour – Ex campeones 78-86",
            'icono' => "fifa",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('marketing_posts')->insert([
            'titulo' => "POWERADE",
            'cuerpo' => "Relanzamiento – Fernando Gago",
            'icono' => "powerade",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('marketing_posts')->insert([
            'titulo' => "CLARO ARGENTINA",
            'cuerpo' => "Mundial 2010 – Mascherano te convoca",
            'icono' => "claro",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('marketing_posts')->insert([
            'titulo' => "CLARO ARGENTINA",
            'cuerpo' => "Lanzamiento Marca – Palermo y Ortega",
            'icono' => "claro",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('marketing_posts')->insert([
            'titulo' => "SONY ARGENTINA",
            'cuerpo' => "Gonzalo Higuaín te desafía al Winning Eleven",
            'icono' => "sony",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('marketing_posts')->insert([
            'titulo' => "GILLETE",
            'cuerpo' => "Campaña Gillete Entrenamiento Sport",
            'icono' => "gillete",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('marketing_posts')->insert([
            'titulo' => "GILLETE",
            'cuerpo' => "Campaña Mundial 2006 – Gritá gol conmigo",
            'icono' => "gillete",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('marketing_posts')->insert([
            'titulo' => "DURACELL",
            'cuerpo' => "Mundial 2006 – Diego Simeone",
            'icono' => "duracell",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('marketing_posts')->insert([
            'titulo' => "GILLETE",
            'cuerpo' => "Campaña Torneo Clausura 2006 – Te ves bien entre los 11?",
            'icono' => "gillete",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('marketing_posts')->insert([
            'titulo' => "REPSOL / YPF.",
            'cuerpo' => "Clínica de fútbol con el Pato Abbondanzieri",
            'icono' => "ypf",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('marketing_posts')->insert([
            'titulo' => "CTI MÓVIL",
            'cuerpo' => "Campaña Mundial Alemania 2006 – Juan Pablo Sorín",
            'icono' => "cti",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('marketing_posts')->insert([
            'titulo' => "GILLETE",
            'cuerpo' => "Campaña Apertura 2005 – Te ves bien entre los 11?",
            'icono' => "gillete",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('marketing_posts')->insert([
            'titulo' => "CTI MÓVIL",
            'cuerpo' => "Comprá un CTI y juga con Simeone y Abbondanzieri",
            'icono' => "cti",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('marketing_posts')->insert([
            'titulo' => "DIEGO MARADONA",
            'cuerpo' => "Partido Homenaje",
            'icono' => "diego",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
