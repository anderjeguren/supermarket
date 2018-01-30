<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShelvesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shelves', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('block_id')->unsigned();
            $table->float('height_cm', 7, 2)->unsigned();
            $table->float('width_cm', 7, 2)->unsigned();
            $table->float('depth_cm', 7, 2)->unsigned();
            $table->timestamps();
            $table->foreign('block_id')->references('id')->on('blocks')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shelves');
    }
}
