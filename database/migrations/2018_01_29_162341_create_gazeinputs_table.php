<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGazeInputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gaze_inputs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customerinput_id')->unsigned();
            $table->integer('gazetime_ms')->unsigned();
            $table->timestamps();
            $table->foreign('customerinput_id')->references('id')->on('customer_inputs')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gaze_inputs');
    }
}
