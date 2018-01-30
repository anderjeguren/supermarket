<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomercharacteristicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_characteristics', function (Blueprint $table) {
            $table->integer('customer_id')->unsigned();
            $table->integer('characteristic_id')->unsigned();
            $table->primary(['customer_id','characteristic_id']);
            $table->foreign('customer_id')->references('id')->on('customers')->ondelete('cascade');
            $table->foreign('characteristic_id')->references('id')->on('characteristics')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_characteristics');
    }
}
