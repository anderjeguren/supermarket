<?php

use Illuminate\Database\Seeder;

class CharacteristicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characteristics')->insert([ 'name' => 'Characteristic1' ]);
    }
}
