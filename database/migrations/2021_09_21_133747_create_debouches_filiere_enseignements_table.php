<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDebouchesFiliereEnseignementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debouches_filiere_enseignements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('filiere_enseignement_id')->constrained()->onDelete('cascade');
            $table->foreignId('debouches_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('debouches_filiere_enseignements');
    }
}
