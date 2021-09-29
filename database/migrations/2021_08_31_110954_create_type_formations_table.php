<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_formations', function (Blueprint $table) {
            $table->id();
            $table->string('libelle')->default("Nouveau type de formation");
            $table->string("code", 10);
            $table->binary('image');
            $table->text("description");
            $table->longText("description_full");
            $table->longText("description_end");
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
        Schema::dropIfExists('type_formations');
    }
}
