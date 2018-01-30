<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShelveproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shelve_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shelve_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->integer('position')->unsigned();
            $table->timestamps();
            $table->foreign('shelve_id')->references('id')->on('shelves')->ondelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shelve_products');
    }
}
