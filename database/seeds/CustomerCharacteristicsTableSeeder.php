<?php

use Illuminate\Database\Seeder;

class CustomerCharacteristicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer_characteristics')->insert([ 'customer_id' => '1', 'characteristic_id' => '1']);
    }
}
