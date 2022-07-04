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
        //arqueros
        DB::table('players')->insert([
            'name' => "alan_aguerre",
            'nombre' => "Alan",
            'apellido' => "Aguerre",
            'nacimiento' => "1990-08-23",
            'posicion' => 1,
            'nroCamiseta' => 1,
            'piernaHabil' => 0,
            'clubActual' => "Club Atlético Talleres (ARG)",
            'nombreClubImagen' => 'talleres',
            'nacionalidad' => "Argentina",
            'altura' => "1,81 m",
            'transferMarketLink' => 'https://www.transfermarkt.es/alan-aguerre/profil/spieler/269784',
            'youTubeCodigo' => 'jUHQls7b7WI',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "lautaro_morales",
            'nombre' => "Lautaro",
            'apellido' => "Morales",
            'nacimiento' => "1999-12-16",
            'posicion' => 1,
            'nroCamiseta' => 17,
            'piernaHabil' => 0,
            'clubActual' => "Club Atlético Lanús (ARG)",
            'nombreClubImagen' => 'lanus',
            'nacionalidad' => "Argentina",
            'altura' => "1,87",
            'transferMarketLink' => 'https://www.transfermarkt.es/lautaro-morales/profil/spieler/576023',
            'youTubeCodigo' => '4aVN9V8YyuQ',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "federico_losas",
            'nombre' => "Federico",
            'apellido' => "Losas",
            'nacimiento' => "2002-03-28",
            'posicion' => 1,
            'nroCamiseta' => 1,
            'piernaHabil' => 0,
            'clubActual' => "CA Chacarita Juniors (ARG)",
            'nombreClubImagen' => 'chacarita',
            'nacionalidad' => "Argentina",
            'altura' => "1,84",
            'transferMarketLink' => 'https://www.transfermarkt.es/federico-losas/profil/spieler/661127',
            'youTubeCodigo' => 'JZSgiuzQ9_M',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "lautaro_petruchi",
            'nombre' => "Lautaro",
            'apellido' => "Petruchi",
            'nacimiento' => "1998-09-01",
            'posicion' => 1,
            'nroCamiseta' => 1,
            'piernaHabil' => 0,
            'clubActual' => "Deportivo Armenio (ARG)",
            'nombreClubImagen' => 'deportivo_armeno',
            'nacionalidad' => "Argentina",
            'altura' => "1,86",
            'transferMarketLink' => 'https://www.transfermarkt.es/lautaro-petruchi/profil/spieler/667653',
            'youTubeCodigo' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        //end arqueros
        
        //defensores
        DB::table('players')->insert([
            'name' => "kevin_lomonaco",
            'nombre' => "Kevin",
            'apellido' => "Lomonaco",
            'nacimiento' => "2002-01-08",
            'posicion' => 2,
            'nroCamiseta' => 14,
            'piernaHabil' => 0,
            'clubActual' => "Red Bull Bragantino (BRA)",
            'nombreClubImagen' => 'bragantino',
            'nacionalidad' => "Argentina",
            'altura' => "1,92",
            'transferMarketLink' => 'https://www.transfermarkt.es/kevin-lomonaco/profil/spieler/661136',
            'youTubeCodigo' => 'gg3lY0SYZGY',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "braian_aguirre",
            'nombre' => "Braian",
            'apellido' => "Aguirre",
            'nacimiento' => "2000-07-28",
            'posicion' => 2,
            'nroCamiseta' => 35,
            'piernaHabil' => 0,
            'clubActual' => "Club Atlético Lanus (ARG)",
            'nombreClubImagen' => 'lanus',
            'nacionalidad' => "Argentina",
            'altura' => "1,74",
            'transferMarketLink' => 'https://www.transfermarkt.es/braian-aguirre/profil/spieler/829378',
            'youTubeCodigo' => 'XG-hFcw8-y4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "mariano_bittolo",
            'nombre' => "Mariano",
            'apellido' => "Bíttolo",
            'nacimiento' => "1990-04-24",
            'posicion' => 2,
            'nroCamiseta' => 27,
            'piernaHabil' => 1,
            'clubActual' => "Argentinos Juniors (ARG)",
            'nombreClubImagen' => 'argentinos',
            'nacionalidad' => "Argentina",
            'altura' => "1,75",
            'transferMarketLink' => 'https://www.transfermarkt.es/mariano-bittolo/profil/spieler/105842',
            'youTubeCodigo' => '9yP0ypLz7eE',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        
        DB::table('players')->insert([
            'name' => "felipe_campos",
            'nombre' => "Felipe",
            'apellido' => "Campos",
            'nacimiento' => "1993-11-08",
            'posicion' => 2,
            'nroCamiseta' => 3,
            'piernaHabil' => 0,
            'clubActual' => "CD Everton (CHI)",
            'nombreClubImagen' => 'cd_everton',
            'nacionalidad' => "Chile",
            'altura' => "1,79",
            'transferMarketLink' => 'https://www.transfermarkt.es/felipe-campos/profil/spieler/214645',
            'youTubeCodigo' => '4cW38Q7-lkE',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "thiago_santamaria",
            'nombre' => "Thiago",
            'apellido' => "Santamaría",
            'nacimiento' => "2003-04-04",
            'posicion' => 2,
            'nroCamiseta' => 4,
            'piernaHabil' => 0,
            'clubActual' => "Argentinos Juniors (ARG)",
            'nombreClubImagen' => 'argentinos',
            'nacionalidad' => "Argentina",
            'altura' => "1,79",
            'transferMarketLink' => 'https://www.transfermarkt.es',
            'youTubeCodigo' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "tiago_simoni",
            'nombre' => "Tiago",
            'apellido' => "Simoni",
            'nacimiento' => "2004-04-30",
            'posicion' => 2,
            'nroCamiseta' => 4,
            'piernaHabil' => 0,
            'clubActual' => "CA Boca Juniors (ARG)",
            'nombreClubImagen' => 'boca',
            'nacionalidad' => "Argentina",
            'altura' => "1,81",
            'transferMarketLink' => 'https://www.transfermarkt.es',
            'youTubeCodigo' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "joaquin_orrantia",
            'nombre' => "Joaquin",
            'apellido' => "Orrantia",
            'nacimiento' => "2006-01-23",
            'posicion' => 2,
            'nroCamiseta' => 2,
            'piernaHabil' => 0,
            'clubActual' => "Argentinos Juniors (ARG)",
            'nombreClubImagen' => 'argentinos',
            'nacionalidad' => "Argentina",
            'altura' => "1,75",
            'transferMarketLink' => 'https://www.transfermarkt.es',
            'youTubeCodigo' => 'Y97at2qX_jw',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "pablo_cordoba",
            'nombre' => "Pablo",
            'apellido' => "Cordoba",
            'nacimiento' => "2000-10-31",
            'posicion' => 2,
            'nroCamiseta' => 5,
            'piernaHabil' => 0,
            'clubActual' => "Racing Club (ARG)",
            'nombreClubImagen' => 'racing',
            'nacionalidad' => "Argentina",
            'altura' => "1,80",
            'transferMarketLink' => 'https://www.transfermarkt.es',
            'youTubeCodigo' => 'fZIdhi51bl8',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "lautaro_di_lollo",
            'nombre' => "Lautaro",
            'apellido' => "di Lollo",
            'nacimiento' => "2004-10-03",
            'posicion' => 2,
            'nroCamiseta' => 2,
            'piernaHabil' => 0,
            'clubActual' => "CA Boca Juniors (ARG)",
            'nombreClubImagen' => 'boca',
            'nacionalidad' => "Argentina",
            'altura' => "1,89",
            'transferMarketLink' => 'https://www.transfermarkt.co/lautaro-di-lollo/profil/spieler/1019744',
            'youTubeCodigo' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        // end defensores

        //mediocampistas
        DB::table('players')->insert([
            'name' => "leonardo_heredia",
            'nombre' => "Leonardo",
            'apellido' => "Heredia",
            'nacimiento' => "1996-01-11",
            'posicion' => 3,
            'nroCamiseta' => 10,
            'piernaHabil' => 0,
            'clubActual' => "Estudiantes de la Plata (ARG)",
            'nombreClubImagen' => 'estudiantes',
            'nacionalidad' => "Argentina",
            'altura' => "1,87",
            'transferMarketLink' => 'https://www.transfermarkt.es/leonardo-heredia/profil/spieler/538367',
            'youTubeCodigo' => 'wyee3z47vSc',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "sebastian_jaurena",
            'nombre' => "Sebastián",
            'apellido' => "Jaurena",
            'nacimiento' => "1999-07-22",
            'posicion' => 3,
            'nroCamiseta' => 11,
            'piernaHabil' => 0,
            'clubActual' => "CA Unión (ARG)",
            'nombreClubImagen' => 'union',
            'nacionalidad' => "Argentina",
            'altura' => "1,75",
            'transferMarketLink' => 'https://www.transfermarkt.es/sebastian-jaurena/profil/spieler/727892',
            'youTubeCodigo' => '4MR-jwtR6gc',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "ignacio_cechi",
            'nombre' => "Ignacio",
            'apellido' => "Cechi",
            'nacimiento' => "2001-07-26",
            'posicion' => 3,
            'nroCamiseta' => 24,
            'piernaHabil' => 0,
            'clubActual' => "Club Atlético Lanús (ARG)",
            'nombreClubImagen' => 'lanus',
            'nacionalidad' => "Argentina",
            'altura' => "1,79",
            'transferMarketLink' => 'https://www.transfermarkt.es/ignacio-cechi/profil/spieler/836281',
            'youTubeCodigo' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('players')->insert([
            'name' => "lucas_gimenez",
            'nombre' => "Lucas",
            'apellido' => "Giménez",
            'nacimiento' => "1999-02-22",
            'posicion' => 3,
            'nroCamiseta' => 35,
            'piernaHabil' => 0,
            'clubActual' => "CA Platense (ARG)",
            'nombreClubImagen' => 'platense',
            'nacionalidad' => "Argentina",
            'altura' => "1,63",
            'transferMarketLink' => 'https://www.transfermarkt.es/lucas-gimenez/profil/spieler/721429',
            'youTubeCodigo' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "lucas_blanco",
            'nombre' => "Lucas",
            'apellido' => "Blanco",
            'nacimiento' => "2001-04-13",
            'posicion' => 3,
            'nroCamiseta' => 8,
            'piernaHabil' => 0,
            'clubActual' => "Club Agropecuario Argentino (ARG)",
            'nombreClubImagen' => 'agropecuario',
            'nacionalidad' => "Argentina",
            'altura' => "1,75",
            'transferMarketLink' => 'https://www.transfermarkt.es',
            'youTubeCodigo' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "guillermo_santillan",
            'nombre' => "Guillermo",
            'apellido' => "Santillan",
            'nacimiento' => "1999-05-11",
            'posicion' => 3,
            'nroCamiseta' => 6,
            'piernaHabil' => 0,
            'clubActual' => "Santamarina de Tandil (ARG)",
            'nombreClubImagen' => 'santamarina',
            'nacionalidad' => "Argentina",
            'altura' => "1,71",
            'transferMarketLink' => 'https://www.transfermarkt.es/guillermo-santillan/profil/spieler/744692',
            'youTubeCodigo' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "thiago_porra",
            'nombre' => "Thiago",
            'apellido' => "Porra",
            'nacimiento' => "2006-04-12",
            'posicion' => 3,
            'nroCamiseta' => 10,
            'piernaHabil' => 0,
            'clubActual' => "CA San Lorenzo (ARG)",
            'nombreClubImagen' => 'san_lorenzo',
            'nacionalidad' => "Argentina",
            'altura' => "1,73",
            'transferMarketLink' => 'https://www.transfermarkt.es',
            'youTubeCodigo' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        //end mediocampistas

        //delantero
        DB::table('players')->insert([
            'name' => "david_terans",
            'nombre' => "David",
            'apellido' => "Terans",
            'nacimiento' => "1994-08-11",
            'posicion' => 4,
            'nroCamiseta' => 80,
            'piernaHabil' => 1,
            'clubActual' => "CA Paranaense (BRA)",
            'nombreClubImagen' => 'paranaense',
            'nacionalidad' => "Uruguay",
            'altura' => "1,76",
            'transferMarketLink' => 'https://www.transfermarkt.es/david-terans/profil/spieler/261309',
            'youTubeCodigo' => 'Al33J0M7dzk',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "gaston_veron",
            'nombre' => "Gaston",
            'apellido' => "Veron",
            'nacimiento' => "2001-04-23",
            'posicion' => 4,
            'nroCamiseta' => 16,
            'piernaHabil' => 0,
            'clubActual' => "Argentinos Juniors (ARG)",
            'nombreClubImagen' => 'argentinos',
            'nacionalidad' => "Argentina",
            'altura' => "1,84",
            'transferMarketLink' => 'https://www.transfermarkt.es/gaston-veron/profil/spieler/564001',
            'youTubeCodigo' => '8W2jlu9T8rM',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "milton_gimenez",
            'nombre' => "Milton",
            'apellido' => "Giménez",
            'nacimiento' => "1996-08-12",
            'posicion' => 4,
            'nroCamiseta' => 9,
            'piernaHabil' => 0,
            'clubActual' => "Club Necaxa (MEX)",
            'nombreClubImagen' => 'necaxa',
            'nacionalidad' => "Argentina",
            'altura' => "1,84",
            'transferMarketLink' => 'https://www.transfermarkt.es/milton-gimenez/profil/spieler/730779',
            'youTubeCodigo' => 'BBxo_kFGfgU',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "valentino_simoni",
            'nombre' => "Valentino",
            'apellido' => "Simoni",
            'nacimiento' => "2004-04-30",
            'posicion' => 4,
            'nroCamiseta' => 9,
            'piernaHabil' => 0,
            'clubActual' => "CA Boca Juniors (ARG)",
            'nombreClubImagen' => 'boca',
            'nacionalidad' => "Argentina",
            'altura' => "1,84",
            'transferMarketLink' => 'https://www.transfermarkt.es',
            'youTubeCodigo' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "daniel_villalva",
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
        DB::table('players')->insert([
            'name' => "leonardo_ramos",
            'nombre' => "Leonardo",
            'apellido' => "Ramos",
            'nacimiento' => "1989-08-21",
            'posicion' => 4,
            'nroCamiseta' => 33,
            'piernaHabil' => 0,
            'clubActual' => "Unión de Santa Fé (ARG)",
            'nombreClubImagen' => 'union',
            'nacionalidad' => "Argentina",
            'altura' => "1,86",
            'transferMarketLink' => 'https://www.transfermarkt.es/leonardo-ramos/profil/spieler/341298',
            'youTubeCodigo' => 'jXeSjzzAerw',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "juan_cruz_avaca",
            'nombre' => "Juan Cruz",
            'apellido' => "Avaca",
            'nacimiento' => "2006-01-23",
            'posicion' => 4,
            'nroCamiseta' => 10,
            'piernaHabil' => 1,
            'clubActual' => "CA San Lorenzo (ARG)",
            'nombreClubImagen' => 'san_lorenzo',
            'nacionalidad' => "Argentina",
            'altura' => "1,79",
            'transferMarketLink' => 'https://www.transfermarkt.es',
            'youTubeCodigo' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
