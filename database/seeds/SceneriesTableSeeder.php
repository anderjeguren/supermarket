<?php

use Illuminate\Database\Seeder;

class SceneriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sceneries')->insert([ 'name' => 'Scenery1', 'description' => 'Description1' ]);
    }
}
