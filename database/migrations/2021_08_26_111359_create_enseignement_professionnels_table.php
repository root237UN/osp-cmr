<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnseignementProfessionnelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enseignement_professionnels', function (Blueprint $table) {
            $table->id();
            $table->string('libelle')->default("Nouveau enseignement de la filiere ...");
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
        Schema::dropIfExists('enseignement_professionnels');
    }
}
