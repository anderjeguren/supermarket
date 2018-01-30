<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blocks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('frame_id')->unsigned();
            $table->float('height_cm', 7, 2)->unsigned();
            $table->float('width_cm', 7, 2)->unsigned();
            $table->float('depth_cm', 7, 2)->unsigned();
            $table->timestamps();
            $table->foreign('frame_id')->references('id')->on('frames')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blocks');
    }
}
