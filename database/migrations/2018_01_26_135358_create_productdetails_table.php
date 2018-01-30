<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->increments('id');
            $table->text('description')->nullable(true);
            $table->decimal('price_euro', 6, 2)->unsigned();
            $table->decimal('discount', 4, 2)->unsigned()->default(0);
            $table->float('height_cm', 7, 2)->unsigned();
            $table->float('width_cm', 7, 2)->unsigned();
            $table->float('depth_cm', 7, 2)->unsigned();
            $table->string('capacity')->nullable(true);
            $table->integer('supplier_id')->unsigned();
            $table->text('nutritional_values')->nullable(true);
            $table->text('ingredients')->nullable(true);
            $table->timestamps();
            $table->foreign('supplier_id')->references('id')->on('suppliers')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_details');
    }
}
