<?php

use Illuminate\Database\Seeder;

class ShelveProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shelve_products')->insert([ 'shelve_id' => '1', 'product_id' => '1', 'position' => '1']);
    }
}
