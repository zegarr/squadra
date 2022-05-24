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
        DB::table('players')->insert([
            'name' => "Alan_Aguerre",
            'nombre' => "Alan",
            'apellido' => "Aguerre",
            'nacimiento' => "1990-08-23",
            'posicion' => 1,
            'nroCamiseta' => 1,
            'piernaHabil' => 0,
            'clubActual' => "Club Atlético Talleres",
            'nombreClubImagen' => 'talleres',
            'nacionalidad' => "Argentina",
            'altura' => "1,81 m",
            'transferMarketLink' => 'https://www.transfermarkt.es/alan-aguerre/profil/spieler/269784',
            'youTubeCodigo' => 'jUHQls7b7WI',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "Federico_Losas",
            'nombre' => "Federico",
            'apellido' => "Losas",
            'nacimiento' => "2002-03-28",
            'posicion' => 1,
            'nroCamiseta' => 1,
            'piernaHabil' => 0,
            'clubActual' => "CA Chacarita Juniors",
            'nombreClubImagen' => 'chacarita',
            'nacionalidad' => "Argentina",
            'altura' => "1,84",
            'transferMarketLink' => 'https://www.transfermarkt.es/federico-losas/profil/spieler/661127',
            'youTubeCodigo' => 'CTjtYNsSwD8',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "Lautaro_Morales",
            'nombre' => "Lautaro",
            'apellido' => "Morales",
            'nacimiento' => "1999-12-16",
            'posicion' => 1,
            'nroCamiseta' => 17,
            'piernaHabil' => 0,
            'clubActual' => "Club Atlético Lanús",
            'nombreClubImagen' => 'lanus',
            'nacionalidad' => "Argentina",
            'altura' => "1,87",
            'transferMarketLink' => 'https://www.transfermarkt.es/lautaro-morales/profil/spieler/576023',
            'youTubeCodigo' => '4aVN9V8YyuQ',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "Lautaro_Petruchi",
            'nombre' => "Lautaro",
            'apellido' => "Petruchi",
            'nacimiento' => "1998-09-01",
            'posicion' => 1,
            'nroCamiseta' => 1,
            'piernaHabil' => 0,
            'clubActual' => "Deportivo Armeño",
            'nombreClubImagen' => 'deportivo_armeno',
            'nacionalidad' => "Argentina",
            'altura' => "-",
            'transferMarketLink' => 'https://www.transfermarkt.es/lautaro-petruchi/profil/spieler/667653',
            'youTubeCodigo' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "Braian_Aguirre",
            'nombre' => "Braian",
            'apellido' => "Aguirre",
            'nacimiento' => "2000-07-28",
            'posicion' => 2,
            'nroCamiseta' => 35,
            'piernaHabil' => 0,
            'clubActual' => "Club Atlético Lanus",
            'nombreClubImagen' => 'lanus',
            'nacionalidad' => "Argentina",
            'altura' => "1,74",
            'transferMarketLink' => 'https://www.transfermarkt.es/braian-aguirre/profil/spieler/829378',
            'youTubeCodigo' => 'XG-hFcw8-y4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "Mariano_Bittolo",
            'nombre' => "Mariano",
            'apellido' => "Bíttolo",
            'nacimiento' => "1990-04-24",
            'posicion' => 2,
            'nroCamiseta' => 27,
            'piernaHabil' => 1,
            'clubActual' => "Argentinos Juniors",
            'nombreClubImagen' => 'argentinos',
            'nacionalidad' => "Argentina",
            'altura' => "1,75",
            'transferMarketLink' => 'https://www.transfermarkt.es/mariano-bittolo/profil/spieler/105842',
            'youTubeCodigo' => '9yP0ypLz7eE',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "Felipe_Campos",
            'nombre' => "Felipe",
            'apellido' => "Campos",
            'nacimiento' => "1993-11-08",
            'posicion' => 2,
            'nroCamiseta' => 28,
            'piernaHabil' => 0,
            'clubActual' => "CD Everton",
            'nombreClubImagen' => 'cd_everton',
            'nacionalidad' => "Chile",
            'altura' => "1,79",
            'transferMarketLink' => 'https://www.transfermarkt.es/felipe-campos/profil/spieler/214645',
            'youTubeCodigo' => '4cW38Q7-lkE',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "Kevin_Lomonaco",
            'nombre' => "Kevin",
            'apellido' => "Lomonaco",
            'nacimiento' => "2002-01-08",
            'posicion' => 2,
            'nroCamiseta' => 14,
            'piernaHabil' => 0,
            'clubActual' => "Red Bull Bragantino",
            'nombreClubImagen' => 'bragantino',
            'nacionalidad' => "Argentina",
            'altura' => "1,92",
            'transferMarketLink' => 'https://www.transfermarkt.es/kevin-lomonaco/profil/spieler/661136',
            'youTubeCodigo' => 'gg3lY0SYZGY',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "Joaquin_Orrantia",
            'nombre' => "Joaquin",
            'apellido' => "Orrantia",
            'nacimiento' => "2006-01-23",
            'posicion' => 2,
            'nroCamiseta' => 2,
            'piernaHabil' => 0,
            'clubActual' => "Argentinos Juniors",
            'nombreClubImagen' => 'argentinos',
            'nacionalidad' => "Argentina",
            'altura' => "1,75",
            'transferMarketLink' => 'https://www.transfermarkt.es',
            'youTubeCodigo' => 'Y97at2qX_jw',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "Thiago_Santamaria",
            'nombre' => "Thiago",
            'apellido' => "Santamaría",
            'nacimiento' => "2003-04-04",
            'posicion' => 2,
            'nroCamiseta' => 4,
            'piernaHabil' => 0,
            'clubActual' => "Argentinos Juniors",
            'nombreClubImagen' => 'argentinos',
            'nacionalidad' => "Argentina",
            'altura' => "1,79",
            'transferMarketLink' => 'https://www.transfermarkt.es',
            'youTubeCodigo' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "Tiago_Simoni",
            'nombre' => "Tiago",
            'apellido' => "Simoni",
            'nacimiento' => "2004-04-30",
            'posicion' => 2,
            'nroCamiseta' => 4,
            'piernaHabil' => 0,
            'clubActual' => "CA Boca Juniors",
            'nombreClubImagen' => 'boca',
            'nacionalidad' => "Argentina",
            'altura' => "1,81",
            'transferMarketLink' => 'https://www.transfermarkt.es',
            'youTubeCodigo' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "Lucas_Blanco",
            'nombre' => "Lucas",
            'apellido' => "Blanco",
            'nacimiento' => "2001-04-19",
            'posicion' => 3,
            'nroCamiseta' => null,
            'piernaHabil' => 0,
            'clubActual' => "Club Atlético Lanús",
            'nombreClubImagen' => 'lanus',
            'nacionalidad' => "Argentina",
            'altura' => "1,75",
            'transferMarketLink' => 'https://www.transfermarkt.es',
            'youTubeCodigo' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "Ignacio_Cechi",
            'nombre' => "Ignacio",
            'apellido' => "Cechi",
            'nacimiento' => "2001-07-26",
            'posicion' => 3,
            'nroCamiseta' => 24,
            'piernaHabil' => 0,
            'clubActual' => "Club Atlético Lanús 2",
            'nombreClubImagen' => 'lanus',
            'nacionalidad' => "Argentina",
            'altura' => "1,79",
            'transferMarketLink' => 'https://www.transfermarkt.es/ignacio-cechi/profil/spieler/836281',
            'youTubeCodigo' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "Pablo_Cordoba",
            'nombre' => "Pablo",
            'apellido' => "Cordoba",
            'nacimiento' => "2000-10-31",
            'posicion' => 2,
            'nroCamiseta' => null,
            'piernaHabil' => 0,
            'clubActual' => "Racing Club",
            'nombreClubImagen' => 'racing',
            'nacionalidad' => "Argentina",
            'altura' => "1,80",
            'transferMarketLink' => 'https://www.transfermarkt.es',
            'youTubeCodigo' => 'fZIdhi51bl8',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "Lucas_Gimenez",
            'nombre' => "Lucas",
            'apellido' => "Giménez",
            'nacimiento' => "1999-02-22",
            'posicion' => 3,
            'nroCamiseta' => null,
            'piernaHabil' => 0,
            'clubActual' => "CA Platense 2",
            'nombreClubImagen' => 'platense',
            'nacionalidad' => "Argentina",
            'altura' => "1,63",
            'transferMarketLink' => 'https://www.transfermarkt.es/lucas-gimenez/profil/spieler/721429',
            'youTubeCodigo' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "Leonardo_Heredia",
            'nombre' => "Leonardo",
            'apellido' => "Heredia",
            'nacimiento' => "1996-01-11",
            'posicion' => 3,
            'nroCamiseta' => 10,
            'piernaHabil' => 0,
            'clubActual' => "CA Tucumán",
            'nombreClubImagen' => 'tucuman',
            'nacionalidad' => "Argentina",
            'altura' => "1,87",
            'transferMarketLink' => 'https://www.transfermarkt.es/leonardo-heredia/profil/spieler/538367',
            'youTubeCodigo' => 'wyee3z47vSc',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "Sebastian_Jaurena",
            'nombre' => "Sebastián",
            'apellido' => "Jaurena",
            'nacimiento' => "1999-07-22",
            'posicion' => 3,
            'nroCamiseta' => 11,
            'piernaHabil' => 0,
            'clubActual' => "CA Unión",
            'nombreClubImagen' => 'union',
            'nacionalidad' => "Argentina",
            'altura' => "1,75",
            'transferMarketLink' => 'https://www.transfermarkt.es/sebastian-jaurena/profil/spieler/727892',
            'youTubeCodigo' => '4MR-jwtR6gc',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "Thiago_Porra",
            'nombre' => "Thiago",
            'apellido' => "Porra",
            'nacimiento' => "2006-04-12",
            'posicion' => 3,
            'nroCamiseta' => 10,
            'piernaHabil' => 0,
            'clubActual' => "CA San Lorenzo",
            'nombreClubImagen' => 'san_lorenzo',
            'nacionalidad' => "Argentina",
            'altura' => "1,73",
            'transferMarketLink' => 'https://www.transfermarkt.es',
            'youTubeCodigo' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "Guillermo_Santillan",
            'nombre' => "Guillermo",
            'apellido' => "Santillan",
            'nacimiento' => "1999-05-11",
            'posicion' => 3,
            'nroCamiseta' => null,
            'piernaHabil' => 0,
            'clubActual' => "Santamarina",
            'nombreClubImagen' => 'santamarina',
            'nacionalidad' => "Argentina",
            'altura' => "1,71",
            'transferMarketLink' => 'https://www.transfermarkt.es/guillermo-santillan/profil/spieler/744692',
            'youTubeCodigo' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "Milton_Zarate",
            'nombre' => "Milton",
            'apellido' => "Zarate",
            'nacimiento' => "1988-09-05",
            'posicion' => 3,
            'nroCamiseta' => null,
            'piernaHabil' => 0,
            'clubActual' => "Libre",
            'nombreClubImagen' => 'libre',
            'nacionalidad' => "Argentina",
            'altura' => "1,75",
            'transferMarketLink' => 'https://www.transfermarkt.es/milton-zarate/profil/spieler/127246',
            'youTubeCodigo' => '0fv438yGUtI',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "Juan_Cruz_Avaca",
            'nombre' => "Juan Cruz",
            'apellido' => "Avaca",
            'nacimiento' => "2006-01-23",
            'posicion' => 4,
            'nroCamiseta' => 10,
            'piernaHabil' => 1,
            'clubActual' => "CA San Lorenzo",
            'nombreClubImagen' => 'san_lorenzo',
            'nacionalidad' => "Argentina",
            'altura' => "1,79",
            'transferMarketLink' => 'https://www.transfermarkt.es',
            'youTubeCodigo' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "Milton_Gimenez",
            'nombre' => "Milton",
            'apellido' => "Giménez",
            'nacimiento' => "1996-08-12",
            'posicion' => 4,
            'nroCamiseta' => 9,
            'piernaHabil' => 0,
            'clubActual' => "Club Necaxa",
            'nombreClubImagen' => 'necaxa',
            'nacionalidad' => "Argentina",
            'altura' => "1,84",
            'transferMarketLink' => 'https://www.transfermarkt.es/milton-gimenez/profil/spieler/730779',
            'youTubeCodigo' => '7FBaXSxSHP0',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "Leonardo_Ramos",
            'nombre' => "Leonardo",
            'apellido' => "Ramos",
            'nacimiento' => "1989-08-21",
            'posicion' => 4,
            'nroCamiseta' => 33,
            'piernaHabil' => 0,
            'clubActual' => "Unión de Santa Fé",
            'nombreClubImagen' => 'union',
            'nacionalidad' => "Argentina",
            'altura' => "1,86",
            'transferMarketLink' => 'https://www.transfermarkt.es/leonardo-ramos/profil/spieler/341298',
            'youTubeCodigo' => 'jXeSjzzAerw',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "Valentino_Simoni",
            'nombre' => "Valentino",
            'apellido' => "Simoni",
            'nacimiento' => "2004-04-30",
            'posicion' => 4,
            'nroCamiseta' => 9,
            'piernaHabil' => 0,
            'clubActual' => "CA Boca Juniors",
            'nombreClubImagen' => 'boca',
            'nacionalidad' => "Argentina",
            'altura' => "1,84",
            'transferMarketLink' => 'https://www.transfermarkt.es',
            'youTubeCodigo' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "David_Terans",
            'nombre' => "David",
            'apellido' => "Terans",
            'nacimiento' => "1994-08-11",
            'posicion' => 4,
            'nroCamiseta' => 80,
            'piernaHabil' => 1,
            'clubActual' => "CA Paranaense",
            'nombreClubImagen' => 'paranaense',
            'nacionalidad' => "Uruguay",
            'altura' => "1,76",
            'transferMarketLink' => 'https://www.transfermarkt.es/david-terans/profil/spieler/261309',
            'youTubeCodigo' => 'Al33J0M7dzk',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "Gaston_Veron",
            'nombre' => "Gaston",
            'apellido' => "Veron",
            'nacimiento' => "2001-04-23",
            'posicion' => 4,
            'nroCamiseta' => 16,
            'piernaHabil' => 0,
            'clubActual' => "Argentinos Juniors 2",
            'nombreClubImagen' => 'argentinos',
            'nacionalidad' => "Argentina",
            'altura' => "1,84",
            'transferMarketLink' => 'https://www.transfermarkt.es/gaston-veron/profil/spieler/564001',
            'youTubeCodigo' => '8W2jlu9T8rM',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "Daniel_Villalva",
            'nombre' => "Daniel",
            'apellido' => "Villalva",
            'nacimiento' => "1992-07-06",
            'posicion' => 4,
            'nroCamiseta' => 17,
            'piernaHabil' => 0,
            'clubActual' => "Libre",
            'nombreClubImagen' => 'libre',
            'nacionalidad' => "Argentina",
            'altura' => "1,58",
            'transferMarketLink' => 'https://www.transfermarkt.es/daniel-villalva/profil/spieler/85371',
            'youTubeCodigo' => '0Df0rZEvZOc',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
