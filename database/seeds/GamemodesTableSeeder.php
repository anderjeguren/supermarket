<?php

use Illuminate\Database\Seeder;

class GamemodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gamemodes')->insert([  'name' => 'gamemode1',  'duration_sec' => '3600',  'budget_euro' => '300.00',  'min_products' => '10',  'max_products' => null]);
    }
}
