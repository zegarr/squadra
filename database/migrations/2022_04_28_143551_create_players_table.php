<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("nombre")->nullable();
            $table->string("apellido")->nullable();
            $table->date("nacimiento")->nullable();
            $table->integer("posicion")->nullable();
            $table->integer("nroCamiseta")->nullable();
            $table->integer("piernaHabil")->nullable();
            $table->string("clubActual")->nullable();
            $table->string("pasaporteComunitario")->nullable();
            $table->string("altura")->nullable();
            $table->string("transferMarketLink")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
};
