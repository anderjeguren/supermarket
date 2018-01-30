<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([ 'name' => 'Customer1', 'phonenumber' => 'phonenumber1', 'address' => 'address1']);
    }
}
