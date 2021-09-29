<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeEnseignementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_enseignements', function (Blueprint $table) {
            $table->id();
            $table->text('libelle');
            $table->string('code', 25);
            $table->binary('image');
            $table->mediumText('description');
            $table->longText('description_full');
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
        Schema::dropIfExists('type_enseignements');
    }
}
