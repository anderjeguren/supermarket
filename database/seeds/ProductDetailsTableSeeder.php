<?php

use Illuminate\Database\Seeder;

class ProductDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_details')->insert([
          'supplier_id' => '1',
          'description' => 'Description1',
          'price_euro' => '100',
          'discount' => '10.0',
          'height_cm' => '1',
          'width_cm' => '1',
          'depth_cm' => '1',
          'capacity' => '100gr',
          'nutritional_values' => 'blablabla',
          'ingredients' => 'blablabla'
         ]);
    }
}
