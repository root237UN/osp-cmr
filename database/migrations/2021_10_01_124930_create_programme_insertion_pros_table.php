<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgrammeInsertionProsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programme_insertion_pros', function (Blueprint $table) {
            $table->id();
            $table->string('libelle')->default("Nouveau programme ...");
            $table->string('code', 10)->default("PROG");
            $table->text('description')->nullable();
            $table->foreignId('structure_insertion_pro_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('programme_insertion_pros');
    }
}
