<?php

use Illuminate\Database\Seeder;

class PurchasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('purchases')->insert([ 'session_id' => '1',  'product_id' => '1', 'quantity' => '10']);
    }
}
