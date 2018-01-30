<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaygroundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playgrounds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('admin_id')->unsigned();
            $table->integer('environment_id')->unsigned();
            $table->integer('scenery_id')->unsigned();
            $table->timestamps();
            $table->foreign('admin_id')->references('id')->on('admins')->ondelete('cascade');
            $table->foreign('environment_id')->references('id')->on('environments')->ondelete('cascade');
            $table->foreign('scenery_id')->references('id')->on('sceneries')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('playgrounds');
    }
}
