<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStructureInsertionProsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('structure_insertion_pros', function (Blueprint $table) {
            $table->id();
            $table->string('libelle')->default('Nouvelle structure ...');
            $table->string('code', '10')->default('STRU');
            $table->foreignId('type_structures_id')->constrained()->onDelete("cascade");
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
        Schema::dropIfExists('structure_insertion_pros');
    }
}
