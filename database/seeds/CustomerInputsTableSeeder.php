<?php

use Illuminate\Database\Seeder;

class CustomerInputsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer_inputs')->insert([ 'session_id' => '1', 'shelveproduct_id' => '1', 'purchased' => '1', 'detailsopened' => '1' ]);
    }
}
