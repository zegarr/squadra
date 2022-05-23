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
            'pasaporteComunitario' => "Argentina",
            'altura' => "1,81 m",
            'transferMarketLink' => 'https://www.transfermarkt.es/alan-aguerre/profil/spieler/269784',
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
            'pasaporteComunitario' => "Argentina, Italia",
            'altura' => "1,84",
            'transferMarketLink' => 'https://www.transfermarkt.es/federico-losas/profil/spieler/661127',
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
            'pasaporteComunitario' => "Argentina",
            'altura' => "1,87",
            'transferMarketLink' => 'https://www.transfermarkt.es/lautaro-morales/profil/spieler/576023',
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
            'pasaporteComunitario' => "Argentina",
            'altura' => "-",
            'transferMarketLink' => 'https://www.transfermarkt.es/lautaro-petruchi/profil/spieler/667653',
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
            'pasaporteComunitario' => "Argentina",
            'altura' => "1,74",
            'transferMarketLink' => 'https://www.transfermarkt.es/braian-aguirre/profil/spieler/829378',
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
            'pasaporteComunitario' => "Argentina, Italia",
            'altura' => "1,75",
            'transferMarketLink' => 'https://www.transfermarkt.es/mariano-bittolo/profil/spieler/105842',
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
            'pasaporteComunitario' => "Chile",
            'altura' => "1,79",
            'transferMarketLink' => 'https://www.transfermarkt.es/felipe-campos/profil/spieler/214645',
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
            'pasaporteComunitario' => "Argentina",
            'altura' => "1,92",
            'transferMarketLink' => 'https://www.transfermarkt.es/kevin-lomonaco/profil/spieler/661136',
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
            'pasaporteComunitario' => "Argentina",
            'altura' => "1,75",
            'transferMarketLink' => 'https://www.transfermarkt.es',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "Thiago_Santamaría",
            'nombre' => "Thiago",
            'apellido' => "Santamaría",
            'nacimiento' => "2003-04-04",
            'posicion' => 2,
            'nroCamiseta' => 4,
            'piernaHabil' => 0,
            'clubActual' => "Argentinos Juniors",
            'nombreClubImagen' => 'argentinos',
            'pasaporteComunitario' => "Argentina",
            'altura' => "1,79",
            'transferMarketLink' => 'https://www.transfermarkt.es',
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
            'pasaporteComunitario' => "Argentina",
            'altura' => "1,81",
            'transferMarketLink' => 'https://www.transfermarkt.es',
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
            'pasaporteComunitario' => "Argentina",
            'altura' => "1,75",
            'transferMarketLink' => 'https://www.transfermarkt.es',
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
            'pasaporteComunitario' => "Argentina",
            'altura' => "1,79",
            'transferMarketLink' => 'https://www.transfermarkt.es/ignacio-cechi/profil/spieler/836281',
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
            'pasaporteComunitario' => "Argentina",
            'altura' => "1,80",
            'transferMarketLink' => 'https://www.transfermarkt.es',
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
            'pasaporteComunitario' => "Argentina",
            'altura' => "1,63",
            'transferMarketLink' => 'https://www.transfermarkt.es/lucas-gimenez/profil/spieler/721429',
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
            'pasaporteComunitario' => "Argentina",
            'altura' => "1,87",
            'transferMarketLink' => 'https://www.transfermarkt.es/leonardo-heredia/profil/spieler/538367',
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
            'pasaporteComunitario' => "Argentina",
            'altura' => "1,75",
            'transferMarketLink' => 'https://www.transfermarkt.es/sebastian-jaurena/profil/spieler/727892',
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
            'pasaporteComunitario' => "Argentina",
            'altura' => "1,73",
            'transferMarketLink' => 'https://www.transfermarkt.es',
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
            'pasaporteComunitario' => "Argentina",
            'altura' => "1,71",
            'transferMarketLink' => 'https://www.transfermarkt.es/guillermo-santillan/profil/spieler/744692',
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
            'pasaporteComunitario' => "Argentina",
            'altura' => "1,75",
            'transferMarketLink' => 'https://www.transfermarkt.es/milton-zarate/profil/spieler/127246',
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
            'pasaporteComunitario' => "Argentina",
            'altura' => "1,79",
            'transferMarketLink' => 'https://www.transfermarkt.es',
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
            'pasaporteComunitario' => "Argentina",
            'altura' => "1,84",
            'transferMarketLink' => 'https://www.transfermarkt.es/milton-gimenez/profil/spieler/730779',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('players')->insert([
            'name' => "Leandro_Ramos",
            'nombre' => "Leandro",
            'apellido' => "Ramos",
            'nacimiento' => "1989-08-21",
            'posicion' => 4,
            'nroCamiseta' => 33,
            'piernaHabil' => 0,
            'clubActual' => "Unión de Santa Fé",
            'nombreClubImagen' => 'union_santa_fe',
            'pasaporteComunitario' => "Argentina",
            'altura' => "1,86",
            'transferMarketLink' => 'https://www.transfermarkt.es/leonardo-ramos/profil/spieler/341298',
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
            'pasaporteComunitario' => "Argentina",
            'altura' => "1,84",
            'transferMarketLink' => 'https://www.transfermarkt.es',
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
            'pasaporteComunitario' => "Uruguay",
            'altura' => "1,76",
            'transferMarketLink' => 'https://www.transfermarkt.es/david-terans/profil/spieler/261309',
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
            'pasaporteComunitario' => "Argentina",
            'altura' => "1,84",
            'transferMarketLink' => 'https://www.transfermarkt.es/gaston-veron/profil/spieler/564001',
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
            'pasaporteComunitario' => "Argentina",
            'altura' => "1,58",
            'transferMarketLink' => 'https://www.transfermarkt.es/daniel-villalva/profil/spieler/85371',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
