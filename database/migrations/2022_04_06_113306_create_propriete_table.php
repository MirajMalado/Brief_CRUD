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
        Schema::create('propriete', function (Blueprint $table) {
            $table->string('id_propriete')->primary();
            $table->string('idQuartier');
            $table->string('nom');
            $table->string('type');
            $table->string('taux_prestation');
            $table->string('entreprise_id');
            $table->string('proprietaire_id');

            $table->foreign('idQuartier')->references('quartier_id')->on('quartier');
            $table->foreign('entreprise_id')->references('id_entreprise')->on('entreprise');
            $table->foreign('proprietaire_id')->references('id_proprietaire')->on('proprietaire');




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
        Schema::dropIfExists('propriete');
    }
};
