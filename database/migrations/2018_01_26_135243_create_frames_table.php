<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFramesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frames', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('scenery_id')->unsigned();
            $table->integer('frametype_id')->unsigned();
            $table->float('height_cm', 7, 2)->unsigned();
            $table->float('width_cm', 7, 2)->unsigned();
            $table->float('depth_cm', 7, 2)->unsigned();
            $table->timestamps();
            $table->foreign('scenery_id')->references('id')->on('sceneries')->ondelete('cascade');
            $table->foreign('frametype_id')->references('id')->on('frame_types')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('frames');
    }
}
