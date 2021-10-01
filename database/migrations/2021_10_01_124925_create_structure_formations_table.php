<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStructureFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('structure_formations', function (Blueprint $table) {
            $table->id();
            $table->string('libelle')->default('Nouvelle structure ...');
            $table->string('code', '10')->default('STRU');
            $table->string('duree')->default('2 ans');
            $table->integer('notation')->default(2);
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
        Schema::dropIfExists('structure_formations');
    }
}
