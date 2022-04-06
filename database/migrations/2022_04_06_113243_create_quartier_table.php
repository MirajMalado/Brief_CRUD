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
        Schema::create('quartier', function (Blueprint $table) {
            $table->string('quartier_id')->primary();
            $table->string('libelle');
            $table->string('idCommune');

            $table->foreign('idCommune')->references('id_commune')->on('commune');
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
        Schema::dropIfExists('quartier');
    }
};
