<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOptionEnseignementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('option_enseignements', function (Blueprint $table) {
            $table->id();
            $table->text('libelle');
            $table->string('code', 5);
            $table->mediumText('description');
            $table->longText('description_full');
            $table->timestamps();
            $table->foreignId('type_enseignement_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('option_enseignements');
    }
}
