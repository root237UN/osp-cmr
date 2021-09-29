<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFiliereEnseignementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filiere_enseignements', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->string('code', 10);
            $table->text('description')->nullable();
            $table->text('description_full')->nullable();
            $table->timestamps();

            $table->foreignId('cycle_enseignement_id')->constrained();
            $table->foreignId('section_enseignement_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filiere_enseignements');
    }
}
