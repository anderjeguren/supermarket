<?php

use Illuminate\Database\Seeder;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([ 'companyname' => 'Company1', 'brand' => 'Brand1', 'country' => 'Countr1' ]);
    }
}
