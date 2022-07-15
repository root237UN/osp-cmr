<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotTableFiliereEnseignementEcole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecole_filiere_enseignement', function (Blueprint $table) {
            $table->id();
            $table->foreignId('filiere_enseignement_id')->constrained()->onDelete('cascade');
            $table->foreignId('ecole_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('pivot_table_filiere_enseignement_ecole');
    }
}
