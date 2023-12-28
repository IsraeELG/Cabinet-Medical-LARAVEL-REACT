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
        Schema::create('anamneses', function (Blueprint $table) {
            $table->id();

            $table->foreignId('idPatient')
            ->constrained('patients')
            ->onDelete('cascade')
            ->onUpdate('cascade');
    

      $table->date('date');
      $table->String('motifconsultation');
      $table->string('maladie_epidemique');
      $table->string('maladie_hereditaire');
      $table->string('medicamentcours')->default(null);
      $table->string('nommedicament')->default(null);
      $table->string('antecedent_chirurgical')->default(null);
      $table->string('habitude_toxique');
      $table->string('allergies')->default(null);
      $table->string('vaccination')->default(null);
      $table->string('poids');
      $table->string('taille');
      $table->string('temperature');
      $table->string('tension');
      $table->string('frequence_cardiaque');
      $table->string('frequence_respiratoire');
      $table->string('signe');


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
        Schema::dropIfExists('anamneses');
    }
};
