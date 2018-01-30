<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('session_games', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('session_id')->unsigned();
            $table->integer('playground_id')->unsigned();
            $table->integer('gamemode_id')->unsigned();
            $table->timestamps();
            $table->foreign('session_id')->references('id')->on('sessions')->ondelete('cascade');
            $table->foreign('playground_id')->references('id')->on('playgrounds')->ondelete('cascade');
            $table->foreign('gamemode_id')->references('id')->on('gamemodes')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('session_games');
    }
}
