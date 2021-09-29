<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionEnseignementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_enseignements', function (Blueprint $table) {
            $table->id();
            $table->text('libelle');
            $table->string('code', 5);
            $table->mediumText('description');
            $table->longText('description_full');
            $table->timestamps();
            $table->foreignId('option_enseignement_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('section_enseignements');
    }
}
