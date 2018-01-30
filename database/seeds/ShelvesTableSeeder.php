<?php

use Illuminate\Database\Seeder;

class ShelvesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shelves')->insert([ 'block_id' => '1', 'height_cm' => '1', 'width_cm' => '1', 'depth_cm' => '1' ]);
    }
}
