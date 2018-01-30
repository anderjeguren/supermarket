<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('session_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->integer('quantity')->unsigned()->default(1);
            $table->timestamps();
            $table->foreign('session_id')->references('id')->on('sessions')->ondelete('cascade');
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
        Schema::dropIfExists('purchases');
    }
}
