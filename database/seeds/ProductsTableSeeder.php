<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
          'category_id' => '1',
          'detail_id' => '1',
          'name' => 'Product1',
          'image' => 'Image1',
          '3d' => '3D1'
        ]);
    }
}
