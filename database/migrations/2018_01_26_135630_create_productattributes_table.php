<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductattributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_attributes', function (Blueprint $table) {
            $table->integer('product_id')->unsigned();
            $table->integer('attribute_id')->unsigned();
            $table->primary(['product_id','attribute_id']);
            $table->foreign('product_id')->references('id')->on('products')->ondelete('cascade');
            $table->foreign('attribute_id')->references('id')->on('attributes')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_attributes');
    }
}
