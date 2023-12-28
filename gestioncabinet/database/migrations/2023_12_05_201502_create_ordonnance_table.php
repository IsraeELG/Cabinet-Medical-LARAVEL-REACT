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
        Schema::create('ordonnance', function (Blueprint $table) {
            $table->id();
            $table->string('dateordonnance')->nullable();
            $table->string('nomM')->nullable();
            $table->string('prenomM')->nullable();
            $table->string('specialite')->nullable();
            $table->string('nomP')->nullable();
            $table->string('prenomP')->nullable();
            $table->string('ageP')->nullable();
            $table->string('poidsP')->nullable();
            $table->string('sexeP')->nullable();
            $table->string('Medicaments')->nullable();

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
        Schema::dropIfExists('ordonnance');
    }
};
