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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();

            $table->string("cin")->nullable();
            $table->string("nom")->nullable();
            $table->string("prenom")->nullable();
            $table->string("gender")->nullable();
            $table->string("Adresse")->nullable();
            $table->string("telephone")->nullable();
            $table->date("datenaissance")->nullable();
            $table->string("lieunaissance")->nullable();
           

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
        Schema::dropIfExists('patients');
    }
};
