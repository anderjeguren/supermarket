<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->integer('detail_id')->unsigned();
            $table->string('name');
            $table->string('image');
            $table->string('3D');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->ondelete('cascade');
            $table->foreign('detail_id')->references('id')->on('product_details')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
