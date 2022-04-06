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
        Schema::create('proprietaire', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('prenom');
            $table->string('nom');
            $table->string('civilite');
            $table->string('date_naissance');
            $table->string('lieu_naissance');
            $table->string('cni');
            $table->string('addresse');
            $table->string('nationalite');
            $table->string('contact');
            
            
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
        Schema::dropIfExists('proprietaire');
    }
};
