<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerInputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_inputs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('session_id')->unsigned();
            $table->integer('shelveproduct_id')->unsigned();
            $table->boolean('purchased')->default(false);
            $table->boolean('detailsopened')->default(false);
            $table->timestamps();
            $table->foreign('session_id')->references('id')->on('sessions')->ondelete('cascade');
            $table->foreign('shelveproduct_id')->references('id')->on('shelve_products')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_inputs');
    }
}
