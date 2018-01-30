<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamemodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gamemodes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('duration_sec')->unsigned()->nullable(true);
            $table->decimal('budget_euro', 6, 2)->unsigned()->nullable(true);
            $table->integer('min_products')->unsigned()->nullable(true);
            $table->integer('max_products')->unsigned()->nullable(true);
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
        Schema::dropIfExists('gamemodes');
    }
}
