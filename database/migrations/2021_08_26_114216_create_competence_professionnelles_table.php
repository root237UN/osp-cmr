<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetenceProfessionnellesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competence_professionnelles', function (Blueprint $table) {
            $table->id();
            $table->string('libelle')->default("Nouvelle competence professionnelle pour un travail ...");
            $table->text('description')->nullable();
            $table->foreignId('filiere_enseignement_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('competence_professionnelles');
    }
}
