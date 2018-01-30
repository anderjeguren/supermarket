<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateControllerInputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controller_inputs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customerinput_id')->unsigned();
            $table->integer('grabbedtime_ms')->unsigned();
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
        Schema::dropIfExists('controller_inputs');
    }
}
